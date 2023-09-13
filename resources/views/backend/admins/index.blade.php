@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Admins')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        @if(auth()->user()->id == 1)
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Admin power users
                            <span>
                            </span>

                            <span>
                                <a class="bgcolorOne" href="{{route('admin.dashboard.admin.add')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add New</a>
                            </span>
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
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; 
                                    @endphp
                                    @if(count($adminusers) > 0)
                                    @foreach($adminusers as $user)
                                    @php
                                        $userpermissions = $user->permissions()->get();
                                        //$permissions = explode(",", $userpermissions);
                                        //dd($user->type);
                                    @endphp
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $user->name }}</strong></td>
                                        <td class="main_page_title">{{ $user->lastname }}</td>
                                        <td class="main_page_title">{{ strtolower($user->email) }}</td>
                                        <td class="main_page_title">Admin</td>
                                        <td width="20%" class="main_page_title permissionListItems">
                                            @if($user->id === 1)
                                            <span style="background:none;color:#000">All</span>
                                            @else
                                                @foreach ($userpermissions as $permission)
                                                    <span>{{$permission->info}}</span>@if( !$loop->last),@endif
                                                @endforeach
                                            @endif
                                        </td>
                                        {{-- <td class="main_page_title">{{ $user->subscription }}</td> --}}
           
                                        @if($user->id != 1 || auth()->user()->id === 1)
                                        <td>
                                            @if(auth()->user()->id == $user->id || auth()->user()->id == 1)
                                            <ul class="actionList">
                                                <li><a href="{{ route('admin.dashboard.admin.edit', $user->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.dashboard.admin.destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                
                                                </li>
                                                {{-- <li><a href="{{ route('admin.dashboard.usershow', $user->id) }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a></li> --}}
                                            </ul>
                                            @else
                                            <span style="color:#9d9999;">Disabled</span>
                                            @endif
                                        </td>
                                        @else
                                        <td style="color:#9d9999;">Disabled</td>
                                        @endif
                                       
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">No admin users found.</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>

                  
                </div>
             
            </div>
            
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        @else
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Admin power users
                            
                        </h1>
                        
                    </div>
                </div>
            </div>
            <div class="permission_restricted">You don't have permission to view this page.</div>
        @endif
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#dataTables1').DataTable({
            responsive: true
        });
    });
</script>

@endsection