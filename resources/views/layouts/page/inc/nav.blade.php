<!-- MOBILE NAVIGATION START -->

<div class="offcanvas offcanvas-end mobile-menu" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="mobileMenu" aria-labelledby="offcanvasScrollingLabel">

<div class="offcanvas-header p-0 py-sm-5 py-3">

   <div class="container-fluid">

      <div class="d-flex align-items-center justify-content-end">

         <div class="nav-close cursor-pointer" data-bs-dismiss="offcanvas" aria-label="Close" onclick="showElemnt()">

            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" fill="none" viewBox="0 0 43 43">

               <path fill="#FDC442" fill-rule="evenodd"

                  d="M32.361 11.989a1 1 0 0 0-1.414-1.415l-8.732 8.733-9.16-9.16a1 1 0 0 0-1.415 1.414l9.16 9.16-9.652 9.652a1 1 0 0 0 1.414 1.415l9.653-9.653 9.224 9.225a1 1 0 0 0 1.415-1.414l-9.225-9.225 8.732-8.732Z"

                  clip-rule="evenodd" />

            </svg>

         </div>

      </div>

   </div>

</div>

<div class="offcanvas-body p-0">

   <div class="container-fluid">

      <div class="top">

         <a href="{{ route('page.home') }}">Home</a>

         <a href="{{ route('page.about') }}">About</a>

         <a href="{{ route('page.subscriptionplans') }}">Subscription Plans</a>

         <a href="{{ route('page.yogacourses') }}">Yoga Classes</a>

         <a href="{{ route('page.trainings') }}">Trainings</a>

         <a href="{{ route('page.events') }}">Events</a>

         <a href="{{ route('page.wellnesscenter') }}">Wellness Center</a>

         <a href="{{ route('page.schedules') }}">Schedules</a>

         <a href="{{ route('user.myaccount') }}">My Account</a>

         <a href="{{ route('page.contact') }}">Contact</a>
         
         <a href="https://linktr.ee/summerhealing">Public Notice</a>

         @if(auth()->check())

         <a class="dropdown-item" href="{{ route('logout') }}"

                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                     Logout

         </a>

         @else

         <a href="{{ route('login') }}">Login</a>

         @endif

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

            @csrf

         </form>



      </div>

      <div class="bottom">

         <div class="content d-md-flex align-items-center justify-content-between">

            <div class="social d-flex d-md-none align-items-center justify-content-center mb-3">

                @php

                  $fb = DB::table('admincontactsettings')->pluck('facebook_url');

                  $insta = DB::table('admincontactsettings')->pluck('instagram_url');

                  $tiktok = DB::table('admincontactsettings')->pluck('tiktok_url');

                  $telegram = DB::table('admincontactsettings')->pluck('telegram_url');

                  //dd($fb[0])

                  @endphp

               <a href="{{ $fb[0] }}" target="_blank">

                  <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#FDC442"

                     viewBox="0 0 256 256">

                     <rect width="256" height="256" fill="none"></rect>

                     <circle cx="128" cy="128" r="96" fill="none" stroke="#FDC442" stroke-linecap="round"

                        stroke-linejoin="round" stroke-width="12"></circle>

                     <path d="M168,88H152a23.9,23.9,0,0,0-24,24V224" fill="none" stroke="#FDC442"

                        stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></path>

                     <line x1="96" y1="144" x2="160" y2="144" fill="none" stroke="#FDC442" stroke-linecap="round"

                        stroke-linejoin="round" stroke-width="12"></line>

                  </svg>

               </a>

               <a href="{{ $insta[0] }}" target="_blank">

                  <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#FDC442"

                     viewBox="0 0 256 256">

                     <rect width="256" height="256" fill="none"></rect>

                     <circle cx="128" cy="128" r="40" fill="none" stroke="#FDC442" stroke-linecap="round"

                        stroke-linejoin="round" stroke-width="12"></circle>

                     <rect x="36" y="36" width="184" height="184" rx="48" fill="none" stroke="#FDC442"

                        stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></rect>

                     <circle cx="180" cy="76" r="10"></circle>

                  </svg>

               </a>

               <a href="{{ $tiktok[0] }}" target="_blank" class="tiktokIcon">

                     <img src="{{asset('Frontend\assets\images\tiktok.png')}}" alt="tiktok">

              </a>

              

              <a href="{{ $telegram[0] }}" target="_blank" class="telegramIcon">

                 <img src="{{asset('Frontend\assets\images\telegram.png')}}" alt="telegram">

              </a>

            </div>

            <div class="links text-center text-md-start d-md-flex align-items-center justify-content-start">

               <a href="terms.html" class="me-1 me-md-0">Terms</a>

               <a href="privacy.html" class="me-1 me-md-0">Privacy policy</a>

               <a href="refund.html">Refund policy</a>

            </div>

            <div class="copyright mt-2 mt-md-0 d-md-flex align-items-center justify-content-end">

               <p class="text-center text-md-start">All Rights Reserved 2022</p>

            </div>

         </div>

      </div>

   </div>

</div>

</div>

<!-- MOBILE NAVIGATION END -->