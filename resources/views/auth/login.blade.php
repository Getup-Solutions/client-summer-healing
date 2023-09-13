@extends('layouts.page.pageLayout')
@section('content')
@section('title', 'Login')
@section('meta_keyword', 'Login')
@section('meta_description', 'Login')
 <!-- PAGE HEADING START -->
 <section class="set-top-spacing position-relative overflow-hidden">
    <div class="content d-flex align-items-center justify-content-center">
       <div class="container-fluid w-100">
          <div class="row">
             <div class="col-12 text-center mt-3 mt-sm-0">
                <h1 class="display-2 font-weight-700 text-uppercase mt-sm-0" data-sal="slide-up"
                   style="--sal-duration: 1s">
                   Sign in
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
       <div class="row">
          <div class="col-xl-4 col-lg-7 col-md-8 col-sm-10 mx-auto">
            <form method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf
            <div class="row">
                <div class="col-12 mb-sm-4 mb-3">
                    <div class="form-floating w-100">
                        <input type="email" class="form-control @error('password') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 mb-sm-4 mb-3">
                    <div class="form-floating w-100">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password">
                        <label for="floatingInput">Password</label>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 d-flex align-items-center justify-content-between">
                    @if (Route::has('password.request'))
                        <a class="normal-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                    <button type="submit" class="btn btn-sm btn-primary">
                        {{ __('login') }}
                    </button>
                </div>
            </div>
          </form>
          </div>
       </div>
    </div>
 </section>
 <!-- SIGN IN END -->

@endsection
