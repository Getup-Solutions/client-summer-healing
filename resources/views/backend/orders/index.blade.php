@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Orders') 
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Orders
                            {{-- <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.subscriber.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add New</a>
                            </span> --}}
                            @php          
                                $userdata = App\Models\User::find(auth()->user()->id);
                                $permissiondata = $userdata->permissions()->pluck('name');
                                //dd($permissiondata);
                            @endphp
                            @if($permissiondata->contains('orders.index') || $userdata->id == 1)
                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.export-orders') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Export</a>
                            </span>
                            @endif
                        </h1>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
            <div class="row filterOptions">
                <div class="col-lg-12 col-md-12">
                  <form method="get" action="/admin/orders/all">
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
            

            @if($permissiondata->contains('orders.index') || $userdata->id == 1)
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
                                        <th>Order Date</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Phone</th>
                                        <th>Subscriber</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title">{{ $order->created_at }}</td>
                                        <td class="main_page_title">{{ $order->username }}</td>
                                        <td class="main_page_title">{{ $order->course }}</td>
                                        <td class="main_page_title">{{ $order->quantity }}</td>
                                        <td class="main_page_title">${{ $order->total }}</td>
                                        <td class="main_page_title">{{ $order->userphone }}</td>
                                        <td class="main_page_title">{{ strtolower($order->useremail) }}</td>
                                        <td class="main_page_title">{{ $order->type == "course" ? "Course" : "Training" }}</td>
                                        {{--<td>
                                            <ul class="actionList">
                                                 <li><a href="{{ route('admin.dashboard.subscriber.edit', $user->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li> --}}
{{--                                                 <li>

                                                    <form action="{{ route('admin.dashboard.subscriber.destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                
                                                </li> 
                                            </ul>
                                        </td>--}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>

                  
                </div>
             
            </div>
            @else
            <div class="permission_restricted">You don't have permission to view this page.</div>
            @endif
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('style')

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#dataTables1').DataTable({
            responsive: true,
            pageLength: 30
        });
    });
</script>
@endsection