@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'Schedule | Summer Healing Society')

@section('meta_keyword', 'Schedule')

@section('meta_description', 'Schedule')

@section('content')



<!-- PAGE HEADING START -->

<section class="about-banner position-relative overflow-hidden">

    {{-- <div class="content d-flex align-items-center justify-content-center">

       <div class="container-fluid w-100">

          <div class="row">

             <div class="col-12 text-center mt-3 mt-sm-0">

                <h1 class="lg-heading font-weight-700 text-uppercase mt-5 mt-sm-0" data-sal="slide-up"

                   style="--sal-duration: 1s">

                   Schedule

                </h1>

             </div>

          </div>

       </div>

    </div> --}}

    <!-- SLIDER START -->

    <div class="image-holder image-round image-overlay">

       <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel"

          data-bs-touch="false" data-bs-interval="3000">

          {{-- <div class="carousel-inner">

             <div class="carousel-item active">

                <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/banner-1.webp"

                   class="d-block w-100 lazy" alt="...">

             </div>

             <div class="carousel-item">

                <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/banner-2.webp"

                   class="d-block w-100 lazy" alt="...">

             </div>

          </div> --}}

       </div>

    </div>

    <!-- SLIDER END -->

 </section>







<section class="yoga-course yoga-course-inner spacing-100 pb-0">

   <div class="contain text-center text-md-start" style="max-width:100%;padding-top:2rem;padding-bottom:2rem;">

         <div class="demos__main">

            <div id="demo-content">

                <div class="event-calendar">

                  <div id='calendar'></div>

                </div>

                <div class="event-sidebar" id="eventSidebarDiv">

                  <div class="event-sidebar-data">

                      @php 

                      $todaysPrograms = App\Models\Adminschedule::whereDay('start', now()->day)->first();

                        $day = date('jS', strtotime($todaysPrograms->scheduledate));

                        $month = date('M', strtotime($todaysPrograms->scheduledate));

                        $year = date('Y', strtotime($todaysPrograms->scheduledate));

                        $courseData = App\Models\Admincourse::where('id', (int)$todaysPrograms->courseid)->first();

                        //dd($courseData);

                      @endphp

                    <h4>Schedule Info</h4>

                    <div class="scheduleData">

                      <div class="scheduleTitle">{{$todaysPrograms->title}}</div>

                      <div class="scheduleStart">{{$month}} {{$day}} {{$year}} ({{$todaysPrograms->totalduration * 3600 / 60}} min)</div>

                      <div class="scheduleDuration"><span>{{$todaysPrograms->scheduletime}}</span></div>

                      <div class="scheduleEnd"></div>

                      <div class="scheduleDescription">{{Str::limit(strip_tags($courseData->description, 100))}}</div>

                      <div class="scheduleBookingLink"><span><a href="{{route('add.to.cart',$courseData->id)}}" class='btn btn-primary w-100 mt-3 mt-sm-0'>Book Now</a></span></div>

                    </div>

                  </div>

                </div>

            </div>

          </div>

   </div>

</section>







@endsection



@section('script')



<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>

<script>









