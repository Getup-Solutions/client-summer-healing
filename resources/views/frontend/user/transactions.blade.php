@extends('layouts.user.userLayout')
@section('content')
@section('title', 'My Transactions')
@section('meta_keyword', 'My Transactions')
@section('meta_description', 'My Transactions')

 <!-- MY ACCOUNT START -->
 <section class="set-top-spacing my-account">
    <div class="container-fluid">
        <!-- ACCOUNT HEADER START -->
        @include('layouts.user.inc.usermenus')
        <!-- ACCOUNT HEADER END -->
        <div class="my-transactions index-minus position-relative">
            <!-- TABLE START -->
            <div class="row init-animation" data-sal="slide-up" style="--sal-duration: 1s">
                <div class="col-xl-11 mx-auto">
                    {{-- <div class="table-responsive-xl">
                        <h2 style="padding: 5px 20px;">Subscriptions</h2>
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th colspan="8" class="p-0">
                                        <div class="input-group">
                                            <input type="text" class="border-0 form-control px-3 py-4"
                                                placeholder="Search results 4 of 40">
                                            <button class="btn border-0 py-0 px-3 bg-transparent me-2"
                                                type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="none" viewBox="0 0 18 18">
                                                    <g clip-path="url(#a)" opacity=".3">
                                                        <path fill="#F1F1F1" fill-opacity=".8"
                                                            d="M9.75 16.5c4.549 0 8.25-3.701 8.25-8.25C18 3.701 14.299 0 9.75 0 5.201 0 1.5 3.701 1.5 8.25c0 4.549 3.701 8.25 8.25 8.25Zm0-15a6.758 6.758 0 0 1 6.75 6.75A6.758 6.758 0 0 1 9.75 15 6.758 6.758 0 0 1 3 8.25 6.758 6.758 0 0 1 9.75 1.5Z" />
                                                        <path fill="#F1F1F1" fill-opacity=".8"
                                                            d="M.752 18a.748.748 0 0 0 .53-.22l3.596-3.596a.75.75 0 0 0-1.061-1.06L.22 16.72A.75.75 0 0 0 .751 18Z" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" d="M0 0h18v18H0z"
                                                                transform="matrix(-1 0 0 1 18 0)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>

                                            </button>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Interval</th>
                                    <th>Price</th>
                                    <th>Start on</th>
                                    <th>End on</th>
                                    <th>T ID</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $subscriptiondetails = auth()->user()->usersubscription()->simplepaginate(1);
                                //dd($subscriptiondetails);
                                $i = 1;
                                @endphp

                                @foreach ($subscriptiondetails as $subscription)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $subscription->title }}</td>
                                    <td>{{ ucfirst($subscription->interval) }}</td>
                                    <td>${{ $subscription->price }}</td>
                                    <td>{{ date("d-m-Y",$subscription->start_date)}}</td>
                                    <td>{{ date("d-m-Y",$subscription->next_date)}}</td>
                                    <td>{{ $subscription->transaction_id }}</td>
                                    <td>{{ $subscription->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-center w-100 pagination" style="padding-bottom:90px;">
                        <nav class="mt-5">
                            <ul class="spagination">
                                {{ $subscriptiondetails->links() }}

                            </ul>
                        </nav>
                    </div> --}}



                    
        



        <div id="subscription_transaction" class="dataTables_wrapper dt-bootstrap5">
            <h2 style="padding: 20px 0px;text-transform:uppercase;">Subscriptions</h2>
            <div class="row dt-row">
                <div class="col-sm-12">
                    <table id="subscription_transaction_tbl" class="subscriptiontable table table-striped dataTable" style="width: 100%;" aria-describedby="example_info">
						<thead>
							<tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Interval</th>
                                <th>Price</th>
                                <th>Start on</th>
                                <th>End on</th>
                                <th>T ID</th>
                                <th>Status</th>
                            </tr>
						</thead>
						<tbody>
                            @php
                            $subscriptiondetails = auth()->user()->usersubscription()->orderby('id','desc')->get();
                            //dd($subscriptiondetails);
                            $i = 1;
                            @endphp
                            @foreach ($subscriptiondetails as $subscription)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $subscription->title }}</td>
                                <td>{{ ucfirst($subscription->interval) }}</td>
                                <td>${{ $subscription->price }}</td>
                                <td>{{ date("d-m-Y",$subscription->start_date)}}</td>
                                <td>{{ date("d-m-Y",$subscription->next_date)}}</td>
                                <td>{{ $subscription->transaction_id }}</td>
                                <td>{{ $subscription->status }}</td>
                            </tr>
                            
                            @endforeach
                        </tbody>
					</table>
                </div>
            </div>
        </div>

        <hr>


        <div id="courses_transaction" class="dataTables_wrapper dt-bootstrap5">
            <h2 style="padding: 20px 0px;text-transform:uppercase;">Courses</h2>
            <div class="row dt-row">
                <div class="col-sm-12">
                    <table id="courses_transaction_tbl" class="coursetable table table-striped dataTable" style="width: 100%;" aria-describedby="example_info">
						<thead>
							<tr>
                                <th>SN</th>
                                <th>Course</th>
                                <th>Total</th>
                                <th>Quantity</th>
                                <th>Status</th>
                            </tr>
						</thead>
						<tbody>
                            @php
                            $orders = auth()->user()->orders()->simplepaginate(5);
                            //dd($orders);
                            $i = 1;
                            @endphp

                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->course }}</td>
                                <td>${{ $order->total }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>Success</td>
                            </tr>
                            @endforeach
                        </tbody>
					</table>
                </div>
            </div>
        </div>





        <hr>


        <div id="courses_transaction" class="dataTables_wrapper dt-bootstrap5">
            <h2 style="padding: 20px 0px;text-transform:uppercase;">Events</h2>
            <div class="row dt-row">
                <div class="col-sm-12">
                    <table id="courses_transaction_tbl" class="eventstable table table-striped dataTable" style="width: 100%;" aria-describedby="example_info">
						<thead>
							<tr>
                                <th>SN</th>
                                <th>Event</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Venue</th>
                                <th>Price</th>
                                <th>Transaction Id</th>
                                <th>Status</th>
                            </tr>
						</thead>
						<tbody>
                            @php
                            $i = 1;
                            $id = auth()->user()->id;
                            $events = App\Models\User::find($id)->events()->simplepaginate(5);
                            @endphp

                            @foreach ($events as $event)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $event->title }}</td>
                                <td>${{ $event->startdate }}</td>
                                <td>{{ $event->enddate }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->price }}</td>
                                <td>{{ $event->card }}</td>
                                <td>Success</td>
                            </tr>
                            @endforeach
                        </tbody>
					</table>
                </div>
            </div>
        </div>












































                    {{-- COURSES --}}
                    {{-- <div class="table-responsive-xl">
                        <h2 style="padding: 5px 20px;">Courses</h2>
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th colspan="8" class="p-0">
                                        <div class="input-group">
                                            <input type="text" class="border-0 form-control px-3 py-4"
                                                placeholder="Search results 4 of 40">
                                            <button class="btn border-0 py-0 px-3 bg-transparent me-2"
                                                type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="none" viewBox="0 0 18 18">
                                                    <g clip-path="url(#a)" opacity=".3">
                                                        <path fill="#F1F1F1" fill-opacity=".8"
                                                            d="M9.75 16.5c4.549 0 8.25-3.701 8.25-8.25C18 3.701 14.299 0 9.75 0 5.201 0 1.5 3.701 1.5 8.25c0 4.549 3.701 8.25 8.25 8.25Zm0-15a6.758 6.758 0 0 1 6.75 6.75A6.758 6.758 0 0 1 9.75 15 6.758 6.758 0 0 1 3 8.25 6.758 6.758 0 0 1 9.75 1.5Z" />
                                                        <path fill="#F1F1F1" fill-opacity=".8"
                                                            d="M.752 18a.748.748 0 0 0 .53-.22l3.596-3.596a.75.75 0 0 0-1.061-1.06L.22 16.72A.75.75 0 0 0 .751 18Z" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" d="M0 0h18v18H0z"
                                                                transform="matrix(-1 0 0 1 18 0)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>

                                            </button>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th>SN</th>
                                    <th>Course</th>
                                    <th>Total</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php

                                $orders = auth()->user()->orders()->simplepaginate(5);
                                //dd($orders);
                                $i = 1;
                                @endphp

                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $order->course }}</td>
                                    <td>${{ $order->total }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>Success</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-center w-100 pagination">
                        
                        
                        <nav class="mt-5">
                            <ul class="spagination1">
                                {{ $orders->links() }}
                            </ul>
                        </nav>
                    </div> --}}



                </div>
            </div>
            <!-- TABLE END -->
        </div>
    </div>
