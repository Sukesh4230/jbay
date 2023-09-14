<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\AmenitySlider;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenities = Amenity::latest()->get();
        $sliders = AmenitySlider::latest()->get();
        return view('amenity.index', compact('amenities', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'nullable|image'
        ]);
        $data = $this->get_data($request);
        if ($request->id) {
            $amenity = Amenity::findorFail($request->id);
            $amenity->update($data);
        } else {
            Amenity::create($data);
        }
        return redirect()->route('amenities.index');
    }

    public function get_data($request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/amenities/images/';
            $data['image_url'] = 'amenities/images/' . FileUpload::storeFile($file, $path);
        }
        return $data;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function show(Amenity $amenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenity $amenity)
    {
        return $amenity;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amenity $amenity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Amenity = Amenity::find($id);
        $Amenity->delete();
        return response()->json(['status' => 'success', 'message' => 'Amenity has been deleted']);
    }

    public function sliderImageUpload(Request $request)
    {
        $validated = $request->validate([
            'image_url' => 'required|image',
        ]);

        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/amenity_sliders/images/';
            $data['image_url'] = 'amenity_sliders/images/' . FileUpload::storeFile($file, $path);
            AmenitySlider::create($data);
        }
        return redirect()->route('amenities.index');
    }

    public function deleteSlider(Request $request)
    {
        $AmenitySlider = AmenitySlider::findOrFail($request->id);
        $AmenitySlider->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
