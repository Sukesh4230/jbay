<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivitySlider;
use App\Models\Amenity;
use App\Models\AmenitySlider;
use App\Models\Discover;
use App\Models\DiscoverSlider;
use App\Models\Home;
use App\Models\HomeSlider;
use App\Models\Room;
use App\Models\SpaFooter;
use App\Models\SpaService;
use App\Models\SpaSlider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $content = Home::select('description as content')->first();
        $sliders = HomeSlider::get();

        $rooms = Room::with('defaultImage')->select('id', 'name')->get();
        $DUKE = $rooms->where('id', '=', Room::DUKE)->first()->defaultImage->image_url ?? '';
        $BEETLE = $rooms->where('id', '=', Room::BEETLE)->first()->defaultImage->image_url ?? '';
        $REGAL = $rooms->where('id', '=', Room::REGAL)->first()->defaultImage->image_url ?? '';
        $BOUGAIN = $rooms->where('id', '=', Room::BOUGAIN)->first()->defaultImage->image_url ?? '';
        $PAVILION = $rooms->where('id', '=', Room::PAVILION)->first()->defaultImage->image_url ?? '';
        $PENT = $rooms->where('id', '=', Room::PENT)->first()->defaultImage->image_url ?? '';

        $amenities = Amenity::latest()->get();
        $activities = Activity::latest()->get();
        $discovers = Discover::latest()->get();
        return view('website.index', compact('content', 'sliders', 'DUKE', 'BEETLE', 'REGAL', 'BOUGAIN', 'PAVILION', 'PENT', 'amenities', 'activities', 'discovers'));
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
}
