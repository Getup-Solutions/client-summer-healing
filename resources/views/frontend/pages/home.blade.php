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
$seo              = DB::table('adminpages')->where('title', 'Home')->first();
$seo_description  = DB::table('adminpages')->pluck('seo_description');
$seo_keyword      = DB::table('adminpages')->pluck('seo_keyword');
$status           = DB::table('adminpages')->pluck('status');

//dd($seo);
@endphp

@section('title', $seo->seo_title)
@section('meta_keyword', $seo->seo_keyword)
@section('meta_description', $seo->seo_description)

<!-- HERO START -->
<section class="hero spacing-300 pt-0">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 text-center">
            <h1 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
               style="--sal-duration: 1s">
               {{ $section1_heading[0] }}
            </h1>
            <p data-sal="slide-up" style="--sal-duration: 2s">{!! $section1[0] !!}
            </p>
         </div>
      </div>
      <!-- MOUSE WHELL START -->
      <div class="row mt-5 pt-5">
         <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="field">
               <div class="mouse"></div>
            </div>
         </div>
      </div>
      <!-- MOUSE WHEEL END -->
   </div>
</section>
<!-- HERO END -->
<!-- SCENE 1 START -->
<div class="scene-1 position-relative spacing-150">
   <!-- BG GRAPHICS START -->
   <section class="bg-graphic scene" id="scene1">
      <div class="bg-round-graphic" id="bgRoundGraphic">
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
      </div>
   </section>
   <!-- BG GRAPHICS END -->
   <!-- SUBSCRIPTION PLANS HEADING START -->
   <section class="subscription-plans spacing-150">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 text-center">
               <h2 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
                  style="--sal-duration: 1s">
                  {{ $section2_heading[0] }}
               </h2>
               <p data-sal="slide-up" style="--sal-duration: 2s">{!! $section2[0] !!}
               </p>
            </div>
         </div>
      </div>
   </section>
   <!--UBSCRIPTION PLANS HEADING END -->
   <!-- SUBSCRIPTION PLANS INFO START -->
   <section class="subscription-plans set-padding-left spacing-150">
      <div class="owl-carousel owl-theme" id="subscriptions">
      @if(count($subscriptions) > 0)
      @foreach($subscriptions as $subscription)
       <!-- ITEM START -->
       <div class="item">
         <div class="card">
            @php
               $subscriptionCurrent = App\Models\Adminsubscription::where('id', $subscription->id)->first();
              //@dd($subscriptionCurrent);
            @endphp
            @if(auth()->check())
               @if( $subscription->id == $userActiveSubscription && $userActiveSubscriptionstatus != 'canceled')
               <span id="subscriptionplan">Current Membership</span>
               @else
               @endif
            @endif
            <div class="top w-100 d-sm-flex align-items-start justify-content-between">
               <img src="Frontend/assets/images/graphic-2.svg" class="icon mx-auto mx-sm-0" />
               <p class="type mt-3 mb-0 text-sm-start text-center">Online</p>
            </div>
            <div class="middle">
               <h3 class="h1 mt-4 mt-sm-0 title text-uppercase text-white text-sm-start text-center">{{ $subscription->title }}
               </h3>
            </div>
            <div
               class="bottom w-100 text-sm-start text-center d-sm-flex align-items-end justify-content-between">
               <div class="left">
                  @php 
                     //$random_amount = (rand($subscription->price,$subscription->price + 60));
                     //dd($userActiveSubscriptionstatus);
                  @endphp
                  <h5 class="h2 text-white font-weight-500 text-muted m-0"><s>${{ $subscription->price + 60 }}</s></h5>
                  <h4 class="display-3 price font-weight-700 m-0 text-white">${{ $subscription->price }}<span class="per">/
                     {{ strtoupper($subscription->interval) }}</span>
                  </h4>
                 </div>
               <div class="right">
                  @if(auth()->check())
                     @if( $subscription->id != $userActiveSubscription || $userActiveSubscriptionstatus == 'canceled' )
                     <a href="{{ route('page.subscription', $subscription->id) }}" class="btn btn-primary mt-4 mt-sm-0">Subscribe Now</a>
                     @endif
                  @else
                  <a href="{{ route('page.subscription', $subscription->id) }}" class="btn btn-primary mt-4 mt-sm-0">Subscribe Now</a>
                  @endif
               </div>
            </div>
         </div>
      </div>
      @endforeach
      @endif
      <!-- ITEM END -->
   
      </div>
   </section>
   <!--SUBSCRIPTION PLANS INFO END -->
   <!-- YOGA COURSE HEADING START -->
   <section class="yoga-course spacing-100" style="padding-bottom:40px;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 text-center">
               <h2 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
                  style="--sal-duration: 1s">
                  {{ $section3_heading[0] }}
               </h2>
               <p data-sal="slide-up" style="--sal-duration: 2s">{!! $section3[0] !!}
               </p>
               <a href="/about" class="home-about-readmore">Read More</a>
            </div>
         </div>
      </div>
   </section>
   <!-- YOGA COURSE HEADING END -->
   <!-- YOGA COURSE INFO START -->
   <section class="yoga-course">
      <div class="container-fluid">
          <div id="shSlider">
          <div>
              <img src="{{asset('Frontend/assets/images/home-images/1.jpg')}}" alt="">
          </div>
          <div>
              <img src="{{asset('Frontend/assets/images/home-images/2.jpg')}}" alt="">
          </div>
          <div>
              <img src="{{asset('Frontend/assets/images/home-images/3.jpg')}}" alt="">
          </div>
          <div>
              <img src="{{asset('Frontend/assets/images/home-images/4.jpeg')}}" alt="">
          </div>
          <div>
              <img src="{{asset('Frontend/assets/images/home-images/5.jpg')}}" alt="">
          </div>
        </div>
      </div>
   </section>
   <!-- YOGA COURSE INFO END -->

   <!-- YOGA ONDEMAND COURSE HEADING START -->
   <section class="yoga-course spacing-100">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 text-center">
               <h2 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
                  style="--sal-duration: 1s">
                  ONDEMAND VIDEOS
               </h2>
               <p data-sal="slide-up" style="--sal-duration: 2s">{!! $section3[0] !!}
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- YOGA COURSE HEADING END -->
   
    <!-- YOGA ONDEMAND COURSE INFO START -->
    <section class="yoga-course set-padding-left spacing-100">
      <div class="owl-carousel owl-theme" id="courseslider2">
         @if(count($ondemands) > 0)
         @foreach($ondemands as $ondemand)
         {{-- {{ dd(auth()->user()->orders) }} --}}
         <!-- ITEM START -->
         <div class="item">
            <div class="card text-center">
               @php
               $subscription = App\Models\Adminsubscription::where('id', $ondemand->subscription)->first();
               @endphp
               @if(auth()->check())
                  @if( $subscription->id == $userActiveSubscription && $userActiveSubscriptionstatus == "active")
                  <span id="subscriptionplan">{{ $subscription->title }}</span>
                  @else
                  @endif
               @endif
               <div class="top">
                  @if($ondemand->featured_image)
                  <img src="{{ asset('backend/images/courses_images') }}/{{ $ondemand->featured_image }}" class="d-block w-100" alt="" />
                  @else
                  <img src="{{ asset('backend/images/courses_images/common_banner.jpg') }}" class="d-block w-100" alt="" />
                  @endif
               </div>
               <div class="content">
                  <div class="middle">
                     <a href="{{ route('page.yogacourse.detail', $ondemand->slug) }}"><h4 class="h4 font-weight-700 text-uppercase">{{ $ondemand->title }}</h4></a>
                     <h5 class="display-4 m-0 text-white"><span
                        class="text-muted me-3 font-weight-500"><s>${{ $ondemand->price + 100 }}</s></span><span
                        class="font-weight-700">${{ $ondemand->price }}</span></h5>
                  </div>
                  <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">
                     
                     @if(auth()->check())
                     @if($subscription->id == $userActiveSubscription && $userActiveSubscriptionstatus == "active" || in_array($ondemand->id, $userAllCourses))
                           <a href="{{ route('user.myaccount.coursedetails', $ondemand->id) }}?coursetype={{$ondemand->coursetype}}" class="btn me-3 w-100">View Course</a>

                           @else
                           <a href="{{ route('page.yogacourse.detail', $ondemand->slug) }}" class="btn me-3 w-100">More Info</a>
                           <a href="{{ route('add.to.cart', $ondemand->id) }}" class="btn btn-primary w-100 mt-3 mt-sm-0">Buy Now</a>
                           @endif

                     @else
                           <a href="{{ route('page.yogacourse.detail', $ondemand->slug) }}" class="btn me-3 w-100">More Info</a>
                           <a href="{{ route('add.to.cart', $ondemand->id) }}" class="btn btn-primary w-100 mt-3 mt-sm-0">Buy Now</a>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <!-- ITEM END -->
         @endforeach
         @endif
   
      </div>
   </section>
   <!-- YOGA ONDEMAND COURSE INFO END -->



   <!-- YOGA TRAINING HEADING START -->
   <section class="yoga-training spacing-100">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 text-center">
               <h2 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
                  style="--sal-duration: 1s">
                  {{ $section4_heading[0] }}
               </h2>
               <p data-sal="slide-up" style="--sal-duration: 2s">{!! $section4[0] !!}
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- YOGA TRAINING HEADING END -->
   <!-- YOGA TRAINING INFO START -->
   <section class="yoga-training set-padding-left spacing-100">
      <div class="owl-carousel owl-theme" id="trainingsslider2">
         @if(count($trainings) > 0)
         @foreach ($trainings as $training)
         <!-- ITEM START -->
         <div class="item">
            <div class="card text-center" id="#trainingCourses">
               <div class="top">
                  @if($training->image)
                  <img src="{{ asset('backend/images/trainings_images') }}/{{ $training->image }}" class="d-block w-100 trainingimage" alt="" />
                  @else
                  <img src="{{ asset('backend/images/trainings_images/common_banner.jpg') }}" class="d-block w-100 trainingimage" alt="" />
                  @endif
               </div>
               <div class="content">
                  <div class="middle">
                     <a href="{{route('page.training.detailed', $training->id)}}"><h4 class="h4 font-weight-700 text-uppercase main-title">{{ $training->title }}</h4></a>
                     {{-- <p class="desc">{!! $training->description !!}</p> --}}
                  </div>
                  <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">
                     
                     @if(auth()->check())
                     @php
                        $allOrders = App\Models\Order::where('useremail', auth()->user()->email)->where('type','training')->pluck('training_id');
               
                        //dd($allOrders)
                        @endphp
                     @endif
                     @if(auth()->check())
                        @if($allOrders->contains($training->id))
                           <a href="{{route('page.training.detailed', $training->id)}}" class="btn me-3 w-100">More Info</a>
                        @else
                           <a href="{{route('page.training.detailed', $training->id)}}" class="btn me-3 w-100">More Info</a>
                           <a href="{{route('page.training.purchase', $training->id)}}" class="btn btn-primary w-100 mt-3 mt-sm-0">Join Now</a>
                        @endif
                     @else
                        <a href="{{route('page.training.detailed', $training->id)}}" class="btn me-3 w-100">More Info</a>
                        <a href="{{route('page.training.purchase', $training->id)}}" class="btn btn-primary w-100 mt-3 mt-sm-0">Join Now</a>
                     @endif



                  </div>
               </div>
            </div>
         </div>
         <!-- ITEM END -->
         @endforeach
         @endif
      </div>
   </section>
   <!-- YOGA TRAINING INFO END -->
