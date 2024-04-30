<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Contact;
use App\Models\Admin\Gallery;
use App\Models\Admin\GalleryImages;
use App\Models\Admin\Event;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductItem;
use App\Models\User;

class FrontViewController extends Controller
{
    public function welcome()
    {
        $user = User::where('status', 1)->get();
        $add_hoc = $user->where('committee_type_id', 1);
        $executive = $user->where('committee_type_id', 2);
        $event = Event::where('status', 1)->get();
        $contact = Contact::where('status', 1)->get();

        return view('welcome', compact('user', 'add_hoc', 'executive', 'event', 'contact'));
    }
    /**________________________________________________________________________________________
     * Products Menu Pages
     * ________________________________________________________________________________________
     */
    public function productCategory()
    {
        $data = ProductCategory::where('status', 1)->orderBy('index', 'asc')->get();
        return view('frontend.pages.products-category', compact('data'));
    }
    public function productItem($id)
    {
        $data = ProductItem::where('product_category_id', $id)->where('status', 1)->orderBy('index', 'asc')->get();
        return view('frontend.pages.products-item', compact('data'));
    }
    
    
    public function registeredProduct()
    {
        return view('frontend.pages.registered-product');
    }
    /**________________________________________________________________________________________
     * Information Menu Pages
     * ________________________________________________________________________________________
     */
    public function about()
    {
        return view('frontend.pages.about-us');
    }
    public function projectInfo()
    {
        return view('frontend.pages.projects');
    }
    public function projectDetails()
    {
        return view('frontend.pages.projects-details');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**________________________________________________________________________________________
     * Download Menu Pages
     * ________________________________________________________________________________________
     */
    public function downloadProfile()
    {
        
    }
    public function downloadProduct()
    {
        
    }
    /**________________________________________________________________________________________
     * Gallery Menu Pages
     * ________________________________________________________________________________________
     */
    public function galleryImage()
    {
        $posts= Gallery::where('public','=','1')->orderBy('created_at', 'desc')->with('user')->get();
        return view('frontend.pages.gallery_album', compact('posts'));
    }
    public function galleryShow($id)
    {
        $posts= Gallery::findOrFail($id);
        $data= GalleryImages::where('gallery_id', $id)->orderBy('created_at', 'desc')->get();
        
        return view('frontend.pages.gallery_image', compact('posts', 'data'));
    }
    /**________________________________________________________________________________________
     * Events Menu Pages
     * ________________________________________________________________________________________
     */
    public function events()
    {
        $events =Event::where('status', 1)->paginate(12);
        return view('frontend.pages.events',compact('events'));
    }
    public function eventSearch(Request $request)
    {
        $query = Event::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('description', 'like', '%' . $searchTerm . '%');
        }

        $events = $query->where('status', 1)->paginate(12);

        return view('frontend.pages.events', compact('events'));
    }

    public function eventShow($id)
    {
        $events =Event::latest()->orderByDesc('id')->take(10)->orderBy('id')->get();
        $data =Event::findOrFail($id);
        return view('frontend.pages.events_details',compact('events','data'));
    }
    /**________________________________________________________________________________________
     * Blog Menu Pages
     * ________________________________________________________________________________________
     */
    public function blog()
    {
        return view('frontend.pages.blog');
    }
    public function blogDetails()
    {
        return view('frontend.pages.blog-details');
    }
    /**________________________________________________________________________________________
     * Career Menu Pages
     * ________________________________________________________________________________________
     */
    public function career()
    {
        return view('frontend.pages.career');
    }
    /**________________________________________________________________________________________
     * Other Menu Pages
     * ________________________________________________________________________________________
     */
    public function termsCondition()
    {
        return view('frontend.pages.terms-condition');
    }
    public function privacyPolicy()
    {
        return view('frontend.pages.privacy-policy');
    }
    /**________________________________________________________________________________________
     * Comming Soon Page
     * ________________________________________________________________________________________
     */
    public function comming_soon()
    {
        return view('comming_soon');
    }
}
