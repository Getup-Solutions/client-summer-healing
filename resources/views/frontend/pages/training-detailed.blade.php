@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Subscription Details')
@section('meta_keyword', 'Subscription Details')
@section('meta_description', 'Subscription Details')

<!-- HEADER END -->
<section class="set-top-spacing" data-sal="slide-up" style="--sal-duration: 1s">
    <div class="container-fluid">
        <div class="row text-center text-xl-start">
            <div class="col-xl-11 mx-auto">
                <h2 class="display-4 text-center text-uppercase font-weight-700 mb-lg-4">{{ $training->title }}</h2>
               {{--  @if($subscription->description)
                <div class="text-center">{!! $subscription->description !!}</div>
                @endif --}}
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
                    <h3 class="h3 m-0 text-uppercase font-weight-700">About training</h3>
                    {!! $training->description !!}
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
                                    class="text-muted me-3 font-weight-500 h2"><s>${{ $training->price + 100 }}</s></span><span
                                    class="display-3 font-weight-700">${{ $training->price }}</span></h5>
                        </div>
                        <a href="{{route('page.training.purchase', $training->id)}}" class="btn btn-primary w-100">Buy now</a>
                    </div>
                </div>
            </div>
            <!-- RIGHT COLUMN WRPR START -->
        </div>
    </div>
</div>
<!-- COLUMNS END  -->

</section>


 <!-- MORE COURSES START -->
 <section class="yoga-training yoga-training-inner spacing-150 pb-0">
    <div class="container-fluid text-center text-xl-start">
        <div class="row">
            <div class="col-xl-11 mx-auto">
                <h2 class="display-2 text-center text-uppercase font-weight-700 mb-0 mb-sm-5">More Training
                </h2>
                <div class="row row-equl pt-sm-5 pt-4 pb-0">
                    @php
                    $trainingsAll = App\Models\Admintraining::where('id', '!=', $training->id)->get();
                    //dd($courses)
                    @endphp
                    @if($trainingsAll)
                    @foreach($trainingsAll as $training)
                    <!-- ITEM START -->
                    <div class="col-xl-4 col-lg-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                        <div class="card text-center mx-2">
                            <div class="top">
                                <img src="assets/images/loading.gif" data-src="{{ asset('backend/images/trainings_images') }}/{{ $training->image }}" class="d-block w-100 lazy trainingimage" alt="...">
                            </div>
                            <div class="content">
                                <div class="middle">
                                    <a href="{{route('page.training.detailed', $training->id)}}"><h4 class="h4 font-weight-700 text-uppercase main-title">{{ $training->title }}</h4></a>
                                    {{-- <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetur elit.
                                    </p> --}}
                                </div>
                                <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">
                                    <a href="{{route('page.training.detailed', $training->id)}}" class="btn me-3 w-100">More Info</a>
                                    <a href="{{route('page.training.purchase', $training->id)}}"  class="btn btn-primary w-100 mt-3 mt-sm-0">Join Now</a>
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
<!-- MORE COURSES END -->


@endsection


@section('style')
<style>
   .d-block.w-100.lazy.trainingimage {
    height: 300px;
    object-fit: cover;
    object-position: top;
  }
</style>
@endsection