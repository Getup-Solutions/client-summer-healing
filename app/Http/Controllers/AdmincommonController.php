<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportOrderTransaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class AdmincommonController extends Controller
{
    public function userleads(Request $request)
    {
        return view('backend.leads.index');
    }

    public function leadDestroy($id){
        $lead = Contact::find($id);
        $lead->delete();
        return redirect()->route('admin.dashboard.userleads')->with("message", "Lead removed successfully");
    }

    public function userslist(Request $request){
        //$users = User::where('type', 0)->where('subscription','!=',"")->get();
        //return view("backend.users.index", compact('users'));
        
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
                $users->whereBetween('created_at',[Carbon::now()->subMonth(3),Carbon::now()]);
                break;
            case 'this_year':
                $query->whereYear('created_at',Carbon::now()->year);
                break;
            case 'last_year':
                $query->whereYear('created_at',Carbon::now()->subYear()->year);
                break;                       
        }
        
        $users = $query->where('type', 0)->where('subscription','!=',"")->get();
        return response()->view('backend.users.index',compact('users','dateFilter'));
        
        
        
    }

    public function usershow($id)
    {
        $user = User::find($id);
        return view("backend.users.show", compact('user'));
    }



    //ADMIN USERS METHODS
    public function adminuserslist(){
        $adminusers = User::whereIn("type", [1,3])->where("is_trainer", "!=", 1)->get();
        //dd($adminusers);
        return view('backend.admins.index', compact('adminusers'));
    }

    public function adminuseradd(Request $request){
        return view('backend.admins.add');
    }

    public function adminuserstore(Request $request){
        //dd($request);
        $validatedData = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'name.required' => 'The name field is required',
            'email.required' => 'The field is required',
            'password.required' => 'The field is required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = 1;
        $user->save();

        $user->permissions()->sync($request->permission);

        return redirect()->route('admin.dashboard.admins')->with("message", "Admin user created succssfully");
    }

    public function adminuseredit($id){
        $adminuser = User::find($id);
        return view('backend.admins.edit', compact('adminuser'));
    }

    public function adminuserupdate(Request $request, $id){
        //dd($request);
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ],[
            'name.required' => 'The name field is required',
            'email.required' => 'The field is required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        if($request->password != "") {
        $user->password = Hash::make($request->password);
        }
        $user->type = 1;
        $user->save();

        $user->permissions()->sync($request->permission);

        return redirect()->route('admin.dashboard.admins')->with("message", "Admin user created succssfully");
    }


    public function adminuserdestroy($id){
        $adminuser = User::find($id);
        $adminuser->delete();
        return redirect()->back()->with("message","Admin user deleted successfully");
    }



}
