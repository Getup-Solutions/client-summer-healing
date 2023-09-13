@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Event - '.$event->title)
@section('meta_keyword', 'Event')
@section('meta_description', 'Event')
<!-- PAGE HEADING START -->
<section class="about-banner position-relative overflow-hidden">
    {{-- <div class="content d-flex align-items-center justify-content-center">
       <div class="container-fluid w-100">
          <div class="row">
             <div class="col-12 text-center mt-3 mt-sm-0">
                <h1 class="lg-heading font-weight-700 text-uppercase mt-5 mt-sm-0" data-sal="slide-up"
                   style="--sal-duration: 1s">
                  {{ $subscription-> title }}
                </h1>
             </div>
          </div>
       </div>
    </div> --}}
    <!-- SLIDER START -->
    <div class="image-holder image-round image-overlay">
       <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel"
          data-bs-touch="false" data-bs-interval="3000">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <img src="{{asset('Frontend/assets/images/loading.gif')}}" data-src="{{asset('Frontend/assets/images/banner-1.webp')}}"
                   class="d-block w-100 lazy" alt="...">
             </div>
             <div class="carousel-item">
                <img src="{{asset('Frontend/assets/images/loading.gif')}}" data-src="{{asset('Frontend/assets/images/banner-2.webp')}}"
                   class="d-block w-100 lazy" alt="...">
             </div>
          </div>
       </div>
    </div>
    <!-- SLIDER END -->
 </section>
 <!-- PAGE HEADING END -->



@if(auth()->check())
 @php
   //$allOrders = App\Models\Order::where('useremail', auth()->user()->email)->where('type','training')->pluck('training_id');
 @endphp
