<?php

namespace App\Http\Controllers;

use App\Models\Schedulebooking;
use Illuminate\Http\Request;

class SchedulebookingController extends Controller
{
    public function index(){
        $schedules = Schedulebooking::all();
        return view('backend.schedule.allbookings',compact('schedules'));
    }
}
