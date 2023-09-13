<?php

namespace App\Http\Controllers;

use App\Models\Admincourse;
use App\Models\Adminevent;
use App\Models\Adminondemand;
use App\Models\Adminpage;
use App\Models\Adminsubscription;
use App\Models\Admintraining;
use App\Models\Adminwellness;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    public function userDashboard()
    {
        return view('frontend.user.userDashboard');
    }

    public function adminDashboard()
    {
        $adminpages1 = Adminpage::all();
        $adminpages = $adminpages1->count();
        //dd($adminpages);

        $courses = Admincourse::where('coursetype','course')->where('status', 'Published')->get();
        $admincourses = $courses->count();
        
        $ondemands = Admincourse::where('coursetype','ondemand')->where('status', 'Published')->get();
        $admincondemands = $ondemands->count();

        $trainings = Admintraining::where('status', 1)->get();
        $admintrainings= $trainings->count();

        $events = Adminevent::where('status', 'Published')->get();
        $adminevents= $events->count();

        $wellness = Adminwellness::where('status', 'Published')->get();
        $adminwellness= $wellness->count();

        $orders = Order::all();
        $adminorders= $orders->count();

        // $admincourse1 = Admincourse::all();
        // $admincourses = $admincourse1->count();

        // $adminondemand1 = Adminondemand::all();
        // $admincondemands = $adminondemand1->count();

        $adminsubscriptions1 = Adminsubscription::all();
        $adminsubscriptions = $adminsubscriptions1->count();

        $subscribers1 = User::where('type', '=', 0)->get();
        $subscribers = $subscribers1->count();

        return view('backend.adminDashboard', compact('adminpages','admincourses','adminsubscriptions','subscribers','admincondemands','admintrainings','adminevents','adminwellness','adminorders'));
    }


    // public function managerHome() 
    // {
    //     return view('frontend.managerHome');
    // }



}
