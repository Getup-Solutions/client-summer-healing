@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Subscribers')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Users
                            <span>
                            </span>

                            {{-- <span>
                                <a class="bgcolorOne" href="{{ route('admin.export-orders') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Export</a>
                            </span> --}}
                        </h1>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
             <div class="row filterOptions">
                <div class="col-lg-12 col-md-12">
                  <form method="get" action="/admin/users">
                        <div class="input-group">
                            <select class="form-select-filter" name="date_filter">
                                <option value="">All</option>
                                <option value="today" {{ $dateFilter == 'today' ? 'selected' : '' }}>Today</option>
                                <option value="yesterday" {{ $dateFilter == 'yesterday' ? 'selected' : '' }}>Yesterday</option>
                                <option value="this_week" {{ $dateFilter == 'this_week' ? 'selected' : '' }}>This Week</option>
                                <option value="last_week" {{ $dateFilter == 'last_week' ? 'selected' : '' }}>Last Week</option>
                                <option value="this_month" {{ $dateFilter == 'this_month' ? 'selected' : '' }}>This Month</option>
                                <option value="last_month" {{ $dateFilter == 'last_month' ? 'selected' : '' }}>Last Month</option>
                                <!--<option value="last3_month" {{ $dateFilter == 'last3_month' ? 'selected' : '' }}>Last 2 Month</option>-->
                                <option value="this_year" {{ $dateFilter == 'this_year' ? 'selected' : '' }}>This Year</option>
                                <option value="last_year" {{ $dateFilter == 'last_year' ? 'selected' : '' }}>Last Year</option>
                                </select>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            @php          
                $userdata = App\Models\User::find(auth()->user()->id);
                $permissiondata = $userdata->permissions()->pluck('name');
                //dd($permissiondata);
            @endphp

            @if($permissiondata->contains('subscribers.index')|| $permissiondata->contains('users.index') || $userdata->id == 1)
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
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Subscription</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    {{-- @dd($users) --}}
                                    @if(count($users) > 0)
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $user->name }} <span style="color:#229d2a;font-size:11px;">@if($user->from_leads == "Yes") (leads) @endif</span></strong></td>
                                        <td class="main_page_title">{{ strtolower($user->email) }}</td>
                                        <td class="main_page_title">Subscriber</td>
                                        <td class="main_page_title">{!! $user->subscription != "" ? $user->subscription : '<span style="color:red">No Subscription</span>' !!}</td>
                                        <td>
                                            <ul class="actionList">    

                                                <li><a href="{{ route('admin.dashboard.subscriber.edit', $user->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>

                                                @if($permissiondata->contains('users.delete') || $userdata->id == 1)
                                                <li>

                                                    <form action="{{ route('admin.dashboard.subscriber.destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                
                                                </li>
                                                @endif
                                                <li><a href="{{ route('admin.dashboard.usershow', $user->id) }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">No subscribers found.</td>
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
            @else
            <div class="permission_restricted">You don't have permission to view this page.</div>
            @endif
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
        $('#dataTables1').DataTable({
            responsive: true
        });
    });
</script>

@endsection