<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //SINGLE USER DETAILS BY USER ID.
    public function singleuser($id){
        return User::find($id);
    }

    //SINGLE COURSE BY USER ID
    public function singleusercourse($id){
        $user =  User::find($id);
        
        if($user){
            $usercourses = $user->orders()->get();
            if(count($usercourses)>0){
                $response = [
                    'courses' => $usercourses,
                    'msg' => "User courses"
                ];
                return response($response, 201);
            }
            else{
                return [
                    'msg' => "User has no courses"
                ];
            }
        }
        return [
            'msg' => "No user found!"
        ];
    }


    //SINGLE SUBSCRIPTION BY USER ID.

    public function singleusersubscription($id){
        $user =  User::find($id);
        //return $user;
        if($user){
            $subscription = $user->usersubscription()->where("status","=","active")->get();
            $subscription_title = $user->usersubscription()->where("status","=","active")->pluck('title');
                
            if(count($subscription)>0){
                $response = [
                    'subscription' => $subscription,
                    //'user' => $user,
                    //'title' => $subscription_title,
                    'msg' => "User active subscription plan"
                ];
                return response($response, 201);
            }
            else{
                return [
                    'msg' => "User has no active subscription plan"
                ];
            }
            
        }
        return [
            'msg' => "No user found!"
        ];

    }



    //ORDERS BY USER ID.

    public function userorders($id){
        $user =  User::find($id);
        //return $user;
        if($user){
            $orders = $user->orders()->get();
            if(count($orders)>0){
                $response = [
                    'orders' => $orders,
                    'msg' => "User orders"
                ];
                return response($response, 201);
            }
            else{
                return [
                    'msg' => "User has no order history"
                ];
            }
            
        }
        return [
            'msg' => "No user found!"
        ];

    }



    //EVENTS BOOKED BY THIS USER

    public function userbookedevents($id) {
        $user =  User::find($id);
        if($user){
            $events = $user->events()->get();
            if(count($events)>0){
                $response = [
                    'events' => $events,
                    'msg' => "User booked events"
                ];
                return response($response, 201);
            }
            else{
                return [
                    'msg' => "User has no booked events"
                ];
            }
        }
        return [
            'msg' => "No user found!"
        ];
    }



    //EVENTS CREATED BY THIS USER
    public function usercreatedevents($id) {
        $user =  User::find($id);
        if($user){
            $events = $user->adminevents()->get();
            if(count($events)>0){
                $response = [
                    'events' => $events,
                    'msg' => "User created events"
                ];
                return response($response, 201);
            }
            else{
                return [
                    'msg' => "User has no booked events"
                ];
            }
        }
        return [
            'msg' => "No user found!"
        ];
    }






}
