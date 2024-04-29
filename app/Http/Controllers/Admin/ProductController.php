<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductItem;

class ProductController extends Controller
{

    public function index() {
        $data = ProductCategory::whereIn('status', [0, 1])->get();

        return view('layouts.pages.past-committee.index', compact('data'));
    }
    public function store(Request $request)
    {
        //----Validation Check 
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        //----Data Save
        if(isset($request->id)){
            $data = ProductCategory::findOrFail($request->id);
        }else{
            $data = new ProductCategory();
        }
        $data->title = $request->title;
        $data->icon = $request->icon;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->index = $request->index ?? 0;
        $data->user_id = Auth::user()->id;
        $data->save();
        
        // Return message
        return response()->json($data);
    }
    public function edit(Request $request)
    {
        $data = ProductCategory::find($request->id);

        // Return message
        return response()->json($data);
    }
    public function delete(Request $request)
    {
        $data = ProductCategory::findOrFail($request->id);
        $data->delete();
        
        // Return message
        return response()->json($data);
    }

    /**-----------------------------------------------------------------------------
     * MEMBER INDEX
     * -----------------------------------------------------------------------------
     */
    public function itemIndex($id)
    {
        $productCategory = ProductCategory::find($id);
        $data = ProductItem::where('product_category_id', $id)->whereIn('status', [0, 1])->get();

        return view('layouts.pages.past-committee.member-index', compact('data', 'productCategory'));
    }

    public function itemStore(Request $request)
    {
        $ingredients = collect($request->moreFile ?? [])
            ->pluck('sub_item')
            ->filter()
            ->map(fn ($name) => ['name' => $name])
            ->toArray();

        // Validation
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'file_path' => 'required_if:id,null|mimes:pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $productItem = $request->filled('id') ? ProductItem::findOrFail($request->id) : new ProductItem();

        // Check if a file exists and is valid
        if ($request->hasFile('file_path') && $request->file('file_path')->isValid()) {
            // Delete the existing file if it exists
            if ($productItem->file_path && File::exists(public_path("products/{$productItem->file_path}"))) {
                File::delete(public_path("products/{$productItem->file_path}"));
            }

            // Generate file name and move the new file
            $fileName = $request->title . '.' . $request->file('file_path')->getClientOriginalExtension();
            $filePath = $request->file('file_path')->move(public_path('products'), $fileName);
        } elseif ($request->hasFile('file_path')) {
            // If file is not valid, return error response
            return response()->json(['error' => 'File upload failed.'], 500);
        }

        $productItem->fill([
            'title' => $request->title,
            'ingredient' => json_encode($ingredients),
            'file_path' => $fileName ?? $productItem->file_path, // Use existing file name if no new file uploaded
            'index' => $request->index,
            'product_category_id' => $request->product_category_id,
            'status' => $request->status,
            'user_id' => Auth::id(),
        ])->save();

        return response()->json($productItem);
    }


    public function itemEdit(Request $request)
    {
        $data = ProductItem::find($request->id);

        // Return message
        return response()->json($data);
    }

    public function itemDelete(Request $request)
    {
        $data = ProductItem::findOrFail($request->id);
        $data->delete();

        // Delete the existing file if it exists
        if ($data->file_path && File::exists(public_path("products/{$data->file_path}"))) {
            File::delete(public_path("products/{$data->file_path}"));
        }
        
        // Return message
        return response()->json($data);
    }


    public function itemDownload($id)
    {
        $item = ProductItem::findOrFail($id);

        $filePath = public_path('products/' . $item->file_path);

        if (file_exists($filePath)) {
            return response()->download($filePath, $item->title . '.' . pathinfo($item->file_path, PATHINFO_EXTENSION));
        }

        abort(404, 'File not found');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $post=Gallery::findOrFail($id);

        if (File::exists("public/images/gallery/".$post->cover)) {
            File::delete("public/images/gallery/".$post->cover);
        }
        $images=GalleryImages::where("gallery_id",$post->id)->get();
        foreach($images as $image){
            if (File::exists("public/images/gallery/img/".$image->image)) {
                File::delete("public/images/gallery/img/".$image->image);
            }
        }
        $post->delete();
        return back();
    }
}
