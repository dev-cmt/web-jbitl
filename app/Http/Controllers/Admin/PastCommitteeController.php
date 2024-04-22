<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin\PastCommittee;
use App\Models\Admin\PastCommitteeDetails;

class PastCommitteeController extends Controller
{

    public function index() {
        $data = PastCommittee::whereIn('status', [0, 1])->get();

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
            $data = PastCommittee::findOrFail($request->id);
        }else{
            $data = new PastCommittee();
        }
        $data->title = $request->title;
        $data->duration = $request->duration;
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
        $data = PastCommittee::find($request->id);

        // Return message
        return response()->json($data);
    }
    public function delete(Request $request)
    {
        $data = PastCommittee::findOrFail($request->id);
        $data->delete();
        
        // Return message
        return response()->json($data);
    }

    /**-----------------------------------------------------------------------------
     * MEMBER INDEX
     * -----------------------------------------------------------------------------
     */
    public function memberIndex($id)
    {
        $item = PastCommittee::find($id);
        $data = PastCommitteeDetails::whereIn('status', [0, 1])->get();

        return view('layouts.pages.past-committee.member-index', compact('data', 'item'));
    }

    public function memberStore(Request $request)
    {
        // Validation Check 
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile("image")) {
            // Get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();
            // Get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            // Get file extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            // Upload File
            $request->file('image')->move('public/images/past-committee/', $filenametostore); // Upload Location
            
            // Resize image
            $thumbnailpath = public_path('images/past-committee/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(1200, 850, function($constraint) {
                $constraint->aspectRatio();
            }); 
            $img->save($thumbnailpath);

            // Data Save
            $data = new PastCommitteeDetails([
                'name' => $request->name,
                'designation' => $request->designation,
                'represent' => $request->represent,
                'rep_url' => $request->rep_url,
                'image' => $filenametostore,
                'description' => $request->description,
                'index' => $request->index,
                'past_committee_id' => $request->past_committee_id,
                'status' => 1,
            ]);
            $data->save();

            // Return success response with saved data
            return response()->json($data);
        }

        // Return error response if image is not provided
        return response()->json(['error' => 'Image file is required'], 422);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('layouts.pages.gallery.show')->with('posts', $gallery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function editMember($id)
    {
       $posts=Gallery::findOrFail($id);
        return view('layouts.pages.gallery.edit')->with('posts',$posts);
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
