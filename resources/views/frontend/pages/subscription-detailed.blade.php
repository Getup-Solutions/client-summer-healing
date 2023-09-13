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
                <h2 class="display-4 text-center text-uppercase font-weight-700 mb-lg-4">Membership Details</h2>
                @if($subscription->description)
                <div class="text-center">{!! $subscription->description !!}</div>
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
                        <h3 class="h3 m-0 text-uppercase font-weight-700">Details</h3>
                        <ul id="subscriptionDetailsList">
                            <li>Title: {{ $subscription->title }}</li>
                            <li>Price: ${{ $subscription->price }}</li>
                            <li>Billing: {{ $subscription->interval  }}</li>
                            <li>Started on: {{ date("d-m-Y", $subscription->start_date) }}</li>
                            <li>Next billing: {{ date("d-m-Y", $subscription->next_date) }}</li>
                            <li>Transaction: {{ $subscription->transaction_id }}</li>
                            <li>Currency: {{ $subscription->currency }}</li>
                            <li>Status: {{ $subscription->status }}</li>
                        </ul>
                        <div id="cancelBtn">
                            <a href="{{route('user.subscription.cancel', $subscription->id)}}">Cancel Subsciption</a>
                        </div>
                    </div>
                    <!-- CARD END -->


                    
                 
                </div>
                <!-- LEFT COLUMN END -->

            </div>
        </div>
    </div>
    <!-- COLUMNS END  -->
    <!-- COURSE SINGLE END -->
</section>


@endsection


@section('style')
<style>
    #subscriptionDetailsList{
        padding-left: 0;
    }
    #subscriptionDetailsList li {
        color: #fff;
        line-height: 35px;
        font-size: 15px;
        text-transform: uppercase;
    }
</style>
@endsection