<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivitySlider;
use App\Models\Amenity;
use App\Models\AmenitySlider;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactSlider;
use App\Models\Discover;
use App\Models\DiscoverSlider;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\Home;
use App\Models\HomeSlider;
use App\Models\Room;
use App\Models\SpaFooter;
use App\Models\SpaService;
use App\Models\SpaSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $content = Home::select('description as content')->first();
        $sliders = HomeSlider::get();

        $rooms = Room::with('defaultImage')->get();


        $amenities = Amenity::latest()->get();
        $activities = Activity::latest()->get();
        $discovers = Discover::latest()->get();
        return view('website.index', compact('content', 'sliders', 'rooms', 'amenities', 'activities', 'discovers'));
    }

    public function amenities()
    {
        $sliders = AmenitySlider::get();
        $amenities = Amenity::latest()->get();
        return view('website.amenities', compact('sliders', 'amenities'));
    }

    public function spa()
    {
        $sliders = SpaSlider::latest()->get();
        $footers = SpaFooter::latest()->get();

        $spaServices = SpaService::select('id', 'image_url')->get();
        $Abhyanga = $spaServices->where('id', '=', SpaService::Abhyanga)->first()->image_url ?? '';
        $Shirodhara = $spaServices->where('id', '=', SpaService::Shirodhara)->first()->image_url ?? '';
        $ShiroAbhyanga = $spaServices->where('id', '=', SpaService::ShiroAbhyanga)->first()->image_url ?? '';
        $PadaAbhyanga = $spaServices->where('id', '=', SpaService::PadaAbhyanga)->first()->image_url ?? '';
        $Mukhalepam = $spaServices->where('id', '=', SpaService::Mukhalepam)->first()->image_url ?? '';
        $Udwarthanam = $spaServices->where('id', '=', SpaService::Udwarthanam)->first()->image_url ?? '';
        $Podikizhi = $spaServices->where('id', '=', SpaService::Podikizhi)->first()->image_url ?? '';
        $Pizhichil = $spaServices->where('id', '=', SpaService::Pizhichil)->first()->image_url ?? '';
        $Pedicure = $spaServices->where('id', '=', SpaService::Pedicure)->first()->image_url ?? '';
        $PrishtaAbhyanga = $spaServices->where('id', '=', SpaService::PrishtaAbhyanga)->first()->image_url ?? '';

        return view('website.wellness', compact('sliders', 'footers', 'Abhyanga', 'Shirodhara', 'ShiroAbhyanga', 'PadaAbhyanga', 'Mukhalepam', 'Udwarthanam', 'Podikizhi', 'Pizhichil', 'Pedicure', 'PrishtaAbhyanga'));
    }

    public function activities()
    {
        $sliders = ActivitySlider::latest()->get();
        $activities = Activity::latest()->get();
        return view('website.activity', compact('activities', 'sliders'));
    }

    public function wayanad()
    {
        $sliders = DiscoverSlider::latest()->get();
        $discovers = Discover::latest()->get();
        return view('website.wayanad', compact('sliders', 'discovers'));
    }

    public function room($id)
    {
        $room = Room::with('sliders', 'footers')->findorFail($id);
        return view('website.room', compact('room'));
    }

    public function gallery()
    {
        $galleries = Gallery::has('image')->with('image:gallery_id,image_url')->select('id')->get();
        $stayImage = $galleries->where('id', Gallery::Stay)->first()->image->image_url ?? '';
        $restaurantImage = $galleries->where('id', Gallery::Restaurant)->first()->image->image_url ?? '';
        $spaImage = $galleries->where('id', Gallery::Spa)->first()->image->image_url ?? '';
        $amenitiesImage = $galleries->where('id', Gallery::Amenities)->first()->image->image_url ?? '';
        $activityImage = $galleries->where('id', Gallery::Activity)->first()->image->image_url ?? '';
        $resortImage = $galleries->where('id', Gallery::Resort)->first()->image->image_url ?? '';
        return view('website.gal', compact('stayImage', 'resortImage', 'spaImage', 'restaurantImage', 'amenitiesImage', 'activityImage'));
    }

    public function galleryImages($id)
    {
        $galleryImages = GalleryImage::with('gallery')->where('gallery_id', $id)->get();
        $data = [];
        foreach ($galleryImages as $key => $value) {
            $data['datasets'][$key]['src'] = asset('storage/' . $value->image_url);
            $data['datasets'][$key]['thumb'] = asset('storage/' . $value->image_url);
            $data['datasets'][$key]['subHtml'] = $value->name ?? $value->gallery->name ?? '';
        }
        return $data;
    }

    public function blog()
    {
        $blogs = Blog::orderBy('date', 'desc')->paginate(6);
        return view('website.blogs-page', compact('blogs'));
    }

    public function blogShow($id)
    {
        $blog = Blog::findorFail($id);
        return view('website.blog', compact('blog'));
    }

    public function contact()
    {
        // $blogs = Blog::orderBy('date', 'desc')->paginate(6);
        $sliders = ContactSlider::latest()->get();
        return view('website.contact', compact('sliders'));
    }

    public function saveContact(Request $request)
    {
        // return $request->all();
        request()->validate([
            'phone' => 'numeric|required',
            'email' => 'email'
        ]);
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'description' => $request->comment
        ];
        Contact::create($data);
        return redirect()->route('web-contact');
    }

}
