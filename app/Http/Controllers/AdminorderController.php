<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminorderController extends Controller
{
    public function index(Request $request){
        //$orders = Order::all();
        //return view('backend.orders.index', compact('orders'));
        
        $query = Order::query();
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
        
        $orders = $query->get();
        return response()->view('backend.orders.index',compact('orders','dateFilter'));
        
    }
}
