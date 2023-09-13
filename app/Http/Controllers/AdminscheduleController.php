<?php

namespace App\Http\Controllers;

use App\Models\Admincourse;
use App\Models\Adminschedule;
use App\Models\Adminschedulecat;
use App\Models\Admintrainer;
use App\Models\Schedulebooking;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminscheduleController extends Controller
{
    public function index(){
        $schedules = Adminschedule::all();
        return view('backend.schedule.index', compact('schedules'));
    }

    public function create(){
        $adminschedulecats = Adminschedulecat::all();
        return view('backend.schedule.create');
    }


    public function imageCropPost(Request $request){
        $data = $request->featured_image;
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $image_name = time() . '.png';
        $path = public_path() . "/backend/images/schedules_images/" . $image_name;
        file_put_contents($path, $data);
        return response()->json(['status' => 1, 'message' => "Image uploaded successfully", 'image' => $image_name]);
    }


    public function store(Request $request)
    {
        //dd($request);
        $request->validate(
            [
            'title' => 'unique:adminschedules|required',
            'embed_url' => 'required',
            'price' => 'required',
            //'scheduledate' => 'required',
            //'scheduletime' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'title.unique' => 'The page title has already been taken. Try a different title or check the trash page for existing page.',
                'featured_image.required' => 'Error with format or size.',
                //'scheduletime.required' => 'Field is required',
                //'scheduledate.required' => 'Field is required',
            ]
        );
        
        $admincourse = new Adminschedule();
        if($request->hasFile('featured_image')) { 
            //$imageName = time().'.'.$request->featured_image->extension();  
            //$request->featured_image->move(public_path('backend/images/courses_images'), $imageName);
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            //$admincourse->schedule_category = $request->schedule_category;
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            $admincourse->scheduledate = $request->scheduledate;
            $admincourse->scheduletime = $request->scheduletime;
            $admincourse->scheduledminutes = $request->scheduledminutes;
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->featured_image = $request->finalImageValue;
            $admincourse->save();
            //$admincourse->adminsubscriptions()->attach($request->subscription);
            //$admincourse->admincoursecats()->sync($request->course_category);
        }
        else{
            $imageName = 'common_banner.jpg';
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            //$admincourse->schedule_category = $request->schedule_category;
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            $admincourse->scheduledate = $request->scheduledate;
            $admincourse->scheduletime = $request->scheduletime;
            $admincourse->scheduledminutes = $request->scheduledminutes;
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->featured_image = $imageName;
            $admincourse->save();
            //$admincourse->adminsubscriptions()->sync($request->subscription);
            //$admincourse->admincoursecats()->sync($request->course_category);
        }
        return redirect()->route('admin.dashboard.schedule.index')->with('message','Schedule has been created successfully.');
    }


    public function edit($id){
        $schedule = Adminschedule::find($id);
        return view('backend.schedule.edit', compact('schedule'));
    }


    public function update(Request $request, $id) {
        $request->validate(
            [
            'title' => 'required',
            'embed_url' => 'required',
            'price' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'featured_image.required' => 'Error with format or size.',
            ]
        );
        
        $admincourse = Adminschedule::find($id);
        if($request->hasFile('featured_image')) { 
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            //$admincourse->schedule_category = $request->schedule_category;
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            $admincourse->scheduledate = $request->scheduledate;
            $admincourse->scheduletime = $request->scheduletime;
            $admincourse->scheduledminutes = $request->scheduledminutes;
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->featured_image = $request->finalImageValue;
            $admincourse->save();
            //$admincourse->adminsubscriptions()->attach($request->subscription);
            //$admincourse->admincoursecats()->sync($request->course_category);
        }
        else{
            $imageName = 'common_banner.jpg';
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            //$admincourse->schedule_category = $request->schedule_category;
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            $admincourse->scheduledate = $request->scheduledate;
            $admincourse->scheduletime = $request->scheduletime;
            $admincourse->scheduledminutes = $request->scheduledminutes;
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->featured_image = $imageName;
            $admincourse->save();
            //$admincourse->adminsubscriptions()->sync($request->subscription);
            //$admincourse->admincoursecats()->sync($request->course_category);
        }
        return redirect()->route('admin.dashboard.schedule.index')->with('message','Schedule has been updated successfully.');
    }


    public function show($id){
        $schedule = Schedulebooking::find($id);
        return view('backend.schedule.show', compact('schedule'));
    }


    public function destroy($id){
        $adminschedulecat = Adminschedulecat::find($id);
        $adminschedulecat->delete();
        return redirect()->back()->with('message','Schedule item deleted successfully');
    }


    //ALL BOOKINGZ
    // public function allbookings(){
    //     $schedulebookings = Adminschedule::where('status', 'success')->orderby('id','desc')->get();
    //     return view('backend.schedule.allbookings', compact('schedulebookings'));
    // }




    // NEW SCHEDULES
    public function scheduleindex(){
        return view('backend.schedulez.index');
    }
    
    public function schedulenewCourse(){
        $courses =  Admincourse::where('status', "Published")->orderby('id', "desc")->get();
        return view('backend.schedulez.newCourse', compact('courses'));
    }


    public function scheduleStore(Request $request){
        //dd($request);
        //if($request->course == null){
            $request->validate([
                'course' => 'required',
                'scheduledate' => 'required',
                'scheduletime' => 'required',
                //'scheduletimeend' => 'required',
            ]);
        //}
        $schedule = new Adminschedule();
        $schedule->title = $request->course;
        $schedule->slug = $request->slug;
        $schedule->scheduledate = $request->scheduledate;
        $schedule->scheduledateend = $request->scheduledate;
        $schedule->scheduletime = date('h:i A', strtotime("$request->scheduletime"));
        $schedule->scheduletimeend = date('h:i A', strtotime("$request->scheduletimeend"));
        $schedule->courseid = $request->courseid;
        $schedule->status = "Published";
        $schedule->start = date('Y-m-d h:i', strtotime("$request->scheduledate $schedule->scheduletime"));
        $schedule->end = date('Y-m-d H', strtotime("$request->scheduledate"));
        
        //dd(date('Y-m-d h:i', strtotime("$request->scheduledate $schedule->scheduletime")));


        $schedule->name = $request->course;
        $schedule->type = "event";
        
        
        $starttime = date("g:ia", strtotime($request->scheduletime));
        $endtime = date("g:ia", strtotime($request->scheduletimeend));
        //dd($endtime);
        $start = Carbon::parse($starttime);
        $end = Carbon::parse($endtime); 
    
        //$total = $end->diffInHours($start);
        
        if($end->diffInHours($start) == 0){
            $total = $end->diffInMinutes($start);
        }
        else{
            $total = $end->diffInHours($start);
        }
        
        //dd($end->diffInMinutes($start));
        $schedule->totalduration = $total;
        if($request->scheduletype == "singleschedule"){
            $schedule->schedule_type = "single";
            $schedule->date = json_encode($request->scheduledate);
        }
        $schedule->save();
        $schedule->courses()->attach($request->courseid);
        return redirect()->route('admin.dashboard.schedule.allschedules')->with('message','Schedule added successfully');
    }



    public function allschedules(Request $request) {
        //$schedulez = Adminschedule::orderby('id','desc')->paginate(30);
        //return view('backend.schedulez.schedules', compact('schedulez'));
        
        $query = Adminschedule::query();
        $dateFilter = $request->date_filter;
        
        switch($dateFilter){
            case 'today':
                $query->whereDate('created_at',Carbon::today());
                break;
            case 'yesterday':
                $query->wheredate('created_at',Carbon::yesterday());
                break;
            case 'this_week':
                $query->whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()]);
                break;
            case 'last_week':
                $query->whereBetween('created_at',[Carbon::now()->subWeek(),Carbon::now()]);
                break;
            case 'this_month':
                $query->whereMonth('created_at',Carbon::now()->month);
                break;
            case 'last_month':
                $query->whereMonth('created_at',Carbon::now()->subMonth()->month);
                break;
            case 'last3_month':
                //$query->whereMonth('created_at',Carbon::now()->subMonth(3)->month);
                $query->whereBetween('created_at',[Carbon::now()->subMonth(3),Carbon::now()]);
                break;
            case 'this_year':
                $query->whereYear('created_at',Carbon::now()->year);
                break;
            case 'last_year':
                $query->whereYear('created_at',Carbon::now()->subYear()->year);
                break;                       
        }
        
        $schedulez = $query->paginate(30);
        return response()->view('backend.schedulez.schedules',compact('schedulez','dateFilter'));
        
    }

    public function editCoursechedule($id){
        $courses =  Admincourse::where('status', "Published")->orderby('id', "desc")->get();
        $schedule = Adminschedule::find($id);
        return view('backend.schedulez.editCourseSchedule', compact('courses','schedule'));
    }


    public function scheduleUpdate($id, Request $request){
        $request->validate([
            'course' => 'required',
            'scheduledate' => 'required',
            'scheduletime' => 'required',
            'scheduletimeend' => 'required',
        ]);

        $schedule = Adminschedule::find($id);
        $schedule->title = $request->course;
        $schedule->scheduledate = $request->scheduledate;
        $schedule->scheduledateend = $request->scheduledate;
        $schedule->scheduletime = date('h:i A', strtotime("$request->scheduletime"));
        $schedule->scheduletimeend = date('h:i A', strtotime("$request->scheduletimeend"));
        $schedule->courseid = $request->courseid;
        $schedule->status = "Published";
        $schedule->start = date('Y-m-d h:i', strtotime("$request->scheduledate $schedule->scheduletime"));
        $schedule->end = date('Y-m-d H', strtotime("$request->scheduledate"));

        $schedule->name = $request->course;
        $schedule->type = "event";

        $starttime = date("g:ia", strtotime($request->scheduletime));
        $endtime = date("g:ia", strtotime($request->scheduletimeend));
        //dd($endtime);
        $start = Carbon::parse($starttime);
        $end = Carbon::parse($endtime);        
        //$total = $end->diffInHours($start);
        
        if($end->diffInHours($start) == 0){
            $total = $end->diffInMinutes($start);
        }
        else{
            $total = $end->diffInHours($start);
        }
        
        //dd($total);
        $schedule->totalduration = $total;
        if($request->scheduletype == "singleschedule"){
            $schedule->schedule_type = "single";
            $schedule->date = json_encode($request->scheduledate);
        }
        $schedule->save();
        $schedule->courses()->sync($request->courseid);
        return redirect()->route('admin.dashboard.schedule.allschedules')->with('message','Schedule updated successfully');
    }


    public function scheduleview($id){
        $scheduleitem =  Adminschedule::find($id);
        return view('backend.schedulez.viewCourseSchedule', compact('scheduleitem'));
    }

    public function scheduledelete($id){
        $scheduleitem =  Adminschedule::find($id);
        $scheduleitem->delete();
        return redirect()->route('admin.dashboard.schedule.allschedules')->with('message','Schedule deleted successfully');
    }


    public function scheduleRecurringnewCourse(){
        $courses =  Admincourse::where('status', "Published")->orderby('id', "desc")->get();
        $admintrainers = Admintrainer::all();
        return view('backend.schedulez.newRecurringCourse',compact('courses','admintrainers'));
    }







    public function storeRecurring(Request $request){
            $request->validate([
                'course' => 'required',
                'scheduledate' => 'required',
                'scheduletime' => 'required',
            ]);

        $schedule = new Adminschedule();
        $schedule->title = $request->course;
        $schedule->slug = $request->slug;
        $schedule->scheduledate = $request->scheduledate;
        $schedule->scheduletime = $request->scheduletime;
        $schedule->courseid = $request->courseid;
        $schedule->status = "Published";
        $endtime = "09:00:00";
        $schedule->start = date('Y-m-d H:i:s', strtotime("$request->scheduledate $request->scheduletime"));
        $schedule->end = date('Y-m-d H:i:s', strtotime("$request->scheduledateend $endtime"));
        $schedule->name = $request->course;
        $schedule->type = "recurring";
        $schedule->totalduration = $request->duration;

        if($request->scheduletype == "recurringschedule"){
            $schedule->schedule_type = "recurring";
        }
        //GET ALL DATES BASED ON SELECTED DAYS
            $fromDate = new Carbon($request->scheduledate);
            $toDate = new Carbon($request->scheduledateend);
            $dates1 = [];
            $arrayDates = array_push($dates1, $request->scheduledate,$request->scheduledateend);
            $explodeDates = (object)explode(",",$arrayDates);
            if($request->scheduledateend == ""){
                $schedule->date = $request->scheduledate;
            }
            else{
                  
            }

        $schedule->scheduledateend = $request->scheduledateend;
        if($request->scheduledays != ""){
            $schedule->groupId = rand(10000,99999);
            $schedule->daysOfWeek = json_encode($request->scheduledays);
            $schedule->days = json_encode($request->dataday);
            $schedule->startRecur = date('Y-m-d H:i:s', strtotime("$request->scheduledate $request->scheduletime"));
            $schedule->endRecur = date('Y-m-d H:i:s', strtotime("$request->scheduledateend $endtime"));

            $fridays = [];
            $d = explode(",",$request->dataday);
            //dd($d);
            foreach ($d as $date) {
                $startDate = Carbon::parse($request->scheduledate)->modify('this '. $date); 
                //dd($date);
                $endDate = Carbon::parse($request->scheduledateend);
                for ($date = $startDate; $date->lte($endDate); $date->addWeek()) {
                    $fridays[] = $date->format('Y-m-d');
                }
            }
            $schedule->date = json_encode($fridays);
        }


        $schedule->save();
        $schedule->courses()->attach($request->courseid);
        return redirect()->route('admin.dashboard.schedule.allschedules')->with('message','Schedule added successfully');

    }


    public function editRecurring($id){
        $courses =  Admincourse::where('status', "Published")->orderby('id', "desc")->get();
        $schedule = Adminschedule::find($id);
        return view('backend.schedulez.editRecurringCourse', compact('courses','schedule'));
    }

    public function updateRecurring($id, Request $request){
        $request->validate([
            'course' => 'required',
            'scheduledate' => 'required',
            'scheduletime' => 'required',
            //'scheduletimeend' => 'required',
        ]);

        //dd($request);

        $schedule = Adminschedule::find($id);
        $schedule->title = $request->course;
        $schedule->scheduledate = $request->scheduledate;
        $schedule->scheduletime = $request->scheduletime;
        $schedule->courseid = $request->courseid;
        $schedule->status = "Published";
        $endtime = "09:00:00";
        $schedule->start = date('Y-m-d H:i:s', strtotime("$request->scheduledate $request->scheduletime"));
        $schedule->end = date('Y-m-d H:i:s', strtotime("$request->scheduledateend $endtime"));
        $schedule->name = $request->course;
        $schedule->type = "recurring";
        $schedule->totalduration = $request->duration;

        if($request->scheduletype == "recurringschedule"){
            $schedule->schedule_type = "recurring";
        }
        //GET ALL DATES BASED ON SELECTED DAYS
            $fromDate = new Carbon($request->scheduledate);
            $toDate = new Carbon($request->scheduledateend);
            $dates1 = [];
            $arrayDates = array_push($dates1, $request->scheduledate,$request->scheduledateend);
            $explodeDates = (object)explode(",",$arrayDates);
            if($request->scheduledateend == ""){
                $schedule->date = $request->scheduledate;
            }
            else{
                  
            }

            $schedule->scheduledateend = $request->scheduledateend;
            if($request->scheduledays != ""){
                $schedule->groupId = rand(10000,99999);
                $schedule->daysOfWeek = json_encode($request->scheduledays);
                $schedule->days = json_encode($request->dataday);
                $schedule->startRecur = date('Y-m-d H:i:s', strtotime("$request->scheduledate $request->scheduletime"));
                $schedule->endRecur = date('Y-m-d H:i:s', strtotime("$request->scheduledateend $endtime"));


                $fridays = [];
                
                $d = explode(",",$request->dataday);
                
                //dd($d);
                foreach ($d as $date) {
                    
                    $str = str_replace("\"", "", $date);
                    $startDate = Carbon::parse($request->scheduledate)->modify('this '. $str); 
                    //dd($str);
                    $endDate = Carbon::parse($request->scheduledateend);
                    for ($date = $startDate; $date->lte($endDate); $date->addWeek()) {
                        $fridays[] = $date->format('Y-m-d');
                    }
                }
                $schedule->date = json_encode($fridays);
            }

        $schedule->save();
        $schedule->courses()->sync($request->courseid);
        return redirect()->route('admin.dashboard.schedule.allschedules')->with('message','Schedule updated successfully');
    }











}
