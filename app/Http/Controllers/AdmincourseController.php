<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admincourse;
use App\Models\Admincoursecat;
use App\Models\Adminschedule;
use App\Models\Adminsubscription;
use App\Models\Admintrainer;
use App\Models\Schedulebooking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AdmincourseController extends Controller
{

    public function index(Request $request)
    {
        
        $query = Admincourse::query();
        //dd($query);
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
        
        //$admincourses = Admincourse::orderBy('id', 'DESC')->get();
        $admincourses = $query->get();
        //return view('backend.courses.index', compact('admincourses','dateFilter'));
        return response()->view('backend.courses.index',compact('admincourses','dateFilter'));
    }


    public function create()
    {
        $adminsubscriptions = Adminsubscription::all();
        $admincoursecats = Admincoursecat::all();
        $admintrainers = Admintrainer::all();
        return view('backend.courses.create', compact('adminsubscriptions','admincoursecats', 'admintrainers'));
    }




    public function imageCropPost(Request $request)
    {
        $data = $request->featured_image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name = time() . '.png';
        $path = public_path() . "/backend/images/courses_images/" . $image_name;
        

        file_put_contents($path, $data);

        return response()->json(['status' => 1, 'message' => "Image uploaded successfully", 'image' => $image_name]);
    }


    public function store(Request $request)
    {
        //dd($request);
        $request->validate(
            [
            'title' => 'unique:admincourses|required|max:150',
            'embed_url' => 'required',
            'price' => 'required|numeric',
            'course_category' => 'required',
            'subscription' => 'required',
            'embed_url' => 'required',
            //'scheduledate' => 'required',
            //'scheduletime' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'title.regex' => 'Field only accept text.',
                'price.required' => 'Field is required.',
                'price.numeric' => 'Field is only accepts numbers.',
                'title.unique' => 'The page title has already been taken. Try a different title or check the trash page for existing page.',
                'featured_image.required' => 'Error with format or size.',
                'subscription.required' => 'Field is required.',
                'course_category.required' => 'Field is required.',
                'embed_url.required' => 'Field is required.',
                //'scheduletime.required' => 'Field is required',
                //'scheduledate.required' => 'Field is required',
            ]
        );
        
        // if($request->scheduledate == null && $request->coursetype=="ondemand"){
        //     $request->validate(
        //         [
        //             'scheduledate' => 'required',
        //         ],
        //         [
        //             'scheduledate.required' => 'Field is required.',
        //         ]
        //     );
        // }
        
        // if($request->scheduletime == null && $request->coursetype=="ondemand"){
        //     $request->validate(
        //         [
        //             'scheduletime' => 'required',
        //         ],
        //         [
        //             'scheduletime.required' => 'Field is required.',
        //         ]
        //     );
        // }

        if($request->subscription == null){
            $request->validate(
                [
                'subscription' => 'required',
                ],
                [
                    'subscription.required' => 'Field is required.',
                ]
            );
        }

        
        if($request->course_category == null || $request->course_category === ""){
            $request->validate(
                [
                    'course_category' => 'required',
                ],
                [
                    'course_category.required' => 'Field is required.',
                ]
            );
        }
        
        $admincourse = new Admincourse();
        if($request->hasFile('featured_image')) { 
            //$imageName = time().'.'.$request->featured_image->extension();  
            //$request->featured_image->move(public_path('backend/images/courses_images'), $imageName);
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title)."-".rand(100,900);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            $admincourse->course_category = $request->course_category;
            //$admincourse->subscription = $request->subscription;
            $subscription_list = $request->subscription;
            $subscriptions = implode(',',$subscription_list);
            $admincourse->subscription = $subscriptions;
            if($request->trainers){
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $admincourse->trainers = $trainers;
            }
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            // if($request->coursetype == "ondemand"){
            // $admincourse->scheduledate = $request->scheduledate;
            // $admincourse->scheduletime = $request->scheduletime;
            // }
            $admincourse->coursetype = $request->coursetype;
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->featured_image = $request->finalImageValue;
            $admincourse->save();
            $admincourse->adminsubscriptions()->attach($request->subscription);
            $admincourse->admincoursecats()->sync($request->course_category);
            $admincourse->admincoursetrainers()->sync($request->trainers);
        }
        else{
            $imageName = 'common_banner.jpg';
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            $admincourse->course_category = $request->course_category;
            //$admincourse->subscription = $request->subscription;
            
            $subscription_list = $request->subscription;
            $subscriptions = implode(',',$subscription_list);
            $admincourse->subscription = $subscriptions;
            
            
            if($request->trainers){
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $admincourse->trainers = $trainers;
            }
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            // if($request->coursetype == "ondemand"){
            // $admincourse->scheduledate = $request->scheduledate;
            // $admincourse->scheduletime = $request->scheduletime;
            // }
            $admincourse->coursetype = $request->coursetype;
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->featured_image = $imageName;
            $admincourse->save();
            $admincourse->adminsubscriptions()->sync($request->subscription);
            $admincourse->admincoursecats()->sync($request->course_category);
            $admincourse->admincoursetrainers()->sync($request->trainers);
        }
        return redirect()->route('admin.dashboard.courses')->with('message','Course has been created successfully.');
    }



   
    // public function show($id)
    // {
    //     //
    // }

    public function edit($id)
    {
        $admincourse = Admincourse::find($id);
        $adminsubscriptions = Adminsubscription::all();
        $admincoursecats = Admincoursecat::all();
        $admintrainers = Admintrainer::all();
        return view('backend.courses.edit', compact('admincourse', 'adminsubscriptions', 'admincoursecats', 'admintrainers'));
    }

 
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|max:150',
                'embed_url' => 'required',
                'price' => 'required|numeric',
                'course_category' => 'required',
                'subscription' => 'required',
                //'scheduledate' => 'required',
                //'scheduletime' => 'required',
                'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'title.regex' => 'Field only accept text.',
                'price.required' => 'Field is required.',
                'price.numeric' => 'Field is only accepts numbers.',
                'featured_image.required' => 'Error with format or size.',
                'subscription.required' => 'Field is required.',
                'course_category.required' => 'Field is required.',
                'embed_url.required' => 'Field is required.',
                //'scheduletime.required' => 'Field is required',
                //'scheduledate.required' => 'Field is required',
            ]
        );
        
        $admincourse = Admincourse::find($id);
        if($request->hasFile('featured_image')) {
            //$imageName = time().'.'.$request->featured_image->extension();  
            //$request->featured_image->move(public_path('backend/images/courses_images'), $imageName);
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            $admincourse->course_category = $request->course_category;
            //$admincourse->subscription = $request->subscription;
            $subscription_list = $request->subscription;
            $subscriptions = implode(',',$subscription_list);
            $admincourse->subscription = $subscriptions;
            if($request->trainers){
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $admincourse->trainers = $trainers;
            }
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            $admincourse->coursetype = $request->coursetype;
            // if($request->coursetype == "ondemand"){
            // $admincourse->scheduledate = $request->scheduledate;
            // $admincourse->scheduletime = $request->scheduletime;
            // }
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->featured_image = $request->finalImageValue;
            $admincourse->save();
            $admincourse->adminsubscriptions()->sync($request->subscription);
            $admincourse->admincoursecats()->sync($request->course_category);
            $admincourse->admincoursetrainers()->sync($request->trainers);
        }
        else{
            $admincourse->title = $request->title;
            $admincourse->slug = Str::slug($request->title);
            $admincourse->description = $request->description;
            $admincourse->excerpt = $request->excerpt;
            $admincourse->course_category = $request->course_category;
            //$admincourse->subscription = $request->subscription;
            $subscription_list = $request->subscription;
            $subscriptions = implode(',',$subscription_list);
            $admincourse->subscription = $subscriptions;
            if($request->trainers){
            $trainers_list = $request->trainers;
            $trainers = implode(',',$trainers_list);
            $admincourse->trainers = $trainers;
            }
            $admincourse->price = $request->price;
            $admincourse->level = $request->level;
            $admincourse->coursetype = $request->coursetype;
            // if($request->coursetype == "ondemand"){
            // $admincourse->scheduledate = $request->scheduledate;
            // $admincourse->scheduletime = $request->scheduletime;
            // }
            $admincourse->status = $request->status;
            $admincourse->embed_url = $request->embed_url;
            $admincourse->save();
            $admincourse->adminsubscriptions()->sync($request->subscription);
            $admincourse->admincoursecats()->sync($request->course_category);
            $admincourse->admincoursetrainers()->sync($request->trainers);
        }




        if($admincourse->save()){
            $schedule = Adminschedule::where('courseid', $admincourse->id)->update(['title'=>$request->title]);
        }


        return redirect()->route('admin.dashboard.courses')->with('message','Course has been updated successfully.');
    }

  
    public function destroy($id)
    {
        $admincourse = Admincourse::find($id);
        //dd($admincourse);
        $adminsubscription = Adminsubscription::findOrFail($admincourse->subscription);
        $admincoursecategory = Adminsubscription::findOrFail($admincourse->course_category);
        $admincourse->delete();
        $admincourse->adminsubscriptions()->detach($adminsubscription);
        $admincourse->admincoursecats()->detach($admincoursecategory);
        return redirect()->route('admin.dashboard.courses')->with('message','Course has been deleted successfully.');
    }

    public function view($id){
        $course = Admincourse::find($id);
        return response()->json(["course"=> $course, "status" => 200]);
    }

    public function deleteAll(Request $request){
        $ids = $request->ids;
        //$admincourse = Admincourse::find($id);
        //$adminsubscription = Adminsubscription::findOrFail($admincourse->subscription);
        //$admincoursecategory = Adminsubscription::findOrFail($admincourse->course_category);
        DB::table("admincourses")->whereIn('id',explode(",",$ids))->delete();
        //$admincourse->adminsubscriptions()->detach($adminsubscription);
        //$admincourse->admincoursecats()->detach($admincoursecategory);
        return response()->json(['success'=>"Courses Deleted successfully."]);

    }



}
