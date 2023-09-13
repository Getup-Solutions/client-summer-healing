<?php

namespace App\Http\Controllers;

use App\Models\Adminwellness;
use Illuminate\Http\Request;

class AdminwellnessController extends Controller
{
    public function index()
    {
        $wellnesscenters = Adminwellness::all(); 
        return view('backend.wellness-center.index', compact('wellnesscenters'));
    }
    
    public function create()
    {
        return view('backend.wellness-center.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'unique:adminwellnesses|required',
            ],
            [
                'title.required' => 'Field is required.',
            ]
        );

        $wellnesscenter = new Adminwellness();
        if($request->hasFile('featured_image')) { 
            $imageName = time().'.'.$request->featured_image->extension();  
            $request->featured_image->move(public_path('backend/images/wellness_images'), $imageName);
            $wellnesscenter->title = $request->title;
            $wellnesscenter->description = $request->description;
            $wellnesscenter->status = $request->status;
            $wellnesscenter->featured_image = $imageName;
            $wellnesscenter->save();
        }
        else{
            $wellnesscenter->title = $request->title;
            $wellnesscenter->description = $request->description;
            $wellnesscenter->status = $request->status;
            $wellnesscenter->save();
        }

        return redirect()->route('admin.dashboard.wellness.index');
    }


    public function edit($id, Request $request)
    {
        $wellcenter = Adminwellness::find($id);
        return view('backend.wellness-center.edit', compact('wellcenter'));
    }



    public function update($id, Request $request)
    {
        $wellnesscenter = Adminwellness::find($id);
        //dd($wellnesscenter);
        if($request->hasFile('featured_image')) { 
            $imageName = time().'.'.$request->featured_image->extension();  
            $request->featured_image->move(public_path('backend/images/wellness_images'), $imageName);
            $wellnesscenter->title = $request->title;
            $wellnesscenter->description = $request->description;
            $wellnesscenter->status = $request->status;
            $wellnesscenter->featured_image = $imageName;
            $wellnesscenter->save();
        }
        else{
            $wellnesscenter->title = $request->title;
            $wellnesscenter->description = $request->description;
            $wellnesscenter->status = $request->status;
            $wellnesscenter->save();
        }

        return redirect()->route('admin.dashboard.wellness.index');
    }


    public function view($id)
    {
        $wellnesscenter = Adminwellness::find($id);
        return view('backend.wellness-center.view', compact('wellnesscenter'));
    }




}
