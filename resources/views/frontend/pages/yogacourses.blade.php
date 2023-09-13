@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'Yoga Courses | Summer Healing Society')

@section('meta_keyword', 'Yoga Courses')

@section('meta_description', 'Yoga Courses')



<!-- PAGE HEADING START -->

<section class="set-top-spacing position-relative overflow-hidden">

    <div class="content d-flex align-items-center justify-content-center">

          <div class="container-fluid w-100">

             <div class="row">

                <div class="col-12 text-center mt-3 mt-sm-0">

                      <h1 class="display-2 font-weight-700 text-uppercase" data-sal="slide-up"

                         style="--sal-duration: 1s">
                         Yoga Classes
                      </h1>
                </div>

             </div>

          </div>

    </div>

 </section>

 <!-- PAGE HEADING END -->



<!-- PLANS START -->

<section class="yoga-course yoga-course-inner spacing-100 pb-0">

    <div class="container-fluid text-center text-md-start">

        <div class="row">

            <div class="col-xl-11 mx-auto">

                <div class="row row-equl">

                    @if(count($coursesAll) > 0)

                    @foreach($coursesAll as $course)

                    <!-- ITEM START -->

                    <div class="col-xl-4 col-lg-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">

                        <div class="card text-center mx-2">

                            @php

                            $subscription = App\Models\Adminsubscription::where('id', $course->subscription)->first();

                                //@dd($subscription->title);

                            @endphp

                            @if(auth()->check())

                                @if( $subscription->id == $userActiveSubscription && $userActiveSubscriptionstatus == "active")

                                <span id="subscriptionplan">{{ $subscription->title }}</span>

                                @else

                                @endif

                            @endif

                            <div class="top">

                                @if($course->featured_image)

                                  <img src="frontend/assets/images/loading.gif" data-src="{{ asset('backend/images/courses_images') }}/{{ $course->featured_image }}" class="d-block w-100 lazy" alt="...">

                                @else

                                <img src="{{ asset('backend/images/courses_images/common_banner.jpg') }}" class="d-block w-100" alt="" />

                                @endif

                            </div>

                            <div class="content">

                                <div class="middle">

                                    <a href="{{ route('page.yogacourse.detail', $course->slug) }}">

                                        <h4 class="h4 font-weight-700 text-uppercase">

                                            {{ $course->title }} 

                                            <span style="font-size:14px;text-transform:lowercase!important;">

                                                ({{$course->coursetype == "ondemand" ? "On Demand" : "Class"}})

                                            </span>

                                        </h4>

                                    </a>

                                    <h5 class="display-5 m-0 text-white">

                                        <span class="text-muted me-3 font-weight-500" style="display:none;!important">@if($course->price > 0) ${{ $course->price + 100 }} @endif</span>

                                        <span class="font-weight-700">@if($course->price == 0) Free @else ${{ $course->price }} @endif</span></h5>

                                </div>

                                <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">



                                    @if(auth()->check())

                                        @if($subscription->id == $userActiveSubscription && $userActiveSubscriptionstatus == "active" || in_array($course->id, $userAllCourses))

                                        <a href="{{ route('user.myaccount.coursedetails', $course->id) }}?coursetype={{$course->coursetype}}" class="btn me-3 w-100">View Class</a>



                                        @else

                                        <a href="{{ route('page.yogacourse.detail', $course->slug) }}" class="btn me-3 w-100">More Info</a>

                                        <a href="{{ route('add.to.cart', $course->id) }}" class="btn btn-primary w-100 mt-3 mt-sm-0">Buy Now</a>

                                        @endif



                                    @else

                                        <a href="{{ route('page.yogacourse.detail', $course->slug) }}" class="btn me-3 w-100">More Info</a>

                                        <a href="{{ route('add.to.cart', $course->id) }}" class="btn btn-primary w-100 mt-3 mt-sm-0">Buy Now</a>

                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- ITEM END -->

                    @endforeach

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>

<!-- PLANS END -->

@endsection





@section('style')

<style>

    #subscriptionplan {

        position: absolute;

        top: 4px;

        z-index: 111;

        background: #fdc642;

        right: 21px;

        border-radius: 0 0px 0 0;

        font-size: 11px;

        padding: 0 12px;

    }

</style>

@endsection





@section('script')



@endsection