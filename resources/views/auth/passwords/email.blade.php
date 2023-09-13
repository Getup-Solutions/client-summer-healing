@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Reset password')

@section('content')
 <!-- PAGE HEADING START -->
 <section class="set-top-spacing position-relative overflow-hidden">
    <div class="content d-flex align-items-center justify-content-center">
       <div class="container-fluid w-100">
          <div class="row">
             <div class="col-12 text-center mt-3 mt-sm-0">
                <h1 class="display-2 font-weight-700 text-uppercase mt-sm-0" data-sal="slide-up"
                   style="--sal-duration: 1s">
                   Reset Password
                </h1>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- PAGE HEADING END -->
 <!-- SIGN IN START -->
 <section class="login spacing-100">
    <div class="container-fluid text-center text-xl-start">
      <div class="success_alert_wrap">
         @if (session('status'))
         <div class="alert alert-success" role="alert">
            {{ session('status') }}
         </div>
         @endif
      </div>

       <div class="row">
          <div class="col-xl-4 col-lg-7 col-md-8 col-sm-10 mx-auto">
         <div class="alert alert-success" role="alert">
            We just need to verify your email address <span class="text-primary">@if(auth()->check()){{auth()->user()->email}} @else @endif</span> before you can reset the password.
         </div>
         <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-12 mb-sm-4 mb-3">
                    <div class="form-floating w-100">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center mt-3">
                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
          </form>
          </div>
       </div>
    </div>
 </section>
 <!-- SIGN IN END -->

 @endsection


 @section('style')
   <style>
      .success_alert_wrap div.alert {
         background: #13840a !important;
         text-align: center;
         padding-bottom: 10px;
         display: inline-block;
         padding-left: 2rem;
         padding-right: 2rem;
         padding-top: 10px;
      }
      .success_alert_wrap {
         text-align: center;
      }
   </style>
 @endsection
