@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Add a Admin user')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Admin User add
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
                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.admin.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') }}">
                                        @error('lastname')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
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
                                        <div style="margin-bottom:2rem;background:#ffe2bc;padding:1rem;display: inline-block;cursor:pointer;"><label style="cursor:pointer;"><input type="checkbox" id="select_all" /> Select all</label></div>
                                        @php
                                            $permissions = App\Models\Permission::orderby('name', 'asc')->get();
                                        @endphp
                                        <div class="permissionslist">
                                            @foreach ($permissions as $permission)
                                            <p><input type="checkbox" name="permission[]" id="permissions" value="{{$permission->id}}" class="checkboxs" data-name="{{$permission->name}}">  {{$permission->info}}</p>
                                            @endforeach
                                        </div>
                                    </div>

                                    


                                    <div class="rightSideBtn">
                                    <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Create</button>
                                    </div>
                                </form>
                            </div>
                        
                        </div>
                        <!-- /.table-responsive -->
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
        $(document).ready(function(){
            $('#select_all').on('click',function(){
                if(this.checked){
                    $('.checkboxs').each(function(){
                        this.checked = true;
                    });
                }else{
                    $('.checkboxs').each(function(){
                        this.checked = false;
                    });
                }
            });
            
            $('.checkboxs').on('click',function(){
                if($('.checkboxs:checked').length == $('.checkboxs').length){
                    $('#select_all').prop('checked',true);
                }else{
                    $('#select_all').prop('checked',false);
                }
            });
        });
    });
</script>

@endsection