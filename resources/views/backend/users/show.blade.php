@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Subscribers')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Transactions - {{ $user->name }} {{ $user->lastname }}
                            <span>
                            </span>

                            <span>
                                <a class="bgcolorOne" style="width: 140px;" href="{{ route('admin.dashboard.users') }}">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 Back to users</a>
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
                                        <th>Order Date</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Phone</th>
                                        <th>Subscriber</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $i = 1; 
                                        $orders = $user->orders()->get();
                                        //@dd($orders)
                                    @endphp
                                    {{-- @dd($users) --}}
                                    @if(count($orders) > 0)
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
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">No entries found.</td>
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