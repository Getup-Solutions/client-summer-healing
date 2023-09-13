@extends('layouts.admin.adminLayout')
   
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header" style="display: block;">Edit <strong>{{ $adminuser->name }}</strong></h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.adminusersettings.update', $adminuser->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="name" name="name" type="text" value="{{ $adminuser->name }}">
                                        @error('name')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>User Email</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="email" name="email" type="email" value="{{ $adminuser->email }}">
                                        @error('email')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>User Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" value="">
                                        <p class="smalldesc">Leave this field empty, if you want to use existing password.</p>
                                        @error('password')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="rightSideBtn">
                                    <button type="submit" class="btn btn-default common-button" id="createBtn">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                    </div>
                                </form>
                            </div>
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


@endsection