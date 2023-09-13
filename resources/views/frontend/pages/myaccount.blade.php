@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'My Account | Summer Healing Society')

@section('meta_keyword', 'My Account')

@section('meta_description', 'My Account')



<!-- MY ACCOUNT START -->

<section class="set-top-spacing my-account">

    <div class="container-fluid">

       <!-- ACCOUNT HEADER START -->

       <div class="row" data-sal="slide-up" style="--sal-duration: 1s">

          <div class="col-xl-11 mx-auto">

             <div class="account-header d-flex align-items-center justify-content-between mb-5">

                <h2 class="h5 m-0 text-uppercase secondary-font">Welcome, <span class="text-white">Mr Smith</span></h2>

                <div class="dropdown">

                   <div class="menu-list"  data-bs-toggle="dropdown" aria-expanded="false">

                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="4" fill="none" viewBox="0 0 18 4">

                         <path fill="#FDC442"

                            d="M2.5 3.75a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Zm6.5 0a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Zm6.5 0a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z" />

                      </svg>



                   </div>

                   <ul class="dropdown-menu p-0">

                      <li>

                         <a class="dropdown-item" href="my-account.html">Subscriptions</a>

                      </li>

                      <li>

                         <a class="dropdown-item" href="transactions.html">Transactions</a>

                      </li>

                      <li>

                         <a class="dropdown-item" href="profile.html">Profile</a>

                      </li>

                      <li>

                         <a class="dropdown-item" href="my-events.html">Events</a>

                      </li>

                      <li>

                         <a class="dropdown-item" href="#">Logout</a>

                      </li>

                   </ul>

                </div>

             </div>

          </div>

       </div>

       <!-- ACCOUNT HEADER END -->

       <!-- MY SUBSCRIPTIONS START -->

       <div class="row index-minus text-center text-xl-start">

          <div class="col-xl-11 mx-auto">

             <h2 class="display-5 text-center text-uppercase font-weight-700 mb-5" data-sal="slide-up" style="--sal-duration: 1s">Your Subscriptions</h2>

             <div class="subscription-plans pt-3">

                <div class="row">

                    <!-- ITEM START -->

                   <div class="col-xl-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">

                      <div class="card mx-2">

                         <div class="top w-100 d-sm-flex align-items-start justify-content-between">

                            <img src="Frontend/assets/images/graphic-2.svg" class="icon mx-auto mx-sm-0" />

                            <p class="type mt-3 mb-0 text-sm-start text-center">Online</p>

                         </div>

                         <div class="middle">

                            <h3 class="h1 mt-4 mt-sm-0 title text-uppercase text-white text-sm-start text-center">

                               Intro Gold

                               Membership

                            </h3>

                         </div>

                         <div

                            class="bottom w-100 text-sm-start text-center d-sm-flex align-items-end justify-content-between">

                            <div class="left">

                               <h4 class="display-3 price font-weight-700 m-0 text-white">$250<span class="per">/

                                     MONTH</span>

                               </h4>

                            </div>

                            <div class="right">

                               <a href="my-videos.html" class="btn btn-primary mt-4 mt-sm-0"><svg

                                     xmlns="http://www.w3.org/2000/svg" width="12" height="14" fill="none"

                                     viewBox="0 0 12 14">

                                     <path fill="#010633"

                                        d="m10.945 7.958-8.75 5.076c-.743.431-1.695-.09-1.695-.957V1.924c0-.867.952-1.388 1.695-.957l8.75 5.076c.74.43.74 1.486 0 1.915Z" />

                                  </svg>

                                  View

                               </a>

                            </div>

                         </div>

                      </div>

                   </div>

                  <!-- ITEM END -->

                </div>

             </div>

          </div>

       </div>

       <!-- MY SUBSCRIPTIONS END -->

       <!-- YOGA COURSES START -->

       <div class="row index-minus text-center text-xl-start mt-sm-5">

          <div class="col-xl-11 mx-auto">

             <h2 class="display-5 text-center text-uppercase font-weight-700 mb-5" data-sal="slide-up" style="--sal-duration: 1s">Yoga Courses</h2>

             <div class="yoga-course pt-3">

                <div class="row">

                   <!-- ITEM START -->

                   <div class="col-xl-4 col-md-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">

                      <div class="card text-center mx-2">

                         <div class="top d-flex align-items-center justify-content-cente">

                            <div class="play-button"></div>

                            <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/thumb-1.webp" class="d-block w-100 lazy"

                   alt="" />

                         </div>

                         <div class="content">

                            <div class="middle">

                               <h4 class="h3 font-weight-700 text-uppercase">Yoga courses name</h4>

                            </div>

                            <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">

                               <a href="course-videos.html" class="btn btn-primary w-100 mt-3 mt-sm-0">

                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" fill="none"

                                     viewBox="0 0 12 14">

                                     <path fill="#010633"

                                        d="m10.945 7.958-8.75 5.076c-.743.431-1.695-.09-1.695-.957V1.924c0-.867.952-1.388 1.695-.957l8.75 5.076c.74.43.74 1.486 0 1.915Z" />

                                  </svg>

                                  Videos

                               </a>

                            </div>

                         </div>

                      </div>

                   </div>

                   <!-- ITEM END -->

                   <!-- ITEM START -->

                   <div class="col-xl-4 col-md-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">

                      <div class="card text-center mx-2">

                         <div class="top d-flex align-items-center justify-content-cente">

                            <div class="play-button"></div>

                            <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/thumb-1.webp" class="d-block w-100 lazy"

                   alt="" />

                         </div>

                         <div class="content">

                            <div class="middle">

                               <h4 class="h3 font-weight-700 text-uppercase">Yoga courses name</h4>

                            </div>

                            <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">

                               <a href="course-videos.html" class="btn btn-primary w-100 mt-3 mt-sm-0">

                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" fill="none"

                                     viewBox="0 0 12 14">

                                     <path fill="#010633"

                                        d="m10.945 7.958-8.75 5.076c-.743.431-1.695-.09-1.695-.957V1.924c0-.867.952-1.388 1.695-.957l8.75 5.076c.74.43.74 1.486 0 1.915Z" />

                                  </svg>

                                  Videos

                               </a>

                            </div>

                         </div>

                      </div>

                   </div>

                   <!-- ITEM END -->

                   <!-- ITEM START -->

                   <div class="col-xl-4 col-md-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">

                      <div class="card text-center mx-2">

                         <div class="top d-flex align-items-center justify-content-cente">

                            <div class="play-button"></div>

                            <img src="Frontend/assets/images/loading.gif" data-src="Frontend/assets/images/thumb-1.webp" class="d-block w-100 lazy"

                   alt="" />

                         </div>

                         <div class="content">

                            <div class="middle">

                               <h4 class="h3 font-weight-700 text-uppercase">Yoga courses name</h4>

                            </div>

                            <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">

                               <a href="course-videos.html" class="btn btn-primary w-100 mt-3 mt-sm-0">

                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" fill="none"

                                     viewBox="0 0 12 14">

                                     <path fill="#010633"

                                        d="m10.945 7.958-8.75 5.076c-.743.431-1.695-.09-1.695-.957V1.924c0-.867.952-1.388 1.695-.957l8.75 5.076c.74.43.74 1.486 0 1.915Z" />

                                  </svg>

                                  Videos

                               </a>

                            </div>

                         </div>

                      </div>

                   </div>

                   <!-- ITEM END -->

                </div>

             </div>

          </div>

       </div>

       <!-- YOGA COURSES END -->

    </div>

 </section>

 <!-- MY ACCOUNT END -->





 @endsection