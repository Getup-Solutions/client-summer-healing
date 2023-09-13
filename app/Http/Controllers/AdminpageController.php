<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Backend;
// use App\Http\Controllers\Backend\PageController;
//use App\Http\Controllers\Backend as PageController;
use Illuminate\Http\Request;

use App\Models\Adminpage;

use Illuminate\Support\Str;



class AdminpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminpages = Adminpage::all();
        //dd($adminpages);
        return view("backend.pages.index", compact('adminpages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.pages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'title' => 'unique:adminpages|required',
            //'description' => 'required',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'title.unique' => 'The page title has already been taken. Try a different title or check the trash page for existing page.',
                //'description.required' => 'Field is required.',
                'banner_image.required' => 'Error with format or size.',
            ]
        );
        
        $adminpage = new Adminpage();
        if($request->hasFile('banner_image')) { 
            $imageName = time().'.'.$request->banner_image->extension();  
            $request->banner_image->move(public_path('backend/images/banner_images'), $imageName);
            $adminpage->title = $request->title;
            $adminpage->slug = Str::slug($request->title);
            //$adminpage->description = $request->description;
            $adminpage->section1_heading = $request->section1_heading;
            $adminpage->section1 = $request->section1;
            $adminpage->section2_heading = $request->section2_heading;
            $adminpage->section2 = $request->section2;
            $adminpage->section3_heading = $request->section3_heading;
            $adminpage->section3 = $request->section3;
            $adminpage->section4_heading = $request->section4_heading;
            $adminpage->section4 = $request->section4;
            $adminpage->seo_title = $request->seo_title;
            $adminpage->seo_description = $request->seo_description;
            $adminpage->seo_keyword = $request->seo_keyword;
            $adminpage->status = $request->status;
            $adminpage->banner_image = $imageName;
            $adminpage->save();
        }
        else{
            $imageName = 'common_banner.jpg';
            $adminpage->title = $request->title;
            $adminpage->slug = Str::slug($request->title);
            //$adminpage->description = $request->description;
            $adminpage->section1_heading = $request->section1_heading;
            $adminpage->section1 = $request->section1;
            $adminpage->section2_heading = $request->section2_heading;
            $adminpage->section2 = $request->section2;
            $adminpage->section3_heading = $request->section3_heading;
            $adminpage->section3 = $request->section3;
            $adminpage->section4_heading = $request->section4_heading;
            $adminpage->section4 = $request->section4;
            $adminpage->seo_title = $request->seo_title;
            $adminpage->seo_description = $request->seo_description;
            $adminpage->seo_keyword = $request->seo_keyword;
            $adminpage->status = $request->status;
            $adminpage->banner_image = $imageName;
            $adminpage->save();
        }
        return redirect()->route('admin.dashboard.pages')->with('message','Page has been created successfully.');
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
        $adminpage = Adminpage::find($id);
        return view("backend.pages.edit",compact('adminpage'));
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
                //'description' => 'required',
                'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                //'description.required' => 'Field is required.',
                'banner_image.required' => 'Error with format or size.',
            ]
        );

        $adminpage = Adminpage::find($id);
        if($request->hasFile('banner_image')) { 
            $imageName = time().'.'.$request->banner_image->extension();  
            $request->banner_image->move(public_path('backend/images/banner_images'), $imageName);
            $adminpage->title = $request->title;
            $adminpage->slug = Str::slug($request->title);
            //$adminpage->description = $request->description;
            $adminpage->section1_heading = $request->section1_heading;
            $adminpage->section1 = $request->section1;
            $adminpage->section2_heading = $request->section2_heading;
            $adminpage->section2 = $request->section2;
            $adminpage->section3_heading = $request->section3_heading;
            $adminpage->section3 = $request->section3;
            $adminpage->section4_heading = $request->section4_heading;
            $adminpage->section4 = $request->section4;
            if($adminpage->slug == "home"){ 
            $adminpage->section5_heading = $request->section5_heading;
            $adminpage->section5 = $request->section5;
            $adminpage->section6_heading = $request->section6_heading;
            $adminpage->section6 = $request->section6;
            $adminpage->google_store_url = $request->google_store_url;
            $adminpage->apple_store_url = $request->apple_store_url;
            }
            if($adminpage->slug == "terms" || $adminpage->slug == "privacy-policy" || $adminpage->slug == "refund-policy"){ 
                $adminpage->description = $request->description;
            }
            $adminpage->seo_title = $request->seo_title;
            $adminpage->seo_description = $request->seo_description;
            $adminpage->seo_keyword = $request->seo_keyword;
            $adminpage->status = $request->status;
            $adminpage->banner_image = $imageName;
            $adminpage->save();
        }
        else{
            $adminpage->title = $request->title;
            $adminpage->slug = Str::slug($request->title);
            //$adminpage->description = $request->description;
            $adminpage->section1_heading = $request->section1_heading;
            $adminpage->section1 = $request->section1;
            $adminpage->section2_heading = $request->section2_heading;
            $adminpage->section2 = $request->section2;
            $adminpage->section3_heading = $request->section3_heading;
            $adminpage->section3 = $request->section3;
            $adminpage->section4_heading = $request->section4_heading;
            $adminpage->section4 = $request->section4;
            if($adminpage->slug == "home"){ 
            $adminpage->section5_heading = $request->section5_heading;
            $adminpage->section5 = $request->section5;
            $adminpage->section6_heading = $request->section6_heading;
            $adminpage->section6 = $request->section6;
            $adminpage->google_store_url = $request->google_store_url;
            $adminpage->apple_store_url = $request->apple_store_url;
            }
            if($adminpage->slug == "terms" || $adminpage->slug == "privacy-policy" || $adminpage->slug == "refund-policy"){ 
                $adminpage->description = $request->description;
            }
            $adminpage->seo_title = $request->seo_title;
            $adminpage->seo_description = $request->seo_description;
            $adminpage->seo_keyword = $request->seo_keyword;
            $adminpage->status = $request->status;
            $adminpage->save();
        }
        return redirect()->back()->with('message','Page has been updated successfully.');
    }

    /**
     * View soft deleted items in trash page
     */

    public function trash()
    {
        $adminpages = Adminpage::onlyTrashed()->orderBy("created_at", "desc")->get();
        return view("backend.pages.trash",compact('adminpages'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminpage = Adminpage::find($id);
        $adminpage->delete();
        return redirect()->route('admin.dashboard.pages')->with('message','Page has been deleted successfully.');
    }


    public function forceDelete($id)
    {
        Adminpage::where('id', $id)->withTrashed()->forceDelete();
        return redirect()->route('admin.dashboard.pages.trash')->with('message','Page has been deleted permanently.');
    }

    public function restoreAll() 
    {
        Adminpage::onlyTrashed()->restore();
        return redirect()->route('admin.dashboard.pages.trash')->with('message', 'All pages restored successfully.');
    }

    public function restore($id) 
    {
        Adminpage::where('id', $id)->withTrashed()->restore();

        return redirect()->route('admin.dashboard.pages.trash')->with('message', 'Page restored successfully.');
    }



}
