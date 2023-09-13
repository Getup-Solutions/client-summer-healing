<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Admincourse;
use App\Models\Order;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Stripe;


class CourseController extends Controller
{
    public function index(){
        $courses =  Admincourse::orderBy('id', 'DESC')->get();
        if(count($courses)>0){
            $response = [
                'courses' => $courses,
                'msg' => "All courses"
            ];
            return response($response, 201);
        }
        return [
            'msg' => "No courses found!"
        ];
    }

    //GET SINGLE COURSE BY ID
    public function singlecourse($id){
        $course = Admincourse::find($id);
        if($course){
            $response = [
                'course' => $course,
                'msg' => "Course item"
            ];
            return response($response, 201);
        }
        return [
            'msg' => "No course found!"
        ];
    }

    //GET COURSE TRAINER BY USER ID
    public function coursetrainer($id){
        //return Admincourse::find($id);
        $course = Admincourse::find($id);
        if($course){
            $trainers = $course->admincoursetrainers()->get();
            if(count($trainers)>0){
                $response = [
                    'trainers' => $trainers,
                    'msg' => "Course trainer"
                ];
                return response($response, 201);
            }
            else{
                return [
                    'msg' => "No trainers found!"
                ];
            }
        }
        return [
            'msg' => "No course found!"
        ];
    }


    // COURSE PURCHASE
    public function coursepurchase(Request $request,$id){
        $course = Admincourse::find($id);
        
        //return $course;
        if($course) {
            try{
                $user = User::find(auth()->user()->id);
                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                
                $res = $stripe->tokens->create([
                    'card' => [
                        'number' => $request->number,
                        'exp_month' => $request->exp_month,
                        'exp_year' => $request->exp_year,
                        'cvc' => $request->cvc,
                    ],
                ]);
                
                $customer = \Stripe\Customer::create([
                    'email' => $user->email,
                    'name' => $user->name,
                    'source' => $res->id
                ]);
                
                if($customer){
                    $response = \Stripe\Charge::create([
                        'amount' => $request->amount * 100,
                        'currency' => 'inr',
                        'customer' => $customer->id,
                        'source' => $customer->default_source,
                        'description' => "Successfully purchased course - " .$course->title,
                    ]);

                    //STORING DATA TO ORDERS TABLE
                    // $validatedData = $request->validate([
                    //     'address' => 'required',
                    //     'city' => 'required',
                    //     'state' => 'required',
                    //     'zip' => 'required',
                    //     'username' => 'required'
                    //     ]);
                    //     //dd($request);
                    //     $order = new Order();
                    //     $userCurrent = User::find(auth()->user()->id);
                    //     $order->course = $request->course;
                    //     $order->courseid = $request->courseid;
                    //     $order->total = $request->amount * 100;
                    //     $order->quantity = $request->quantity;
                    //     $order->address = $request->address;
                    //     $order->city = $request->city;
                    //     $order->state = $request->state;
                    //     $order->type = "course";
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

                    
                    return response()->json([$response->status],201);
                }
                
            }
            catch(Exception $ex){
                return response()->json([['response'=> 'Error']],500);
            }
        }

    }






}
