@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Checkout')
@section('meta_keyword', 'Checkout')
@section('meta_description', 'Checkout')
 <!-- PAGE HEADING START -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <section class="set-top-spacing position-relative overflow-hidden">
    @if(session('cart'))
    <div class="content d-flex align-items-center justify-content-center">
        <div class="container-fluid w-100">
            <div class="row">
                <div class="col-12 text-center mt-3 mt-sm-0">
                    <h1 class="display-2 font-weight-700 text-uppercase mt-sm-0" data-sal="slide-up"
                        style="--sal-duration: 1s">
                        Order Details
                    </h1>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
<!-- PAGE HEADING END -->
<!-- PLANS START -->
<section class="checkout spacing-150 pb-0">
    <div class="container-fluid text-center text-xl-start">
        <div class="row" >
            @if(session('cart'))
            <div class="col-xl-10 mx-auto">
                <div id="successmsg"></div>
                <div class="position-relative clearfix">
                    <!-- LEFT COLUMN START -->
                    <div class="col-left mb-4 mb-xl-0" id="checkout_course_container">
                        @foreach((array) session('cart') as $id => $details)

                        <div class="top w-100 d-xl-flex align-items-center justify-content-start checkout_course_item" data-sal="slide-up" style="--sal-duration: 1s">
                            <img src="{{ asset('Frontend/assets/images/graphic-2.svg')}}" class="thumb-rounded border-0" alt="">
                            <div class="ms-xl-4 mt-3 mt-xl-0">
                                <h2 class="display-5 text-uppercase font-weight-700 checkout_course_title">
                                    @php
                                    if(auth()->check()){
                                        $user = auth()->user()->id;
                                        $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                                        $currentsubscription = App\Models\User::where('id', $user)->pluck('subscription');
                                        if((int)$userSubscription[0] == $details['subscription']){
                                            $details['price'] = 0;
                                        }
                                    }
                                    @endphp

                                    {{ $details['title'] }}({{ $details['quantity'] }}) - ${{ $details['price'] }} 
                                    @if($details['price'] === 0) 
                                    (<span class="currentsubtext">
                                        {{$currentsubscription[0]}} 
                                    </span>)
                                    @endif
                                </h2>
                            </div>
                        </div>
                        @endforeach
                        
                        @if(!auth()->check())
                        <div class="middle w-100" data-sal="slide-up" style="--sal-duration: 2s">
                            <p class="mb-2">Already have an account? <button type="button" data-toggle="modal" data-target="#exampleModal" class="highlight-link checkout-login-btn">Login</button>
                            </p>
                            <p class="m-0">New to our website? Please fill in the details below.</p>
                        </div>
                        <div id="error_name"></div>
                        @endif
                        <div class="bottom w-100" data-sal="slide-up" style="--sal-duration: 3s">
                            <div class="row">
                                <div class="col-xl-10">
                              <form name="orderConfirmForm" id="orderConfirmForm" method="POST" action="{{route('page.confirm-order')}}#success_order" autocomplete="off">
                                @csrf
                                    <h3 class="h2 text-uppercase font-weight-700 mb-5 mt-5">
                                        Billing address
                                    </h3>
        
                                        <div class="row">
                                            <div class="col-lg-12 mb-sm-4 mb-3">
                                                <div class="form-floating w-100">
                                                    <input type="text" id="name" class="form-control"
                                                        name="name" placeholder="Name" value="@if(auth()->check()) {{ auth()->user()->name}} @endif">
                                                    <label for="floatingInput">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-sm-4 mb-3">
                                                <div class="form-floating w-100">
                                                    <input type="text" id="address" class="form-control"
                                                        name="address" placeholder="Address" value="@if(auth()->check()) {{ auth()->user()->useraddress}} @else {{ old('useraddress') }}@endif">
                                                    <label for="floatingInput">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-sm-4 mb-3">
                                                <div class="form-floating w-100">
                                                    <input type="text" id="city" class="form-control"
                                                        name="city" placeholder="City" value="@if(auth()->check()){{auth()->user()->usercity}}@else{{ old('usercity')}}@endif">
                                                    <label for="floatingInput">City</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mb-sm-4 mb-3">
                                                <div class="form-floating w-100">
                                                    <input type="text" id="state" class="form-control"
                                                        name="state" placeholder="State" value="@if(auth()->check()){{auth()->user()->userstate}}@else{{old('userstate')}}@endif">
                                                    <label for="floatingInput">State</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-sm-4 mb-3">
                                                <div class="form-floating w-100">
                                                    <input type="text" id="zip" class="form-control"
                                                        name="zip" placeholder="Post Code"  value="@if(auth()->check()){{auth()->user()->userpostcode}}@else{{old('userpostcode')}}@endif">
                                                    <label for="floatingInput">Post Code</label>
                                                </div>
                                            </div>
                                            
                                            
                                            @php $total = 0; @endphp
                                            @if(auth()->check())

                                               {{-- @dd(session('cart')) --}}
                                               @foreach((array) session('cart') as $id => $details)
                                                   @php $total += (int)$details['price'] * $details['quantity'] @endphp
                                               @endforeach
                                            @endif
                                            
                                            @php 
                                            $userSubscription[] = "";
                                            if(auth()->check()){
                                                $user = auth()->user()->id;
                                                $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                                                if((int)$userSubscription[0] == $details['subscription']){
                                                    $total = 0;
                                                }
                                            }
                                            @endphp
                                           
                                            @if($total > 0)
                                            <div class="form-group">
                                                <label for="card-element" id="cardlables">Credit or debit card</label>
                                                <div id="card-element" class="form-control">
                                                  <!-- A Stripe Element will be inserted here. -->
                                                </div>
                                                <!-- Used to display Element errors. -->
                                                 <div id="card-errors" role="alert"></div>
                                            </div>
                                            @endif
                                            
                                            @if(auth()->check())
                                            <input type="hidden" name="userid" value="@if(auth()->check()){{ auth()->user()->id}}@endif">
                                            <input type="hidden" name="useremail" value="@if(auth()->check()){{ auth()->user()->email}}@endif">
                                            <input type="hidden" name="username" value="@if(auth()->check()){{ auth()->user()->name }}@endif">
                                            <input type="hidden" name="userphone" value="@if(auth()->check()){{ auth()->user()->phone }}@endif">

                                            <input type="hidden" name="useraddress" value="@if(auth()->check()){{ auth()->user()->useraddress }} @endif">
                                            <input type="hidden" name="userstate" value="@if(auth()->check()){{ auth()->user()->userstate }}@endif">
                                            <input type="hidden" name="usercountry" value="@if(auth()->check()){{ auth()->user()->usercountry }}@endif">
                                            <input type="hidden" name="userpostcode" value="@if(auth()->check()){{ auth()->user()->userpostcode }}@endif">

                                            @endif
                                           


                                            @php //$data = ""; 
                                            @endphp
                                            {{-- @dd(session('cart')) --}}
                                            @if(session('cart'))
                                            @foreach((array) session('cart') as $id => $details)
                                                @php $elements[] = $details['title']; @endphp
                                            @endforeach

                                            @foreach((array) session('cart') as $id => $details)
                                                @php $courseids[] = $details['courseid']; @endphp
                                            @endforeach


                                            @php 
                                            $dataCourse = (implode(',', $elements));
                                            $dataCourseId = (implode(',', $courseids));
                                            //dd(implode(',', $dataCourseId));
                                            @endphp

                                            <input type="hidden" name="courseid" value="{{ $dataCourseId }}">
                                            
                                            <input type="hidden" name="course" value="{{$dataCourse}}">

                                            <input type="hidden" name="groupId" value="{{$dataCourse}}">



                                            @php $total = 0 @endphp
                                            @foreach((array) session('cart') as $id => $details)

                                            @php
                                            if(auth()->check()){
                                                $user = auth()->user()->id;
                                                $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                                                if((int)$userSubscription[0] == $details['subscription']){
                                                    $details['price'] = 0;
                                                }
                    
                                            }
                                            @endphp

                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            @endforeach
                                            <input type="hidden" name="total" value="{{$total}}">
                                            <input type="hidden" name="quantity" value="{{count(session('cart'))}}">
                                            @endif


                                        </div>
                                        <button type="submit" id="realConfirmOrderBtn" style="display:none;">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LEFT COLUMN END -->
                    <!-- RIGHT COLUMN START -->
                    <div class="col-right position-sticky  mb-5 mb-xl-0">
                        <div class="ps-xl-4">
                            <div class="card card-price" data-sal="slide-up" style="--sal-duration: 1s">
                                <img src="{{ asset('Frontend/assets/images/graphic-3.svg') }}" class="icon" alt="">
                                <div class="mt-3 d-flex align-items-center justify-content-between border-bottom pb-5">
                                    <p class="label">Price</p>
                                    <h3 class="text-white h5 font-weight-500 d-xl-flex align-items-end m-0 secondary-font">
                                        @if(session('cart'))
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                            @php 
                                            if(auth()->check()){
                                                $user = auth()->user()->id;
                                                $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                                                if((int)$userSubscription[0] == $details['subscription']){
                                                    $details['price'] = 0;
                                                }
                    
                                            }
                                            $total += $details['price'] * $details['quantity'];
                                            @endphp


                                        @endforeach
                                        $ {{ $total }}
                                        @else
                                        $ 0
                                        @endif
                                    </h3>
                                </div>
                                <div class="d-flex align-items-center justify-content-between ">
                                    <p class="label">Sub Total</p>
                                    <h3 class="text-white display-5 font-weight-700">
                                        @if(session('cart'))
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                            @php 
                                            if(auth()->check()){
                                                $user = auth()->user()->id;
                                                $userSubscription = App\Models\User::where('id', $user)->pluck('subscription_id');
                                                if((int)$userSubscription[0] == $details['subscription']){
                                                    $details['price'] = 0;
                                                }
                    
                                            }
                                            $total += $details['price'] * $details['quantity'];
                                            @endphp
                                        @endforeach
                                        $ {{ $total }}
                                        @else
                                        $ 0
                                        @endif
                                    </h3>
                                </div>
                                <a href="#" id="confirmOrderLink" class="btn btn-primary w-100">Confirm order</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @else
            <div class="col-xl-10 mx-auto" id="nocourse_for_checkout">
                <p>
                    No courses added to checkout.
                </p>
                <div class="yoga-course_link"><a href="{{ route('page.yogacourses') }}">Go to Courses</a></div>
            </div>
        @endif
    </div>
