@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'Events | Summer Healing Society')

@section('meta_keyword', 'Events')

@section('meta_description', 'Events')

 <!-- MY ACCOUNT START -->

 <section class="set-top-spacing">

    <div class="container-fluid">

      <!-- EVENTS START -->

        <div class="row text-center text-xl-start">

            <div class="col-xl-11 mx-auto">

                <h2 class="display-2 text-center text-uppercase font-weight-700 mb-lg-4">Upcoming events</h2>

             <!-- EVENTS START -->

                <div class="my-events pt-5">

                   

                    @if(count($events) > 0)

                    @foreach($events as $event)

                    

                    @if($event->enddate > date("Y-m-d"))

                    <!-- EVENT START -->

                    <div class="event" data-sal="slide-up" style="--sal-duration: 1s">

                        <div class="left-">

                            <div class="thumb">

                                <img src="assets/images/loading.gif" data-src="{{ asset("/backend/images/events_images") }}/{{ $event->image }}"

                                class="d-block w-100 lazy" style="object-fit: cover;" alt="...">

                                

                            </div>

                            <div class="short-info">

                                <a href="{{ route('page.event.detailed', $event->id) }}">

                                    <h3 class="h2 text-uppercase font-weight-700 mb-xl-2 mb-3">{{ $event->title }}

                                         {{-- <span>by {{ strtoupper($event->type)}}</span> --}}

                                    </h3>

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

                        <div class="right- mt-5 mt-xl-0">

                            <a href="{{ route('page.event.book', $event->id) }}" class="btn btn-primary">@if($event->buttontext != "") {{ $event->buttontext }} @else get tickets @endif</a>

                            <a href="{{ route('page.event.detailed', $event->id) }}" class="btn ">more info</a>

                        </div>

                    </div>

                    @endif

                    <!-- EVENT END -->

                    @endforeach

                    @endif

                    

                </div>

                <!-- EVENTS END -->

            </div>

        </div>

        <!-- EVENTS END -->

    </div>

</section>

<!-- MY ACCOUNT END -->





@endsection