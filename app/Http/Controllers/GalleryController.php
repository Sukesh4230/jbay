<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::get();
        $galleryImages = GalleryImage::latest()->with('gallery')->get();
        return view('gallery.index', compact('galleries', 'galleryImages'));
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
            'gallery_id' => 'required',
            'image_url' => 'image',
        ]);
        $data = $this->get_data($request);
        if ($request->id) {
            $GalleryImage = GalleryImage::findorfail($request->id);
            $GalleryImage->update($data);
        } else {
            if (isset($data['image_url'])) {
                GalleryImage::create($data);
            }
        }

        return redirect()->route('galleries.index');
    }

    public function get_data($request)
    {
        $data['gallery_id'] = $request->gallery_id;
        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/gallery/images/';
            $data['image_url'] = 'gallery/images/' . FileUpload::storeFile($file, $path);
        }
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return GalleryImage::findorfail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $GalleryImage = GalleryImage::find($id);
        $GalleryImage->delete();
        return response()->json(['status' => 'success', 'message' => 'Gallery Image has been deleted']);
    }
}
