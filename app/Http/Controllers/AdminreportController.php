<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
//use Carbon\Carbon;
use App\Exports\UsersExport;
use App\Models\Order;
use App\Models\User;
use App\Models\Admincourse;
use Illuminate\Support\Carbon;
use Illuminate\Database\Query\Builder;


class AdminreportController extends Controller
{
    public function userreports(Request $request){
        //$users = DB::table('users')->where('type', '0')->get();
        //$users = DB::table('users')->select('name', 'lastname','email', 'phone', 'subscription')->where('type', '0')->get();
        //return view('backend.reports.user-reports', compact('users'));
        
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
        
        $users = $query->where('type', '0')->get();
        return response()->view('backend.reports.user-reports',compact('users','dateFilter'));
        
        
        
        
    }

    public function exportUsers(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    
    
    public function orderReports(Request $request){
        //return view('backend.reports.order-report');
        
        
        // $query = Order::query();
        // $dateFilter = $request->date_filter;
        
        // switch($dateFilter){
        //     case 'today':
        //         $query->whereDate('created_at',Carbon::today());
        //         break;
        //     case 'yesterday':
        //         $query->wheredate('created_at',Carbon::yesterday());
        //         break;
        //     case 'this_week':
        //         $query->whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()]);
        //         break;
        //     case 'last_week':
        //         $query->whereBetween('created_at',[Carbon::now()->subWeek(),Carbon::now()]);
        //         break;
        //     case 'this_month':
        //         $query->whereMonth('created_at',Carbon::now()->month);
        //         break;
        //     case 'last_month':
        //         $query->whereMonth('created_at',Carbon::now()->subMonth()->month);
        //         break;
        //     case 'last3_month':
        //         //$query->whereMonth('created_at',Carbon::now()->subMonth(3)->month);
        //         $query->whereBetween('created_at',[Carbon::now()->subMonth(3),Carbon::now()]);
        //         break;
        //     case 'this_year':
        //         $query->whereYear('created_at',Carbon::now()->year);
        //         break;
        //     case 'last_year':
        //         $query->whereYear('created_at',Carbon::now()->subYear()->year);
        //         break;                       
        // }
        
        //$orders = $query->get();
        //return response()->view('backend.reports.order-report',compact('orders','dateFilter'));
        //return redirect()->route('admin.orderReports')->with( ['orders' => $orders, 'dateFilter'=> $dateFilter] );
        
        $orders = Order::orderBy('id', 'desc')->get();
        $allUsers = User::where("type", 0)->orWhere("is_trainer", 1)->get();
        $allCourses = Admincourse::where("status", "Published")->get();
        $allUserPhones = User::where("type", 0)->whereNotNull('phone')->orWhere("is_trainer", 1)->get();
        //dd($allUserPhones);
        
        //return redirect()->route('admin.orderReports')->with( ['allUsers' => $allUsers, 'allCourses' => $allCourses] );
        
        return view('backend.reports.order-report',compact('allUsers','allCourses','orders','allUserPhones'));
        
        
    }
    
    
    public function orderReportsPost(Request $request){
        
        //dd($request->all());
        
        
        

    
    
        //   $books = Order::where('username','=', $name)
        // ->where('useremail', '=', $email)
        // ->where('course', '=', $course)
        // ->get();
 
 

   
        
        
        $startdate = $request->datepicker1;
        $enddate = $request->datepicker2;
        //$name = $request->username;
        //$email = $request->useremail;
        //$phone = $request->userphone;
        //$course = $request->allCourses
        
        
        $name = $request->input('username');
        $email = $request->input('useremail');
        $phone = $request->input('userphone');
        $course = $request->input('allCourses');
        
    
        
   
        // $books2 = Order::where('username', 'LIKE', '%' . request()->username . '%')
        //                 ->when(request()->has('useremail'), function($query) {
        //                     $query->where('useremail', request()->useremail);
        //                 })
        //                 ->when(request()->has('allCourses'), function($query) {
        //                     $query->where('course', request()->allCourses);
        //                 })->get();
        
        
        //$data = Order::query();
        if( $request->username != null){
            $data = Order::where('username', 'LIKE', "%" . $request->username . "%");
        }
        if( $request->useremail != null){
            $data = Order::where('useremail', 'LIKE', "%" . $request->useremail . "%");
        }
        
                
                
        dd($data->get());
        
        
        
        
        
 
        
    }


    public function getOrderReportsByPeriod(Request $request){

        // $request->validate(
        //     [
        //     'startdate' => 'required',
        //     'enddate' => 'required',
        //     ]
        // );

        // $start =  $request->startdate;
        // $end =  $request->enddate;

        // $datestart = date("Y-m-d", strtotime($start)); 
        // $dateend = date("Y-m-d", strtotime($end));
   
        // $orders = Order::whereBetween('created_at', [$datestart, $dateend])->get();

        // return redirect()->back()->with( ['orders' => $orders, 'startdate'=> $datestart, 'enddate'=> $dateend] );
        
        
       
        
        
        

    }
    
    public function orderReportsExports(){
        
    }
    
    

    public function orderReportsResults(){

        return view('backend.reports.order-report-result');

    }
    


}
