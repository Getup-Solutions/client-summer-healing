<?php

namespace App\Http\Controllers;

use App\Models\Adminusersetting;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminusersettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $adminusers = User::whereIn('type', ['admin','superadmin'])
        // ->orderBy('id')
        // ->take(10)
        // ->get();
        //dd($adminusers);

        $adminusers = DB::table('users')->whereIn('type', ['1','3'])->get();
        return view('backend.admin-user-settings.index', compact('adminusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin-user-settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users|email',
                'password' => 'required',
            ],
            [
                'name.required' => 'Field is required.',
                'email.required' => 'Field is required',
                'password.required' => 'Field is required',
            ]
        );
        $adminuser = new User();
        $adminuser->name = $request->name;
        $adminuser->email = $request->email;
        $adminuser->password = Hash::make($request->password);
        $adminuser->type = 1;
        $adminuser->save();
        return redirect()->route('admin.dashboard.adminusersettings.index')->with('message','User has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adminusersetting  $adminusersetting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminusersetting  $adminusersetting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminuser = User::find($id);
        return view('backend.admin-user-settings.edit', compact('adminuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminusersetting  $adminusersetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
            ],
            [
                'name.required' => 'Field is required.',
                'email.required' => 'Field is required',
            ]
        );
        $adminuser = User::find($id);
        $adminuser->name = $request->name;
        $adminuser->email = $request->email;
        if($request->has('password') ){
            $adminuser->password = Hash::make($request->password);
        }
        else{
            return "Field is empty bro";
        }
        $adminuser->save();
        return redirect()->route('admin.dashboard.adminusersettings.index')->with('message','User has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminusersetting  $adminusersetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminuser = User::find($id);
        $adminuser->delete();
        return redirect()->route('admin.dashboard.adminusersettings.index')->with('message','User has been deleted successfully.');
    }
}
