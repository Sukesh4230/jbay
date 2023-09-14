<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivitySlider;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::latest()->get();
        $sliders = ActivitySlider::latest()->get();
        return view('activities.index', compact('activities', 'sliders'));
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
            $Activity = Activity::findorFail($request->id);
            $Activity->update($data);
        } else {
            Activity::create($data);
        }
        return redirect()->route('activities.index');
    }

    public function get_data($request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/activity/images/';
            $data['image_url'] = 'activity/images/' . FileUpload::storeFile($file, $path);
        }
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return $activity;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Activity = Activity::find($id);
        $Activity->delete();
        return response()->json(['status' => 'success', 'message' => 'Activity has been deleted']);
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
            ActivitySlider::create($data);
        }
        return redirect()->route('activities.index');
    }
    public function deleteSlider(Request $request)
    {
        $ActivitySlider = ActivitySlider::findOrFail($request->id);
        $ActivitySlider->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
