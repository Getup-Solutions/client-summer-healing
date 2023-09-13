<?php

namespace App\Http\Controllers;

use App\Mail\EventAdminMail;
use App\Mail\EventUserMail;
use App\Mail\registerMail;
use App\Mail\ScheduleAdminMail;
use App\Mail\ScheduleUserMail;
use App\Mail\SubscriptionAdminMail;
use App\Mail\SubscriptionMail;
use App\Mail\TrainingAdminMail;
use App\Mail\TrainingUserMail;
use App\Mail\wellnessMail;
use App\Models\Admincourse;
use App\Models\Adminevent;
use App\Models\Adminondemand;
use App\Models\Adminschedule;
use App\Models\Adminsubscription;
use App\Models\Admintraining;
use App\Models\Adminwellness;
use App\Models\Bookedevent;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Schedulebooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use App\Models\Usersubscription;
use Carbon\Carbon;
use Exception;
use Stripe;
use Hash;
use Illuminate\Support\Facades\DB;
use Stripe\Subscription;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        $subscriptions = Adminsubscription::all();
        $courses1 = Admincourse::where('coursetype','course')->where('status', 'Published')->get();
        $ondemands = Admincourse::where('coursetype','ondemand')->where('status', 'Published')->get();
        $trainings = Admintraining::where('status', 1)->get();
        //dd($trainings);
        $userActiveSubscription = '';
        $courseByUser = "";
        $usersubscriptions = "";
        $userAllCourses = "";
        $userActiveSubscriptionstatus = "";
        if(Auth::check()){
        $user = User::find(Auth()->user()->id);
        //$user = User::where('id', auth()->user()->id)->where('status');

        $courseByUser = $user->orders()->pluck('courseid')->toArray();
        $allCourses = [];
        foreach($courseByUser as $course) {
            //var_dump($course);
            if(strpos($course, ",") != false) {
                $allCourses = array_merge($allCourses, explode(',', $course));
            } else {
                $allCourses[] = $course;
            }
        }
        $userAllCourses = array_unique($allCourses);
  
        $userActiveSubscription = $user->subscription_id;
        $userActiveSubscriptionstatus = $user->subscription_status;
        //dd($userActiveSubscriptionstatus);
        $usersubscriptions = $user->usersubscription()->get();
        $subscriptionsByUser = $user->usersubscription()->get();

        }
        return view("frontend.pages.home", compact('subscriptions','courses1','courseByUser','ondemands','userActiveSubscription','usersubscriptions', 'userAllCourses', 'userActiveSubscriptionstatus','trainings'));
    }

    public function about()
    {
    
        //$adminemail = DB::table('admincontactsettings')->pluck('contact_email');
        //dd($adminemail[0]);
        return view("frontend.pages.about");
    }
    
    public function subscriptionplans()
    {
        $subscriptions = Adminsubscription::all();
        return view("frontend.pages.subscriptionplans", compact('subscriptions'));
    }

    public function yogacourses()
    {
        $courses = Admincourse::all();
        $coursesAll = Admincourse::where('status', 'Published')->orderby('id', 'desc')->get();
        $userActiveSubscription = '';
        $userActiveSubscriptionstatus = '';
        $usersubscriptions = '';
        $userAllCourses = '';
        $courseByUser = '';
        if(Auth::user()){
        $user = User::find(Auth()->user()->id);
        //$user = User::where('id', auth()->user()->id)->where('subscription_status', '=', 'active');
        
        $userActiveSubscription = $user->subscription_id;
        $userActiveSubscriptionstatus = $user->subscription_status;
        //$courseByUser = $user->orders()->pluck('courseid');
        //$courseByUser = $user->orders()->get();
        $usersubscriptions = $user->usersubscription()->get();

        $courseByUser = $user->orders()->pluck('courseid')->toArray();
        $allCourses = [];
        foreach($courseByUser as $course) {
            //var_dump($course);
            if(strpos($course, ",") != false) {
                $allCourses = array_merge($allCourses, explode(',', $course));
            } else {
                $allCourses[] = $course;
            }
        }
        $userAllCourses = array_unique($allCourses);


        }
        return view("frontend.pages.yogacourses", compact('usersubscriptions','courses','userActiveSubscription','coursesAll','courseByUser','userAllCourses','userActiveSubscriptionstatus'));
    }

    public function yogacoursedetailed($slug) {
        $course = Admincourse::where('slug', '=', $slug)->first();
        $courseByUser = "";
        if(Auth::user()){
        $user = User::find(Auth()->user()->id);
        $courseByUser = $user->orders()->get();
        //dd($courseByUser);
        }
        return view("frontend.pages.course-detailed", compact('course','courseByUser'));
    }

    public function yogaondemanddetailed($slug) {
        $ondemand = Adminondemand::where('slug', '=', $slug)->first();
        $ondemandByUser = "";
        if(Auth::user()){
        $user = User::find(Auth()->user()->id);
        $ondemandByUser = $user->orders()->get();
        //dd($ondemandByUser);
        }
        return view("frontend.pages.ondemand-detailed", compact('ondemand','ondemandByUser'));
    }
    
    public function trainings()
    {
        return view("frontend.pages.trainings");
    }
    
    public function contact()
    {
        return view("frontend.pages.contact");
    }

    public function checkout() 
    {
        return view('frontend.pages.checkout');
    }

    public function subscription($id) 
    {
        $subscription = Adminsubscription::find($id);
        return view('frontend.pages.subscription', compact('subscription'));
    }

    public function contactForm(Request $request) 
    {
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];

        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone, 
            'subjecttext'=>$request->subject, 
            'messagetext'=>$request->message
        );
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->source = "Contact page";
        $contact->save();
        if($contact->save()){
            
            
            
            // $validator = Validator::make($request->all(), [
            //     'email' => 'unique:users',
            // ]);
            
            // $validator = $request->validate(
            //     [
            //         'email' => 'unique:users',
            //     ],
            //     [
            //         'email.unique' => 'The email has already been taken. Try a different email.',
            //         //'email.unique' => response()->json(['message' => "The email has already been taken. Try a different email"]),
            //     ]
            // );
            
            
            // if($validator->fails()){
            //     return response()->json(['error' => "The email has already been taken. Try a different email"]);
            // }


            $user = User::where('email', '=', $request->email)->first();
            //dd($user);
            if ($user === null) {
                
                $password = Str::random(8);
                $dataNew = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $password, 
                );
            
            
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->from_leads = "Yes";
                $user->password = Hash::make($password);
                $user->save();
                
                if($user->save()){
                Mail::send('frontend.pages.contactLeadCredentialUserEmail', $dataNew, function ($message) use ($request){
                    $to_email = $adminemail;
                    $to_name  = "Summer Healing - Registration successful";
                    $subject  = "Thank you for registering with us.";
                    $message->subject ($subject);
                    $message->from ($request->email, "Summer Healing - Registration successful");
                    $message->to ($to_email, $to_name);
                });
                }
            }
           
            
        
        
            Mail::send('frontend.pages.contactEmail', $data, function ($message) use ($request){
                $to_email = $adminemail;
                $to_name  = "Summer Healing - Contact form enquiry";
                $subject  = "Contact form email";
                $message->subject ($subject);
                $message->from ($request->email, "Summer Healing - Contact form enquiry");
                $message->to ($to_email, $to_name);
            });
            
            
            
            
            return response()->json(['message' => "Form has been submitted successfully"]);
            
        }
    }



    public function terms()
    {
        return view("frontend.pages.terms");
    }
    public function privacy()
    {
        return view("frontend.pages.privacy");
    }
    public function refund()
    {
        return view("frontend.pages.refund");
    }
    public function wellnesscenter()
    {
        $wellnesscenters =  Adminwellness::all();
        return view("frontend.pages.wellnesscenter", compact('wellnesscenters'));
    }


    public function wellnessbook($id){
        $wellnesscenter =  Adminwellness::find($id);
        $wellnesscenterTitles =  Adminwellness::pluck('title');
        $wellnesscenterAll =  Adminwellness::all();
        //dd($wellnesscenterTitles);
        return view("frontend.pages.wellnesscenterbook", compact('wellnesscenterTitles','wellnesscenter','wellnesscenterAll'));
    }


    public function wellnessbooksend(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'service' => 'required'
          ]);
          

        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        //dd($adminemail);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->service;
        $contact->message = $request->comment;
        $contact->source = "Wellness center";
        $contact->save();

        if($contact->save()){
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'service' => $request->service,
                'comment' => $request->comment,
            ];
            Mail::to($adminemail)->send(new wellnessMail($details));

            return redirect()->route('page.wellnesscenter')->with("message", "The form has been submitted successfully. We will get back to you soon.");
        }
    }



    /* 
    ==============================
        CART FUNCTIONALITY 
    ==============================
    */

    public function cart()
    {
        return view('frontend.pages.cart');
    }


    public function addToCart($id)
    {
        $product = Admincourse::findOrFail($id);
        $schedule = Adminschedule::where('courseid',$product->id)->first();



        $scheduleDates = Adminschedule::where('courseid',$product->id)
        ->where('slug', $schedule->slug)
        ->where('type','recurring')->pluck('date');
        //dd($scheduleDates);





        $price = "";
        if(auth()->user()) {
            $user = auth()->user()->id;
            $userSubscription = User::where('id', $user)->pluck('subscription_id');   
            //dd($userSubscription[0]);    

            if($product->subscription == $userSubscription[0]){
                $price = $product->price == 0;
                //dd($price);
            }
            else{
                $price = $product->price;
                //dd($price);
            }
        }
        else{
            $price = $product->price;
            //dd($price);
        }

        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => 1,
                "price" => $price,
                "image" => $product->featured_image,
                "courseid" => $product->id,
                "coursetype" => $product->coursetype,
                "subscription" => $product->subscription,
                'schedule' => $schedule->type,
                'recurringdates' => $schedule->date,
                'scheduleslug' => $schedule->slug,
                'schedulestart' => $schedule->scheduledate,
                'scheduleend' => $schedule->scheduledateend,
                'scheduledays' => $schedule->days,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Course added to cart');
    }



    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('message', 'Cart updated successfully');
        }
    }



    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('message', 'Course removed from cart successfully');
        }

    }

    public function checkoutCourse(){
        $cart = session()->get('cart');
        return view('frontend.pages.checkout', compact('cart'));
    }



    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);

        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true, 
                    "redirect" => url("checkout")
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "errors" => ["Invalid credentials"]
                ]);
            }
        }
    }

    function postRegister(Request $request)
    {
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];

        $validator = Validator::make($request->all(), [
            'rname' => 'required',
            'remail' => 'required|email|unique:users,email',
            'rpassword' => 'required|min:8',
            'confirm_password' => 'required|same:rpassword',

        ],
        [
           'rname.required' => 'Name field is required',
           'remail.required' => 'Email field is required',
           'rpassword.required' => 'Password field is required',
           'confirm_password.required' => 'Enter the same password',
        ]
    
        ); // create the validations
        if ($validator->fails())
        {
            return response()->json([
                "status"=>false,
                "errors"=> $validator->errors()
            ]);  
            // validation failed return back to form

        } else {
            $data = $request->all();
            $user = $this->create($data);
            Auth::login($user);

            $details = [
                'email' => $request->remail,
                'password' => $request->rpassword,
                'body' => "You have successfully registered with summer healing."
            ];
            Mail::to($request->remail)->send(new registerMail($details));
            
            return response()->json([
                "status"=>true,
                "msg"=>"Registration Successful!",
                "redirect" => url("checkout")
            ]);  
           
        }
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['rname'],
        'email' => $data['remail'],
        'password' => Hash::make($data['rpassword'])
      ]);

    }







    //SUBSCRIPTION LOGIN & REGISTER
    public function subscriptionLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);

        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true, 
                    //"redirect" => url("checkout")
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "invalidstatus" => false,
                    "errors" => "Invalid credentials",
                ]);
            }
        }
    }

    function subscriptionRegister(Request $request)
    {
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];

        $validator = Validator::make($request->all(), [
            'rname' => 'required',
            'remail' => 'required|email|unique:users,email',
            'rpassword' => 'required|min:8',
            'confirm_password' => 'required|same:rpassword',

        ],
        [
           'rname.required' => 'Name field is required',
           'remail.required' => 'Email field is required',
           'rpassword.required' => 'Password field is required',
           'confirm_password.required' => 'Enter the same password',
        ]
    
        ); // create the validations
        if ($validator->fails())
        {
            return response()->json([
                "status"=>false,
                "errors"=> $validator->errors()
            ]);  
            // validation failed return back to form

        } else {
            $data = $request->all();
            $user = $this->subscriptionCreate($data);
            Auth::login($user);
            $details = [
                'email' => $request->remail,
                'password' => $request->rpassword,
                'body' => "You have successfully registered with summer healing."
            ];
            Mail::to($request->remail)->send(new registerMail($details));
            
            return response()->json([
                "status"=>true,
                "msg"=>"Registration Successful!",
                //"redirect" => url("checkout")
            ]);  
           
        }
    }


    public function subscriptionCreate(array $data)
    {
      return User::create([
        'name' => $data['rname'],
        'email' => $data['remail'],
        'password' => Hash::make($data['rpassword'])
      ]);

    }


    public function subscriptionmake(Request $request) 
    {
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        
        //Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $stripe_token = $request->stripeToken;
        $userLogged = Auth::user();
        $interval = "";
        // dd($request->interval);

        try {  
            $customer = $stripe->customers->create([
                'email' => $request->email,
                'source'  => $stripe_token,
                'description' => $request->subscription,
                [
                    'metadata' => 
                    [
                        'First name' => $request->name,
                        'Last name' => $request->lastname,
                        'Phone' => $request->phone,
                        'Email' => $request->email,
                        'Plan' => $request->subscription,
                        'Interval' => 'month',
                    ]
                ]
            ]);
        }catch(Exception $e) {   
            $api_error = $e->getMessage();   
        } 

        if(empty($api_error) && $customer){ 
            try { 
                // Create price with subscription info and interval 
                $price = $stripe->prices->create([
                    'unit_amount' => $request->price * 100, 
                    'currency' => "INR", 
                    'recurring' => ['interval' => $request->interval], 
                    'product_data' => ['name' => $request->subscription], 
                ]); 

            } catch (Exception $e) {  
                $api_error = $e->getMessage(); 
            } 

        if(empty($api_error) && $price){ 
            try {  
            $subs =$stripe->subscriptions->create([
                'customer' => $customer->id,
                'items' => [
                    ['price' => $price->id],
                ],
            ]);
            $chargeJson = $subs->jsonSerialize();
            $chargeJson2 = $customer->jsonSerialize();
            //dd($chargeJson2);
            //$userold = 
            $usersubscription = new Usersubscription();
            $usersubscription->title = $chargeJson2['description'];
            $usersubscription->price = $chargeJson['plan']['amount'] / 100;
            $usersubscription->interval = $chargeJson['plan']['interval'];
            $usersubscription->start_date = $chargeJson['created'];
            $usersubscription->next_date = $chargeJson['current_period_end'];
            $usersubscription->customer_id = $chargeJson['customer'];
            $usersubscription->transaction_id = $chargeJson['id'];
            $usersubscription->card_type = "";
            $usersubscription->card = $chargeJson2['default_source'];
            $usersubscription->currency = $chargeJson['plan']['currency'];
            $usersubscription->status = $chargeJson['status'];
            $usersubscription->userid = auth()->user()->id;
            $usersubscription->save();
            $usersubscription->users()->sync(auth()->user()->id);

            if($usersubscription->save()){
                $intervalValue = '';
                $interval = $chargeJson['plan']['interval'];
                if($interval == "year"){$intervalValue = "Yearly";}
                if($interval == "week"){$intervalValue = "Weekly";}
                if($interval == "month"){$intervalValue = "Monthly";}
                if($interval == "single"){$intervalValue = "Single";}
                $details = [
                    'title' => $chargeJson2['description'],
                    'price' => $chargeJson['plan']['amount'] / 100,
                    'interval' => $intervalValue,
                    'transaction_id' => $chargeJson['id'],
                    'status' => $chargeJson['status'] == "active" ? "Active" : "Inactive",
                    'start_date' =>  date('d-m-Y',$chargeJson['created']),
                    'next_date' =>   date('d-m-Y',$chargeJson['current_period_end']),
                    'card' =>  $chargeJson2['default_source'],
                    'body' => 'Your subscription was successfull.',
                    'useremail' => auth()->user()->email,
                    'username' => auth()->user()->name,
                    'userlname' => auth()->user()->lastname,
                ];
            
                Mail::to(auth()->user()->email)->send(new SubscriptionMail($details));
                Mail::to($adminemail)->send(new SubscriptionAdminMail($details));

            }

            $usersubscriptionOthers = Usersubscription::where('id', '!=', $usersubscription->id)->where('userid', '=', auth()->user()->id)->where('status','active')->update(['status'=>'inactive']);
            
            User::where('id', '=', auth()->user()->id)->update(['subscription_status' => 'active']);

            //use update query to update the existing plan with new one so user laravel db update query for update
            }catch(Exception $e) { 
                $api_error = $e->getMessage(); 
            } 
        }
    }
    
        
    $user = User::find(auth()->user()->id);
    //@dd($request->subscription);
    $user->subscription = $request->subscription;
    $user->subscription_id = $request->subscription_id;
    $user->lastname = $request->lastname;
    $user->phone = $request->phone;
    $user->save();
        return redirect()->route('page.success-subscription')->with("message", "Payment was succssfull");
    }


    public function successSubscription(){
        return view('frontend.pages.subscription-success');
    }
    
    public function subscriptionDetailed(Request $request, $id){
        $subscription =  Usersubscription::find($id);
        //$subscription1 =  auth()->user()->usersubscription()->get();
        //$subscription =  Usersubscription::find($id);
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $get_subscription = Usersubscription::find($id);
        
        //$activeone = $stripe->subscriptions->all(['limit' => 3, 'customer' => $get_subscription->customer_id]);
        
        $activeone = $stripe->subscriptions->retrieve(
            $get_subscription->transaction_id,
            []
        );
        $status = $activeone->status;

        //dd($activeone->status);
        return view('frontend.pages.subscription-detailed', compact('subscription', 'status'));
    }





    /* TRAININGS */

    public function trainingDetailed($id){
        $training = Admintraining::find($id);
        return view('frontend.pages.training-detailed', compact('training'));
    }
    
    public function trainingPurchase($id){
        $training = Admintraining::find($id);
        return view('frontend.pages.training-purchase', compact('training'));
    }

    public function trainingLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);

        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true, 
                    //"redirect" => url("checkout")
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "invalidstatus" => false,
                    "errors" => "Invalid credentials",
                ]);
            }
        }
    }

    function trainingRegister(Request $request)
    {
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];

        $validator = Validator::make($request->all(), [
            'rname' => 'required',
            'remail' => 'required|email|unique:users,email',
            'rpassword' => 'required|min:8',
            'confirm_password' => 'required|same:rpassword',

        ],
        [
           'rname.required' => 'Name field is required',
           'remail.required' => 'Email field is required',
           'rpassword.required' => 'Password field is required',
           'confirm_password.required' => 'Enter the same password',
        ]
    
        ); // create the validations
        if ($validator->fails())
        {
            return response()->json([
                "status"=>false,
                "errors"=> $validator->errors()
            ]);  
            // validation failed return back to form

        } else {
            $data = $request->all();
            $user = $this->subscriptionCreate($data);
            Auth::login($user);
            $details = [
                'email' => $request->remail,
                'password' => $request->rpassword,
                'body' => "You have successfully registered with summer healing."
            ];
            Mail::to($request->remail)->send(new registerMail($details));
            
            return response()->json([
                "status"=>true,
                "msg"=>"Registration Successful!",
                //"redirect" => url("checkout")
            ]);  
           
        }
    }

    public function trainingmake(Request $request) 
    {
        //dd($request->all());
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        $user = auth()->user();

         \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $token = $request->tokenId;
            
            try {  
            $customer = \Stripe\Customer::create([
            'name' => $request->username,
            'description' => "Training purchased: " . $request->title ." by ". $request->username,
            'email' => $request->useremail,
            'source'    => request('stripeToken'),
            ]);
            }catch(Exception $e) {  
                $api_error = $e->getMessage();  
            }


            if($request->price > 0){
            
                if(empty($api_error) && $customer){

                try {
                    $charge = \Stripe\Charge::create([
                    'customer' => $customer->id, 
                    'amount' => $request->price * 100,
                    'currency' => 'INR',
                    'description' => "Training purchased: " . $request->title ." by ". $request->username,
                    "receipt_email" => $request->useremail,
                    ]);

                } 
                catch(Exception $e) {  
                    $api_error = $e->getMessage();  
                }
            
                }else{ 
                    echo "Charge creation failed! $api_error";  
                } 

                if(empty($api_error) && $charge){
                    /*storing values and email*/
                    $validatedData = $request->validate([
                       'name' => 'required',
                       'email' => 'required|email',
                       'phone' => 'required|numeric',
                       ]);
                       //dd($request);
                       $order = new Order();
                       $userCurrent = User::find(auth()->user()->id);
                       $order->course = $request->title;
                       $order->total = $request->price;
                       $order->training_id = $request->training_id;
                       $order->quantity = 1;
                       $order->type = "training";
                       $order->address = 'null';
                       $order->city = 'null';
                       $order->state = 'null';
                       $order->country = "Australia";
                       $order->zip = 'null';
                       if(auth()->check()){
                           $order->useremail = $request->useremail;
                           $order->userphone = $request->userphone;
                           $order->username = $request->username;
                       }
                       else{
                           $order->useremail = $request->email;
                           $order->username = $request->name;
                       }
       
                       $order->save();
                       $order->users()->sync($request->userid);

                       if($order->save()){
                            $details = [
                                'username' => $request->username,
                                'useremail' => $request->useremail,
                                'title' => $request->title,
                                'price' => $request->price,
                            ];
                    
                            Mail::to($request->useremail)->send(new TrainingUserMail($details));
                            Mail::to($adminemail)->send(new TrainingAdminMail($details));
                       }
       
                       return redirect()->route('page.success-order')->with('message', 'Order has been placed successfully!');
                   
                   
                   }

            }

            if($request->price == 0){
                if(empty($api_error) && $customer){
                    /*storing values and email*/
                    $validatedData = $request->validate([
                       'name' => 'required',
                       'email' => 'required|email',
                       'phone' => 'required|numeric',
                       ]);
                       //dd($request);
                       $order = new Order();
                       $userCurrent = User::find(auth()->user()->id);
                       $order->course = $request->title;
                       $order->total = $request->price;
                       $order->training_id = $request->training_id;
                       $order->quantity = 1;
                       $order->type = "training";
                       $order->address = 'null';
                       $order->city = 'null';
                       $order->state = 'null';
                       $order->country = "Australia";
                       $order->zip = 'null';
                       if(auth()->check()){
                           $order->useremail = $request->useremail;
                           $order->userphone = $request->userphone;
                           $order->username = $request->username;
                       }
                       else{
                           $order->useremail = $request->email;
                           $order->username = $request->name;
                       }
       
                       $order->save();
                       $order->users()->sync($request->userid);

                        if($order->save()){
                        $details = [
                            'username' => $request->username,
                            'useremail' => $request->useremail,
                            'title' => $request->title,
                            'price' => $request->price,
                        ];
                
                        Mail::to($request->useremail)->send(new TrainingUserMail($details));
                        Mail::to($adminemail)->send(new TrainingAdminMail($details));
                        }
       
                       return redirect()->route('page.success-order')->with('message', 'Order has been placed successfully!');
                   
                   }
            }
    }


    public function successtraining(){
        return view('frontend.pages.training-success');
    }

    





    /* EVENTS */
    public function events()
    {
        $events =  Adminevent::where('status', 'Published')->orderBy('id', 'desc')->get();
        return view("frontend.pages.events", compact('events'));
    }

    public function eventinfo($id){
        $event = Adminevent::find($id);
        return view('frontend.pages.event-detailed', compact('event'));
    }

    public function eventbook($id){
        $event = Adminevent::find($id);
        return view('frontend.pages.event-book', compact('event'));
    }

    public function eventLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);

        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true, 
                    //"redirect" => url("checkout")
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "invalidstatus" => false,
                    "errors" => "Invalid credentials",
                ]);
            }
        }
    }

    function eventRegister(Request $request)
    {
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];

        $validator = Validator::make($request->all(), [
            'rname' => 'required',
            'remail' => 'required|email|unique:users,email',
            'rpassword' => 'required|min:8',
            'confirm_password' => 'required|same:rpassword',

        ],
        [
           'rname.required' => 'Name field is required',
           'remail.required' => 'Email field is required',
           'rpassword.required' => 'Password field is required',
           'confirm_password.required' => 'Enter the same password',
        ]
    
        ); // create the validations
        if ($validator->fails())
        {
            return response()->json([
                "status"=>false,
                "errors"=> $validator->errors()
            ]);  
            // validation failed return back to form

        } else {
            $data = $request->all();
            $user = $this->subscriptionCreate($data);
            Auth::login($user);
            $details = [
                'email' => $request->remail,
                'password' => $request->rpassword,
                'body' => "You have successfully registered with summer healing."
            ];
            Mail::to($request->remail)->send(new registerMail($details));
            
            return response()->json([
                "status"=>true,
                "msg"=>"Registration Successful!",
                //"redirect" => url("checkout")
            ]);  
           
        }
    }

    public function eventbooksend(Request $request) 
    {
        //dd($request->all());
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        $user = auth()->user();

         \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $token = $request->tokenId;
            
            try {  
            $customer = \Stripe\Customer::create([
            'name' => $request->username,
            'description' => "Event booking -: " . $request->title ." by ". $request->username,
            'email' => $request->useremail,
            'source'    => request('stripeToken'),
            ]);
            }catch(Exception $e) {  
                $api_error = $e->getMessage();  
            }

            if($request->price > 0){
            
                if(empty($api_error) && $customer){
                    
                try {
                    $charge = \Stripe\Charge::create([
                    'customer' => $customer->id, 
                    'amount' => $request->price * 100,
                    'currency' => 'INR',
                    'description' => "Event booking: " . $request->title ." by ". $request->username,
                    "receipt_email" => $request->useremail,
                    ]);

                } 
                catch(Exception $e) {  
                    $api_error = $e->getMessage();  
                }
            
                }else{ 
                    echo "Charge creation failed! $api_error";  
                } 

                if(empty($api_error) && $charge){
                    $chargeJson = $customer->jsonSerialize();
                    //dd($chargeJson);
                    $validatedData = $request->validate([
                       'name' => 'required',
                       'email' => 'required|email',
                       'phone' => 'required|numeric',
                       ]);
                       //dd($request);
                       $bookedevent = new Bookedevent();
                       $userCurrent = User::find(auth()->user()->id);
                       $tickets = $request->tickets + 1;
                       $total = $request->price * $tickets;
                       $bookedevent->title = $request->title;
                       $bookedevent->price = $total;
                       $username = $request->username;
                       $attendees = explode(",", $request->attendees);
                       $attendeesdate = array_unshift($attendees, $username);
                       $attendeeslist = implode(",",$attendees);

                       $bookedevent->tickets = $request->tickets;
                       $bookedevent->attendees = $attendeeslist;
                       $bookedevent->venue = $request->venue;
                       $bookedevent->startdate = $request->startdate;
                       $bookedevent->enddate = $request->enddate;
                       $bookedevent->starttime = $request->starttime;
                       $bookedevent->endtime = $request->endtime;
                       $bookedevent->customer_id = $chargeJson['id'];
                       $bookedevent->card = $chargeJson['default_source'];
                       $bookedevent->user_id = $request->user_id;
                       $bookedevent->userphone = $request->userphone;
                       $bookedevent->username = $request->username;
                       $bookedevent->useremail = $request->email;
       
                       $bookedevent->save();
                       //$bookedevent->user()->sync($request->user_id);

                       if($bookedevent->save()){
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
                                'tickets' => $request->tickets,
                                'attendees' => $request->attendees,
                            ];
                    
                            Mail::to($request->email)->send(new EventUserMail($details));
                            Mail::to($adminemail)->send(new EventAdminMail($details));
                       }
       
                       return redirect()->route('page.success-order')->with('message', 'Your event booking was successful');
                   
                   
                   }

            }

            if($request->price == 0){
                if(empty($api_error) && $customer){
                    /*storing values and email*/
                    $chargeJson = $customer->jsonSerialize();
                    $validatedData = $request->validate([
                       'name' => 'required',
                       'email' => 'required|email',
                       'phone' => 'required|numeric',
                       ]);
                       //dd($request);
                       $bookedevent = new Bookedevent();
                       $userCurrent = User::find(auth()->user()->id);
                       $tickets = $request->tickets + 1;
                       $total = $request->price * $tickets;

                       $username = $request->username;
                       $attendees = explode(",", $request->attendees);
                       $attendeesdate = array_unshift($attendees, $username);
                       $attendeeslistImplodes = implode(",", $attendees);
                       $attendeeslist = str_replace(' ', '', $attendeeslistImplodes);

                       //dd($attendeeslist);
     
                       $bookedevent->title = $request->title;
                       $bookedevent->price = $total;
                       $bookedevent->tickets = $request->tickets;
                       $bookedevent->attendees = $attendeeslist;
                       $bookedevent->venue = $request->venue; 
                       $bookedevent->startdate = $request->startdate;
                       $bookedevent->enddate = $request->enddate;
                       $bookedevent->starttime = $request->starttime;
                       $bookedevent->endtime = $request->endtime;
                       $bookedevent->user_id = $request->user_id;
                       $bookedevent->userphone = $request->userphone;
                       $bookedevent->username = $request->username;
                       $bookedevent->useremail = $request->email;
       
                       $bookedevent->save();
                       //$bookedevent->user()->sync($request->user_id);

                       if($bookedevent->save()){
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
                                'tickets' => $request->tickets,
                                'attendees' => $request->attendees,
                            ];
                    
                            Mail::to($request->email)->send(new EventUserMail($details));
                            Mail::to($adminemail)->send(new EventAdminMail($details));
                       }
       
                       return redirect()->route('page.success-order')->with('message', 'Your event booking was successful');
                   
                   
                   }
            }

    }

 



     /* SCHEDULS */
     public function schedules()
     {
         $schedules =  Adminschedule::where('status', 'Published')->orderBy('id', 'desc')->get();
         return view("frontend.pages.schedules", compact('schedules'));
     }


    public function schedulesjson(){
        $schedules =  Adminschedule::where('status', 'Published')->orderBy('start', 'asc')->get();
        //dd($schedules);
        $allCourses = Admincourse::where(['status'=>'Published'])->get();
        $eventsData = [];
        $data = [];
        foreach($schedules as $schedule){
            $findCourseExists = $allCourses->contains($schedule->courseid);
            if($findCourseExists == true){
                $coursedata =  Admincourse::where('id',$schedule->courseid)->first();
                $start = Carbon::parse($schedule->start);
                $end = Carbon::parse($schedule->end);
                $total = $end->diffInMinutes($start);
                //dd($start);
                $day[] = date('d', strtotime($schedule->scheduledate));
                $month[] = date('m', strtotime($schedule->scheduledate));
                $year[] = date('Y', strtotime($schedule->scheduledate));
                $description = Str::limit(strip_tags($coursedata->description), 55 );
                $duration = $schedule->duration * 3600 / 60;
                $datez = [];
                
                // $start = $schedule->scheduledate;
                // $date=date_create($schedule->scheduledate);
                // $dateSub = date_sub($date,date_interval_create_from_date_string("1 days"));
                // $startdate = $dateSub->format('Y-m-d');
                
                //dd($dateSub->format('Y-m-d'));

                $end = $schedule->scheduledateend;
                if($end){

                    $startdate = $schedule->scheduledate;
                    $date=date_create($startdate);
                    $dateSub = date_sub($date,date_interval_create_from_date_string("1 days"));
                    $startdate = $dateSub->format('Y-m-d');
                    $start = $startdate;
                    array_push($datez,$start,$end);
                    json_encode($datez);
                    //dd(json_encode($datez));
                }
                else{
                    $start = $schedule->scheduledate;
                    array_push($datez,$start);
                    json_encode($datez);
                }

                //dd($schedule->date);
                    
                //     $eventsData[] = [
                //     "id" => $schedule->uid,
                //     "name" => $schedule->name,
                //     "date" => $datez,
                //     "type" => $schedule->type,
                //     "recr" => $schedule->schedule_type == "recurring" ? "Yes" : "No",
                //     "description" => "<div class='coursedatas'><div class='timeminutes'>".$duration." Minutes </div><p>".$description. "</p><a class='btn-schedule-cart' href='/add-to-cart/$coursedata->id'>Buy Now</a></div>",
                // ];
                





            }

         }

         return response()->json($schedules);

    }

    public function scheduleItem(Request $request){
        $courseid = $request->courseid;
        $course = Admincourse::find($courseid);
        //dd($course);
        return response()->json($course);
    }
    
    public function scheduleitemdate(Request $request){
        $scheduledateInfo = $request->scheduledateInfo;
        $schedulesAll = Adminschedule::pluck('date');

        $dates = [];

        //dd(json_decode($schedulesAll));

        //$schedules = explode(",",$schedulesAll);
        foreach($schedulesAll as $schedule){
            array_push($dates,$schedule);
        }

        $final = $schedulesAll->contains($scheduledateInfo);


        //dd($dates);
        //return response()->json($final);
    }

    public function scheduleinfo($id){
        $schedule = Adminschedule::find($id);
        return view('frontend.pages.schedule-detailed', compact('schedule'));
    }

    public function schedulebook($id){
        $schedule = Adminschedule::find($id);
        return view('frontend.pages.schedule-book', compact('schedule'));
    }


    public function scheduleLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);

        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true, 
                    //"redirect" => url("checkout")
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "invalidstatus" => false,
                    "errors" => "Invalid credentials",
                ]);
            }
        }
    }

    function scheduleRegister(Request $request)
    {
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];

        $validator = Validator::make($request->all(), [
            'rname' => 'required',
            'remail' => 'required|email|unique:users,email',
            'rpassword' => 'required|min:8',
            'confirm_password' => 'required|same:rpassword',

        ],
        [
           'rname.required' => 'Name field is required',
           'remail.required' => 'Email field is required',
           'rpassword.required' => 'Password field is required',
           'confirm_password.required' => 'Enter the same password',
        ]
    
        ); // create the validations
        if ($validator->fails())
        {
            return response()->json([
                "status"=>false,
                "errors"=> $validator->errors()
            ]);  
            // validation failed return back to form

        } else {
            $data = $request->all();
            $user = $this->subscriptionCreate($data);
            Auth::login($user);
            $details = [
                'email' => $request->remail,
                'password' => $request->rpassword,
                'body' => "You have successfully registered with summer healing."
            ];
            Mail::to($request->remail)->send(new registerMail($details));
            
            return response()->json([
                "status"=>true,
                "msg"=>"Registration Successful!",
                //"redirect" => url("checkout")
            ]);  
           
        }
    }



    public function schedulebooksend(Request $request) 
    {
        //dd(date('y-m-d'));
        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        $user = auth()->user();

         \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $token = $request->tokenId;
            
            try {  
            $customer = \Stripe\Customer::create([
            'name' => $request->username,
            'description' => "Schedule booking - " . $request->title ." by ". $request->user_name,
            'email' => $request->user_email,
            'source'    => request('stripeToken'),
            ]);
            }catch(Exception $e) {  
                $api_error = $e->getMessage();  
            }

            if($request->price > 0){
            
                if(empty($api_error) && $customer){
                    
                try {
                    $charge = \Stripe\Charge::create([
                    'customer' => $customer->id, 
                    'amount' => $request->price * 100,
                    'currency' => 'INR',
                    'description' => "Schedule booking- " . $request->title ." by ". $request->user_name,
                    "receipt_email" => $request->useremail,
                    ]);

                } 
                catch(Exception $e) {  
                    $api_error = $e->getMessage();  
                }
            
                }else{ 
                    echo "Charge creation failed! $api_error";  
                } 

                if(empty($api_error) && $charge){
                    $chargeJson = $customer->jsonSerialize();
                    $chargeJson2 = $charge->jsonSerialize();
                    //dd($chargeJson2);
                    $validatedData = $request->validate([
                       'name' => 'required',
                       'email' => 'required|email',
                       'phone' => 'required|numeric',
                       ]);
                       //dd($request);
                       $bookedevent = new Schedulebooking();
                       $userCurrent = User::find(auth()->user()->id);
                       $bookedevent->title = $request->title;
                       $bookedevent->price = $request->price;
                       $bookedevent->scheduledate = $request->scheduledate;
                       $bookedevent->bookingdate = date('y-m-d');
                       $bookedevent->customer_id = $chargeJson['id'];
                       $bookedevent->card = $chargeJson['default_source'];
                       $bookedevent->user_id = $request->user_id;
                       $bookedevent->user_phone = $request->user_phone;
                       $bookedevent->user_name = $request->user_name;
                       $bookedevent->user_email = $request->user_email;
                       $bookedevent->schedule_id = $request->schedule_id;
                       $bookedevent->status = $chargeJson2['status'];
                       $bookedevent->save();
                       //$bookedevent->user()->sync($request->user_id);

                       if($bookedevent->save()){
                            $details = [
                                'username' => $request->username,
                                'useremail' => $request->useremail,
                                'title' => $request->title,
                                'scheduledate' => $request->scheduledate,
                                'bookingdate' => date('y-m-d'),
                                'price' => $request->price
                            ];
                    
                            Mail::to($request->user_email)->send(new ScheduleUserMail($details));
                            Mail::to($adminemail)->send(new ScheduleAdminMail($details));
                       }
       
                       return redirect()->route('page.success-order')->with('message', 'Your schedule booking was successful');
                   
                   
                   }

            }

            if($request->price == 0){
                if(empty($api_error) && $customer){
                    /*storing values and email*/
                    $chargeJson = $customer->jsonSerialize();
                    $chargeJson2 = $charge->jsonSerialize();
                    $validatedData = $request->validate([
                       'name' => 'required',
                       'email' => 'required|email',
                       'phone' => 'required|numeric',
                       ]);
                       //dd($request);
                       $bookedevent = new Schedulebooking();
                       $userCurrent = User::find(auth()->user()->id);
                       $bookedevent->title = $request->title;
                       $bookedevent->price = $request->price;
                       $bookedevent->scheduledate = $request->scheduledate;
                       $bookedevent->bookingdate = date('y-m-d');
                       $bookedevent->customer_id = $chargeJson['id'];
                       $bookedevent->card = $chargeJson['default_source'];
                       $bookedevent->user_id = $request->user_id;
                       $bookedevent->user_phone = $request->user_phone;
                       $bookedevent->user_name = $request->user_name;
                       $bookedevent->user_email = $request->user_email;
                       $bookedevent->schedule_id = $request->schedule_id;
                       $bookedevent->status = $chargeJson2['status'];
                       $bookedevent->save();
                       //$bookedevent->user()->sync($request->user_id);

                       if($bookedevent->save()){
                            $details = [
                                'username' => $request->username,
                                'useremail' => $request->useremail,
                                'title' => $request->title,
                                'scheduledate' => $request->scheduledate,
                                'bookingdate' => date('y-m-d'),
                                'price' => $request->price
                            ];
                    
                            Mail::to($request->useremail)->send(new EventUserMail($details));
                            Mail::to($adminemail)->send(new EventAdminMail($details));
                       }
       
                       return redirect()->route('page.success-order')->with('message', 'Your event booking was successful');
                   
                   
                   }
            }

    }





    
    
    


}
