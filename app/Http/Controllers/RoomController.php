<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomFooter;
use App\Models\RoomSlider;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::with('sliders')->findOrFail($id);
        return view('stays.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();
        $room = Room::findOrFail($id);
        $data = [
            'description' => $request->description,
            'price' => $request->price,
            'extra_adult_price' => $request->extra_adult_price,
        ];
        $room->update($data);
        return redirect()->route('stays.show', [$room->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }

    public function sliderImageUpload(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|numeric|integer',
            'slider_image' => 'required|image',
        ]);

        if ($request->file('slider_image')) {
            $file = $request->file('slider_image');
            $path = 'public/room_sliders/images/';
            $data['image_url'] = 'room_sliders/images/' . FileUpload::storeFile($file, $path);
            $data['room_id'] = $request->id;
            RoomSlider::create($data);
        }
        return redirect()->route('stays.show', [$request->id]);

    }

    public function deleteRoomSlider(Request $request)
    {
        $roomSlider = RoomSlider::findOrFail($request->id);
        $roomSlider->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function footerImageUpload(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|numeric|integer',
            'footer_image' => 'required|image',
        ]);

        if ($request->file('footer_image')) {
            $file = $request->file('footer_image');
            $path = 'public/room_footers/images/';
            $data['image_url'] = 'room_footers/images/' . FileUpload::storeFile($file, $path);
            $data['room_id'] = $request->id;
            RoomFooter::create($data);
        }
        return redirect()->route('stays.show', [$request->id]);
    }

    public function deleteRoomFooter(Request $request)
    {
        $roomFooter = RoomFooter::findOrFail($request->id);
        $roomFooter->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
