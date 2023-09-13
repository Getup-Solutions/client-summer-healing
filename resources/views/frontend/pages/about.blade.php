@extends('layouts.page.pageLayout')
@section('content')

@php
$title            = DB::table('adminpages')->pluck('title');
$slug             = DB::table('adminpages')->pluck('slug');
$banner_image     = DB::table('adminpages')->pluck('banner_image');
$section1_heading = DB::table('adminpages')->pluck('section1_heading');
$section1         = DB::table('adminpages')->pluck('section1');
$section2_heading = DB::table('adminpages')->pluck('section2_heading');
$section2         = DB::table('adminpages')->pluck('section2');
$section3_heading = DB::table('adminpages')->pluck('section3_heading');
$section3         = DB::table('adminpages')->pluck('section3');
$section4_heading = DB::table('adminpages')->pluck('section4_heading');
$section4         = DB::table('adminpages')->pluck('section4');
$section5_heading = DB::table('adminpages')->pluck('section5_heading');
$section5         = DB::table('adminpages')->pluck('section5');
$section6         = DB::table('adminpages')->pluck('section6');
$section6_heading = DB::table('adminpages')->pluck('section6_heading');
$google_store_url = DB::table('adminpages')->pluck('google_store_url');
$apple_store_url  = DB::table('adminpages')->pluck('apple_store_url');
$seo              = DB::table('adminpages')->where('title', 'About')->first();
$seo_title        = DB::table('adminpages')->pluck('seo_title');
$seo_description  = DB::table('adminpages')->pluck('seo_description');
$seo_keyword      = DB::table('adminpages')->pluck('seo_keyword');
$status           = DB::table('adminpages')->pluck('status');
@endphp

@section('title', $seo->seo_title)
@section('meta_keyword', $seo->seo_keyword)
@section('meta_description', $seo->seo_description)