document.addEventListener('DOMContentLoaded', function() {



    var calendarEl = document.getElementById('calendar');



    var calendar = new FullCalendar.Calendar(calendarEl, {

      themeSystem: 'bootstrap5',

      //initialDate: '2023-05-12',

      //initialView: 'dayGridMonth',

      initialView: 'listWeek',

      headerToolbar: {

        left: 'prev,next',

        center: 'title',

        right: 'listWeek,dayGridMonth,timeGridDay,dayGridWeek,dayGridDay',

        //right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'

      },

      //height: 'auto',

      // contentHeight: 'auto',

       showNonCurrentDates: false,

       fixedWeekCount: false,

      //navLinks: true, // can click day/week names to navigate views

      //editable: true,

      //selectable: true,

      //selectMirror: true,

      //nowIndicator: true,

      //eventDisplay: 'auto',

      //eventLimit: true,

      //dayMaxEvents: true,

      //multiMonthMaxColumns: 1,

      //nextDayThreshold: '09:00:00',

      //displayEventEnd:true,

      //allDay:false,

      //dayMaxEventRows: true, 

      eventOrder:'start',



  

    //   views: {

    //      dayGridMonth: { 

    //           titleFormat: {month: 'long', year: 'numeric' },

    //           dayHeaderFormat: { weekday: 'long' }

    //      },

    //   },

    

    //  views: {

    //     listWeek: {

    //             titleFormat: {month: 'long', year: 'numeric' },

    //           dayHeaderFormat: { weekday: 'long' }

    //     }

    //   },

    

    

    

    views: {

        timeGridDay: {

          type: 'timeGrid',

          dayHeaderFormat: { weekday: 'short' }

        }

      },

  

  

       eventTimeFormat: { // like '14:30:00'

        hour: '2-digit',

        minute: '2-digit',

        meridiem: true

      },







      eventClick: function(info) {

        var start = info.event._instance.range.start;

        var end = info.event._instance.range.end;



        startDate = moment(start).format("MMM Do YYYY");

        endDate = moment(end).format("MMM Do YYYY");

        today = moment(new Date()).format("YYYY-MM-DD");

        //console.log(endDate);

        //console.log(info);

        

        //GET COURSE DATA FROM DB

        $.ajax({

           url: 'scheduleitem',

           type: 'GET',

           data: {courseid: info.event._def.extendedProps.courseid},

           dataType: 'JSON',

           success: function (response) {

              //console.log(info.event._def.extendedProps.scheduletime);



              var courseExcerpt = response.excerpt;

              var courseDesc = response.description;

              var courseDesc = courseDesc.replace( /(<([^>]+)>)/ig, '');

              //var courseDesc = courseDesc.substring(0,120) + '...';

              

              //console.log(courseDesc);

              //var courseExcerptLimit = courseExcerpt.substring(0,120) + '...';

              var courseExcerptLimit = courseDesc.substring(0,120) + '...';

              

              var courseID = info.event._def.extendedProps.courseid;

              var schedulebooklink = "{{route('add.to.cart',':courseID')}}";

              var schedulebooklink = schedulebooklink.replace(':courseID', courseID)

              

              

              

              

              

              

              

                var hrs = Number(info.event._def.extendedProps.scheduletime.match(/^(\d+)/)[1]);

                var mnts = Number(info.event._def.extendedProps.scheduletime.match(/:(\d+)/)[1]);

                var format = info.event._def.extendedProps.scheduletime.match(/\s(.*)$/)[1];

                if (format == "PM" && hrs < 12) hrs = hrs + 12;

                if (format == "AM" && hrs == 12) hrs = hrs - 12;

                var hours = hrs.toString();

                var minutes = mnts.toString();

                if (hrs < 10) hours = "0" + hours;

                if (mnts < 10) minutes = "0" + minutes;

                var timestart = hours + ":" + minutes + ":00";

                //console.log(timestart); //h:i:s

                

                

                var hrs2 = Number(info.event._def.extendedProps.scheduletimeend.match(/^(\d+)/)[1]);

                var mnts2 = Number(info.event._def.extendedProps.scheduletimeend.match(/:(\d+)/)[1]);

                var format2 = info.event._def.extendedProps.scheduletimeend.match(/\s(.*)$/)[1];

                if (format2 == "PM" && hrs2 < 12) hrs2 = hrs2 + 12;

                if (format2 == "AM" && hrs2 == 12) hrs2 = hrs2 - 12;

                var hours2 = hrs2.toString();

                var minutes2 = mnts2.toString();

                if (hrs2 < 10) hours2 = "0" + hours2;

                if (mnts2 < 10) minutes2 = "0" + minutes2;

                var timeend = hours2 + ":" + minutes2 + ":00";

                

                

                var startTime = new Date(info.event._def.extendedProps.scheduledate +" "+ timestart); 

                var endTime = new Date(info.event._def.extendedProps.scheduledateend +" "+ timeend); 

                

                var difference = endTime.getTime() - startTime.getTime(); // This will give difference in milliseconds

                var resultInMinutes = Math.round(difference / 60000);

                

                

                console.log(resultInMinutes); //h:i:s

                



              jQuery(".event-sidebar .scheduleTitle").html("<span>"+info.event.title+"</span>");

              jQuery(".event-sidebar .scheduleStart").html(startDate + "<span> ("+resultInMinutes+" Min)</span>");

              jQuery(".event-sidebar .scheduleDescription").html("<span>"+courseExcerptLimit+"</span>");

              jQuery(".event-sidebar .scheduleDuration").html("<span>"+info.event._def.extendedProps.scheduletime+"</span>");



              if(info.event._instance.range.start >= new Date()){

                 jQuery(".event-sidebar .scheduleBookingLink").html("<span><a href="+schedulebooklink+" class='btn btn-primary w-100 mt-3 mt-sm-0'>Book Now</a></span>");

              }

              else{

                 jQuery(".event-sidebar .scheduleBookingLink").html("<span><a href='#' class='eventPassedBtn btn btn-primary w-100 mt-3 mt-sm-0'>Event passed</a></span>");

              }

              

              

            $('html, body').animate({

                scrollTop: $("#eventSidebarDiv").offset().top

            }, 200);





            }

         });





      },





      dateClick: function(info) {

         //console.log(info);



         //GET ALL SCHEDULES DATA FROM DB BASED DATE

        $.ajax({

           url: 'scheduleitemdate',

           type: 'GET',

           data: {scheduledateInfo: info.dateStr},

           dataType: 'JSON',

           success: function (response) {

              

            

            

            //console.log(response);



            





            }

         });









               // var parentDiv = document.querySelector(".fc-day .fc-daygrid-day-events");

               // var childDiv = document.querySelector(".fc-daygrid-event-harness");

               // if (parentDiv.contains(childDiv)) {

               //    alert("yes");

               // }

               // else{

               //    alert("no");

               // }



               // var target = $(".fc-daygrid-event-harness");    

               // if (target.parent('.fc-day .fc-daygrid-day-events').length) {

               //    alert('Your clicked element is having div#hello as parent');

               // }





               // console.log(info.dayEl.children[0].children[1].children);

               // var part = info.dayEl.children[0].children[1].children[0];

               // var childDiv = document.querySelector(".fc-daygrid-event-harness");

               // var target = $(".fc-daygrid-event-harness");

               // if (target.parents(part).length) {

               //    alert('Your clicked element is having div#hello as parent');

               // }

               // else{

               //    alert("nos");

               // }



         



         

      },





  









      events: "{{route('page.schedulesjson')}}",







    });



    calendar.render();

  });





