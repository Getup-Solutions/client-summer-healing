<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Adminevent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events= Adminevent::orderBy('id', 'DESC')->get();
        if(count($events)>0){
            $response = [
                'events' => $events,
                'msg' => "Events all list"
            ];
            return response($response, 201);
        }
        return [
            'msg' => "No events found!"
        ];
    }
}
