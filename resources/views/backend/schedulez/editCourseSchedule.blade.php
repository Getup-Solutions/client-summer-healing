@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Edit Course Schedule')
   
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Edit Schedules</h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="scheduleNewForm">
                    <form method="POST" action="{{route('admin.dashboard.schedule.scheduleUpdate', $schedule->id)}}" id="scheduleCreateForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Select a Course</label>
                            <select name="course" id="course" class="form-control">
                                <option value="" selected>--Select course</option>
                                @foreach ($courses as $course)
                                    <option value="{{$course->title}}" data-slug="{{$course->slug}}" data-course="{{$course->id}}" @if($course->id == $schedule->courseid) selected="selected" @endif>{{$course->title}}</option>
                                @endforeach
                            </select>
                            @error('course')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="date" class="form-control" name="scheduledate" id="scheduledate" placeholder="Date" value="{{$schedule->scheduledate}}">
                            @error('scheduledate')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        
                            <div class="col-md-4">
                                <label for="exampleInputPassword1">Start Time</label>
                                <div class="timewrap">
                                    <input type="text" class="form-control" name="scheduletime" id="scheduletime" placeholder="Start Time" value="{{$schedule->scheduletime}}">
                                    <span class="input-group-addon" id="timeClock">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                                @error('scheduletime')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                       
                            <div class="col-md-4">
                                <label for="exampleInputPassword1">End Time</label>
                                <div class="timewrap">
                                    <input type="text" class="form-control" name="scheduletimeend" id="scheduletimeend" placeholder="End Time" value="{{$schedule->scheduletimeend}}">
                                    <span class="input-group-addon" id="endtimeClock">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                                @error('scheduletimeend')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Duration (In hour)</label>
                            <select name="duration" id="duration" class="form-control">
                                <option value="" selected disabled>--Select--</option>
                                <option value="1" @if($schedule->duration == 1) selected="selected" @endif>1</option>
                                <option value="2" @if($schedule->duration == 2) selected="selected" @endif>2</option>
                                <option value="3" @if($schedule->duration == 3) selected="selected" @endif>3</option>
                                <option value="4" @if($schedule->duration == 4) selected="selected" @endif>4</option>
                                <option value="5" @if($schedule->duration == 5) selected="selected" @endif>5</option>
                                <option value="6" @if($schedule->duration == 6) selected="selected" @endif>6</option>
                                <option value="7" @if($schedule->duration == 7) selected="selected" @endif>7</option>
                                <option value="8" @if($schedule->duration == 8) selected="selected" @endif>8</option>
                                <option value="9" @if($schedule->duration == 9) selected="selected" @endif>9</option>
                                <option value="10" @if($schedule->duration == 10) selected="selected" @endif>10</option>
                                <option value="11" @if($schedule->duration == 11) selected="selected" @endif>11</option>
                                <option value="12" @if($schedule->duration == 12) selected="selected" @endif>12</option>
                                
                            </select>
                            @error('duration')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="Published">Published</option>
                                <option value="Draft">Draft</option>
                            </select>
                        </div>

                        <input type="hidden" name="courseid" id="courseid" value="{{$schedule->courseid}}">
                        <input type="hidden" name="scheduletype" id="scheduletype" value="singleschedule">
                        <input type="hidden" name="slug" id="slug" value="{{$schedule->slug}}">

                        <button type="submit" class="btn btn-default common-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courseDetails" style="visibility:hidden;">
                    <div id="overlayer"></div>
                    <span class="loader">
                    <span class="loader-inner"></span>
                    </span>
                    <h4>Course Details</h4>
                    <div class="course-info">

                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
    
    @section('script')
        <link href="{{ asset('backend/css/jquery.datetimepicker.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('backend/js/jquery.datetimepicker.js') }}"></script>
        <script>
            $(document).ready(function(){
                //DISABLE PREVIOUS DATES ON DATE PICKERS
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();

                today = yyyy + '-' + mm + '-' + dd;
                $('#scheduledate').attr('min',today);

                //TIMEPICKER
                jQuery('#timeClock').click(function(){
                    jQuery('#scheduletime').datetimepicker('show');
                });

                $('#scheduletime').datetimepicker({
                    format:'H:i',
                    datepicker:false,
                    step:15,
                    inline:false,
                    //hours12:true,
                    defaultTime:'09:00'
                });

                jQuery('#endtimeClock').click(function(){
                    jQuery('#scheduletimeend').datetimepicker('show');
                });
                
                $('#scheduletimeend').datetimepicker({
                    format:'H:i',
                    datepicker:false,
                    step:15,
                    inline:false,
                    //hours12:true,
                    defaultTime:'09:00'
                });



                //GETTING SELECTED COURSE DATA
                $("#scheduleCreateForm").get(0).reset()
                
                $('.courseDetails').removeClass('activeCourseDetails');
                $("#course").on('change', function() {
                    $(".loader").fadeIn("slow");
                    $("#overlayer").fadeIn("slow");
                    $('.courseDetails').addClass('activeCourseDetails');
                    var selectedId = $(this).find("option:selected").attr('data-course');
                    $("#courseid").val(selectedId);
                    var selectedSlug = $(this).find("option:selected").attr('data-slug');
                    $("#slug").val(selectedSlug);
                    var userURL = "/admin/course/view/"+ selectedId;
                    $.get(userURL, function (data) {
                        //console.log(data.course.id);
                        if(data.status == 200){
                        $(".loader").delay(2000).fadeOut("slow");
                        $("#overlayer").delay(2000).fadeOut("slow");
                        var outputData = "<div class='coursename'>Course: " + data.course.title + "</div><div class='coursedesc'>" + data.course.excerpt + "</div><div class='coursetype'>Type: " + data.course.coursetype + "</div>";
                        $(".course-info").html(outputData);
                        }
                    });
                });





            });
        </script>
    @endsection

    @section('style')
    <style>
        .coursename {
        padding-bottom: 10px;
        }
        /*PRELOADING------------ */
        #overlayer {
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 1;
        background: #eee;
        left: 0;
        top: 0;
        }
        .loader {
        display: inline-block;
        width: 30px;
        height: 30px;
        position: absolute;
        z-index: 3;
        border: 4px solid #cac3b8;
        top: 10%;
        animation: loader 2s infinite ease;
        right: 0;
        left: 0;
        margin: 0 auto;
        }

        .loader-inner {
        vertical-align: top;
        display: inline-block;
        width: 100%;
        background-color: #f0ad4e;
        animation: loader-inner 2s infinite ease-in;
        }

        @keyframes loader {
        0% {
            transform: rotate(0deg);
        }
        
        25% {
            transform: rotate(180deg);
        }
        
        50% {
            transform: rotate(180deg);
        }
        
        75% {
            transform: rotate(360deg);
        }
        
        100% {
            transform: rotate(360deg);
        }
        }

        @keyframes loader-inner {
        0% {
            height: 0%;
        }
        
        25% {
            height: 0%;
        }
        
        50% {
            height: 100%;
        }
        
        75% {
            height: 100%;
        }
        
        100% {
            height: 0%;
        }
        }
    </style>
@endsection