</section>

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
                        <li><a href="#login" class="tabitems activetab">Login</a></li>
                        <li><a href="#register" class="tabitems">Register</a></li>
                    </ul>
                </div>
                <div id="login" class="activetabcontent tabcontentItem">
                    <h3 class="mb-4 title" data-tab="login">LOGIN</h3>
                    <form action="{{ route('page.login.post') }}#success_order" method="POST" id="handleAjax" autocomplete="off">
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

                            <div class="modal-footer border-0 mb-4" style="padding: 0;">
                                <button type="submit" id="popup_login_btn" class="btn btn-primary col-6 col-md-6">LOGIN</button>
                            </div>
                    </form>
                </div>

                <div id="register" class="tabcontentItem">
                    <h3 class="mb-4 title" data-tab="register">REGISTER</h3>
                    <form action="{{ route('page.register.post') }}" method="POST" id="handleAjax2" autocomplete="off">
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
                      window.location = data.redirect;
                  }else{
                      $(".alert").remove();
                      console.log(data.errors.email);
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
            $(this).find("#popup_register_btn").html("Register...");
            $.ajax({
                url: $(this).attr('action'),
                data: $(this).serialize(),
                type: "POST",
                dataType: 'json',
                success: function (response) {
                  $(e).find("[type='submit']").html("Register");
                  if (response.status) {
                      window.location = response.redirect;
                      $("#reg_success").html("<span>" +response.msg+ "</span>");
                  }else{
                      //$(".alert").remove();
                      console.log(response.errors);
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
                }
            });
            return false;
        });


        $("#confirmOrderLink").click(function(e){
            e.preventDefault();
            $("#realConfirmOrderBtn").click();
        });

        if ($("#orderConfirmForm").length > 0) {
            $("#orderConfirmForm").validate({
                rules: {
                    city: {
                    required: true,
                    maxlength: 50
                    },
                    state: {
                    required: true,
                    maxlength: 50,
                    },  
                    address: {
                    required: true,
                    maxlength: 350
                    },
                    zip: {
                    required: true,
                    maxlength: 50
                    }, 
                    name: {
                    required: true,
                    maxlength: 50
                    },  
                },
                messages: {
                    city: {
                    required: "Please enter city",
                    maxlength: "city maxlength should be 50 characters long."
                    },
                    state: {
                    required: "Please enter state",
                    maxlength: "State should less than or equal to 50 characters",
                    },   
                    address: {
                    required: "Please enter address",
                    maxlength: "Country maxlength should be 350 characters long."
                    },
                    zip: {
                    required: "Please enter valid post code",
                    minlength: "The post code should equal to 4 characters",
                    maxlength: "The post code should equal to 4 characters",
                    }
                },
                submitHandler: function(form) {
                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#realConfirmOrderBtn').html('Please Wait...');
                    //$("#realConfirmOrderBtn"). attr("disabled", true);
                    $.ajax({
                        url: "",
                        type: "POST",
                        data: $('#orderConfirmForm').serialize(),
                        success: function( response ) {
                            $('#realConfirmOrderBtn').html('Submitting');
                            $("#realConfirmOrderBtn"). attr("disabled", false);
                            //alert('Ajax form has been submitted successfully');
                            //console.log(response);
                            $('#successmsg').html("<span>"+response.success+"</span>");
                            document.getElementById("orderConfirmForm").reset(); 
                            sessionStorage.removeItem('itemName');
                            toastr.success(response.message, function(){
                                setInterval(function () {  
                                    //window.location = response.redirect;
                                }, 3000);

                            });  
                        },
                        error: function (status, err) {
                            console.log(status.responseJSON.message);
                            //console.log(err);
                            //$("#error_name").html(response.errors.username);
                            //$("#error_name").html(status);
                            //$("#error_name").html(status.errors.username);
                            if(err){
                                $("#error_name").html("<span>Please login to complete this order.</span>");
                                document.querySelector("#checkout_course_container").scrollIntoView({ behavior: "smooth" });

                            }
                        }
                    });
                }
                
            });
        }


        $(".tablist li a").click(function(e){
            e.preventDefault();
            $(this).addClass("activetab");
            $(this).parent("li").siblings().find("a").removeClass("activetab");
            var contentsTab = $(this).attr("href");
            $(contentsTab).addClass('activetabcontent');
            $(contentsTab).siblings().removeClass('activetabcontent');

        });



    


    });

    