</div>
<!-- SCENE 1 END -->
<div class="position-relative" data-sal="slide-up" style="--sal-duration: 1s">
   <!-- DOWNLOAD APP START -->
   <section class="download-app spacing-150">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 text-center">
               <h2 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
                  style="--sal-duration: 1s">
                  {{ $section5_heading[0] }}
               </h2>
               <p data-sal="slide-up"
                  style="--sal-duration: 2s">{!! $section5[0] !!}
               </p>
               <div class="mt-5 btn-wrpr d-sm-flex justify-content-center align-items-center">
                  <a href="{{ $google_store_url[0] }}" class="btn" target="_blank">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="none"
                        viewBox="0 0 20 22">
                        <path
                           d="M.858 1.374C.631 1.606.5 1.968.5 2.437v16.708c0 .469.131.83.358 1.063l.056.05L10.49 10.9v-.222L.914 1.32l-.056.055ZM14.835 14.02l-3.188-3.122v-.22l3.192-3.122.072.04L18.69 9.7c1.079.597 1.079 1.579 0 2.18l-3.78 2.099-.076.04Zm-.503.54-3.264-3.19-9.63 9.418c.358.369.943.413 1.607.045l11.287-6.272Zm0-7.544L3.045.744C2.381.379 1.796.424 1.438.792l9.63 9.415 3.264-3.191Z" />
                     </svg>
                     Google Play
                  </a>
                  <a href="{{ $apple_store_url[0] }}" class="btn mt-3 mt-sm-0" target="_blank">
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
</div>
<!-- BG GRAPHICS MOBILE APP START -->
<section class="bg-graphic scene spacing-150" id="scene1">
   <div class="bg-round-graphic position-relative" id="bgRoundGraphic">
      <img class="graphic" src="Frontend/assets/images/graphic-1.svg" alt="">
      <div class="image-holder image-round">
         <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/mobile-app.webp" class="d-block w-100 lazy"
            alt="" />
      </div>
   </div>