@endif



 <!-- SECTION 1 START -->
 <section class="spacing-150">
    <div class="container-fluid text-center">
        @if(!auth()->check())
         <div class="middle w-100" data-sal="slide-up" style="--sal-duration: 2s">
               <p class="mb-2">Already have an account? <button type="button" data-toggle="modal" data-target="#exampleModal" class="highlight-link checkout-login-btn">Login</button>
               </p>
               <p class="m-0">New to our website? <button type="button" data-toggle="modal" data-target="#exampleModal" id="regbtn" class="highlight-link checkout-login-btn">Register</button></p>
         </div>
         @else

        {{-- @if(!$allOrders->contains($training->id)) --}}
            
        <div class="row">
          <div class="col-12">
             <h2 class="display-3 mb-4 font-weight-700 text-uppercase init-animation" data-sal="slide-up"
                style="--sal-duration: 1s">
                {{ $event->title }}
             </h2>
             <p data-sal="slide-up init-animation" style="--sal-duration: 2s">
                {!! $event->description !!}
             </p>
          </div>

          <div class="col-12 mt-5">
            <h2>Payment Details</h2>
            <h4>Amount: {{ $event->price == 0 ? "Free" : "$".$event->price }}</h4>
            <br/><br/>
            <form name="ajax-sub-form" id="ajax-sub-form" method="post" action="{{route('page.event.booksend', $event->id) }}#success_order">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="form-group row">
                            <div class="col-xl-6  mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="text" id="name" class="form-control" name="name"
                                    placeholder="First name" value="{{ auth()->check() ? auth()->user()->name : "" }}">
                                    <label for="floatingInput">First Name</label>
                                </div>
                            </div>
                            <div class="col-xl-6  mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="text" id="lastname" class="form-control" name="lastname"
                                    placeholder="Last name" 
                                    value="@if(auth()->check() && auth()->user()->lastname){{ auth()->user()->lastname }} @endif">
                                    <label for="floatingInput">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="Email" value="{{ auth()->check() ? auth()->user()->email : old('email') }}">
                                    <label for="floatingInput">Email</label>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="phone" id="phone" class="form-control" name="phone"
                                        placeholder="Phone" 
                                        value="@if(auth()->check() && auth()->user()->phone){{auth()->user()->phone}}@else{{old('phone')}}@endif">
                                    <label for="floatingInput">Phone</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="tickets" id="tickets" class="form-control" name="tickets"
                                        placeholder="No. of tickets" 
                                        value="{{ old('tickets') }}">
                                    <label for="floatingInput">No. of tickets</label>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="attendees" id="attendees" class="form-control" name="attendees"
                                        placeholder="Attendies" 
                                        value="{{ old('attendees') }}">
                                    <label for="floatingInput">Attendies name by comma separated</label>
                                </div>
                                <p style="text-align: left;font-size:12px;padding-top:3px;margin-bottom:0;padding-bottom:0">Please enter attendies name by comma separated.</p>
                            </div>
                        </div>

                        @if($event->price != 0)
                            <div class="form-group">
                            <label for="card-element" id="cardlables">Credit or debit card</label>
                            <div id="card-element"></div>
                            <div id="card-errors" role="alert"></div>
                            </div>
                        @endif   
                        <input type="hidden" name="title" value="{{$event->title}}">
                        <input type="hidden" name="price" value="{{$event->price}}">
                        <input type="hidden" name="venue" value="{{$event->venue}}">
                        <input type="hidden" name="startdate" value="{{$event->startdate}}">
                        <input type="hidden" name="enddate" value="{{$event->enddate}}">
                        <input type="hidden" name="starttime" value="{{$event->starttime}}">
                        <input type="hidden" name="endtime" value="{{$event->endtime}}">
                        <input type="hidden" name="user_id" value="@if(auth()->check()){{ auth()->user()->id }}@endif">
                        <input type="hidden" name="useremail" value="@if(auth()->check()){{ auth()->user()->email }}@endif">
                        <input type="hidden" name="userphone" value="@if(auth()->check()){{ auth()->user()->phone }}@endif">
                        <input type="hidden" name="username" value="@if(auth()->check()){{ auth()->user()->name }}@endif">

                        <div class="col-lg-12 mt-5">
                            <div class="form-group">
                                <button class="btn btn-primary mx-auto" type="submit" id="submitbtn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          </div>
       </div>
      {{--  @else
       <h1>This training is already there in your purchase list!</h1>
       <a href="{{route('user.myaccount')}}#trainingSection" id="alreadyPurchased" class="btn btn-sm btn-primary">My Account</a>
       @endif --}}
    </div>
    @endif
 </section>
 <!-- SECTION 1 END -->
 @endsection



 @section('script')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-4">
            <button type="button" class="close x" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="tablist">
                    <ul>
                        <li><a href="#login" class="tabitems activetab logintabb">Login</a></li>
                        <li><a href="#register" class="tabitems registertabb">Register</a></li>
                    </ul>
                </div>
                <div id="login" class="activetabcontent tabcontentItem">
                    <h3 class="mb-4 title" data-tab="login">LOGIN</h3>
                    <form action="{{ route('page.training.login') }}" method="POST" id="handleAjax" autocomplete="off">
                        @csrf
                        {{-- <div id="errors-list"></div> --}}
                            <div class="form-group">
                                {{-- <label class=" p-0" for="name">Email</label> --}}
                                <input type="text" name="email" id="email" class="form-control p-0"
                                    style="box-shadow: none;border-radius:0px" placeholder="Email">
                                <span class="modalError emailerrors"></span>
                            </div>
                            <div class="form-group">
                                {{-- <label class="p-0" for="password">Password</label> --}}
                                <input type="password" name="password" id="password" class="form-control p-0"
                                    style="box-shadow: none;border-radius:0px" placeholder="Password">
                                <span class="modalError passworderrors"></span>
                            </div>
                            <div id="login_error"></div>

                            <div class="modal-footer border-0 mb-4" style="padding: 0;">
                                <button type="submit" id="popup_login_btn" class="btn btn-primary col-6 col-md-6">LOGIN</button>
                            </div>
                    </form>
                </div>

                <div id="register" class="tabcontentItem">
                    <h3 class="mb-4 title" data-tab="register">REGISTER</h3>
                    <form action="{{ route('page.training.register') }}" method="POST" id="handleAjax2">
                        @csrf
                            <div class="form-group">
                                {{-- <label>Name</label> --}}
                                <input type="text" id="rname" class="form-control"
                                    name="rname" placeholder="Name">
                                <span class="modalError rnameerrors"></span>
                            </div>
                            <div class="form-group">
                                {{-- <label>Email</label> --}}
                                <input type="email" id="remail" class="form-control"
                                    name="remail" placeholder="Email">
                                <span class="modalError remailerrors"></span>
                            </div>
                            <div class="form-group">
                                {{-- <label>Password</label> --}}
                                <input type="password" id="rpassword" class="form-control"
                                    name="rpassword" placeholder="Password">
                                <span class="modalError rpassworderrors"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" id="confirm_password" class="form-control"
                                name="confirm_password" placeholder="Confirm Password">
                                <span class="modalError confirm_passworderrors"></span>
                            </div> 
                            
                            <div class="modal-footer border-0 pl-0 mb-0" style="padding: 0;">
                                <button type="submit" id="popup_register_btn" class="btn btn-primary col-6 col-md-6">REGISTER</button>
                            </div>
                        </form>
                        <div id="reg_success"></div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        @if(!auth()->check())
            <script type="text/javascript">
            $(function() {

                //LOGIN AJAX 
                $(document).on("submit", "#handleAjax", function() {
                    var e = this;
                    $(this).find("#popup_login_btn").html("Login...");
                    $.ajax({
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        type: "POST",
                        dataType: 'json',
                        success: function (data) {
                        $(e).find("[type='submit']").html("Login");
                        if (data.status) {
                            location.reload();
                        }else{
                            $(".alert").remove();
                            console.log(data.errors);
                            $("#login_error").html(data.errors);
                            $(".emailerrors").html(data.errors.email);
                            $(".passworderrors").html(data.errors.password);
                            //   $.each(data.errors, function (key, val) {
                            //       $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
                            //   });
                        }
                        }

                    });
                    return false;
                });


                //REGISTER AJAX
                $(document).on("submit", "#handleAjax2", function() {
                    var e = this;
                    $(this).find("#popup_register_btn").html("Registering...");
                    $.ajax({
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        type: "POST",
                        dataType: 'json',
                        success: function (response) {
                        $(e).find("[type='submit']").html("Register");
                        if (response.status) {
                            location.reload();
                            $("#reg_success").html("<span>" +response.msg+ "</span>");
                        }else{
                            //$(".alert").remove();
                            console.log(response.status);
                            $(".rnameerrors").html(response.errors.rname);
                            $(".remailerrors").html(response.errors.remail);
                            $(".rpassworderrors").html(response.errors.rpassword);
                            $(".confirm_passworderrors").html(response.errors.confirm_password);
                            //   $(".emailerrors").html(data.errors.email);
                            //   $(".passworderrors").html(data.errors.password);
                            //$(".cpassworderrors").html(data.errors.confirmpassword);
                            //   $.each(data.errors, function (key, val) {
                            //       $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
                            //   });
                        }
                        },


                    });
                    return false;
                });



                $(".tablist li a").click(function(e){
                    e.preventDefault();
                    $(this).addClass("activetab");
                    $(this).parent("li").siblings().find("a").removeClass("activetab");
                    var contentsTab = $(this).attr("href");
                    $(contentsTab).addClass('activetabcontent');
                    $(contentsTab).siblings().removeClass('activetabcontent');

                });

                $("#regbtn").click(function(e){
                    e.preventDefault();
                    $('.registertabb').addClass('activetab');
                    $('.logintabb').removeClass('activetab');
                    var contentsTabdata = $('.registertabb').attr("href");
                    $('#exampleModal').on('shown.bs.modal', function () {

                        $(contentsTabdata).addClass('activetabcontent');
                        $(contentsTabdata).siblings().removeClass('activetabcontent');
                    })

                });


            });
            </script>
        @endif

        @if($event->price != 0)

        <script type="text/javascript">
            // Set your publishable key
            var stripe = Stripe('{{ env('STRIPE_KEY') }}');
            
            // Create an instance of Elements
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#ffffff',
                    lineHeight: '24px',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                    color: '#fff'
                    }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element
            var card = elements.create('card', {style: style, hidePostalCode: true,});



            // Add an instance of the card Element into the `card-element` <div>.
                card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('ajax-sub-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('ajax-sub-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
            }
    </script>
    @endif
