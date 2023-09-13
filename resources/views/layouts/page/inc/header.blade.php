
   @php
   $logo = DB::table('admingeneralsettings')->pluck('logo');
   //$favicon = DB::table('admingeneralsettings')->pluck('favicon');
   @endphp


   <!-- HEADER START -->
   <header class="nav-up">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
               <div class="social d-md-grid d-none align-items-center">
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
               <div class="brand load ms-md-5 ps-md-5">
                  <a href="{{ route('page.home') }}" class="d-block text-center">
                     <img src="{{asset('backend/images/general_settings')}}/{{ $logo[0] }}" class="d-block mx-auto" alt="summer healing">
                  </a>
               </div>

               @if(session('success'))

               <div class="alert alert-success">
       
                 {{ session('success') }}
       
               </div> 
               @endif
               
               <div class="right">
                  <div class="dropdown">
                     <div class="cart-count1">
                        @if(auth()->check())
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                        @else
                        <a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                        @endif
                     </div>
                     <div class="cart"  data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="cart-count">
                           @php $total = 0 @endphp
                           {{-- @dd(session('cart')) --}}
                           @foreach((array) session('cart') as $id => $details)
                               @php $total += (int)$details['price'] * $details['quantity'] @endphp
                           @endforeach
                           @if(session('cart')) {{ count(session('cart')) }} @endif
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="none"
                           viewBox="0 0 38 38">
                           <g clip-path="url(#a)">
                              <path fill="#FDC442" stroke="#010633" stroke-width=".3"
                                 d="M19 2.375a5.937 5.937 0 0 1 5.938 5.938V9.5H13.063V8.312A5.938 5.938 0 0 1 19 2.375ZM27.313 9.5V8.312a8.313 8.313 0 0 0-16.625 0V9.5H2.374v23.75A4.75 4.75 0 0 0 7.125 38h23.75a4.75 4.75 0 0 0 4.75-4.75V9.5h-8.313ZM4.75 11.875h28.5V33.25a2.375 2.375 0 0 1-2.375 2.375H7.125A2.375 2.375 0 0 1 4.75 33.25V11.875Z" />
                           </g>
                           <defs>
                              <clipPath id="a">
                                 <path fill="#fff" d="M0 0h38v38H0z" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <ul class="dropdown-menu cart-empty pt-3 pb-4">
                        @if(session('cart'))
                           @foreach(session('cart') as $id => $details)

                           <div class="row cart-detail">

                              <div class="col-lg-12 col-sm-8 col-12 cart-detail-product" id="cart_items">

                                  <p>{{ $details['title'] }} </p>

                                  <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> ({{ $details['quantity'] }})</span>

                              </div>

                          </div>
                           @endforeach
                        @endif
                        <li>
                           @if(!session('cart'))
                           <h5 class="my-4">Your cart is empty.</h5>
                           @else
                           <a href="{{ route('cart') }}" class="btn btn-primary mb-3">View Courses</a>
                           @endif
                        </li>
                     </ul>
                  </div>
                  <div class="nav" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" onclick="hideElemnt()">
                     <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="none" viewBox="0 0 38 38">
                        <path stroke="#FDC442" stroke-linecap="round" stroke-width="2"
                           d="M15 3h22M1 18h36M15 33h22" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- HEADER END -->