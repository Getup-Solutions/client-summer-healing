@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Course Schedule')
   
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">All Schedules
                            
                        </h1>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="scheduleNewForm">
                    <form method="POST" action="{{route('admin.dashboard.schedules.storeRecurring')}}" id="scheduleCreateForm">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Select a Course</label>
                            <select name="course" id="course" class="form-control">
                                <option value="" selected>--Select course</option>
                                @foreach ($courses as $course)
                                    <option value="{{$course->title}}" data-slug="{{$course->slug}}" data-course="{{$course->id}}">{{$course->title}}</option>
                                @endforeach
                            </select>
                            @error('course')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="exampleInputPassword1">Start Date</label>
                                <input type="date" class="form-control" name="scheduledate" id="scheduledate" placeholder="Date">
                                @error('scheduledate')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="exampleInputPassword1">End Date</label>
                                <input type="date" class="form-control" name="scheduledateend" id="scheduledateend" placeholder="Date">
                                @error('scheduledateend')
                                    <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            
                         <div class="form-group row">
                            <div class="col-md-4">
                                <label for="exampleInputPassword1">Time</label>
                                <div class="timewrap">
                                    <input type="text" class="form-control" name="scheduletime" id="scheduletime" placeholder="Start Time">
                                    <span class="input-group-addon" id="timeClock">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                                @error('scheduletime')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                       
                            {{-- <div class="col-md-4">
                                <label for="exampleInputPassword1">End Time</label>
                                <div class="timewrap">
                                    <input type="text" class="form-control" name="scheduletimeend" id="scheduletimeend" placeholder="End Time">
                                    <span class="input-group-addon" id="endtimeClock">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                                @error('scheduletimeend')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Duration (In hour)</label>
                            <select name="duration" id="duration" class="form-control">
                                <option value="" selected disabled>--Select--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                
                            </select>
                            @error('duration')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Days</label>
                            <div class="days" id="days">
                                <div class="day">
                                    <label for="">
                                        <input type="checkbox" id="scheduledays" name="scheduledays[]" data-day="monday" value="1">
                                        <label for="monday"> Monday</label>
                                    </label>
                                </div>
                                <div class="day">
                                    <label for="">
                                        <input type="checkbox" id="scheduledays" name="scheduledays[]" data-day="tuesday" value="2">
                                        <label for="tuesday"> Tuesday</label>
                                    </label>
                                </div>
                                <div class="day">
                                    <label for="">
                                        <input type="checkbox" id="scheduledays" name="scheduledays[]" data-day="wednesday" value="3">
                                        <label for="wednesday"> Wednesday</label>
                                    </label>
                                </div>
                                <div class="day">
                                    <label for="">
                                        <input type="checkbox" id="scheduledays" name="scheduledays[]" data-day="thursday" value="4">
                                        <label for="thursday"> Thursday</label>
                                    </label>
                                </div>
                                <div class="day">
                                    <label for="">
                                        <input type="checkbox" id="scheduledays" name="scheduledays[]" data-day="friday" value="5">
                                        <label for="friday"> Friday</label>
                                    </label>
                                </div>
                                <div class="day">
                                    <label for="">
                                        <input type="checkbox" id="scheduledays" name="scheduledays[]" data-day="saturday" value="6">
                                        <label for="saturday"> Saturday</label>
                                    </label>
                                </div>
                                <div class="day">
                                    <label for="">
                                        <input type="checkbox" id="scheduledays" name="scheduledays[]" data-day="sunday" value="7">
                                        <label for="sunday"> Sunday</label>
                                    </label>
                                </div>
                            </div>
                            @error('duration')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div id="GFG_DOWN"></div>


                        <input type="hidden" name="courseid" id="courseid">
                        <input type="hidden" name="scheduletype" id="scheduletype" value="recurringschedule">
                        <input type="hidden" name="dataday" id="dataday" value="">
                        <input type="hidden" name="slug" id="slug">
                        <button type="button" style="display:none;width:0;" id="storbtn" onclick="myFunc()">Store Values to hidden text field->dont remove this button</button>

                        <button type="submit" class="btn btn-default common-button"><i class="fa fa-floppy-o" aria-hidden="true"></i> Create</button>
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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <link href="{{ asset('backend/css/jquery.datetimepicker.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('backend/js/jquery.datetimepicker.js') }}"></script>
        <script>

            function myFunc() {
                let arr = [];
                let checkboxes = document.querySelectorAll("input[type='checkbox']:checked");
                for (let i = 0; i < checkboxes.length; i++) {
                    arr.push(checkboxes[i].getAttribute("data-day"));
                }
                document.getElementById("dataday").value = arr; 
            }


            $(document).ready(function(){

                // var array = [];
                // $('#days input[type=checkbox]').click(function(){
                //     //$("#scheduledays").each(function() {
                //         array.push($(this).data('day'));
                //         console.log();
                //     //});
                //     $('#dataday').val(array);
                // });

                $('#days input[type=checkbox]').change(function(){
                    $("#storbtn").trigger('click');
                });

            

                $('#trainers').select2();
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
                    format:'H:i A',
                    datepicker:false,
                    step:60,
                    inline:false,
                    //hours12:true,
                    defaultTime:'09:00'
                });

                jQuery('#endtimeClock').click(function(){
                    jQuery('#scheduletimeend').datetimepicker('show');
                });
                
                $('#scheduletimeend').datetimepicker({
                    format:'H:i A',
                    datepicker:false,
                    step:60,
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