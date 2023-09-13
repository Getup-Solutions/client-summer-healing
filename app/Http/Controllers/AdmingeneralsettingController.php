<?php

namespace App\Http\Controllers;

use App\Models\Admingeneralsetting;
use Illuminate\Http\Request;

class AdmingeneralsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        //return view("backend.general-settings.create");
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
     * @param  \App\Models\Admingeneralsetting  $admingeneralsetting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admingeneralsetting  $admingeneralsetting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admingeneralsetting = Admingeneralsetting::find($id);
        //dd($admingeneralsetting);
        return view("backend.general-settings.index", compact('admingeneralsetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admingeneralsetting  $admingeneralsetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'logo.required' => 'Error with format or size.',
                'favicon.required' => 'Error with format or size.',
            ]
        );

        
        $admingeneralsetting = Admingeneralsetting::find($id);
        if($request->hasFile('logo')) { 
            $logo_image = time().'.'.$request->logo->extension();  
            $request->logo->move(public_path('backend/images/general_settings'), $logo_image);
            $admingeneralsetting->logo = $logo_image;
            $admingeneralsetting->terms = $request->terms;
            $admingeneralsetting->privacy_policy = $request->privacy_policy;
            $admingeneralsetting->refund_policy = $request->refund_policy;
            $admingeneralsetting->copyright = $request->copyright;
            $admingeneralsetting->save();
        }
        if($request->hasFile('favicon')) { 
            $favicon_image = time().'.'.$request->favicon->extension();  
            $request->favicon->move(public_path('backend/images/general_settings'), $favicon_image);
            $admingeneralsetting->favicon = $favicon_image;
            $admingeneralsetting->terms = $request->terms;
            $admingeneralsetting->privacy_policy = $request->privacy_policy;
            $admingeneralsetting->refund_policy = $request->refund_policy;
            $admingeneralsetting->copyright = $request->copyright;
            $admingeneralsetting->save();
        }

        $admingeneralsetting->terms = $request->terms;
        $admingeneralsetting->privacy_policy = $request->privacy_policy;
        $admingeneralsetting->refund_policy = $request->refund_policy;
        $admingeneralsetting->copyright = $request->copyright;
        $admingeneralsetting->save();
    
        return redirect()->route('admin.dashboard.generalsettings.index', 1)->with('message','Details has been saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admingeneralsetting  $admingeneralsetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