</section>
<!-- BG GRAPHICS MOBILE APP END -->
<!-- JOIN OUR TEAM START -->
<section class="join-team spacing-150">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="lg-heading font-weight-700 text-uppercase mb-3" data-sal="slide-up"
               style="--sal-duration: 1s">
               Join our Telegram group
            </h2>
            <p data-sal="slide-up" style="--sal-duration: 2s">wonderful way to meet other members of the society
            </p>
            <svg class="arrow2 d-none d-sm-block" xmlns="http://www.w3.org/2000/svg" width="79" height="103"
               fill="none" viewBox="0 0 79 103">
               <path stroke="#FDC442" stroke-linecap="round" stroke-width="2"
                  d="M1.812 1.5c29.346 6.513 54.01 13.624 68.353 31.187 9.241 11.316 9.994 25.658 3.906 37.608-5.094 9.998-19.999 15.053-32.766 20.835-4.829 2.187-12.511 3.231-16.491 5.635-1.083.653 11.714 3.995 14.104 4.717.786.238-10.312-1.984-13.67-2.096-18.295-.614 9.816-11.73 5.858-16.511" />
            </svg>
            <ul class="list-inline mt-5 pt-sm-3 d-flex align-items-center justify-content-center">
               <li class="inlnine-item" data-sal="slide-right" style="--sal-duration: 6s">
                  <img src="Frontend/assets/images/member-1.webp" alt="">
               </li>
               <li class="inlnine-item" data-sal="slide-right" style="--sal-duration: 5s">
                  <img src="Frontend/assets/images/member-2.webp" alt="">
               </li>
               <li class="inlnine-item" data-sal="slide-right" style="--sal-duration: 4s">
                  <img src="Frontend/assets/images/member-3.webp" alt="">
               </li>
               <li class="inlnine-item" data-sal="slide-right" style="--sal-duration: 3s">
                  <img src="Frontend/assets/images/member-4.webp" alt="">
               </li>
               <li class="inlnine-item" data-sal="slide-right" style="--sal-duration: 2s">
                  <img src="Frontend/assets/images/member-5.webp" alt="">
               </li>
               <li class="inlnine-item" data-sal="slide-right" style="--sal-duration: 1s">
                  <a href="https://t.me/+I-F3dHgiOzBjYmY1" target="_blank">
                     <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" fill="none"
                        viewBox="0 0 80 81">
                        <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M40 17.166v46.667M16.667 40.5h46.667" />
                     </svg>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- JOIN OUR TEAM END -->
