<?php

namespace App\Http\Controllers;

use App\Models\Adminsubscription;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Usersubscription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
class AdminsubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$users = DB::table('users')->where('type', '0')->where("subscription","!=", "")->orWhere("from_leads", "")->get();
        //return view('backend.subscribers.index', compact('users'));
        
        $query = User::query();
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
        
        $users = $query->where('type', '0')->where("subscription","!=", "")->orWhere("from_leads", "")->get();
        return response()->view('backend.subscribers.index',compact('users','dateFilter'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminsubscriptions = Adminsubscription::all();
        return view('backend.subscribers.create', compact('adminsubscriptions'));
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
                'name' => 'required',
                'phone' => 'required|numeric',
                'email' => 'unique:users|required|email',
                'password' => 'required',
            ],
            [
                'name.required' => 'Field is required.',
                'email.unique' => 'The email has already been taken. Try a different email.',
                'phone.required' => 'Field is required.',
                'phone.numeric' => 'Field only accept numbers.',
                'password' => 'Field is required.',
            ]
        );
        
        
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        
        $adminsubscriber = new User();
        $adminsubscriber->name = $request->name;
        $adminsubscriber->lastname = $request->lastname;
        $adminsubscriber->phone = $request->phone;
        $adminsubscriber->email = $request->email;
        $adminsubscriber->subscription = $request->subscription;
        $adminsubscriber->subscription_id = $request->subscription_id;
        $adminsubscriber->password = Hash::make($request->password);
        $adminsubscriber->type = 0;
        $adminsubscriber->is_trainer  = 0;
        $adminsubscriber->createdby = "admin";
        $adminsubscriber->save();

        $usersubscription = new Usersubscription();
        $usersubscription->title = $request->subscription;
        $usersubscription->price = $request->subscription_price;
        $usersubscription->interval = $request->interval;
        $usersubscription->userid = $adminsubscriber->id;
        $usersubscription->save();
        $usersubscription->users()->sync(auth()->user()->id);
        
        if($usersubscription->save()){
            $dataNew = array(
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password, 
            );
            Mail::send('backend.mails.adminCreateSubscriberEmail', $dataNew, function ($message) use ($request){
                $to_email = $request->email;
                $to_name  = "Summer Healing - Registration successful";
                $subject  = "Thank you for registering with us.";
                $message->subject ($subject);
                $message->from ($request->email, "Summer Healing - Registration successful");
                $message->to ($to_email, $to_name);
            });
        }

        return redirect()->route('admin.dashboard.subscribers')->with('message','Subscriber has been created successfully.');
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
        $user = User::find($id);
        $adminsubscriptions = Adminsubscription::all();
        
        if(isset($_GET['page'])){
            $pageParam = $_GET['page'];
        }
        else{
            $pageParam="";
        }
        //dd($pageParam);
        return view('backend.subscribers.edit', compact('user', 'adminsubscriptions', 'pageParam'));
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
                'name' => 'required',
                'email' => 'required',
            ],
            [
                'name.required' => 'Field is required.',
                'email.required' => 'Field is required.',
            ]
        );
        
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        
        $adminsubscriber = User::find($id);
        //dd($adminsubscriber->password);
        $passwordOld = $adminsubscriber->password;
        $adminsubscriber->name = $request->name;
        $adminsubscriber->lastname = $request->lastname;
        $adminsubscriber->phone = $request->phone;
        $adminsubscriber->email = $request->email;
        $adminsubscriber->subscription = $request->subscription;
        $adminsubscriber->subscription_id = $request->subscription_id;
        if($request->subscription_id_onselect != ""){ $adminsubscriber->subscription_id = $request->subscription_id_onselect;}
        //$adminsubscriber->password = $request->password == "" ? "" : Hash::make($request->password);
        if($request->password != ""){
            $adminsubscriber->password = Hash::make($request->password);
        }
        else{
            $adminsubscriber->password = $passwordOld;
        }
        $adminsubscriber->type = 0;
        $adminsubscriber->is_trainer  = 0;
        $adminsubscriber->createdby = "admin";


        $usersubscription = new Usersubscription();
        $usersubscription->title = $request->subscription;
        $usersubscription->price = $request->subscription_price;
        $usersubscription->interval = $request->interval;
        $usersubscription->userid = $request->userid;
        $usersubscription->save();
        $usersubscription->users()->sync(auth()->user()->id);
        
        
        
        if($request->pageParam == "leads"){
            
            $dataNew = array(
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password, 
            );
            Mail::send('backend.mails.adminCreateSubscriberEmail', $dataNew, function ($message) use ($request){
                $to_email = $request->email;
                $to_name  = "Summer Healing - Registration successful";
                $subject  = "Thank you for registering with us.";
                $message->subject ($subject);
                $message->from ($request->email, "Summer Healing - Registration successful");
                $message->to ($to_email, $to_name);
            });
            
        }






        $adminsubscriber->save();
        return redirect()->route('admin.dashboard.subscribers')->with('message','Subscriber has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminsubscriber = User::find($id);
        $adminsubscriber->delete();
        return redirect()->route('admin.dashboard.subscribers')->with('message','Subscriber has been deleted successfully.');
    }
}