<!-- PAGE HEADING START -->
<section class="about-banner position-relative overflow-hidden">
    <div class="content d-flex align-items-center justify-content-center">
       <div class="container-fluid w-100">
          <div class="row">
             <div class="col-12 text-center mt-3 mt-sm-0">
                <h1 class="lg-heading font-weight-700 text-uppercase mt-5 mt-sm-0" data-sal="slide-up"
                   style="--sal-duration: 1s">
                   {{ $title[1] }}
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
 <!-- PAGE HEADING END -->
 <!-- SECTION 1 START -->
 <section class="spacing-150">
    <div class="container-fluid text-center">
       <div class="row">
          <div class="col-12">
             <h2 class="display-3 mb-4 font-weight-700 text-uppercase init-animation" data-sal="slide-up"
                style="--sal-duration: 1s">
                {{ $section1_heading[1] }}
             </h2>
             <p data-sal="slide-up init-animation" style="--sal-duration: 2s">
               {!! $section1[1] !!}
             </p>
          </div>
       </div>
    </div>
 </section>
 <!-- SECTION 1 END -->
 <!-- SECTION 2 START -->
 <section class="spacing-150">
    <div class="container-fluid text-center text-xl-start">
       <div class="row">
          <div class="col-xl-6 d-flex align-items-center mb-5 mb-xl-0">
             <div class="bg-graphic w-100" data-sal="slide-up" style="--sal-duration: 1s">
                <div class="bg-round-graphic">
                   <img class="graphic-2" src="Frontend/assets/images/graphic-1.svg" alt="">
                   <div class="image-holder image-round-2 image-overlay">
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
                </div>
             </div>
          </div>
          <div class="col-xl-6 d-flex align-items-center mt-5 mt-xl-0" data-sal="slide-up"
             style="--sal-duration: 1s">
             <div class="w-100 px-xl-5">
                <h2 class="display-3 mb-4 font-weight-700 text-uppercase" data-sal="slide-up" style="--sal-duration: 1s">
                  {{ $section2_heading[1] }}
                </h2>
                {!! $section2[1] !!}
                </p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- SECTION 2 END -->
 <!-- SECTION 3 START -->
 <section class="spacing-150">
    <div class="container-fluid text-center text-xl-start">
       <div class="row">
          <div class="col-xl-6 d-flex align-items-center order-xl-last mb-5 mb-xl-0">
             <div class="bg-graphic w-100" data-sal="slide-up"
                style="--sal-duration: 1s">
                <div class="bg-round-graphic">
                   <img class="graphic-2" src="Frontend/assets/images/graphic-1.svg" alt="">
                   <div class="image-holder image-round-2 image-overlay">
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
                </div>
             </div>
          </div>
          <div class="col-xl-6 d-flex align-items-center mt-5 mt-xl-0" >
             <div class="w-100 px-xl-5">
                <h2 class="display-3 mb-4 font-weight-700 text-uppercase" data-sal="slide-up"
                   style="--sal-duration: 1s">
                   {{ $section3_heading[1] }}
                </h2>
                {!! $section3[1] !!}
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- SECTION 3 END -->
 <!-- DOWNLOAD APP START -->
 <section class="download-app spacing-150">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 text-center">
             <h2 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
                style="--sal-duration: 1s">
                {{ $section5_heading[0] }}
             </h2>
             <p data-sal="slide-up" style="--sal-duration: 2s">
               {{ $section5[0] }}
             </p>
             <div class="mt-5 btn-wrpr d-sm-flex justify-content-center align-items-center">
                <a href="{{ $google_store_url[0] }}" class="btn">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="none"
                      viewBox="0 0 20 22">
                      <path
                         d="M.858 1.374C.631 1.606.5 1.968.5 2.437v16.708c0 .469.131.83.358 1.063l.056.05L10.49 10.9v-.222L.914 1.32l-.056.055ZM14.835 14.02l-3.188-3.122v-.22l3.192-3.122.072.04L18.69 9.7c1.079.597 1.079 1.579 0 2.18l-3.78 2.099-.076.04Zm-.503.54-3.264-3.19-9.63 9.418c.358.369.943.413 1.607.045l11.287-6.272Zm0-7.544L3.045.744C2.381.379 1.796.424 1.438.792l9.63 9.415 3.264-3.191Z" />
                   </svg>
                   Google Play
                </a>
                <a href="{{ $apple_store_url[0] }}" class="btn mt-3 mt-sm-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="19" height="26" fill="none"
                      viewBox="0 0 19 26">
                      <path
                         d="M15.775 12.65c-.026-2.843 2.38-4.226 2.49-4.29-1.363-1.943-3.475-2.209-4.217-2.23-1.774-.183-3.495 1.038-4.399 1.038-.921 0-2.313-1.02-3.813-.99-1.93.029-3.736 1.121-4.726 2.818-2.044 3.46-.52 8.545 1.439 11.342.98 1.37 2.124 2.899 3.622 2.845 1.465-.06 2.013-.914 3.781-.914 1.753 0 2.267.914 3.795.88 1.573-.025 2.563-1.376 3.508-2.758 1.132-1.57 1.587-3.116 1.605-3.196-.037-.012-3.055-1.138-3.085-4.546Zm-2.886-8.36c.788-.964 1.328-2.275 1.178-3.606-1.141.049-2.568.771-3.39 1.714-.726.831-1.376 2.193-1.208 3.473 1.282.094 2.598-.632 3.42-1.581Z" />
                   </svg>
                   App Store
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- DOWNLOAD APP END -->
 <!-- BG GRAPHICS MOBILE APP START -->
 <section class="bg-graphic spacing-150">
    <div class="bg-round-graphic position-relative">
       <img class="graphic" src="Frontend/assets/images/graphic-1.svg" alt="">
       <div class="image-holder image-round">
          <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/mobile-app.webp" class="d-block w-100 lazy"
             alt="" />
       </div>
    </div>
 </section>
 <!-- BG GRAPHICS MOBILE APP END -->


 @endsection