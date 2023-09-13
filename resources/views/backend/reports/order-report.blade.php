@extends('layouts.admin.adminLayout')

@section('title', 'Admin | Order Reports')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">

                            

                            <h1 class="page-header">Order Reports

                                <!--<span>-->

                                <!--    <a class="bgcolorOne" href="{{ route('admin.export-users') }}">-->

                                <!--    <i class="fa fa-plus" aria-hidden="true"></i>-->

                                <!--     Export</a>-->

                                <!--</span>-->

                            </h1>

                            

                        </div>

                    </div>

                    <!-- /.col-lg-12 -->

                </div>

                <!-- /.row -->

                <div class="row" style="display:none;">

                    <div class="col-lg-12 col-md-12">

                        <div class="panel-body">

                            <form method="POST" action="{{ route('admin.getOrderReportsByPeriod') }}">

                                @csrf

                                 <div class="form-group">

                                        <label>Start Date</label>

                                        <span class="datecal">

                                        <input type="text" placeholder="Select Date"  class="form-control @error('startdate') is-invalid @enderror" id="from" name="startdate" value="{{ old('startdate') }}">

                                        </span>

                                        @error('startdate')

                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>End Date</label>

                                        <span class="datecal">

                                        <input type="text" placeholder="Select Date" class="form-control @error('enddate') is-invalid @enderror" id="to" name="enddate" value="{{ old('enddate') }}">

                                        </span>

                                        @error('enddate')

                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>


                                    <div>
                                        <button type="submit" class="btn btn-primary">Get Details</button>
                                    </div>

                            </form>

                        </div>

                    </div>

                </div>
                
                
                 
                
                
                
                
                @php
                
                
                @endphp

                <div class="row"  id="formGroupWrap">
                    <form method="GET" action="{{route('admin.orderReportsPost')}}" name="search">
                       
                    <div class="form-group">
                        <div class="form-group-item">
                            <label>Start date</label>
                            <input type="text" placeholder="Select Date" id="datepicker1" name="datepicker1" value="">
                        </div>
                        
                        <div class="form-group-item">
                            <label>End date</label>
                            <input type="text" placeholder="Select Date" id="datepicker2" name="datepicker2" value="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-group-item">
                            <label>Select Name</label>
                            <select name="username" id="username" class="customFilter selectpicker" data-show-subtext="true" data-live-search="true">
                                <option value="null">----</option>
                                @if(count($allUsers)>0)
                                    @foreach($allUsers as $user)
                                        <option value="{{$user->name}}">{{$user->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        
                        <div class="form-group-item">
                            <label>Select email</label>
                            <select name="useremail" id="useremail" class="customFilter selectpicker" data-show-subtext="true" data-live-search="true">
                                <option value="null">----</option>
                                @if(count($allUsers)>0)
                                    @foreach($allUsers as $user)
                                        <option value="{{$user->email}}">{{$user->email}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-group-item">
                            <label>Select phone</label>
                            <select name="userephone" id="userephone" class="customFilter selectpicker" data-show-subtext="true" data-live-search="true">
                                <option value="null">----</option>
                                @if(count($allUserPhones)>0)
                                    @foreach($allUserPhones as $phone)
                                        <option value="{{$phone->phone}}">{{$phone->phone}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        
                        <div class="form-group-item">
                            <label>Select course</label>
                            <select name="allCourses" id="allCourses" class="customFilter selectpicker" data-show-subtext="true" data-live-search="true">
                                <option value="null">----</option>
                                @if(count($allCourses)>0)
                                    @foreach($allCourses as $course)
                                        <option value="{{$course->title}}">{{$course->title}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    
                    
                    <div><button id="getReportCta">Get Report</button></div>
                    
                    </form>
                    
                </div>   
                    
                <div class="row">
                    
                @php
                //$orders = Session::get('orders');
                //$startdate = Session::get('startdate');
                //$enddate = Session::get('enddate');
                $i = 1;
                @endphp
                
                
                    <div class="panel-body" style="display:none;">
                       
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Order Item</th>
                                            <th>Qty</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($orders)
                                            @if(count($orders) > 0)
                                            {{--@dd($orders)--}}
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{date('d-m-Y H:i', strtotime($order->created_at))}}</td>
                                                        <td>{{$order->username}}</td>
                                                        <td>{{$order->useremail}}</td>
                                                        <td>{{$order->userphone}}</td>
                                                        <td>{{$order->address}}, {{$order->state}}, {{$order->zip}} </td>
                                                        <td>{{$order->course}}</td>
                                                        <td>{{$order->quantity}}</td>
                                                        <td>{{$order->total}}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                    </div>

                </div>


            </div>

        </div>

        <!-- /.row -->

    </div>

    <!-- /.container-fluid -->

</div>

<!-- /#page-wrapper -->

@endsection



@section('script')



<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"> </script>
 
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script>

    $(document).ready(function() {
        
    $( function() {
        var dateFormat = "mm/dd/yy",
          from = $( "#datepicker1" ).datepicker({
              defaultDate: "+1w",
              changeMonth: true,
              numberOfMonths: 1,
              showOn: "button",
              buttonImage: '{{asset("/backend/images/cal.png")}}',
              buttonImageOnly: true,
            })
            .on( "change", function() {
              to.datepicker( "option", "minDate", getDate( this ) );
            }),
          to = $( "#datepicker2" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            showOn: "button",
            buttonImage: '{{asset("/backend/images/cal.png")}}',
            buttonImageOnly: true
          })
          .on( "change", function() {
            from.datepicker( "option", "maxDate", getDate( this ) );
          });
 
        function getDate( element ) {
          var date;
          try {
            date = $.datepicker.parseDate( dateFormat, element.value );
          } catch( error ) {
            date = null;
          }
     
          return date;
        }
    } );
  
  

    $('#dataTables1').DataTable({
        responsive: true,
        paging: true,
        pageLength: 30
    });
        
    $('.customFilter').selectpicker();
    
    
   

        

        

    });
    
    
  
</script>



@endsection



@section('style')

<style>

    .datecal {

        position: relative;

        display: block;

        width: 200px;

    }

    .datecal img {

        position: absolute;

        right: 10px;

        top: 50%;

        transform: translateY(-50%);

        width: 15px;

    }
    
    .date-ranges {font-size: 17px;color: #bb8a45;font-weight: 600;}   
    .ui-datepicker-trigger {height: 28px;vertical-align: bottom;}
    #formGroupWrap label{display:block;}
    .form-group {
      display: flex;
    }
    .form-group-item {
      margin-right:2rem;
    }
    #datepicker1:focus-visible, #datepicker2:focus-visible {
        outline:none;
    }
    #datepicker1, #datepicker2 {
      border: 1px solid #dbcece;
      height: 32px;
      border-radius: 3px;
      width: 193px;
    }

</style>

@endsection