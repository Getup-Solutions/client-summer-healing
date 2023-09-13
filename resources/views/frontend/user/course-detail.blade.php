@extends('layouts.user.userLayout')
@section('content')
@section('title', 'Course-'.$course_single->title)
@section('meta_keyword', $course_single->title)
@section('meta_description', $course_single->title)
 <!-- MY ACCOUNT START -->
 <section class="set-top-spacing my-account">
    <div class="container-fluid">
       <!-- ACCOUNT HEADER START -->
       <div class="row"  data-sal="slide-up" style="--sal-duration: 1s">
          <div class="col-xl-11 mx-auto">
             <div class="account-header d-flex align-items-center justify-content-between mb-5">
                <div class="d-flex align-items-center">
                   <img src="{{ asset('Frontend/assets/images/graphic-2.svg')}}" height="60" class="mx-auto mx-sm-0">
                   <h2 class="h5 m-0 text-uppercase secondary-font ms-3">{{ $course_single->title }}</h2>
                </div>
                <div class="dropdown">
                   <div class="menu-list" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="4" fill="none" viewBox="0 0 18 4">
                         <path fill="#FDC442"
                            d="M2.5 3.75a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Zm6.5 0a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Zm6.5 0a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z" />
                      </svg>

                   </div>
                   <ul class="dropdown-menu p-0">
                      <li>
                         <a class="dropdown-item" href="{{ route('user.myaccount') }}">Subscriptions</a>
                      </li>
                      <li>
                         <a class="dropdown-item" href=" ">Transactions</a>
                      </li>
                      <li>
                         <a class="dropdown-item" href="{{ route('user.myaccount.userprofile', auth()->user()->id)}}">Profile</a>
                      </li>
                      <li>
                         <a class="dropdown-item" href="my-events.html">Events</a>
                      </li>
                      <li>
                         <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <!-- ACCOUNT HEADER END -->
        <div class="my-videos-wrpr index-minus position-relative" id="myaccountVideoIframe">  
          <!-- VIDEO PLAYER START -->
          <div class="row index-minus text-center text-xl-start w-100">
             <div class="col-xl-11 mx-auto">
                <div class="video-player-wrpr init-animation"  data-sal="slide-up" style="--sal-duration: 1s">
                   <div class="video-playerd" data-bs-toggle="modal" data-bs-target="#videoPlayer"
                      data-video="{{ asset('Frontend/assets/video/video.mp4')}}" onclick="openVideo(this)">
                       {{-- <div class="video-start">The next live stream will start on January 23, at 10.30 AM.</div> --}}
                      {{-- <img src="{{ asset('Frontend/assets/images/loading.gif')}}" data-src="{{ asset('Frontend/assets/images/video-banner.jpg')}}" class="d-block w-100 lazy" alt="" /> --}}

                         {!! $course_single->embed_url !!}
                   </div>
                   @php
                      //@dd($_GET['coursetype'])
                      $coursetypeparam = $_GET['coursetype'];
                   @endphp
                   @if($coursetypeparam === "ondemand")
                   <div class="video-info">
                      <p class="text-primary init-animation"data-sal="slide-up" style="--sal-duration: 1s">
                        @php
                           $date = date('Y-m-d');
                           //@dd($date)
                        @endphp
                        @if($course_single->scheduledate > $date)
                        Next streaming on {{ \Carbon\Carbon::parse($course_single->scheduledate)->format('d/m/Y')}}
                        @endif
                        @if($course_single->scheduledate < $date)
                        Streamed live on {{ \Carbon\Carbon::parse($course_single->scheduledate)->format('d/m/Y')}}
                        @endif
                     </p>
                    <p data-sal="slide-up init-animation" style="--sal-duration: 1s">
                        {!! $course_single->description !!}
                    </p>
                   </div>
                   @endif
                </div>
             </div>
          </div>
          <!-- VIDEO PLAYER END -->
          <!-- YOGA COURSES START -->
          <div class="row index-minus text-center text-xl-start w-100" style="display: none;">
             <div class="col-xl-11 mx-auto">
                <h2 class="h2 text-uppercase font-weight-700 mb-5">Recorded videos</h2>
                <div class="yoga-course pt-3">
                   <div class="row row-equl">
                    @foreach ($orders as $order)
                        
                      <!-- ITEM START -->
                       <div class="col-xl-4 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                         <div class="card text-center mx-2">
                            <div class="top d-flex align-items-center justify-content-cente">
                               <div class="play-button"></div>
                               <img src="{{ asset('Frontend/assets/images/loading.gif')}}" data-src="{{ asset('Frontend/assets/images/thumb-1.webp')}}"
                                  class="d-block w-100 lazy" alt="" />
                            </div>
                            <div class="content">
                               <div class="middle">
                                  <h4 class="h3 font-weight-700 text-uppercase mb-2 text-limit-2">Video name</h4>
                                  <p class="text-normal">Streamed live on 20 May 2022</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- ITEM END -->
                      @endforeach
                     {{--  <!-- ITEM START -->
                       <div class="col-xl-4 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                         <div class="card text-center mx-2">
                            <div class="top d-flex align-items-center justify-content-cente">
                               <div class="play-button"></div>
                               <img src="{{ asset('Frontend/assets/images/loading.gif')}}" data-src="{{ asset('Frontend/assets/images/thumb-1.webp')}}"
                                  class="d-block w-100 lazy" alt="" />
                            </div>
                            <div class="content">
                               <div class="middle">
                                  <h4 class="h3 font-weight-700 text-uppercase mb-2 text-limit-2">Video name</h4>
                                  <p class="text-normal">Streamed live on 20 May 2022</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- ITEM END -->
                        <!-- ITEM START -->
                         <div class="col-xl-4 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                           <div class="card text-center mx-2">
                              <div class="top d-flex align-items-center justify-content-cente">
                                 <div class="play-button"></div>
                                 <img src="{{ asset('Frontend/assets/images/loading.gif')}}" data-src="{{ asset('Frontend/assets/images/thumb-1.webp')}}"
                                    class="d-block w-100 lazy" alt="" />
                              </div>
                              <div class="content">
                                 <div class="middle">
                                    <h4 class="h3 font-weight-700 text-uppercase mb-2 text-limit-2">Video name</h4>
                                    <p class="text-normal">Streamed live on 20 May 2022</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ITEM END -->
                          <!-- ITEM START -->
                       <div class="col-xl-4 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                       <div class="card text-center mx-2">
                          <div class="top d-flex align-items-center justify-content-cente">
                             <div class="play-button"></div>
                             <img src="{{ asset('Frontend/assets/images/loading.gif')}}" data-src="{{ asset('Frontend/assets/images/thumb-1.webp')}}"
                                class="d-block w-100 lazy" alt="" />
                          </div>
                          <div class="content">
                             <div class="middle">
                                <h4 class="h3 font-weight-700 text-uppercase mb-2 text-limit-2">Video name</h4>
                                <p class="text-normal">Streamed live on 20 May 2022</p>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- ITEM END -->
                      <!-- ITEM START -->
                       <div class="col-xl-4 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                       <div class="card text-center mx-2">
                          <div class="top d-flex align-items-center justify-content-cente">
                             <div class="play-button"></div>
                             <img src="{{ asset('Frontend/assets/images/loading.gif')}}" data-src="{{ asset('Frontend/assets/images/thumb-1.webp')}}"
                                class="d-block w-100 lazy" alt="" />
                          </div>
                          <div class="content">
                             <div class="middle">
                                <h4 class="h3 font-weight-700 text-uppercase mb-2 text-limit-2">Video name</h4>
                                <p class="text-normal">Streamed live on 20 May 2022</p>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- ITEM END -->
                      <!-- ITEM START -->
                       <div class="col-xl-4 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                         <div class="card text-center mx-2">
                            <div class="top d-flex align-items-center justify-content-cente">
                               <div class="play-button"></div>
                               <img src="{{ asset('Frontend/assets/images/loading.gif')}}" data-src="{{ asset('Frontend/assets/images/thumb-1.webp')}}"
                                  class="d-block w-100 lazy" alt="" />
                            </div>
                            <div class="content">
                               <div class="middle">
                                  <h4 class="h3 font-weight-700 text-uppercase mb-2 text-limit-2">Video name</h4>
                                  <p class="text-normal">Streamed live on 20 May 2022</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- ITEM END --> --}}
                   </div>
                </div>
             </div>
          </div>
          <!-- YOGA COURSES END -->
       </div>
       <!-- MY VIDEOS WRPR END -->
    </div>
 </section>
 <!-- MY ACCOUNT END -->

 @endsection

 @section('style')
    <style>
        #myaccountVideoIframe iframe{
            width: 100%;
            height:500px;
        }
        .my-videos-wrpr .video-player-wrpr .video-player .video-start {
            font-family: "Proza Libre",sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 1.25rem;
            line-height: 1.5;
            text-align: center;
            display: none;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding-top: 200px;
            margin: 0 auto;
            z-index: 1;
            color: rgba(241,241,241,0.8);
            display: none;
         }
    </style>
 @endsection