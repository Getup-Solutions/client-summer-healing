<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::orderby('name', 'ASC')->get();
        return view('backend.permissions.index', compact('permissions'));
    }

    public function add(){
        return view('backend.permissions.add');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:permissions',
        ],[
            'name.required' => 'The Permission name field is required',
            'name.unique' => 'The Permission name already exist in the table',
        ]);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->slug = Str::slug($request->name);
        $permission->info = $request->info;
        $permission->save();
        $permission->users()->sync($request->id);
        return redirect()->route('admin.dashboard.admin.permissions')->with("message","Permission added successfully");
    }

    public function edit($id){
        $permission = Permission::find($id);
        return view('backend.permissions.edit', compact('permission'));
    }


    public function update($id, Request $request){
        $this->validate($request,[
            'name' => 'required',
        ],[
            'name.required' => 'The Permission name field is required'
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->name;
        $permission->slug = Str::slug($request->name);
        $permission->info = $request->info;
        $permission->save();

        return redirect()->route('admin.dashboard.admin.permissions')->with("message","Permission updated successfully");
    }

    public function destroy($id){
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->route('admin.dashboard.admin.permissions')->with("message","Permission removed successfully");
    }



}
