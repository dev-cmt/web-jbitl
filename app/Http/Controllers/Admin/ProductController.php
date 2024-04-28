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
        $data = ProductItem::whereIn('status', [0, 1])->get();

        return view('layouts.pages.past-committee.member-index', compact('data', 'productCategory'));
    }

    public function itemStore(Request $request)
    {
        // Validation Check 
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            // 'file_path' => 'required|pdf|mimes:pdf|max:2048',
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $ingredient = [];

        foreach ($request->moreFile ?? [] as $item) {
            // Add ingredient only if 'sub_item' exists
            if (isset($item['sub_item'])) {
                $ingredient[] = ["name" => $item['sub_item']];
            }
        }

        //----Data Save
        if(isset($request->id)){
            $data = ProductItem::findOrFail($request->id);
        }else{
            $data = new ProductItem();
        }
        $data->title = $request->title;
        $data->ingredient = json_encode($ingredient);
        $data->file_path = $request->file_path;
        $data->index = $request->index;
        $data->product_category_id = $request->product_category_id;
        $data->status = $request->status;
        $data->user_id = Auth::user()->id;
        $data->save();

        // Return success response with saved data
        return response()->json($data);
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
        
        // Return message
        return response()->json($data);
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
