@extends('layouts.user.userLayout')
@section('content')
@section('title', 'My profile')
@section('meta_keyword', 'My profile')
@section('meta_description', 'My profile')
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
                    <!-- COLUMN LEFT START -->
                    <div class="col-right position-sticky pe-xl-5 mb-5 mb-xl-0">
                        <ul class="list-group list-tab me-xl-5 border-0" data-sal="slide-up" style="--sal-duration: 1s">
                            <li class="list-group-item bg-transparent border-0 p-0 pb-xl-3" data-item="1">
                                <button class="btn btn-primary d-flex w-100">My profile</button>
                            </li>
                            <li class="list-group-item bg-transparent border-0 p-0 pb-xl-3" data-item="2">
                                <a href="{{ route('user.myaccount.userprofilepasswordpage', auth()->user()->id) }}" class="btn btn-transparent d-flex w-100">Change password</a>
                            </li>
                        </ul>
                    </div>
                    <!-- COLUMN LEFT END -->
                    <!-- COLUMN RIGHT START -->
                    <div class="col-left">
                        <!-- ITEM START -->
                        <div data-item="1" class="item w-100 show init-animation" data-sal="slide-up" style="--sal-duration: 1s">
                            <div class="row">
                                <div class="col-xl-10">
                                    <div class="ps-xl-4">
                                        <!-- ITEM GROUP START -->
                                        <div class="item-group w-100">
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <h2 class="h2 text-uppercase font-weight-700">Basic Informations
                                                </h2>
                                                <button class="btn btn-sm btn-transparent"
                                                    onclick="editProfile(this)">edit</button>
                                            </div>
                                            <!--INFO START -->
                                            <div class="info">
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">Name</p>
                                                    <p>{{ auth()->user()->name }} {{ auth()->user()->lastname }}</p>
                                                </div>
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">Email</p>
                                                    <p>{{ auth()->user()->email }}</p>
                                                </div>
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">Phone</p>
                                                    <p>{{ auth()->user()->phone }}</p>
                                                </div>
                                            </div>
                                            <!-- INFO END -->
                                            <!-- FORM START -->
                                            <form action="{{ route('user.myaccount.userprofileupdate', auth()->user()->id) }}" method="post"> 
                                                @csrf
                                                @method('PUT')
                                                <div class="form-info d-none">
                                                    <div class="row">
                                                        <div class="col-xl-12 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="text" required=""
                                                                    class="form-control" name="name"
                                                                    placeholder="Name" value="{{ auth()->user()->name }}">
                                                                <label for="floatingInput">Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="text" required=""
                                                                    class="form-control" name="lastname"
                                                                    placeholder="Last Name" value="{{ auth()->user()->lastname }}">
                                                                <label for="floatingInput">Last Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="email" required=""
                                                                    class="form-control" name="email"
                                                                    placeholder="Email" value="{{ auth()->user()->email }}">
                                                                <label for="floatingInput">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="number" required=""
                                                                    class="form-control" name="phone"
                                                                    placeholder="Phone" value="{{ auth()->user()->phone }}">
                                                                <label for="floatingInput">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                                    <!-- FORM END -->
                                                </div>
                                                <!-- ITEM GROUP END -->
                                                <!-- ITEM GROUP START -->
                                                <div class="item-group w-100 mt-4">
                                                <h2 class="h2 text-uppercase font-weight-700 mb-5">Billing Address
                                                </h2>

                                                <!--INFO START -->
                                                <div class="info">
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">Street address</p>
                                                    <p>{{ auth()->user()->useraddress }}</p>
                                                </div>
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">City</p>
                                                    <p>{{ auth()->user()->usercity }}</p>
                                                </div>
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">City</p>
                                                    <p>{{ auth()->user()->userstate }}</p>
                                                </div>
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">Country</p>
                                                    <p>{{ auth()->user()->usercountry }}</p>
                                                </div>
                                                <div class="item mb-4">
                                                    <p class="label text-primary mb-2">Post Code</p>
                                                    <p>{{ auth()->user()->userpostcode }}</p>
                                                </div>
                                                </div>
                                                <!-- INFO END -->
                                                <!-- FORM START -->
                                                <div class="form-info d-none">
                                                    <div class="row">
                                                        <div class="col-xl-12 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="text" required=""
                                                                    class="form-control" name="useraddress"
                                                                    placeholder="Address" value="{{ auth()->user()->useraddress }}">
                                                                <label for="floatingInput">Address</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="text" required=""
                                                                    class="form-control" name="usercity"
                                                                    placeholder="City" value="{{ auth()->user()->usercity }}">
                                                                <label for="floatingInput">City</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="text" required=""
                                                                    class="form-control" name="userstate"
                                                                    placeholder="City" value="{{ auth()->user()->userstate }}">
                                                                <label for="floatingInput">State</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="text" required=""
                                                                    class="form-control" name="usercountry"
                                                                    placeholder="Country" value="{{ auth()->user()->usercountry }}">
                                                                <label for="floatingInput">Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-sm-4 mb-3">
                                                            <div class="form-floating w-100">
                                                                <input type="number" required=""
                                                                    class="form-control" name="userpostcode"
                                                                    placeholder="Post Code" value="{{ auth()->user()->userpostcode }}">
                                                                <label for="floatingInput">Post Code</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mt-3 text-center">
                                                            <button class="btn btn-primary mx-auto"
                                                                type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- ITEM GROUP END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM END -->
                        <!-- ITEM START -->
                        {{-- <div data-item="2" class="item w-100" data-sal="slide-up" style="--sal-duration: 1s" id="passwordchangeFrm" style="display:none;">
                            <div class="row">
                                <div class="col-xl-7 offset-xl-2">
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
                                    </div> --}}
                                    <!-- ITEM GROUP END
                                </div>
                            </div>
                        </div>  -->
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

    <script>
        $('.list-tab li').click(function (e) {
            $('.list-tab').find('button').removeClass('btn-primary').addClass('btn-transparent')
            $(this).find('button').addClass('btn-primary').removeClass('btn-transparent')

            var clicked = $(this).attr('data-item')
            $('.col-left').find('.item').removeClass('show')
            $('.col-left').find('.item[data-item="' + clicked + '"]').addClass('show')
        });
        function editProfile() {
            $('.form-info').toggleClass('d-none')
            $('.info').toggleClass('d-none')
        }
    </script>

@endsection