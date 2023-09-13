@extends('layouts.user.userLayout')
@section('content')
<!-- MY ACCOUNT START -->
 <section class="set-top-spacing my-account" >
    <div class="container-fluid">
        <!-- ACCOUNT HEADER START -->
        @include('layouts.user.inc.usermenus')
        <!-- ACCOUNT HEADER END -->
        <div class="my-profile index-minus position-relative">
            <!-- PROFILE START -->
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <!-- COLUMN RIGHT START -->
                    <div class="col-left">
                       <!-- ITEM END -->
                        <!-- ITEM START -->
                        <div data-item="2" class="item w-100" id="passwordchangeFrm" style="display: block!important;">
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-8 offset-xl-2">
                                    <!-- ITEM GROUP START -->
                                    <div class="item-group w-100">
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <h2 class="h2 text-uppercase font-weight-700">Change Password</h2>
                                        </div>
                                        <!-- FORM START -->
                                        <div class="form-info--">
                                            <form method="post" action="{{ route('user.myaccount.userprofilepasswordupdate', auth()->user()->id) }}">
                                                @csrf
                                                @method('PUT')
                                                @foreach ($errors->all() as $error)
                                                <p class="text-danger">{{ $error }}</p>
                                                @endforeach 
                                                <div class="row">
                                                    <div class="col-lg-12 mb-sm-4 mb-3">
                                                        <div class="form-floating w-100">
                                                            <input type="password"  class="form-control" name="current_password" placeholder="Current Password">
                                                            <label for="floatingInput">Current Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-sm-4 mb-3">
                                                        <div class="form-floating w-100">
                                                            <input type="password" class="form-control" name="new_password"          placeholder="New Password">
                                                            <label for="floatingInput">New Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-sm-4 mb-3">
                                                        <div class="form-floating w-100">
                                                            <input type="password"  class="form-control" name="new_confirm_password"  placeholder="Confirm Password">
                                                            <label for="floatingInput">Confirm Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-3 text-center">
                                                        <button class="btn btn-primary mx-auto"
                                                            type="submit">Change</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- FORM END -->
                                    </div>
                                    <!-- ITEM GROUP END -->
                                </div>
                            </div>
                        </div> 
                        <!-- ITEM END -->
                    </div>
                    <!-- COLUMN RIGHT END -->
                </div>
            </div>
            <!-- PROFILE END -->
        </div>
    </div>
</section>
<!-- MY ACCOUNT END -->

@endsection


@section('script')

@endsection


@section('style')
    <style>
        #passwordchangeFrm {
            display: block !important;
            padding-top: 3rem;;
        }
    </style>
@endsection