</section>
<!-- MY ACCOUNT END -->

@endsection

@section('style')

    <style>
        table td {
            padding: .5rem .5rem !important;
            font-size: 15px;
            text-align: left;
        }
        .spagination .relative.inline-flex.items-center.px-4.py-2.text-sm.font-medium.text-gray-700.bg-white.border.border-gray-300.leading-5.rounded-md.hover\:text-gray-500.focus\:outline-none.focus\:ring.ring-gray-300.focus\:border-blue-300.active\:bg-gray-100.active\:text-gray-700.transition.ease-in-out.duration-150 {
            background: #fdc442 !important;
            border: 0 !important;
            color: #331e1e;
            font-size: 15px;
        }
        .spagination .relative.inline-flex.items-center.px-4.py-2.text-sm.font-medium.text-gray-500.bg-white.border.border-gray-300.cursor-default.leading-5.rounded-md {
            border: 0 !important;
            font-size: 15px;
        }
        .spagination1 .relative.inline-flex.items-center.px-4.py-2.text-sm.font-medium.text-gray-700.bg-white.border.border-gray-300.leading-5.rounded-md.hover\:text-gray-500.focus\:outline-none.focus\:ring.ring-gray-300.focus\:border-blue-300.active\:bg-gray-100.active\:text-gray-700.transition.ease-in-out.duration-150 {
            background: #fdc442 !important;
            border: 0 !important;
            color: #331e1e;
            font-size: 15px;
        }
        .spagination1 .relative.inline-flex.items-center.px-4.py-2.text-sm.font-medium.text-gray-500.bg-white.border.border-gray-300.cursor-default.leading-5.rounded-md {
            border: 0 !important;
            font-size: 15px;
        }
        #subscription_transaction{padding-top:60px;}
        #courses_transaction{padding-top:55px;padding-bottom: 2rem;}
        #subscription_transaction_tbl_length label,
        #courses_transaction_tbl_length label {
            color: #f6be41;
            font-size: 16px;
        }
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #b7b7b7;
            border-radius: 0px;
            padding: 4px;
            color: white;
            font-size: 14px;
            background: #c10d0d00;
        }
        #subscription_transaction_tbl_filter label,
        #courses_transaction_tbl_filter label  {
            color: #f7bf41;
            font-size: 15px;
        }
        #subscription_transaction_tbl_filter input,
        #courses_transaction_tbl_filter input {
            color: #fbf0d9;
            padding-left: 10px !important;
        }
        #subscription_transaction_tbl_filter,
        #courses_transaction_tbl_filter {
            margin-bottom: 1rem;
        }
        #subscription_transaction_tbl_info,
        #courses_transaction_tbl_info{
            color: #fdc442;
            font-size: 15px;
            margin-top: 1rem;
        }
        #subscription_transaction_tbl_paginate,
        #courses_transaction_tbl_paginate {
            margin-top: 1rem;
        }
        #subscription_transaction_tbl_paginate a,
        #courses_transaction_tbl_paginate a {
            color: #fdc442 !important;
            font-size: 16px;
            border: transparent;
        }
        #subscription_transaction_tbl_paginate a#subscription_transaction_tbl_previous:hover,
        #subscription_transaction_tbl_paginate a#subscription_transaction_tbl_next:hover,
        #courses_transaction_tbl_paginate a#course_transaction_tbl_previous:hover,
        #courses_transaction_tbl_paginate a#course_transaction_tbl_next:hover  {
            background: none;
            border: transparent;
        } 
        #subscription_transaction_tbl_paginate a.paginate_button:hover,
        #course_transaction_tbl_paginate a.paginate_button:hover {
            background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
            border: transparent;
        }
        #subscription_transaction_tbl th,
        #course_transaction_tbl th {
            font-size: 14px;
            text-transform: capitalize;
            font-weight: 500;
            text-align: left;
            margin: 0;
        }
        hr {
            color: #ffbb19;
            margin-top: 6rem;
        }
    </style>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // var table1 = $('#subscription_transaction_tbl').DataTable( {
        //     responsive: true,
        // } );
    
        // new $.fn.dataTable.FixedHeader( table1 );
        
        $('table.subscriptiontable').DataTable();

        $('table.eventstable').DataTable();

        $('table.coursetable').DataTable();
    } );
</script>
@endsection