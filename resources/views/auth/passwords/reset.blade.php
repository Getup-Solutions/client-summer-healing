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
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

       <div class="row">
          <div class="col-xl-4 col-lg-7 col-md-8 col-sm-10 mx-auto">
         <form method="POST" action="{{ route('password.update') }}" autocomplete="off">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="row">
                <div class="col-12 mb-sm-4 mb-3">
                    <div class="form-floating w-100">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-sm-4 mb-3">
                    <div class="form-floating w-100">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password"  name="password" required autocomplete="password" autofocus>
                        <label for="floatingInput">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-sm-4 mb-3">
                    <div class="form-floating w-100">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        <label for="floatingInput">Confirm Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center mt-3">
                  <button type="submit" class="btn btn-sm btn-primary">Reset</button>
                </div>
            </div>
          </form>
          </div>
       </div>
    </div>
 </section>
 <!-- SIGN IN END -->

 @endsection
