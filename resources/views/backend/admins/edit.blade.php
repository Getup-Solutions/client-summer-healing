@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Edit Admin user')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Admin User Edit - {{ $adminuser->name }}
                        </h1>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="panel-body">

                        <div class="row">
                            <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.admin.update', $adminuser->id) }}" >
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $adminuser->name }}">
                                    @error('name')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" type="text" value="{{ $adminuser->lastname }}">
                                    @error('lastname')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $adminuser->email }}">
                                    @error('email')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="panel-heading-seo">
                                    PERMISSIONS
                                </div>

                                <div class="form-group">
                                    @php
                                        $permissions = App\Models\Permission::orderby('name', 'asc')->get();
                                        $userpermissions = $adminuser->permissions()->get();
                                        //dd($userpermissions);
                                    @endphp
                                    <div class="permissionslist">
                                        
                                        @foreach ($permissions as $permission)
                                        <p>
                                            <label class="label"> 
                                                <input type="checkbox" name="permission[]"  id="permissions" value="{{$permission->id}}" data-name="{{$permission->name}}" @if($userpermissions->contains($permission->id)) checked="checked" @endif>  
                                                {{$permission->info}}
                                            </label>
                                        </p>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="rightSideBtn">
                                <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             
            </div>
     
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
       
    });
</script>

@endsection

@section('style')
<style>
    .label {
        color: #000;
        cursor: pointer;
        font-size: 15px;
        font-weight: 400;
    }
</style>
@endsection