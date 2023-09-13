@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Schedule')
   
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Add Schedule
                            
                        </h1>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>


    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="newScheduleBtnnWrap">
                <a class="newScheduleBtnn" href="{{ route('admin.dashboard.schedule.newCourse') }}">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Create course schedule</a>
                </a>

            </div>
            <!--<div class="newScheduleBtnnWrap">
                <a class="newScheduleBtnn" href="{{ route('admin.dashboard.schedule.recurring.newCourse') }}">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Create recurring course schedule</a>
                </a>
            </div>-->
            </div>
        </div>
    </div>



</div>
@endsection