@extends('layouts.page.pageLayout')
@section('title', 'Wellness Center Booking')
@section('meta_keyword', '')
@section('meta_description', '')
@section('content')
<!-- PAGE HEADING START -->
 <section class="spacing-150" id="welnesspagebooking">
    <div class="container">
       @php
           //$id = $_GET['service'];
           //@dd($wellnesscenter->id)
       @endphp

        <div class="bottom w-100 pt-5" data-sal="slide-up" style="--sal-duration: 3s" id="">
            <div class="row">
                <div class="col-xl-12 justify-content-center">
                    <form name="wellnessCenterForm" id="wellnessCenterForm" method="post" action="{{ route('page.wellness.wellnessbooksend', $wellnesscenter->id) }}#wellnessbooksuccess">
    
                    <h3 class="h2 text-uppercase text-center font-weight-700 mb-5 mt-5">
                        Wellness Center Booking
                    </h3>

                    
                    @if(session()->has('success'))
                    <div class="alert alert-success" id="wellnessbooksuccess">
                        {{ session()->get('success') }}
                    </div>
                    @endif

                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="text" id="name" class="form-control"
                                        name="name" placeholder="Name" value="@if(auth()->check()) {{ auth()->user()->name}} @endif" value="{{old('name')}}">
                                    <label for="floatingInput">Name</label>
                                    @error('name')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="text" id="email" class="form-control"
                                        name="email" placeholder="Email" value="@if(auth()->check()) {{ auth()->user()->email}} @endif" value="{{old('email')}}">
                                    <label for="floatingInput">Email</label>
                                    @error('email')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <input type="text" id="phone" class="form-control"
                                        name="phone" placeholder="Phone" value="@if(auth()->check()) {{ auth()->user()->phone}} @endif" value="{{old('phone')}}">
                                    <label for="floatingInput">Phone</label>
                                    @error('phone')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <select name="service" id="service" class="form-control">
                                        <option value="">--Select a service--</option>
                                        @php
                                        if(isset($_GET['service'])){
                                            $selectedService = $_GET['service'];
                                        }
                                        @endphp
                                        @foreach ($wellnesscenterAll as $wellnesscenter )
                                            <option @if($selectedService == $wellnesscenter->id) selected="selected" @endif value="{{$wellnesscenter->title}}">{{$wellnesscenter->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('service')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mb-sm-4 mb-3">
                                <div class="form-floating w-100">
                                    <textarea name="comment" id="comment" cols="20" rows="2" class="form-control" placeholder="Comment">{{old('comment')}}</textarea>
                                    <label for="floatingInput">Comment</label>
                                </div>
                            </div>
                        </div>

                        <div class="wellnessbookingbtnwrap text-right">
                            <button type="submit" class="btn btn-primary" id="wellnesscenterbookingbtn">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>





    </div>
 </section>

@endsection


@section('style')
    <style>
        #service option {
            color: #333;
        }
        .wellnessbookingbtnwrap.text-right {
            text-align: right;
            display: flex;
            justify-content: flex-end;
            margin-top: 1rem;
        }
        .formAlertError.alert.alert-danger {
            color: #ea5959 !important;
            font-size: 14px;
            padding: 5px 0;
        }
        #welnesspagebooking #wellnessbooksuccess.alert.alert-success {
            background: #fec742 !important;
            text-align: center;
            color: #303030 !important;
            padding-bottom: 0;
            padding: 5px 0;
            margin-top: 4rem;
        }
        .container-fluid .alert {
            display: none;
        }
        .form-control::-webkit-input-placeholder { 
            color: #fff!important;
            opacity: 1;
        }
        .form-control::-moz-placeholder { 
            color: #fff!important;
            opacity: 1;
        }
        .form-control:-ms-input-placeholder { 
            color: #fff!important;
            opacity: 1;
        }
        .form-control:-moz-placeholder { 
            color: #fff!important;
            opacity: 1;
        }
    </style>
@endsection

@section('script')


@endsection