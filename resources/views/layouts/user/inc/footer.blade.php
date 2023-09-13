<!-- FOOTER START -->
<footer>
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
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
                        <line x1="96" y1="144" x2="160" y2="144" fill="none" stroke="#FDC442"
                           stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></line>
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
                  <a href="#" class="me-1 me-md-0">Terms</a>
                  <a href="#" class="me-1 me-md-0">Privacy policy</a>
                  <a href="#">Refund policy</a>
               </div>
               <div class="copyright mt-2 mt-md-0 d-md-flex align-items-center justify-content-end">
                  <p class="text-center text-md-start">All Rights Reserved @php echo date('Y') @endphp</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- FOOTER END -->