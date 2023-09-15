<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('blog.index', compact('blogs'));
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
        $data = $this->get_data($request);
        if ($request->id) {
            $blog = Blog::findorFail($request->id);
            $blog->update($data);
        } else {
            Blog::create($data);
        }
        return redirect()->route('blogs.index');
    }

    public function get_data($request)
    {
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
        ];
        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/blogs/images/';
            $data['image_url'] = 'blogs/images/' . FileUpload::storeFile($file, $path);
        }
        return $data;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return $blog;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::find($id);
        $Blog->delete();
        return response()->json(['status' => 'success', 'message' => 'Blog has been deleted']);
    }
}
