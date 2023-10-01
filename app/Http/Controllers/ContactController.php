<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactSlider;
use Facades\App\Services\FileUpload;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = ContactSlider::latest()->get();
        $new_contacts = Contact::where('IS_confirm', false)->get();
        $old_contacts = Contact::where('IS_confirm', true)->get();
        return view('contacts.index', compact('sliders', 'old_contacts', 'new_contacts'));
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }

    public function sliderImageUpload(Request $request)
    {
        if ($request->slider_id) {
            $validated = $request->validate([
                'image_url' => 'image',
                'mobile_image_url' => 'image',
            ]);
        } else {
            $validated = $request->validate([
                'image_url' => 'required|image',
                'mobile_image_url' => 'required|image',
            ]);
        }

        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $path = 'public/contact_sliders/images/';
            $data['image_url'] = 'contact_sliders/images/' . FileUpload::storeFile($file, $path);
        }
        if ($request->file('mobile_image_url')) {
            $file = $request->file('mobile_image_url');
            $path = 'public/contact_sliders/images/';
            $data['mobile_image_url'] = 'contact_sliders/images/' . FileUpload::storeFile($file, $path);
        }
        if ($request->slider_id) {
            $ContactSlider = ContactSlider::findOrFail($request->slider_id);
            if (isset($data)) {
                $ContactSlider->update($data);
            }
        } else {
            ContactSlider::create($data);
        }

        return redirect()->route('contacts.index');
    }

    public function deleteSlider(Request $request)
    {
        $ContactSlider = ContactSlider::findOrFail($request->id);
        $ContactSlider->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
    public function updateContact(Request $request)
    {
        $Contact = Contact::findorFail($request->id);
        $IS_confirm = $Contact->IS_confirm;
        if ($IS_confirm == false)
            $IS_confirm = true;
        else
            $IS_confirm = false;
        $Contact->update(['IS_confirm' => $IS_confirm]);
        return $IS_confirm;
    }
}
