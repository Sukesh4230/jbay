<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\DiscoverSlider;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discovers = Discover::latest()->get();
        $sliders = DiscoverSlider::latest()->get();
        return view('discovers.index', compact('discovers', 'sliders'));
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
            $Activity = Discover::findorFail($request->id);
            $Activity->update($data);
        } else {
            Discover::create($data);
        }
        return redirect()->route('discovers.index');
    }

    public function get_data($request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/discovers/images/';
            $data['image_url'] = 'discovers/images/' . FileUpload::storeFile($file, $path);
        }
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function show(Discover $discover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function edit(Discover $discover)
    {
        return $discover;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discover $discover)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Discover = Discover::find($id);
        $Discover->delete();
        return response()->json(['status' => 'success', 'message' => 'Discover has been deleted']);
    }

    public function sliderImageUpload(Request $request)
    {
        $validated = $request->validate([
            'image_url' => 'required|image',
        ]);

        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/discover_sliders/images/';
            $data['image_url'] = 'discover_sliders/images/' . FileUpload::storeFile($file, $path);
            DiscoverSlider::create($data);
        }
        return redirect()->route('discovers.index');
    }
    public function deleteSlider(Request $request)
    {
        $DiscoverSlider = DiscoverSlider::findOrFail($request->id);
        $DiscoverSlider->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
