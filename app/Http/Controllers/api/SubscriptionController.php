<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Adminsubscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $subscriptions = Adminsubscription::orderBy('id', 'DESC')->get();
        if(count($subscriptions)>0){
            $response = [
                'subscriptions' => $subscriptions,
                'msg' => "Subscriptions all list"
            ];
            return response($response, 201);
        }
        return [
            'msg' => "No subscriptions found!"
        ];
    }
}
