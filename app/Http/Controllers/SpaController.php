<?php

namespace App\Http\Controllers;

use App\Models\Spa;
use App\Models\SpaFooter;
use App\Models\SpaService;
use App\Models\SpaSlider;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = SpaSlider::latest()->get();
        $footers = SpaFooter::latest()->get();
        $services = SpaService::get();
        return view('spa.index', compact('sliders', 'footers', 'services'));
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
            'type' => 'required|in:slider,footer,service',
            'image_url' => 'required|image'
        ]);
        if ($request->type == 'slider') {
            $file = $request->file('image_url');
            $path = 'public/spa_sliders/images/';
            $data['image_url'] = 'spa_sliders/images/' . FileUpload::storeFile($file, $path);
            SpaSlider::create($data);
        }

        if ($request->type == 'footer') {
            $file = $request->file('image_url');
            $path = 'public/spa_footers/images/';
            $data['image_url'] = 'spa_footers/images/' . FileUpload::storeFile($file, $path);
            SpaFooter::create($data);
        }

        if ($request->type == 'service' && $request->id) {
            $file = $request->file('image_url');
            $path = 'public/spa_services/images/';
            $data['image_url'] = 'spa_services/images/' . FileUpload::storeFile($file, $path);
            $id = $request->id;
            $spaService = SpaService::findOrFail($id);
            $spaService->update($data);
        }
        return redirect()->route('spa.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function show(Spa $spa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return SpaService::select('id', 'name')->findorFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spa $spa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spa $spa)
    {
        //
    }

    public function deleteSpaSlider(Request $request)
    {
        $roomSlider = SpaSlider::findOrFail($request->id);
        $roomSlider->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function deleteSpaFooter(Request $request)
    {
        $roomFooter = SpaFooter::findOrFail($request->id);
        $roomFooter->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
