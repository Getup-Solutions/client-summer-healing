<?php

namespace App\Http\Controllers;

use App\Mail\EventcreationAdminMail;
use App\Mail\EventcreationUserMail;
use App\Mail\EventeditAdminMail;
use App\Models\Admincourse;
use App\Models\Adminevent;
use App\Models\Adminondemand;
use App\Models\Adminsubscription;
use App\Models\Order;
use App\Models\User;
use App\Models\Usersubscription;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserdashboardController extends Controller
{
    public function myaccount()
    {
        $user = auth()->user();
        $subscriptionID = $user->subscription_id;
        $subscription = Adminsubscription::where('id', '=', $subscriptionID)->first();
        $date = Carbon::today()->addYears(2);

       

        //dd(Carbon::now()->timestamp);
        return view("frontend.user.myaccount", compact('subscription'));
    }

    public function userlogout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/login');
    }

    public function myaccountcoursedetails($id)
    {
        $course_single = Admincourse::find($id);
        $orders = Order::where('useremail', auth()->user()->email)->where('courseid', '!=', $id)->get();
        //dd($orders);
        return view("frontend.user.course-detail", compact('course_single','orders'));
    }

    public function myaccountondemanddetails($id)
    {
        $ondemand_single = Adminondemand::find($id);
        $orders = Order::where('useremail', auth()->user()->email)->where('ondemandid', '!=', $id)->get();
        //dd($orders);
        return view("frontend.user.ondemand-detail", compact('ondemand_single','orders'));
    }


    public function userprofile($id) 
    {
        $user = User::find($id);
        return view("frontend.user.profile", compact('user'));
    }

    public function transactions()
    {
        
        return view("frontend.user.transactions");
    }

    public function userprofileupdate(Request $request, $id)
    {
        //return $id;
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ]);
        //dd($request);
        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->useraddress = $request->useraddress;
        $user->userstate = $request->userstate;
        $user->usercity = $request->usercity;
        $user->usercountry = $request->usercountry;
        $user->userpostcode = $request->userpostcode;
        $user->save();
        return redirect()->route('user.myaccount.userprofile', $id)->with('message','User profile has been updated.');
    }


    public function userprofilepasswordpage($id){
        //return "test";
        $user = User::find($id);
        return view("frontend.user.passwordchange",compact('user'))->with('message','User password has been updated.');
    }


    public function userprofilepasswordupdate(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

   
        $user = User::find(auth()->user()->id);
        $user->update(['password'=> Hash::make($request->new_password)]);
        Auth::login($user);
        return redirect()->route('user.myaccount.userprofile', $id)->with('message','User password has been changed.');
    }


    public function userlogoutFun(Request $request) {
        Auth::logout();
        return redirect('/login');
    }


    public function usersubscriptioncancel($id){

        $sub = Usersubscription::findOrFail($id);

        $usersubscriptionid = User::findOrFail(auth()->user()->id);
        //dd($usersubscriptionid);
        $sub->users()->detach($usersubscriptionid);


        //$stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $get_subscription = Usersubscription::find($id);

        $transaction_id = $get_subscription->transaction_id;
        //dd($activeone);
            
        $subscription = \Stripe\Subscription::retrieve($transaction_id);
        $subscription->cancel();

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $curr_status = $stripe->subscriptions->retrieve(
            $transaction_id,
            []
        );

        //dd($curr_status->status);
        Usersubscription::where('transaction_id', '=', $transaction_id)->update(['status'=>'inactive', 'subscription_status' => $curr_status->status]);

        User::where('id', '=', auth()->user()->id)->update(['subscription_status' => $curr_status->status]);

        return redirect()->route('user.myaccount')->with('message', 'Subscription cancelled successfully.');
    }



    public function myevents(){
        return view('frontend.user.my-events');
    }
    public function createevent(){
        return view('frontend.user.create-event');
    }


    public function eventstore(Request $request){

        //dd($request);
        $request->validate(
            [
            'title' => 'unique:adminevents|required',
            'venue' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'price' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'venue.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'startdate.required' => 'Field is required.',
                'enddate.required' => 'Field is required.',
                'starttime.required' => 'Field is required.',
                'endtime.required' => 'Field is required.',
                //'image.required' => 'Error with format or size.',
            ]
        );

        $adminevent = new Adminevent();

        $startdate = date("Y-m-d", strtotime($request->startdate));  
        $enddate = date("Y-m-d", strtotime($request->enddate));  
        // $starttime = date("H:i A", strtotime($request->starttime));  
        // $endtime = date("H:i A", strtotime($request->endtime));  
        if($request->hasFile('image')) { 
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('backend/images/events_images'), $imageName);
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
            $adminevent->usertype = $request->usertype;
            $adminevent->username = $request->username;
            $adminevent->useremail = $request->useremail;
            $adminevent->userid = $request->userid;
            $adminevent->user_id = $request->user_id;
            $adminevent->image = $imageName;
            $adminevent->save();

            $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
            $adminemail = $adminemailData[0];

            if($adminevent->save()){
                $details = [
                    'username' => $request->username,
                    'useremail' => $request->useremail,
                    'title' => $request->title,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'starttime' => $request->starttime,
                    'endtime' => $request->endtime,
                    'price' => $request->price,
                    'venue' => $request->venue,
                ];
        
                Mail::to("krishnadas@getupsolutions.com.au")->send(new EventcreationUserMail($details));
                Mail::to($adminemail)->send(new EventcreationAdminMail($details));
           }


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
            $adminevent->usertype = $request->usertype;
            $adminevent->username = $request->username;
            $adminevent->useremail = $request->useremail;
            $adminevent->userid = $request->userid;
            $adminevent->user_id = $request->user_id;
            $adminevent->image = $imageName;
            $adminevent->save();

            $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
            $adminemail = $adminemailData[0];
            if($adminevent->save()){
                $details = [
                    'username' => $request->username,
                    'useremail' => $request->useremail,
                    'title' => $request->title,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'starttime' => $request->starttime,
                    'endtime' => $request->endtime,
                    'price' => $request->price,
                    'venue' => $request->venue,
                ];
        
                Mail::to("krishnadas@getupsolutions.com.au")->send(new EventcreationUserMail($details));
                Mail::to($adminemail)->send(new EventcreationAdminMail($details));
           }

        }

        return redirect()->route('user.myevents')->with("message", "Event has been created successfully.");
    }


    public function editevent($id, Request $request){
        $event = Adminevent::find($id);
        return view('frontend.user.edit-event', compact('event'));
    }

    public function updateevent($id,Request $request){
        $request->validate(
            [
            'title' => 'required',
            'venue' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'price' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'venue.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'startdate.required' => 'Field is required.',
                'enddate.required' => 'Field is required.',
                'starttime.required' => 'Field is required.',
                'endtime.required' => 'Field is required.',
                //'image.required' => 'Error with format or size.',
            ]
        );

        $adminevent = Adminevent::find($id);

        $startdate = date("Y-m-d", strtotime($request->startdate));  
        $enddate = date("Y-m-d", strtotime($request->enddate));  
        // $starttime = date("H:i A", strtotime($request->starttime));  
        // $endtime = date("H:i A", strtotime($request->endtime));  
        if($request->hasFile('image')) { 
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('backend/images/events_images'), $imageName);
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
            $adminevent->usertype = $request->usertype;
            $adminevent->username = $request->username;
            $adminevent->useremail = $request->useremail;
            $adminevent->userid = $request->userid;
            $adminevent->user_id = $request->user_id;
            $adminevent->image = $imageName;
            $adminevent->save();
            $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
            $adminemail = $adminemailData[0];
            if($adminevent->save()){
                $details = [
                    'username' => $request->username,
                    'useremail' => $request->useremail,
                    'title' => $request->title,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'starttime' => $request->starttime,
                    'endtime' => $request->endtime,
                    'price' => $request->price,
                    'venue' => $request->venue,
                ];
        
                Mail::to($adminemail)->send(new EventeditAdminMail($details));
            }
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
            $adminevent->usertype = $request->usertype;
            $adminevent->username = $request->username;
            $adminevent->useremail = $request->useremail;
            $adminevent->userid = $request->userid;
            $adminevent->user_id = $request->user_id;
            $adminevent->save();
            $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
            $adminemail = $adminemailData[0];
            if($adminevent->save()){
                $details = [
                    'username' => $request->username,
                    'useremail' => $request->useremail,
                    'title' => $request->title,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'starttime' => $request->starttime,
                    'endtime' => $request->endtime,
                    'price' => $request->price,
                    'venue' => $request->venue,
                ];
        
                Mail::to($adminemail)->send(new EventeditAdminMail($details));
            }
        }

        return redirect()->route('user.myevents')->with("message", "Event has been updated successfully.");
    }


    public function eventdetails($id){
        $event = Adminevent::find($id);
        return view('frontend.user.event-details', compact('event'));
    }
   



}
