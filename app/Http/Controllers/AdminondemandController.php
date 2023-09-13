<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adminondemand;
use App\Models\Adminondemandcat;
use App\Models\Adminsubscription;
use App\Models\Admintrainer;
use Illuminate\Support\Str;

class AdminondemandController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminondemands = Adminondemand::orderBy('id', 'DESC')->get();
        return view('backend.ondemand.index', compact('adminondemands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminsubscriptions = Adminsubscription::all();
        $adminondemandcats = Adminondemandcat::all();
        $admintrainers = Admintrainer::all();
        return view('backend.ondemand.create', compact('adminsubscriptions','adminondemandcats', 'admintrainers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate(
            [
            'title' => 'unique:adminondemands|required',
            'embed_url' => 'required',
            'price' => 'required',
            'level' => 'required',
            'scheduledate' => 'required',
            'scheduletime' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'level.required' => 'Field is required.',
                'title.unique' => 'The page title has already been taken. Try a different title or check the trash page for existing page.',
                'featured_image.required' => 'Error with format or size.',
                'scheduletime.required' => 'Field is required',
                'scheduledate.required' => 'Field is required',
            ]
        );

        if($request->subscription == null){
            $request->validate(
                [
                'subscription' => 'unique:adminondemands|required',
                ],
                [
                    'subscription.required' => 'Field is required.',
                ]
            );
        }

        
        if($request->ondemand_category == null){
            $request->validate(
                [
                    'ondemand_category' => 'required',
                ],
                [
                    'ondemand_category.required' => 'Field is required.',
                ]
            );
        }
        
        $adminondemand = new Adminondemand();
        if($request->hasFile('featured_image')) { 
            $imageName = time().'.'.$request->featured_image->extension();  
            $request->featured_image->move(public_path('backend/images/courses_images'), $imageName);
            $adminondemand->title = $request->title;
            $adminondemand->slug = Str::slug($request->title);
            $adminondemand->description = $request->description;
            $adminondemand->excerpt = $request->excerpt;
            $adminondemand->ondemand_category = $request->ondemand_category;
            $adminondemand->subscription = $request->subscription;
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $adminondemand->trainers = $trainers;
            $adminondemand->price = $request->price;
            $adminondemand->level = $request->level;
            $adminondemand->scheduledate = $request->scheduledate;
            $adminondemand->scheduletime = $request->scheduletime;
            $adminondemand->status = $request->status;
            $adminondemand->embed_url = $request->embed_url;
            $adminondemand->featured_image = $imageName;
            $adminondemand->save();
            $adminondemand->adminsubscriptions()->attach($request->subscription);
            $adminondemand->adminondemandcats()->sync($request->ondemand_category);
            $adminondemand->adminondemandtrainers()->sync($request->trainers);
        }
        else{
            $imageName = 'common_banner.jpg';
            $adminondemand->title = $request->title;
            $adminondemand->slug = Str::slug($request->title);
            $adminondemand->description = $request->description;
            $adminondemand->excerpt = $request->excerpt;
            $adminondemand->ondemand_category = $request->ondemand_category;
            $adminondemand->subscription = $request->subscription;
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $adminondemand->trainers = $trainers;
            $adminondemand->price = $request->price;
            $adminondemand->level = $request->level;
            $adminondemand->scheduledate = $request->scheduledate;
            $adminondemand->scheduletime = $request->scheduletime;
            $adminondemand->status = $request->status;
            $adminondemand->embed_url = $request->embed_url;
            $adminondemand->featured_image = $imageName;
            $adminondemand->save();
            $adminondemand->adminsubscriptions()->attach($request->subscription);
            $adminondemand->adminondemandcats()->sync($request->ondemand_category);
            $adminondemand->adminondemandtrainers()->sync($request->trainers);
        }
        return redirect()->route('admin.dashboard.ondemand')->with('message','Course has been created successfully.');
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
        $adminondemand = Adminondemand::find($id);
        $adminsubscriptions = Adminsubscription::all();
        $adminondemandcats = Adminondemandcat::all();
        $admintrainers = Admintrainer::all();
        return view('backend.ondemand.edit', compact('adminondemand', 'adminsubscriptions', 'adminondemandcats', 'admintrainers'));
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
                'embed_url' => 'required',
                'price' => 'required',
                'level' => 'required',
                'scheduledate' => 'required',
                'scheduletime' => 'required',
                'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'featured_image.required' => 'Error with format or size.',
                'scheduletime.required' => 'Field is required',
                'scheduledate.required' => 'Field is required',
            ]
        );
        
        $adminondemand = Adminondemand::find($id);
        if($request->hasFile('featured_image')) { 
            $imageName = time().'.'.$request->featured_image->extension();  
            $request->featured_image->move(public_path('backend/images/courses_images'), $imageName);
            $adminondemand->title = $request->title;
            $adminondemand->slug = Str::slug($request->title);
            $adminondemand->description = $request->description;
            $adminondemand->excerpt = $request->excerpt;
            $adminondemand->ondemand_category = $request->ondemand_category;
            $adminondemand->subscription = $request->subscription;
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $adminondemand->trainers = $trainers;
            $adminondemand->price = $request->price;
            $adminondemand->level = $request->level;
            $adminondemand->scheduledate = $request->scheduledate;
            $adminondemand->scheduletime = $request->scheduletime;
            $adminondemand->status = $request->status;
            $adminondemand->embed_url = $request->embed_url;
            $adminondemand->featured_image = $imageName;
            $adminondemand->save();
            $adminondemand->adminsubscriptions()->attach($request->subscription);
            $adminondemand->adminondemandcats()->sync($request->ondemand_category);
            $adminondemand->adminondemandtrainers()->sync($request->trainers);
        }
        else{
            $adminondemand->title = $request->title;
            $adminondemand->slug = Str::slug($request->title);
            $adminondemand->description = $request->description;
            $adminondemand->excerpt = $request->excerpt;
            $adminondemand->ondemand_category = $request->ondemand_category;
            $adminondemand->subscription = $request->subscription;
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $adminondemand->trainers = $trainers;
            $adminondemand->price = $request->price;
            $adminondemand->level = $request->level;
            $adminondemand->scheduledate = $request->scheduledate;
            $adminondemand->scheduletime = $request->scheduletime;
            $adminondemand->status = $request->status;
            $adminondemand->embed_url = $request->embed_url;
            $adminondemand->save();
            $adminondemand->adminsubscriptions()->sync($request->subscription);
            $adminondemand->adminondemandcats()->sync($request->ondemand_category);
            $adminondemand->adminondemandtrainers()->sync($request->trainers);
        }
        return redirect()->route('admin.dashboard.ondemand')->with('message','Course has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminondemand = Adminondemand::find($id);
        //dd($admincourse);
        $adminsubscription = Adminsubscription::findOrFail($adminondemand->subscription);
        $adminondemandcategory = Adminsubscription::findOrFail($adminondemand->ondemand_category);
        $adminondemand->delete();
        $adminondemand->adminsubscriptions()->detach($adminsubscription);
        $adminondemand->adminondemandcats()->detach($adminondemandcategory);
        return redirect()->route('admin.dashboard.ondemand')->with('message','Course has been deleted successfully.');
    }
}
