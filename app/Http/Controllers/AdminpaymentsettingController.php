<?php

namespace App\Http\Controllers;

use App\Models\Adminpaymentsetting;
use Illuminate\Http\Request;

class AdminpaymentsettingController extends Controller
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
     * @param  \App\Models\Adminpaymentsetting  $adminpaymentsetting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminpaymentsetting = Adminpaymentsetting::find($id);
        //dd($admingeneralsetting);
        return view("backend.payment-settings.index", compact('adminpaymentsetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminpaymentsetting  $adminpaymentsetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $adminpaymentsetting = Adminpaymentsetting::find($id);
            $adminpaymentsetting->stripe_test_publishable_key = $request->stripe_test_publishable_key;
            $adminpaymentsetting->stripe_test_secret_key = $request->stripe_test_secret_key;
            $adminpaymentsetting->stripe_live_publishable_key = $request->stripe_live_publishable_key;
            $adminpaymentsetting->stripe_live_secret_key = $request->stripe_live_secret_key;
            $adminpaymentsetting->save();
        
            return redirect()->route('admin.dashboard.paymentsettings.index', 1)->with('message','Details has been saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminpaymentsetting  $adminpaymentsetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