<!-- BOTTOM INFO START -->
<section class="bottom-info spacing-150 pb-5 mb-5">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-11 mx-auto text-center">
            <div class="brand intro">
               <a href="index-2.html" class="d-block text-center">
               <img src="Frontend/assets/images/logo.png" class="d-block mx-auto" alt="">
               </a>
            </div>
            <h2 class="display-6 text-white font-weight-700 text-uppercase my-4" data-sal="slide-up"
               style="--sal-duration: 1s">
               {{ $section6_heading[0] }}
            </h2>
            {!! $section6[0] !!}
         </div>
      </div>
   </div>
</section>
<!-- BOTTOM INFO END -->
@endsection



@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $("#shSlider").slick({
            speed:3000,
            autoplaySpeed: 2000,
            autoplay: true,
            arrows:false,
           
            
        });
    });
        
        
        
        
   $(window).bind('load',function(){

      $('#courseslider').owlCarousel({
         autoplay:true,
         nav:false,
         smartSpeed: 500,
         autoplaySpeed: 1000,
         autoplayHoverPause: true,
         autoHeightClass: "owl-height",
         margin: 50,
         responsive: { 
            0: { items: 1, loop: $('.item .card').lenght > 1 ? true : false }, 
            800: { items: 2, loop: $('.item .card').lenght > 2 ? true : false }, 
            1200: { items: 3.5, loop: $('.item .card').lenght > 3.5 ? true : false } 
         },
      });
      
      $('#courseslider2').owlCarousel({
         autoplay:true,
         nav:false,
         smartSpeed: 500,
         autoplaySpeed: 1000,
         autoplayHoverPause: true,
         autoHeightClass: "owl-height",
         margin: 50,
         responsive: { 
            0: { items: 1, loop: $('.item .card').lenght > 1 ? true : false }, 
            800: { items: 2, loop: $('.item .card').lenght > 2 ? true : false }, 
            1200: { items: 3.5, loop: $('.item .card').lenght > 3.5 ? true : false } 
         },
      });
      $('#trainingsslider2').owlCarousel({
         autoplay:true,
         nav:false,
         smartSpeed: 500,
         autoplaySpeed: 1000,
         autoplayHoverPause: true,
         autoHeightClass: "owl-height",
         margin: 50,
         responsive: { 
            0: { items: 1, loop: $('.item .card').lenght > 1 ? true : false }, 
            800: { items: 2, loop: $('.item .card').lenght > 2 ? true : false }, 
            1200: { items: 3.5, loop: $('.item .card').lenght > 3.5 ? true : false } 
         },
      });
   });
</script>

@endsection

@section('style')
<style>
   .trainingimage.d-block.w-100 {
      height: 300px;
      object-fit: cover;
      object-position: top;
   }
</style>
@endsection