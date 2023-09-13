<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MOdels\Adminondemandcat;

class AdminondemandcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminondemandcats = Adminondemandcat::all();
        return view("backend.ondemandcategories.index", compact('adminondemandcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.ondemandcategories.create");
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
            ],
            [
                'title.required' => 'Field is required.',
            ]
        );

        
        $admincoursecat = new Adminondemandcat();
        $admincoursecat->title = $request->title;
        $admincoursecat->save();
        return redirect()->route('admin.dashboard.adminondemandcategories')->with('message','On demand category has been created successfully.');
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
        $adminondemandcat = Adminondemandcat::find($id);
        return view("backend.ondemandcategories.edit",compact('adminondemandcat'));
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
            ],
            [
                'title.required' => 'Field is required.',
            ]
        );

        
        $admincoursecat = Adminondemandcat::find($id);
        $admincoursecat->title = $request->title;
        $admincoursecat->save();
        return redirect()->route('admin.dashboard.adminondemandcategories')->with('message','Course category has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admincoursecat = Adminondemandcat::find($id);
        $admincoursecat->delete();
        return redirect()->route('admin.dashboard.adminondemandcategories')->with('message','Course category has been deleted successfully');
    }
}
