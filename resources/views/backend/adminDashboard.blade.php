@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Dashboard')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                @php          
                    $userdata = App\Models\User::find(auth()->user()->id);
                    $permissiondata = $userdata->permissions()->pluck('name');
                    //dd($permissiondata);
                @endphp

<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-file-text fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{{ $adminpages }}</div>
                    <div>Pages</div>
                </div>
            </div>
        </div>
                    @if($permissiondata->contains('pages.index') || $userdata->id == 1)
                    <a href="/admin/pages/all">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    @endif
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $admincourses }}</div>
                                    <div>Courses</div>
                                </div>
                            </div>
                        </div>
                        @if($permissiondata->contains('courses.index') || $userdata->id == 1)
                        <a href="/admin/courses/all">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>
                
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $admincondemands }}</div>
                                    <div>On Demand Courses</div>
                                </div>
                            </div>
                        </div>
                        @if($permissiondata->contains('courses.index') || $userdata->id == 1)
                        <a href="/admin/ondemand/all">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>
  

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $adminsubscriptions }}</div>
                                    <div>Subscriptions</div>
                                </div>
                            </div>
                        </div>
                    @if($permissiondata->contains('subscriptions.index') || $userdata->id == 1)
                        <a href="/admin/subscriptions/all">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $subscribers }}</div>
                                    <div>Subscribers</div>
                                </div>
                            </div>
                        </div>
                        @if($permissiondata->contains('subscribers.index') || $userdata->id == 1)
                        <a href="/admin/subscribers/all">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-violet">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-male fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $admintrainings }}</div>
                                    <div>Trainings</div>
                                </div>
                            </div>
                        </div>
                        @if($permissiondata->contains('trainings.index') || $userdata->id == 1)
                        <a href="/admin/trainings/all">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-brown">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $adminevents }}</div>
                                    <div>Events</div>
                                </div>
                            </div>
                        </div>
                        @if($permissiondata->contains('events.index') || $userdata->id == 1)
                        <a href="/admin/events/all">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-darkyellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $adminwellness }}</div>
                                    <div>Wellness Center</div>
                                </div>
                            </div>
                        </div>
                        @if($permissiondata->contains('wellness.index') || $userdata->id == 1)
                        <a href="/admin/wellness-center">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-darkblue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $adminorders }}</div>
                                    <div>Orders</div>
                                </div>
                            </div>
                        </div>
                        @if($permissiondata->contains('orders.index') || $userdata->id == 1)
                        <a href="/admin/orders/all">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endif
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