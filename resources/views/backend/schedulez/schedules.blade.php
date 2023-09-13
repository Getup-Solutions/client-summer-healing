@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Course Schedule')
   
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Schedules
                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.schedulez.scheduleindex') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add Schedule</a>
                            </span>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>
    
     <div class="row filterOptions" style="margin-bottom:2rem">
    <div class="col-lg-12 col-md-12">
      <form method="get" action="/admin/schedule/all">
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

    <div class="container-fluid" id="scheduleGridContainer">
        <div class="row">
            @if(count($schedulez) > 0)
            @foreach ($schedulez as $schedule)
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{-- {{ date('d-m-Y', strtotime($schedule->scheduledate)) }} --}}
                        @php
                            $fullDay = date('l', strtotime($schedule->scheduledate));
                            $dateInt = date('jS M Y', strtotime($schedule->scheduledate));
                            //$monthStr = date('M', strtotime($schedule->scheduledate));
                            //dd($monthInt);
                            $allCourses = App\Models\Admincourse::where(['status'=>'Published'])->get();
                            $findCourseExists = $allCourses->contains($schedule->courseid);
                            //dd($findCourseExists);
                        @endphp

                        {{$fullDay}}, {{$dateInt}}
                    </div>
                    @if($findCourseExists == true)
                    <div class="panel-body scheduleItemDivWrapper equalHeight">
                        <div><b>Course:</b> {{ strtoupper($schedule->title) }}</div>
                        <div><b>Date:</b> {{ date('d-m-Y', strtotime($schedule->scheduledate)) }}</div>
                        <div><b>Time Start:</b> {{ $schedule->scheduletime }}</div>
                        
                        @if($schedule->type != "recurring")
                        <div><b>Duration:</b>
                            @php
                                $starttime = date("g:ia", strtotime($schedule->scheduletime));
                                $endtime = date("g:ia", strtotime($schedule->scheduletimeend));
                                $start = Carbon\Carbon::parse($starttime);
                                
                                $end = Carbon\Carbon::parse($endtime); 
                                //dd($end->diffInMinutes($start));
                                if($end->diffInMinutes($start) > 15){
                                    echo $end->diffInMinutes($start) . " min";
                                }
                                if($end->diffInHours($start) > 15){
                                    echo $end->diffInHours($start) * 3600 / 60 . " min";
                                }
                            @endphp
                        </div>
                        @endif
                        {{-- <div><b>Duration:</b> {{ $schedule->totalduration * 3600 / 60 }} mins</div>
                        <div><b>Time End:</b> {{ $schedule->scheduletimeend }}</div> --}}
                        <div><b>Type:</b> {{ ucfirst($schedule->schedule_type) }} Schedule</div>
                        <div><b>Status:</b> {{ $schedule->status }}</div>
                        <div><b>Created On:</b> {{ $schedule->created_at }}</div>
                        
                        
                    </div>
                    @else
                    <div class="panel-body scheduleItemDivWrapper equalHeight">
                        <div class="scheduleCourseNotFound"><b>The course under this schedule is not available or removed. <br/>Please edit and choose a course.</div>
                    </div>
                    @endif
                    <div class="panel-footer">
                    @if($schedule->schedule_type == "recurring")
                    <a href="{{ route('admin.dashboard.schedule.editRecurring', $schedule->id) }}" class="btn btn-block btn-social btn-github"><i class="fa fa-pencil-square-o"></i> </a> 
                    @else
                    <a href="{{ route('admin.dashboard.schedule.editCoursechedule', $schedule->id) }}" class="btn btn-block btn-social btn-github"><i class="fa fa-pencil-square-o"></i> </a> 
                    @endif
                    @if($findCourseExists == true)
                    <a href="{{route('admin.dashboard.schedulez.scheduleview', $schedule->id)}}" class="btn btn-block btn-social btn-facebook"><i class="fa fa-eye"></i> </a>
                    @endif
                    {{-- <a href="{{route('admin.dashboard.schedulez.scheduledelete',)}}" class="btn btn-block btn-social btn-pinterest"><i class="fa fa-trash-o"></i> </a>    --}}

                    <form action="{{ route('admin.dashboard.schedulez.scheduledelete', $schedule->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-block btn-social btn-pinterest" style="height: 35px;padding:0 20px;width:35px;vertical-align: text-bottom;" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </form>
    
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            @endforeach
            @else
            <div class="col-md-12 noResultsFoundNow">No Result Found!</div>
            @endif
            <div class="schedule-paginate">
                <br/>
                <br/>
                {!! $schedulez->links() !!}
            </div>
        </div>
    </div>


@endsection

@section('script')
<script>
    (function () {
      equalHeight(false);
    })();
     
    window.onresize = function(){
      equalHeight(true);
    }
     
    function equalHeight(resize) {
      var elements = document.getElementsByClassName("equalHeight"),
          allHeights = [],
          i = 0;
      if(resize === true){
        for(i = 0; i < elements.length; i++){
          elements[i].style.height = 'auto';
        }
      }
      for(i = 0; i < elements.length; i++){
        var elementHeight = elements[i].clientHeight;
        allHeights.push(elementHeight);
      }
      for(i = 0; i < elements.length; i++){
        elements[i].style.height = Math.max.apply( Math, allHeights) + 'px';
        if(resize === false){
          elements[i].className = elements[i].className + " show";
        }
      }
    }
</script>
@endsection

@section('style')
<style>
    #scheduleGridContainer a {
        color: #fff;
        height: 35px;
        width: 30px;
        margin-right: 8px;
        padding-right: 0;
    }
    .panel-default > .panel-heading {
        font-size: 17px;
        font-weight: 600;
        color: #fff;
        background-color: #bb8a45;
        border: 1px solid #bb8a45;
    }
    .btn-social > :first-child {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 32px;
        line-height: 34px;
        font-size: 1.4em;
        text-align: center;
        right: 0;
        margin: 0 auto;
        border-right: 0;
    }
    .panel-footer {
        display: flex;
        align-items: flex-end;
        text-align:right;
        justify-content: flex-end;
    }
    .schedule-paginate .hidden {
        display: block !important;
        visibility: visible !important;
    }
    .schedule-paginate .hidden svg {
        width: 30px;
        vertical-align: middle;
    }
    .schedule-paginate .hidden a{color: #363636!important;}
    .schedule-paginate .flex.items-center.justify-between div.flex {
        display: none;
    }
    .relative.inline-flex.items-center.px-4.py-2.-ml-px.text-sm.font-medium.text-gray-500.bg-white.border.border-gray-300.cursor-default.leading-5 {
        background: #bb8a45;
        color: #fff;
        display: inline-block;
        padding: 5px 10px;
        margin: 0 2px;
    }
    .relative.inline-flex.items-center.px-4.py-2.-ml-px.text-sm.font-medium.text-gray-700.bg-white.border.border-gray-300.leading-5.hover\:text-gray-500.focus\:z-10.focus\:outline-none.focus\:ring.ring-gray-300.focus\:border-blue-300.active\:bg-gray-100.active\:text-gray-700.transition.ease-in-out.duration-150 {
        background: #363636;
        color: #fff !important;
        display: inline-block;
        padding: 5px 10px;
        margin: 0 2px !important;
        height: auto !important;
        width: auto !important;
        padding-right: 10px !important;
        text-decoration: none;
    }
    .schedule-paginate {
        text-align: center;
        float: left;
        width: 100%;
        margin-top: 1rem;
    }
    .schedule-paginate .text-sm.text-gray-700.leading-5 {
        display: none;
    }
</style>
@endsection
