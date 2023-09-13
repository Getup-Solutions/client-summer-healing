<?php

namespace App\Http\Controllers;

use App\Exports\ExportEvent;
use App\Models\Adminevent;
use App\Models\Bookedevent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdmineventController extends Controller
{
    public function index(){
        $events = Adminevent::all();
        return view('backend.events.index', compact('events'));
    }

    public function bookedevents(){
        $events = Bookedevent::all();
        return view('backend.events.bookedevents', compact('events'));
    }

    public function create(){
        return view('backend.events.create');
    }

    public function imageCropPost(Request $request) {
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name = time() . '.png';
        $path = public_path() . "/backend/images/events_images/" . $image_name;
        

        file_put_contents($path, $data);

        return response()->json(['status' => 1, 'message' => "Image uploaded successfully", 'image' => $image_name]);
    }

    public function store(Request $request){

        $request->validate(
            [
            'title' => 'unique:adminevents|required',
            'startdate' => 'required',
            'enddate' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'startdate.required' => 'Field is required.',
                'enddate.required' => 'Field is required.',
                'starttime.required' => 'Field is required.',
                'endtime.required' => 'Field is required.',
                'image.required' => 'Error with format or size.',
            ]
        );

        $adminevent = new Adminevent();

        $startdate = date("Y-m-d", strtotime($request->startdate));  
        $enddate = date("Y-m-d", strtotime($request->enddate));  
        // $starttime = date("H:i A", strtotime($request->starttime));  
        // $endtime = date("H:i A", strtotime($request->endtime));  
        if($request->hasFile('image')) { 
            $adminevent->title = $request->title;
            $adminevent->description = $request->description;
            $adminevent->startdate = $startdate;
            $adminevent->enddate = $enddate;
            $adminevent->starttime = $request->starttime;
            $adminevent->endtime = $request->endtime;
            $adminevent->venue = $request->venue;
            $adminevent->buttonlink = $request->buttonlink;
            $adminevent->buttontext = $request->buttontext;
            $adminevent->price = $request->price;
            $adminevent->status = $request->status;
            $adminevent->type = $request->type;
            $adminevent->image = $request->finalImageValue;
            $adminevent->save();
        }
        else{
            $imageName = 'common_banner.jpg';
            $adminevent->title = $request->title;
            $adminevent->description = $request->description;
            $adminevent->startdate = $startdate;
            $adminevent->enddate = $enddate ;
            $adminevent->starttime = $request->starttime;
            $adminevent->endtime = $request->endtime;
            $adminevent->venue = $request->venue;
            $adminevent->buttonlink = $request->buttonlink;
            $adminevent->buttontext = $request->buttontext;
            $adminevent->price = $request->price;
            $adminevent->status = $request->status;
            $adminevent->type = $request->type;
            $adminevent->image = $imageName;
            $adminevent->save();
        }

        return redirect()->route('admin.dashboard.events')->with("message", "Event has been created successfully.");
    }

    public function edit($id){
        $adminevent = Adminevent::find($id);
        return view('backend.events.edit', compact('adminevent'));
    }

    public function update(Request $request, $id){
        $request->validate(
            [
            'title' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'startdate.required' => 'Field is required.',
                'enddate.required' => 'Field is required.',
                'starttime.required' => 'Field is required.',
                'endtime.required' => 'Field is required.',
                'image.required' => 'Error with format or size.',
            ]
        );

        $startdate = date("Y-m-d", strtotime($request->startdate));  
        $enddate = date("Y-m-d", strtotime($request->enddate));  

        $adminevent = Adminevent::find($id);
        if($request->hasFile('image')) { 
            $adminevent->title = $request->title;
            $adminevent->description = $request->description;
            $adminevent->startdate = $startdate;
            $adminevent->enddate = $enddate;
            $adminevent->starttime = $request->starttime;
            $adminevent->endtime = $request->endtime;
            $adminevent->venue = $request->venue;
            $adminevent->buttonlink = $request->buttonlink;
            $adminevent->buttontext = $request->buttontext;
            $adminevent->price = $request->price;
            $adminevent->status = $request->status;
            $adminevent->type = $request->type;
            $adminevent->image = $request->finalImageValue;
            $adminevent->save();
        }
        else{
            $adminevent->title = $request->title;
            $adminevent->description = $request->description;
            $adminevent->startdate = $startdate;
            $adminevent->enddate = $enddate ;
            $adminevent->starttime = $request->starttime;
            $adminevent->endtime = $request->endtime;
            $adminevent->venue = $request->venue;
            $adminevent->buttonlink = $request->buttonlink;
            $adminevent->buttontext = $request->buttontext;
            $adminevent->price = $request->price;
            $adminevent->status = $request->status;
            $adminevent->type = $request->type;
            $adminevent->save();
        }

        return redirect()->route('admin.dashboard.events')->with("message", "Event has been updated successfully.");
    }

    public function destroy($id){
        $event = Adminevent::find($id);
        $event->delete();
        return redirect()->back()->with("message", "Event removed successfully");
    }


    public function bookedeventview($id){
        $event =  Bookedevent::find($id);
        return view('backend.events.bookedeventshow', compact('event'));
    }

    public function destroyEvent($id){
        $event = Bookedevent::find($id);
        $event->delete();
        return redirect()->back()->with('message', 'Event has been deleted successfully.');
    }

    public function exportEvents(){
        return Excel::download(new ExportEvent, 'events.xlsx');
    }


    public function eventapprove($id){
        DB::table('adminevents')
            ->where('id', $id)
            ->update(['status' => "Published"]);
        return redirect()->back()->with("message","Event published successfully.");
    }




}