</script>

<script type="text/javascript">
   
   	var stripe = Stripe('pk_test_51Mf3NTSH7DwQxAxNA3U9oF3GMWKzOP9e9XDJWRXWskVfu8OzlW8QLqCoHlezfE3wBtsZSR0Z1f0SYlCk9f0V6hnf00xemnSdAq');

		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.

		var style = {
        base: {
                color: '#fff',
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



		// Create an instance of the card Element.

		var card = elements.create('card', {

			hidePostalCode: true,

			style: style

		});



		// Add an instance of the card Element into the `card-element` <div>.

		card.mount('#card-element');









		// Create a token or display an error when the form is submitted.

		var form = document.getElementById('orderConfirmForm');

		form.addEventListener('submit', function(event) {

		  event.preventDefault();



		  var options = {

		  	name: document.getElementById('name').value,

		  //	address_line1: document.getElementById('address-line1').value,

		  //	address_line2: document.getElementById('address-line2').value,

		  //	address_city: document.getElementById('address-city').value,

		  //	address_state: document.getElementById('address-state').value,

		  //	address_zip: document.getElementById('address-zip').value,

		  //	address_country: document.getElementById('address-country').value,



		  }

		  stripe.createToken(card, options).then(function(result) {

		    if (result.error) {

		      // Inform the customer that there was an error.

		      var errorElement = document.getElementById('card-errors');

		      errorElement.textContent = result.error.message;

		    } else {

		      // Send the token to your server.

		      stripeTokenHandler(result.token);

		    }

		  });

		});





		function stripeTokenHandler(token) {

		  // Insert the token ID into the form so it gets submitted to the server

		  var form = document.getElementById('orderConfirmForm');

		  var hiddenInput = document.createElement('input');

		  hiddenInput.setAttribute('type', 'hidden');

		  hiddenInput.setAttribute('name', 'stripeToken');

		  hiddenInput.setAttribute('value', token.id);

		  form.appendChild(hiddenInput);



		  // Submit the form

		  form.submit();

		}

        
		
</script>

@endsection


@section('style')
<style>
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
      color: #ff8e8e !important;
      position: unset !important;
      opacity: 1 !important;
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
</style>

@endsection