@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Event Detailed')
@section('meta_keyword', 'Event Detailed')
@section('meta_description', 'Event Detailed')

<section class="event-single set-top-spacing">
    <!-- EVENT SINGLE START -->
    <!-- COLUMNS WRPR START  -->
    <div class="row g-0">
        <div class="col-xl-11 mx-auto">
            <div class="container-fluid position-relative clearfix column-wrpr">
                <!-- LEFT COLUMN START -->
                <div class="col-left mb-4 mb-xl-0 mt-4 mt-sm-0">
                    <!-- CARD START -->
                    <div class="card w-100 init-animation" data-sal="slide-up" style="--sal-duration: 1s">
                        <img src="assets/images/loading.gif" data-src="assets/images/cover-page.jpg"
                                class="d-xl-none d-block w-100 lazy mb-3" alt="...">
                        <h3 class="display-6 m-0 text-uppercase font-weight-700">{{ $event->title }}</h3>
                        {!! $event->description !!}
                        <div class="venu-date mt-2 d-xl-flex align-items-center align-items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none"
                                viewBox="0 0 17 17">
                                <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.5 9.031a2.125 2.125 0 1 0 0-4.25 2.125 2.125 0 0 0 0 4.25Z" />
                                <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.813 6.906c0 4.782-5.313 8.5-5.313 8.5s-5.313-3.719-5.313-8.5a5.312 5.312 0 1 1 10.626 0v0Z" />
                            </svg>
                            @php
                                $date = strtotime($event->startdate);
                                $month = date("F",$date);
                                $day = date("d",$date);
                                //dd($day);
                                $monthOfEvent = strtoupper($month);
                                $dayOfEvent = strtoupper($day);
                            @endphp                 
                            <span class="d-block d-xl-inline-block mt-3 mt-xl-0 ms-xl-1">{{ $event->venue }},
                                <span class="text-primary d-xl-inline-block d-block mt-1 mt-xl-0">{{ $monthOfEvent }} {{ $dayOfEvent }} {{ $event->starttime }}</span>
                            </span>
                        </div>
                    </div>
                    <!-- CARD END -->
                </div>
                <!-- LEFT COLUMN END -->
                <!-- RIGHT COLUMN START -->
                @php
                    $user = "";
                    if(auth()->check()){
                        $user = auth()->user()->id;
                    }
                @endphp
                @if($event->user_id != $user)
                <div class="col-right position-sticky mt-5 mt-xl-0 d-none d-xl-block">
                    <div class="ps-xl-5">
                        <div class="card card-price p-0" data-sal="slide-up" style="--sal-duration: 1s">
                            <img src="assets/images/loading.gif" data-src="{{ asset("/backend/images/events_images") }}/{{ $event->image }}"
                                class="d-block w-100 lazy" alt="...">
                            <div class="p-sm-5 pt-4">
                                <a href="{{ route('page.event.book', $event->id) }}" class="btn btn-primary w-100">{{ $event->buttontext }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- RIGHT COLUMN WRPR START -->
            </div>
        </div>
    </div>
    <!-- COLUMNS END  -->
    <!-- EVENT SINGLE END -->
    <!-- MORE EVENT START -->
    <section class="yoga-event yoga-event-inner spacing-150 pb-5">
        <div class="container-fluid text-center text-xl-start">
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <h2 class="display-2 text-center text-uppercase font-weight-700 mb-0 mb-sm-5">More Events
                    </h2>
                    <!-- EVENTS START -->
                    <div class="my-events pt-5">
                        
                        @php
                            $eventAll = App\Models\Adminevent::where('id', '!=', $event->id)->get();
                            //dd($eventAll)
                        @endphp
                        @if($eventAll)
                        @foreach($eventAll as $event)
                        
                        <!-- EVENT START -->
                        <div class="event init-animation" data-sal="slide-up" style="--sal-duration: 1s">
                            <div class="left-">
                                <div class="thumb">
                                    <img src="assets/images/loading.gif" data-src="{{ asset("/backend/images/events_images") }}/{{ $event->image }}"
                                    class="d-block w-100 lazy" style="object-fit: cover;" alt="...">>
                                </div>
                                <div class="short-info">
                                <a href="{{ route('page.event.detailed', $event->id) }}">
                                    <h3 class="h2 text-uppercase font-weight-700 mb-xl-2 mb-3">{{ $event->title }}</h3>
                                    <p class="desc">{!! Str::limit(strip_tags($event->description), 50) !!}</p>
                                </a>
                                <div class="venu-date mt-2 d-xl-flex align-items-center align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none"
                                        viewBox="0 0 17 17">
                                        <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.5 9.031a2.125 2.125 0 1 0 0-4.25 2.125 2.125 0 0 0 0 4.25Z" />
                                        <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.813 6.906c0 4.782-5.313 8.5-5.313 8.5s-5.313-3.719-5.313-8.5a5.312 5.312 0 1 1 10.626 0v0Z" />
                                    </svg>
                                    @php
                                        $date = strtotime($event->startdate);
                                        $month = date("F",$date);
                                        $day = date("d",$date);
                                        //dd($day);
                                        $monthOfEvent = strtoupper($month);
                                        $dayOfEvent = strtoupper($day);
                                    @endphp  
                                    <span class="d-block d-xl-inline-block mt-3 mt-xl-0 ms-xl-1">{{ $event->venue }},
                                        <span class="text-primary d-xl-inline-block d-block mt-1 mt-xl-0">{{ $monthOfEvent }} {{ $dayOfEvent }} {{ $event->starttime }}</span>
                                    </span>
                                </div>
                            </div>
                            </div>
                            <div class="right- mt-4 mt-xl-0">
                                @if($event->user_id != $user)
                                <a href="{{ route('page.event.book', $event->id) }}" class="btn btn-primary">{{ $event->buttontext }}</a>
                                @endif
                                <a href="{{ route('page.event.detailed', $event->id) }}" class="btn ">more info</a>
                            </div>
                        </div>
                        <!-- EVENT END -->
                        @endforeach
                        @endif
                    </div>
                    <!-- EVENTS END -->
                </div>
            </div>
        </div>
    </section>
    <!-- MORE EVENT END -->

@endsection