$(document).ready(function(){

    //alert();



  $(".fc-list-table tbody tr:nth-child(1)").addClass('dsdfdsdsf');

  

});







</script>

@endsection

@section('style')

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&amp;family=Proza+Libre:wght@400;500&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/calendar-style.css')}}">

<link href="{{asset('Frontend/assets/css/calendar-demo-styles.css')}}" rel='stylesheet'>



<style>

    .fc-direction-ltr .fc-list-day-text, .fc-direction-rtl .fc-list-day-side-text {

        float: left;

        color: #222121;

    }

    .fc .fc-list-table tbody>tr:first-child th {

        padding: 0!important;

    }

    tr.fc-event {

        margin: 10px;

        display: block;

    }

    .fc-direction-ltr .fc-list-table .fc-list-event-graphic {

        padding: 0 7px!important;

    }

    .fc .fc-list-table th {

        padding: 0!important;

    }

    a.fc-list-day-side-text {

        color: #383535;

    }

    .fc .fc-list-sticky .fc-list-day>*{

        position:relative!important;

    }

    td.fc-list-event-time {

        display: none;

    }

    .fc .fc-list-event-dot {

        border: calc(var(--fc-list-event-dot-width)/2) solid #fdc642;

        border-radius: calc(var(--fc-list-event-dot-width)/2);

        box-sizing: content-box;

        display: inline-block;

        height: 0;

        width: 0;

    }

    .fc .fc-list-event-title a {

        cursor: pointer;

    }

    .fc-theme-standard td{

        width: 100%;

    }

    .fc-theme-standard td a {

        padding-left: 5px;

    }

    .scheduleDuration {

        font-size: 15px;

        font-weight: 500;

    }

    .fc-timegrid-event .fc-event-time {

      display: none;

    }

    .fc-daygrid-day-frame .fc-daygrid-event-dot {

      flex-basis: auto;

    }

    @media(max-width:600px){

        .scheduleBookingLink a {

            margin: 0 auto;

        }

        .fc .fc-toolbar-title {

            font-size: 15px;

            text-align:center;

        }

    }

</style>

@endsection