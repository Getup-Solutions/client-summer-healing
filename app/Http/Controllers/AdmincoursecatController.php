<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admincoursecat;

class AdmincoursecatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admincoursecats = Admincoursecat::all();
        return view("backend.coursecategories.index", compact('admincoursecats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.coursecategories.create");
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
                'title' => 'unique:adminsubscriptions|regex:/^[a-zA-Z ]+$/|required',
            ],
            [
                'title.required' => 'Field is required.',
                'title.regex' => 'Only accept text.',
            ]
        );

        
        $admincoursecat = new Admincoursecat();
        $admincoursecat->title = $request->title;
        $admincoursecat->save();
        return redirect()->route('admin.dashboard.admincoursecategories')->with('message','Course category has been created successfully.');
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
        $admincoursecat = Admincoursecat::find($id);
        return view("backend.coursecategories.edit",compact('admincoursecat'));
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
                'title' => 'required|regex:/^[a-zA-Z ]+$/',
            ],
            [
                'title.required' => 'Field is required.',
                'title.regex' => 'Only accept text.',
            ]
        );

        
        $admincoursecat = Admincoursecat::find($id);
        $admincoursecat->title = $request->title;
        $admincoursecat->save();
        return redirect()->route('admin.dashboard.admincoursecategories')->with('message','Course category has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admincoursecat = Admincoursecat::find($id);
        $admincoursecat->delete();
        return redirect()->route('admin.dashboard.admincoursecategories')->with('message','Course category has been deleted successfully');
    }
}
