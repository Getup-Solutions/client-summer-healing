@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Course Detailed')
@section('meta_keyword', 'Course Detailed')
@section('meta_description', 'Course Detailed')
<!-- HEADER END -->
<section class="set-top-spacing" data-sal="slide-up" style="--sal-duration: 1s">
    <div class="container-fluid">
        <div class="row text-center text-xl-start">
            <div class="col-xl-11 mx-auto">
                <h2 class="display-4 text-center text-uppercase font-weight-700 mb-lg-4">{{ $course->title }}</h2>
                @if($course->excerpt)
                <div class="text-center">{!! $course->excerpt !!}</div>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="course-single mt-sm-5 mt-3">
    <!-- COURSE SINGLE START -->
    <!-- BANNER START -->
    <div class="banner init-animation" data-sal="slide-up" style="--sal-duration: 1s">
        <div class="image-holder image-round image-overlay">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-touch="false" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/loading.gif" data-src="{{ asset('Frontend/assets/images/single-1.jpg') }}"
                            class="d-block w-100 lazy" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/loading.gif" data-src="{{ asset('Frontend/assets/images/single-2.jpg') }}"
                            class="d-block w-100 lazy" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->
    <!-- COLUMNS WRPR START  -->
    <div class="row g-0">
        <div class="col-xl-11 mx-auto">
            <div class="container-fluid position-relative clearfix column-wrpr">
                <!-- LEFT COLUMN START -->
                <div class="col-left mb-4 mb-xl-0">
                    <!-- CARD START -->
                    <div class="card w-100 init-animation" data-sal="slide-up" style="--sal-duration: 1s">
                        <h3 class="h3 m-0 text-uppercase font-weight-700">Description</h3>
                        <p>{!! $course->description !!}</p>
                    </div>
                    <!-- CARD END -->
                    <!-- CARD START -->
                    <div class="card w-100" data-sal="slide-up" style="--sal-duration: 1s">
                        <h3 class="h3 m-0 text-uppercase font-weight-700">Trainers</h3>
                        @php 
                            $admin_trainers = $course->admincoursetrainers;
                        @endphp
                        <ul class="list-unstyled list-trainers mt-3">
                            @foreach($admin_trainers as $trainer)
                            <li class="d-flex align-items-center justify-content-start">
                                <img src="assets/images/loading.gif" data-src="{{ url("/backend/images/trainers_images") }}/{{$trainer->image}}"
                                    class="d-block w-100 lazy trainer-photo" alt="...">
                                <div class="info ms-3">
                                    <h5 class="trainer-name">{{$trainer->trainer_name}}</h5>
                                    <p class="m-0">Yoga Instructor</p>
                                </div>
                            </li>
                            @if(!$loop->last),@endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- CARD END -->
                </div>
                <!-- LEFT COLUMN END -->
                <!-- RIGHT COLUMN START -->
                <div class="col-right position-sticky mt-5 mt-xl-0">
                    <div class="ps-xl-5">
                        <div class="card card-price" data-sal="slide-up" style="--sal-duration: 1s">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <h5 class="m-0 text-white w-100 text-center"><span
                                        class="text-muted me-3 font-weight-500 h2"><s>${{ $course->price + 100 }}</s></span><span
                                        class="display-3 font-weight-700">${{ $course->price }}</span></h5>
                            </div>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @if($details['title'] === $course->title)
                                    <a href="#" class="btn btn-primary w-100 addedcarts">Added to cart</a>
                                    @else
                                    <a href="{{ route('add.to.cart', $course->id) }}" class="btn btn-primary w-100">Buy now</a>
                                    @endif
                                @endforeach

                            @else

                                @if(auth()->check())
                                    @if($courseByUser->contains($course->id))

                                    @else
                                        <a href="{{ route('add.to.cart', $course->id) }}" class="btn btn-primary w-100">Buy now</a>                                    
                                    @endif
                                @else
                                    <a href="{{ route('add.to.cart', $course->id) }}" class="btn btn-primary w-100">Buy now</a>  
                                @endif

                            @endif
                        </div>
                    </div>
                </div>
                <!-- RIGHT COLUMN WRPR START -->
            </div>
        </div>
    </div>
    <!-- COLUMNS END  -->
    <!-- COURSE SINGLE END -->
    <!-- MORE COURSES START -->
    <section class="yoga-course yoga-course-inner spacing-150 pb-0">
        <div class="container-fluid text-center text-md-start">
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <h2 class="display-2 text-center text-uppercase font-weight-700 mb-0 mb-sm-5">More courses
                    </h2>
                    <div class="row row-equl pt-sm-5 pt-4 pb-0">
                        @php
                            $coursesAll = App\Models\Admincourse::where('id', '!=', $course->id)->get();
                            //dd($courses)
                        @endphp
                        @if($coursesAll)
                        @foreach($coursesAll as $courseOther)
                        <!-- ITEM START -->
                        <div class="col-xl-4 col-lg-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                            <div class="card text-center mx-2">
                                <div class="top">
                                    <img src="assets/images/loading.gif" data-src="{{ asset('Frontend/assets/images/thumb-1.webp')}}"
                                class="d-block w-100 lazy" alt="...">
                                </div>
                                <div class="content">
                                    <div class="middle">
                                        <a href="yoga-course-single.html"><h4 class="h4 font-weight-700 text-uppercase"> {{ $courseOther->title }}</h4></a>
                                        <h5 class="display-5 m-0 text-white"><span
                                                class="text-muted me-3 font-weight-500"><s>${{ $courseOther->price + 100 }}</s></span><span
                                                class="font-weight-700">{{ $courseOther->price }}</span></h5>
                                    </div>
                                    <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">
                                        <a href="{{ route('page.yogacourse.detail', $courseOther->slug) }}" class="btn me-3 w-100">More Info</a>
                                        <a href="{{ route('add.to.cart', $courseOther->id) }}" class="btn btn-primary w-100 mt-3 mt-sm-0">Buy
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM END -->
                        @endforeach
                        @else

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MORE COURSES END -->
</section>


@endsection