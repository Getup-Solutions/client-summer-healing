@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'Subscription Plans | Summer Healing Society')

@section('meta_keyword', 'Subscription Plans')

@section('meta_description', 'Subscription Plans')



<!-- PAGE HEADING START -->

<section class="set-top-spacing position-relative overflow-hidden">

    <div class="content d-flex align-items-center justify-content-center">

       <div class="container-fluid w-100">

          <div class="row">

             <div class="col-12 text-center mt-3 mt-sm-0">

                <h1 class="display-2 font-weight-700 text-uppercase mt-sm-0" data-sal="slide-up"

                   style="--sal-duration: 1s">

                   Subscription Plans

                </h1>

             </div>

          </div>

       </div>

    </div>

 </section>

 <!-- PAGE HEADING END -->

 <!-- PLANS START -->

 <section class="subscription-all-plans spacing-150 pb-0">

    <div class="container-fluid text-center text-xl-start">

       <div class="row">

          <div class="col-xl-11 col-lg-7 col-md-8 col-sm-10 mx-auto">

            <!-- ITEM START -->

            @foreach($subscriptions as $subscription)

            @php 

                //$usersubscriptions = "";

            @endphp

            @if(auth()->check())

               @php

      

                  $user = App\Models\User::find(Auth()->user()->id);

                  //$usersubscriptions = $user->usersubscription()->where('status','active')->get();

                  $usersubscriptions = App\Models\User::where('id', auth()->user()->id)->first();

                  //dd($usersubscriptions->subscription_id);

                  @endphp



                  

            @endif

    

            <div class="row spacing-150 pt-0 mb-5 mb-sm-0">

                <div class="col-xl-4  order-last"  style="position: relative;">

                  @if(auth()->check())

                  @if( $subscription->id === (int)$usersubscriptions->subscription_id)

                  <span id="subscriptionplan" style="">Current Membership</span>

                  @endif

                  @endif

                    <div class="ps-xl-4">

                    <div class="card card-price">

                        <img src="Frontend/assets/images/graphic-3.svg" class="icon" alt="">

                        <div>

                            <h3 class="offer-price text-white display-3 font-weight-700 d-xl-flex align-items-center m-0">

                                <strong>${{ $subscription->price }}</strong> <span style="padding-top: 1.2rem;

                                margin-right: 5px;"> / {{ $subscription->interval }}</span>

                            </h3>

                          <h4 class="h2 normal-price text-white text-muted m-0"><s>${{ $subscription->price + 100 }} </s></h4>

                        </div>

                        @if(auth()->check())

                           @if( $subscription->id === (int)$usersubscriptions->subscription_id)

                           @else

                           <a href="{{ route('page.subscription', $subscription->id) }}" class="btn btn-primary w-100">buy now</a>

                           @endif

                        @else

                        <a href="{{ route('page.subscription', $subscription->id) }}" class="btn btn-primary w-100">buy now</a>

                        @endif

                     </div>

                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="content pe-xl-5">

                        <div class="top">

                            <h2 class="display-6 font-weight-700 text-uppercase">

                                {{ $subscription->title }}

                            </h2>

                            {{-- <p class="plan-type">ONLINE</p> --}}

                        </div>

                        {!! $subscription->description !!}

                        </div>

                </div>

            </div>

            @endforeach

            <!-- ITEM END -->

            

            </div>

       </div>

    </div>

 </section>

 <!-- PLANS END -->



@endsection