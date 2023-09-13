 <!-- ACCOUNT HEADER START -->
 <div class="row" data-sal="slide-up" style="--sal-duration: 1s">
   <div class="col-xl-11 mx-auto">
      <div class="account-header d-flex align-items-center justify-content-between mb-5">
         <h2 class="h5 m-0 text-uppercase secondary-font">Welcome, <span class="text-white">
           @if(auth()->check()) 
              {{ auth()->user()->name }}
           @endif 
           </span></h2>
         <div class="dropdown">
            <div class="menu-list"  data-bs-toggle="dropdown" aria-expanded="false">
               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="4" fill="none" viewBox="0 0 18 4">
                  <path fill="#FDC442"
                     d="M2.5 3.75a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Zm6.5 0a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Zm6.5 0a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z" />
               </svg>

            </div>
               <ul class="dropdown-menu p-0">
                  <li>
                     <a href="{{ route('user.myaccount') }}" class="dropdown-item">Subscriptions</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="{{ route('user.transactions') }}">Transactions</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="{{ route('user.myaccount.userprofile', auth()->user()->id) }}">Profile</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="{{ route('user.myevents') }}">Events</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     Logout
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </li>
               </ul>

            </div>
         </div>
   </div>
</div>
<!-- ACCOUNT HEADER END -->