<?php

namespace App\Http\Controllers\editor;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contactInfos = Contact::orderBy('created_at','desc')->get();
        // return $contactInfos;


        return view('backEnd.contact.manage',compact('contactInfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.contact.add');
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

            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'status' => 'required',

        ]);

        $contactInfo = new  Contact();

        $contactInfo->phone = $request->phone;
        $contactInfo->email = $request->email;
        $contactInfo->address = $request->address;
        $contactInfo->status = $request->status;
        $contactInfo->save();

        Toastr::success('message', 'Contact Info add successfully!');
        return redirect(route('editor.contact.manage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        // return $request->all();

        $contactInfo = Contact::findOrFail($request->id);
        $contactInfo->status = $request->status;
        $contactInfo->save();
        Toastr::success('message', 'Contact Info add successfully!');
        return redirect()->back();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $contactInfos = Contact::findOrFail($id);
         return view('backEnd.contact.edit', compact('contactInfos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $contactInfo = Contact::findOrFail($request->id);

        $request->validate([

            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'status' => 'required',

        ]);

        $contactInfo->phone = $request->phone;
        $contactInfo->email = $request->email;
        $contactInfo->address = $request->address;
        $contactInfo->status = $request->status;
        $contactInfo->save();

        Toastr::success('message', 'Contact Info Update successfully!');
        return redirect(route('editor.contact.manage'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Contact::findOrFail($request->id)->delete();
        Toastr::success('message', 'Contact Info add successfully!');
        return redirect()->back();
    }
}
