<?php

namespace App\Http\Controllers;

use App\Exports\ExportOrder;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
//use Stripe;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Mail\CourseAdminMail;
use App\Mail\CourseMail;
use App\Models\Adminschedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Exception;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class OrderController extends Controller
{


    public function confirmOrder(Request $request)
    {

        $adminemailData = DB::table('admincontactsettings')->pluck('contact_email');
        $adminemail = $adminemailData[0];
        $user = auth()->user();
        //dd($request->all());
        //dd(session('cart')['scheduleslug']);
        $scheduleType = "";
        $courseslug = "";
        $recurringDates = "";
        $startdate = "";
        $enddate = "";
        $dayz = "";
        foreach((array) session('cart') as $id => $details){
            $scheduleType = $details['schedule'];
            $courseslug = $details['title'];
            $recurringDates = $details['recurringdates'];
            $startdate = $details['schedulestart'];
            $enddate = $details['scheduleend'];
            $dayz = $details['scheduledays'];
        }

        
        $adminschedule = Adminschedule::where('id',$request->id)->get();
        //dd($adminschedule);


        if((int)$request->total > 0){
         //\Stripe\Stripe::setApiKey('sk_test_51IaIAHSB3wDJDTy66QoMfRprJTfgVQYvRug2UWTJoTHHwykoem5nVpViif6AHNCSliWAhIv3545AUCzqSHWhLhC60089k4RQvM');
         \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $token = $request->tokenId;
            
            try {  
            $customer = \Stripe\Customer::create([
            'name' => $request->username,
            'description' => "Course purchased: " . $request->course ." by ". $request->username,
            'email' => $request->useremail,
            'source'    => request('stripeToken'),
            'metadata' => [
                'course-slug'=> $courseslug,
                'startdate'=> $startdate,
                'enddate'=> $enddate,
                'type'=> $scheduleType ? $scheduleType : "NULL",
                'recurringdays' => $dayz ? $dayz : "NULL",
                'recurringdates' => $scheduleType == "recurring" ? $recurringDates : "NULL"
            ]
            ]);
            }catch(Exception $e) {  
                $api_error = $e->getMessage();  
            } 
            
            
            if(empty($api_error) && $customer){

            try {
                $charge = \Stripe\Charge::create([
                  'customer' => $customer->id, 
                  'amount' => $request->total * 100,
                  'currency' => 'INR',
                  'description' => "Course purchased: " . $request->course ." by ". $request->username,
                  "receipt_email" => $request->useremail,
                ]);
             } 
            catch(Exception $e) {  
                $api_error = $e->getMessage();  
            }
        
            }else{ 
                echo "Charge creation failed! $api_error";  
            } 
            
            
            //dd((int)$request->total);
            
            

                /*storing values and email*/
               $validatedData = $request->validate([
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required',
                'name' => 'required'
                ]);
                //dd($request);
                $order = new Order();
                $user = new User();
                $userCurrent = User::find(auth()->user()->id);
                $order->course = $request->course;
                $order->courseid = $request->courseid;
                $order->total = $request->total;
                $order->quantity = $request->quantity;
                $order->type = "course";
                $order->address = $request->address;
                $order->city = $request->city;
                $order->state = $request->state;
                $order->country = "Australia";
                $order->zip = $request->zip;
                if(auth()->check()){
                    $order->useremail = $request->useremail;
                    $order->userphone = $request->userphone;
                    $order->username = $request->username;
                }
                else{
                    $order->useremail = $request->email;
                    $order->username = $request->name;
                }

                if(auth()->check()){
                    $userCurrent->useraddress = $request->address;
                    $userCurrent->usercity = $request->city;
                    $userCurrent->userstate = $request->state;
                    $userCurrent->usercountry = "Australia";
                    $userCurrent->userpostcode = $request->zip;
                    $userCurrent->save();
                }

                $order->save();
                if($order->save()){
                    Session::forget('cart');

                    $details = [
                        'course' => $request->course,
                        'total' => $request->total,
                        'quantity' => $request->quantity,
                        'address' => $request->address,
                        'city' => $request->city,
                        'state' => $request->state,
                        'zip' => $request->zip,
                        'email' => $request->useremail,
                        'username' => $request->name,
                        'userphone' => $request->userphone,
                        'country' => 'Australia',

                    ];
                    Mail::to($request->useremail)->send(new CourseMail($details));
                    Mail::to($adminemail)->send(new CourseAdminMail($details));
                }

                $order->users()->sync($request->userid);
                // $order->admincourses()->sync($request->courseid);

                return redirect()->route('page.success-order')->with('message', 'Order has been placed successfully!');


        }


        /* IF REQUEST HAS TOTAL OF ZERO AMOUNT THEN NO NEED OF PAYMENT GATEWAY */
        if((int)$request->total == 0){
            $validatedData = $request->validate([
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'username' => 'required'
            ]);
            //dd($request);
            $order = new Order();
            $user = new User();
            $userCurrent = User::find(auth()->user()->id);
            $order->course = $request->course;
            $order->courseid = $request->courseid;
            $order->total = $request->total;
            $order->quantity = $request->quantity;
            $order->address = $request->address;
            $order->city = $request->city;
            $order->state = $request->state;
            $order->type = "course";
            $order->country = "Australia";
            $order->zip = $request->zip;
            if(auth()->check()){
                $order->useremail = $request->useremail;
                $order->userphone = $request->userphone;
                $order->username = $request->username;
            }
            else{
                $order->useremail = $request->email;
                $order->username = $request->name;
            }
            
            if(auth()->check()){
                $userCurrent->useraddress = $request->address;
                $userCurrent->usercity = $request->city;
                $userCurrent->userstate = $request->state;
                $userCurrent->usercountry = "Australia";
                $userCurrent->userpostcode = $request->zip;
                $userCurrent->save();
            }
            
            $order->save();
            if($order->save()){
                Session::forget('cart');

                $details = [
                    'course' => $request->course,
                    'total' => $request->total,
                    'quantity' => $request->quantity,
                    'address' => $request->address,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'email' => $request->useremail,
                    'username' => $request->name,
                    'userphone' => $request->userphone,
                    'country' => 'Australia',

                ];
                Mail::to($request->useremail)->send(new CourseMail($details));
                Mail::to($adminemail)->send(new CourseAdminMail($details));
            }

            $order->users()->sync($request->userid);
        // $order->admincourses()->sync($request->courseid);
    
            return redirect()->route('page.success-order')->with('message', 'Order has been placed successfully!');
        }



































        // if($request->total != 0){
        //     try {
        //         $customer = $stripe->customers->create([
        //             'email' => $user->email,
        //             //'source'  => request('stripeToken'),
        //             'description' => $request->course,
        //             [
        //                 'metadata' => 
        //                 [
        //                     'First name' => $user->name,
        //                     'Last name' => $user->lastname,
        //                     'Phone' => $user->phone,
        //                     'Email' => $user->email
        //                 ]
        //             ]
        //         ]);

                
        //     }catch(Exception $e) {   
        //         $api_error = $e->getMessage();   
        //     } 

        //     if(empty($api_error) && $customer){ 
        //         try { 
        //            $charge = $stripe->charges->create([
        //             'amount' => $request->total * 100,
        //             'customer' => $customer,
        //             'currency' => 'inr',
        //             'source' => request('stripeToken'),
        //             'description' => 'Course purchase',
        //             ]);
        //         } catch (Exception $e) {  
        //             $api_error = $e->getMessage(); 
        //         }
        //     }



        //     $validatedData = $request->validate([
        //         'address' => 'required',
        //         'city' => 'required',
        //         'state' => 'required',
        //         'zip' => 'required',
        //         'username' => 'required'
        //       ]);
        //       //dd($request);
        //       $order = new Order();
        //       $user = new User();
        //       $userCurrent = User::find(auth()->user()->id);
        //       $order->course = $request->course;
        //       $order->courseid = $request->courseid;
        //       $order->total = $request->total;
        //       $order->quantity = $request->quantity;
        //       $order->address = $request->address;
        //       $order->city = $request->city;
        //       $order->state = $request->state;
        //       $order->country = "Australia";
        //       $order->zip = $request->zip;
        //       if(auth()->check()){
        //           $order->useremail = $request->useremail;
        //           $order->userphone = $request->userphone;
        //           $order->username = $request->username;
        //       }
        //       else{
        //           $order->useremail = $request->email;
        //           $order->username = $request->name;
        //       }
              
        //       if(auth()->check()){
        //           $userCurrent->useraddress = $request->address;
        //           $userCurrent->usercity = $request->city;
        //           $userCurrent->userstate = $request->state;
        //           $userCurrent->usercountry = "Australia";
        //           $userCurrent->userpostcode = $request->zip;
        //           $userCurrent->save();
        //       }
              
        //       $order->save();
        //       if($order->save()){
        //           Session::forget('cart');
      
        //           $details = [
        //               'course' => $request->course,
        //               'total' => $request->total,
        //               'quantity' => $request->quantity,
        //               'address' => $request->address,
        //               'city' => $request->city,
        //               'state' => $request->state,
        //               'zip' => $request->zip,
        //               'email' => $request->useremail,
        //               'username' => $request->name,
        //               'userphone' => $request->userphone,
        //               'country' => 'Australia',
      
        //           ];
        //           Mail::to($request->useremail)->send(new CourseMail($details));
        //           Mail::to($adminemail)->send(new CourseAdminMail($details));
        //       }
      
        //       $order->users()->sync($request->userid);
        //      // $order->admincourses()->sync($request->courseid);
       
        //       return response()->json([
        //           'success' => "Order has been placed successfully!",
        //           "message"=>"Order placed Successfully",
        //           "redirect" => url("success-order#success_order")
        //       ]);


        // }



        // if($request->total == 0){
        //     $validatedData = $request->validate([
        //     'address' => 'required',
        //     'city' => 'required',
        //     'state' => 'required',
        //     'zip' => 'required',
        //     'username' => 'required'
        //     ]);
        //     //dd($request);
        //     $order = new Order();
        //     $user = new User();
        //     $userCurrent = User::find(auth()->user()->id);
        //     $order->course = $request->course;
        //     $order->courseid = $request->courseid;
        //     $order->total = $request->total;
        //     $order->quantity = $request->quantity;
        //     $order->address = $request->address;
        //     $order->city = $request->city;
        //     $order->state = $request->state;
        //     $order->country = "Australia";
        //     $order->zip = $request->zip;
        //     if(auth()->check()){
        //         $order->useremail = $request->useremail;
        //         $order->userphone = $request->userphone;
        //         $order->username = $request->username;
        //     }
        //     else{
        //         $order->useremail = $request->email;
        //         $order->username = $request->name;
        //     }
            
        //     if(auth()->check()){
        //         $userCurrent->useraddress = $request->address;
        //         $userCurrent->usercity = $request->city;
        //         $userCurrent->userstate = $request->state;
        //         $userCurrent->usercountry = "Australia";
        //         $userCurrent->userpostcode = $request->zip;
        //         $userCurrent->save();
        //     }
            
        //     $order->save();
        //     if($order->save()){
        //         Session::forget('cart');

        //         $details = [
        //             'course' => $request->course,
        //             'total' => $request->total,
        //             'quantity' => $request->quantity,
        //             'address' => $request->address,
        //             'city' => $request->city,
        //             'state' => $request->state,
        //             'zip' => $request->zip,
        //             'email' => $request->useremail,
        //             'username' => $request->name,
        //             'userphone' => $request->userphone,
        //             'country' => 'Australia',

        //         ];
        //         Mail::to($request->useremail)->send(new CourseMail($details));
        //         Mail::to($adminemail)->send(new CourseAdminMail($details));
        //     }

        //     $order->users()->sync($request->userid);
        // // $order->admincourses()->sync($request->courseid);
    
        //     return response()->json([
        //         'success' => "Order has been placed successfully!",
        //         "message"=>"Order placed Successfully",
        //         "redirect" => url("success-order#success_order")
        //     ]);
        // }
 
    }

    public function successOrder() {
        return view("frontend.pages.order-success");
    }


    public function exportOrders(){
        return Excel::download(new ExportOrder, 'orders.xlsx');
    }











}
