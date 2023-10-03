<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeSlider;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = Home::latest()->first();
        $sliders = HomeSlider::latest()->get();
        return view('admin-homepage', compact('home', 'sliders'));
    }

    public function edit(Request $request)
    {

        // return $request->all();
        $validated = $request->validate([
            'description' => 'required',
        ]);
        $data = [
            'description' => $request->description,
        ];
        Home::truncate();
        Home::create($data);
        return redirect()->route('home');
    }

    public function sliderImageUpload(Request $request)
    {
        if ($request->id) {
            $validated = $request->validate([
                'slider_image' => 'image',
                'mobile_image_url' => 'image',
            ]);

        } else {
            $validated = $request->validate([
                'slider_image' => 'required|image',
                'mobile_image_url' => 'required|image',
            ]);
        }
        if ($request->file('slider_image')) {
            $file = $request->file('slider_image');
            $path = 'public/home_sliders/images/';
            $data['image_url'] = 'home_sliders/images/' . FileUpload::storeFile($file, $path);
        }
        if ($request->file('mobile_image_url')) {
            $file = $request->file('mobile_image_url');
            $path = 'public/home_sliders/images/';
            $data['mobile_image_url'] = 'home_sliders/images/' . FileUpload::storeFile($file, $path);
        }
        if ($request->id) {
            $home = HomeSlider::findOrFail($request->id);
            if (isset($data))
                $home->update($data);
        } else {
            HomeSlider::create($data);
        }
        return redirect()->route('home');
    }

    public function deleteHomeSlider(Request $request)
    {
        $HomeSlider = HomeSlider::findOrFail($request->id);
        $HomeSlider->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