@endsection


@section('style')
<style>
    #login_error {
        color: red;
        margin-bottom: 1rem;
        font-size: 15px;
    }
    #exampleModal .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }
    #exampleModal .form-control {
        background: transparent;
        border: 1px solid #d5caca;
        height: 45px;
        color: #000!important;
        padding-right: 10px!important;
        padding-left: 10px!important;
        opacity: 1!important;
    }
    #exampleModal input.form-control:focus,
    #exampleModal input.form-control:after {
        outline-width: 0;
        background: transparent;
    }
    #exampleModal .tc {
        font-size: 12px;
    }
    #exampleModal .modal-footer {
        justify-content: flex-start;
    }
    #exampleModal .close {
        color: aqua;
        font-size: 12px;
        position: relative;
        top: 20px;
    }
    #exampleModal h5 {
        font-size: 2rem;
        font-weight: 900;
    }
    #exampleModal .title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px !important;
    }
    #exampleModal .modal-body {
        padding-bottom: 0;
        padding-top: 0;
    }
    #exampleModal .x {
        color: grey;
        font-size: 40px;
        font-weight: 100;
        display: flex;
        flex-direction: row-reverse;
        top: 0;
    }
    #exampleModal .btn.focus,
    #exampleModal .btn:focus {
        outline: 0;
        box-shadow: none !important;
    }  
    #exampleModal .x.focus,
    #exampleModal .x:focus {
        outline: 0;
        box-shadow: none !important;
    }
    #handleAjax label {
        font-size: 16px;
        color: #424040;
    }

    #exampleModal .form-control::-webkit-input-placeholder { 
        color: #313131!important;
    }

    #exampleModal .form-control:-ms-input-placeholder { 
        color: #313131!important;
    }

    #exampleModal .form-control::placeholder {
        color: #313131!important;
    }
    #orderConfirmForm .error {
        color: #ff8e8e!important;
        position: unset !important;
    }
    #successmsg span {
        display: block;
        text-align: center;
        margin-bottom: 2rem;
    }
    .tablist ul {
        list-style: none;
        padding: 0;
        display: flex;
        margin-bottom: 1px;
    }
    .tablist li a {
        color: #000;
        background: #ddd7d7;
        margin-right: 3px;
        font-size: 16px;
        padding: 5px 10px;
    }
    .tablist {
        border-bottom: 1px solid #ddd7d7;
        margin-bottom: 1rem;
    }
    #register, #login{
        display:none;
    }
    .tabitems {
        transition: all 1s ease-in;
    }
    .tabitems.activetab {
        background: #fec742;
        color: #fff;
        transition: all 1s ease-in;
    }
    .activetabcontent{
        display: block!important;
        transition: all 1s ease-in;
    }
    .tabcontentItem{
        transition: all 1s ease-in;
    }
    #reg_success span {
        background: green;
        display: block;
        text-align: center;
        color: #fff;
        font-size: 15px;
        margin-top: 1rem;
        padding: 5px 0;
    }
    #exampleModal .modal-content.p-4 {
        padding-top: 0 !important;
    }
    .StripeElement {
        padding: 8px 12px;
        border-bottom: 1px solid rgba(255,255,255,0.3);
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    #card-element:focus-visible {
        box-shadow: none;
        outline: none;
    }
    .StripeElement--invalid {
        border-color: #fa755a;
    }
    #card-errors {
        color: red;
        font-size: 14px;
        text-align: left;
        padding: 5px 0;
    }
    #cardlables {
        color: #fff;
        text-align: left;
        display: block;
        margin-bottom: 1rem;
        padding-top: 1rem;
        opacity: 1 !important;
        color: #FDC442;
        font-weight: 400 !important;
        font-size: 12px !important;
        text-transform: uppercase !important;
    }
    .StripeElement.StripeElement--empty.StripeElement--invalid:focus,
    .StripeElement.StripeElement--empty.StripeElement--invalid:focus-visible{
        outline: none;
        box-shadow: none;
    }
    ol, ul {
        list-style-position: inside;
        color:rgba(241,241,241,0.8);
    }
</style>

@endsection