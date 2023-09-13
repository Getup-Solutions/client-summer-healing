<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adminsubscription;

use Illuminate\Support\Str;

class AdminsubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminsubscriptions = Adminsubscription::all();
        return view("backend.subscriptions.index", compact('adminsubscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.subscriptions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->interval);
        $request->validate(
            [
                'title' => 'unique:adminsubscriptions|required',
                'description' => 'required',
                'price' => 'numeric',
            ],
            [
                'title.required' => 'Field is required.',
                'title.unique' => 'The title has already been taken. Try a different title.',
                'price.numeric' => 'Only accept interger values.',
            ]
        );

        
        $adminpage = new Adminsubscription();
        $adminpage->title = $request->title;
        $adminpage->slug = Str::slug($request->title);
        $adminpage->description = $request->description;
        $adminpage->price = $request->price;
        $adminpage->interval = $request->price == 0 ? "Free" : $request->interval;
        $adminpage->save();
        return redirect()->route('admin.dashboard.subscriptions')->with('message','Subscription has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminsubscription = Adminsubscription::find($id);
        return view("backend.subscriptions.edit",compact('adminsubscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'price' => 'numeric',
            ],
            [
                'title.required' => 'Field is required.',
                'price.numeric' => 'Only accept interger values.',
            ]
        );

        
        $adminsubscription = Adminsubscription::find($id);
        $adminsubscription->title = $request->title;
        $adminsubscription->slug = Str::slug($request->title);
        $adminsubscription->description = $request->description;
        $adminsubscription->price = $request->price;
        $adminsubscription->interval = $request->price == 0 ? "Free" : $request->interval;
        $adminsubscription->save();
        return redirect()->route('admin.dashboard.subscriptions')->with('message','Subscription has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminsubscription = Adminsubscription::find($id);
        $adminsubscription->delete();
        return redirect()->route('admin.dashboard.subscriptions')->with('message','Subscription has been deleted successfully.');
    }
}
