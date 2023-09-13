@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Terms')
@section('meta_keyword', 'Terms')
@section('meta_description', 'Terms')
@php
$refunddata       = App\Models\Adminpage::where('id', '=', 4)->get();
//dd($refunddata[0]->description);
$title            = $refunddata[0]->title;
$slug             = $refunddata[0]->slug;
$description      = $refunddata[0]->description;
$banner_image     = $refunddata[0]->banner_image;
$seo_title        = $refunddata[0]->seo_title;
$seo_description  = $refunddata[0]->seo_description;
$seo_keyword      = $refunddata[0]->seo_keyword;
$status           = $refunddata[0]->status;
@endphp


<!-- PAGE HEADING START -->
<section class="about-banner position-relative overflow-hidden">
    <div class="content d-flex align-items-center justify-content-center">
       <div class="container-fluid w-100">
          <div class="row">
             <div class="col-12 text-center mt-3 mt-sm-0">
                <h1 class="lg-heading font-weight-700 text-uppercase mt-5 mt-sm-0" data-sal="slide-up"
                   style="--sal-duration: 1s">
                   {{ $title }}
                </h1>
             </div>
          </div>
       </div>
    </div>
    <!-- SLIDER START -->
    <div class="image-holder image-round image-overlay">
       <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel"
          data-bs-touch="false" data-bs-interval="3000">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/banner-1.webp"
                   class="d-block w-100 lazy" alt="...">
             </div>
             <div class="carousel-item">
                <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/banner-2.webp"
                   class="d-block w-100 lazy" alt="...">
             </div>
          </div>
       </div>
    </div>
    <!-- SLIDER END -->
 </section>

  <!-- SECTION 1 START -->
  <section class="spacing-150">
    <div class="container-fluid text-center">
       <div class="row">
          <div class="col-12">
             <h2 class="display-3 mb-4 font-weight-700 text-uppercase init-animation" data-sal="slide-up"
                style="--sal-duration: 1s">
                {{ $title }}
             </h2>
             <p data-sal="slide-up init-animation" style="--sal-duration: 2s">
               {!! $description !!}
             </p>
          </div>
       </div>
    </div>
 </section>
 <!-- SECTION END -->

@endsection