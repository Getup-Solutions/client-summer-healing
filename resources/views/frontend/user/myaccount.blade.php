@extends('layouts.user.userLayout')
@section('content')
@section('title', 'My Account')
@section('meta_keyword', 'My Account')
@section('meta_description', 'My Account')
 <!-- MY ACCOUNT START -->
 <section class="set-top-spacing my-account">
    <div class="container-fluid">
         @include('layouts.user.inc.usermenus')   
       <!-- MY SUBSCRIPTIONS START -->
       <div class="row index-minus text-center text-xl-start" id="subscriptionsSection">
          <div class="col-xl-11 mx-auto">
             <h2 class="display-5 text-center text-uppercase font-weight-700 mb-5" data-sal="slide-up" style="--sal-duration: 1s">Your Subscriptions</h2>
               <div class="subscription-plans pt-3">
                <div class="row">
                  @php
                  $subscriptiondetails = auth()->user()->usersubscription;
                  
                  $userid = auth()->user()->id;
                  
                  // $subscription = App\Models\Usersubscription::where('userid', $userid)
                  // ->where('status','=','active')->first();
                  //dd($subscription);
                  $userdata = App\Models\User::find(auth()->user()->id);
                  $subscriptions = App\Models\Usersubscription::where('userid', $userid)->get();
                  //dd($subscriptions);
                  
                  
                  @endphp

                  @if(count($subscriptions) > 0)
                  @foreach ($subscriptions as $subscription)
                  
                  <!-- ITEM START -->
                  <div class="col-xl-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                      <div class="card mx-2">
                         <div class="top w-100 d-sm-flex align-items-start justify-content-between">
                            <img src="{{ asset('Frontend/assets/images/graphic-2.svg')}}" class="icon mx-auto mx-sm-0" />
                            <p class="type mt-3 mb-0 text-sm-start text-center">{{ $subscription->status }}</p>
                         </div>
                         <div class="middle">
                            <h3 class="h1 mt-4 mt-sm-0 title text-uppercase text-white text-sm-start text-center">
                               {{ $subscription->title }}
                            </h3>
                            @if($subscription->status == "active")
                            <h4>
                              Start Date: {{date('d-m-Y', $subscription->start_date)}}<br/>
                              End Date: {{ date('d-m-Y', $subscription->next_date)}}
                           </h4>
                           @endif
                         </div>
                         <div
                            class="bottom w-100 text-sm-start text-center d-sm-flex align-items-end justify-content-between">
                            <div class="left">
                               <h4 class="display-3 price font-weight-700 m-0 text-white">${{ $subscription->price }}<span class="per">/
                                  {{ $subscription->interval }}</span>
                               </h4>
                            </div>
                            <div class="right">
                               <a href="{{ route('page.subscription.detailed', $subscription->id) }}" class="btn btn-primary mt-4 mt-sm-0"><svg
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
                     
                     @endforeach
                     @else
                     <div class="col-xl-12 mb-5" style="color:#fff;text-align:center;" data-sal="slide-up" style="--sal-duration: 1s">
                        You have no active subscriptions
                     </div>
                     @endif
                </div>
             </div>
          </div>
       </div>
       <!-- MY SUBSCRIPTIONS END -->
       <!-- YOGA COURSES START -->
       @php 
            $useremail = auth()->user()->email;
            //dd($useremail);
            //$orders = App\Models\Order::where(['useremail' => $useremail])->get();

            // $orders = DB::table('orders')
            // ->select('course')
            // ->groupBy('course')
            // ->get();
            //dd($users);
       @endphp
         <div class="row index-minus text-center text-xl-start mt-sm-5">
          <div class="col-xl-11 mx-auto">
             <h2 class="display-5 text-center text-uppercase font-weight-700 mb-5" data-sal="slide-up" style="--sal-duration: 1s">Yoga Courses</h2>
             <div class="yoga-course pt-3" id="allCoursesWrap">
                <div class="row">
                  @php
                     $ords = App\Models\Order::where(['useremail' => $useremail])->get();
                     $values = [];
                     foreach ($ords as $da) {
                        foreach(explode(',', $da->courseid) as $value) {
                           $values[] = trim($value);
                        }
                     }
                     $values = array_unique($values);
                     $allorders = DB::table('admincourses')->whereIn('id', $values)->get();
                     //dd($allorders);
                  @endphp

                  @if(count($allorders) > 0)
                  @foreach($allorders as $course)
                   <!-- ITEM START -->
                   <div class="col-xl-4 col-md-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                      <div class="card text-center mx-2">
                         <div class="top d-flex align-items-center justify-content-cente">
                            <div class="play-button"></div>
                            <img src="{{ asset('Frontend/assets/images/loading.gif') }}" data-src="{{ asset('backend/images/courses_images') }}/{{ $course->featured_image }}" class="d-block w-100 lazy" alt=""/>

                         </div>
                         <div class="content" style="background: none;">
                            <div class="middle">
                              <h4 class="h3 font-weight-700 text-uppercase">{{ $course->title }} 
                                 <span style="font-size:14px;">
                                 ({{$course->coursetype == "ondemand" ? "On Demand" : "Course"}})
                                 </span>
                              </h4>
                            </div>
                            <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">
                               <a href="{{ route('user.myaccount.coursedetails', $course->id )}}?coursetype={{$course->coursetype}}" class="btn btn-primary w-100 mt-3 mt-sm-0">
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
                   @endforeach 
                   @else
                   <div class="col-xl-12 mb-5" style="color:#fff;text-align:center;" data-sal="slide-up" style="--sal-duration: 1s">
                     You have no active courses
                   </div>
                   @endif

                </div>
             </div>
          </div>
         </div>
       <!-- YOGA COURSES END -->



      <!-- YOGA TRAINING END -->
       <div class="row index-minus text-center text-xl-start mt-sm-5" id="trainingSection">
         <div class="col-xl-11 mx-auto">
            <h2 class="display-5 text-center text-uppercase font-weight-700 mb-5" data-sal="slide-up" style="--sal-duration: 1s">Trainings</h2>
            <div class="yoga-course pt-3" id="trainingCourses">
               <div class="row">
                 @php
                  $currentusermail = auth()->user()->email;
                    $ordersTraining = App\Models\Order::where(['useremail' => $currentusermail, 'type' => 'training'])->get();
                    
                    foreach ($ordersTraining as $da) {
                       
                        foreach(explode(',', $da->training_id) as $value) {
                           $values[] = trim($value);
                        }
                        
                     }
                     //dd($values);
                    //$values = $values;
                    $allorders = DB::table('admintrainings')->whereIn('id', $values)->get();
                    //dd($allorders);
                 @endphp

                 @if(count($allorders) > 0)
                 @foreach($allorders as $training)
                  <!-- ITEM START -->
                  <div class="col-xl-4 col-md-6 mb-5" data-sal="slide-up" style="--sal-duration: 1s">
                     <div class="card text-center mx-2">
                        <div class="top d-flex align-items-center justify-content-cente">
                           <div class="play-button"></div>
                           <img src="{{ asset('Frontend/assets/images/loading.gif') }}" data-src="{{ asset('backend/images/trainings_images') }}/{{ $training->image }}" class="d-block w-100 lazy" alt=""/>
                        </div>
                        <div class="content" style="background:none;">
                           <div class="middle">
                             <h4 class="h3 font-weight-700 text-uppercase">{{ $training->title }}  </h4>
                           </div>
                           <div class="bottom w-100 d-sm-flex align-items-end justify-content-center">
                              {{-- <a href="{{route('page.training.detailed', $training->id)}}" class="btn btn-primary w-100 mt-3 mt-sm-0">
                                 Details
                              </a> --}}
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ITEM END -->
                  @endforeach 
                  @else
                  <div class="col-xl-12 mb-5" style="color:#fff;text-align:center;" data-sal="slide-up" style="--sal-duration: 1s">
                    You have no active Trainings
                  </div>
                  @endif

               </div>
            </div>
         </div>
        </div>


      <!-- TRAININGS END -->


    </div>
 </section>
 <!-- MY ACCOUNT END -->
 @endsection

 @section('style')
 <style>
   #trainingCourses .d-block.w-100.lazy {
      height: 300px;
      object-fit: cover;
      object-position: top;
   }
   #trainingCourses .card,
   #allCoursesWrap .card
   {
      gap: 20px;
   }
 </style>
 @endsection