<?php

namespace App\Http\Controllers;

use App\Models\Admincontactsetting;
use Illuminate\Http\Request;

class AdmincontactsettingController extends Controller
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
     * @param  \App\Models\Admincontactsetting  $admincontactsetting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admincontactsetting  $admincontactsetting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admincontactsetting = Admincontactsetting::find($id);
        return view("backend.contact-settings.index", compact('admincontactsetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admincontactsetting  $admincontactsetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admincontactsetting = Admincontactsetting::find($id);
        $admincontactsetting->contact_number = $request->contact_number;
        $admincontactsetting->contact_email = $request->contact_email;
        $admincontactsetting->contact_address = $request->contact_address;
        $admincontactsetting->facebook_url = $request->facebook_url;
        $admincontactsetting->instagram_url = $request->instagram_url;
        $admincontactsetting->tiktok_url = $request->tiktok_url;
        $admincontactsetting->telegram_url = $request->telegram_url;
        $admincontactsetting->youtube_url = $request->youtube_url;
        $admincontactsetting->save();
    
        return redirect()->route('admin.dashboard.contactsettings.index', 1)->with('message','Details has been saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admincontactsetting  $admincontactsetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
