@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'Trainings | Summer Healing Society')

@section('meta_keyword', 'Trainings')

@section('meta_description', 'Trainings')



<!-- PAGE HEADING START -->

<section class="set-top-spacing position-relative overflow-hidden">

    <div class="content d-flex align-items-center justify-content-center">

      <div class="container-fluid w-100">

        <div class="row">

          <div class="col-12 text-center mt-3 mt-sm-0">

            <h1

              class="display-2 font-weight-700 text-uppercase"

              data-sal="slide-up"

              style="--sal-duration: 1s"

            >

              Training

            </h1>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- PAGE HEADING END -->

  <!-- PLANS START -->

  <section class="yoga-training yoga-training-inner spacing-100 pb-0">

    <div class="container-fluid text-center text-md-start">

      <div class="row">

        <div class="col-xl-11 mx-auto">

          <div class="row row-equl" id="#trainingCourses">

            <!-- ITEM START -->



            @php

              $allTrainings = App\Models\Admintraining::all();

            @endphp

            @foreach ( $allTrainings as $training )

            <div class="col-xl-4 col-lg-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">

              <div class="card text-center mx-2">

                <div class="top">

                   <img src="Frontend/assets/images/loading.gif" data-src="{{ asset('backend/images/trainings_images') }}/{{ $training->image }}"  class="d-block w-100 lazy trainingimage" alt="...">

                </div>

                <div class="content">

                  <div class="middle">

                    <a href="{{route('page.training.detailed', $training->id)}}"><h4 class="h4 font-weight-700 text-uppercase main-title">{{$training->title}}</h4></a>

                    {{-- <p class="desc">

                      Lorem ipsum dolor sit amet, consectetur elit.

                    </p> --}}

                  </div>

                  <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">

                    @if(auth()->check())

                        @php

                          $allOrders = App\Models\Order::where('useremail', auth()->user()->email)->where('type','training')->pluck('training_id');

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

            

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- PLANS END -->





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