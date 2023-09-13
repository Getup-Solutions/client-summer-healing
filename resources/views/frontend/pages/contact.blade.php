@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'Contact | Summer Healing Society')

@section('meta_keyword', 'contact us')

@section('meta_description', 'contact us')

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- PAGE HEADING START -->

<section class="set-top-spacing position-relative overflow-hidden">

    <div class="content d-flex align-items-center justify-content-center">

        <div class="container-fluid w-100">

            <div class="row">

                <div class="col-12 text-center mt-3 mt-sm-0">

                    <h1 class="display-2 font-weight-700 text-uppercase mt-sm-0" data-sal="slide-up"

                        style="--sal-duration: 1s">

                        Contact

                    </h1>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- PAGE HEADING END -->



@php

$contact_number = DB::table('admincontactsettings')->pluck('contact_number');

$contact_email = DB::table('admincontactsettings')->pluck('contact_email');

$contact_address = DB::table('admincontactsettings')->pluck('contact_address');

//@dd($contact_address);

$facebook_url = DB::table('admincontactsettings')->pluck('facebook_url');

$tiktok_url  = DB::table('admincontactsettings')->pluck('tiktok_url');

$instagram_url  = DB::table('admincontactsettings')->pluck('instagram_url');

$telegram_url  = DB::table('admincontactsettings')->pluck('telegram_url');

$youtube_url  = DB::table('admincontactsettings')->pluck('youtube_url');

@endphp



 <!-- PLANS START -->

 <section class="contact spacing-150 pb-0 text-center">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-5 mx-auto">

                <div class="contact-wrpr">

                    <!-- ITEM START -->

                    <div class="item" data-sal="slide-up" style="--sal-duration: 1s">

                        <div class="rounded-icon mx-auto mb-4">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"

                                viewBox="0 0 24 24">

                                <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round"

                                    stroke-width="1.5" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0Z" />

                                <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round"

                                    stroke-width="1.5" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />

                            </svg>

                        </div>

                        <div class="info-wrpr">

                            <h2 class="h1 text-uppercase font-weight-700">Location</h2>

                            <div class="info">

                                {!! $contact_address[0] !!}

                            </div>

                        </div>

                    </div>

                    <!-- ITEM END -->

                    <!-- ITEM START -->

                    <div class="item" data-sal="slide-up" style="--sal-duration: 1s">

                        <div class="rounded-icon mx-auto mb-4">

                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 28 28">

                                <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.625 2.75H8.375A2.25 2.25 0 0 0 6.125 5v18a2.25 2.25 0 0 0 2.25 2.25h11.25a2.25 2.25 0 0 0 2.25-2.25V5a2.25 2.25 0 0 0-2.25-2.25Z"/>

                                <path stroke="#FDC442" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M14 19.4h.01"/>

                              </svg>

                         </div>

                        <div class="info-wrpr">

                            <h2 class="h1 text-uppercase font-weight-700">Phone & Email</h2>

                            <div class="info">

                                <a href="#">Overseer: Scribe: Board Of Trustees</a>

                                <a href="tel:{{ $contact_number[0]}}">{{ $contact_number[0] }}</a>

                                <a href="mailto:{{ $contact_email[0] }}">{{ $contact_email[0] }}</a>

                             </div>

                        </div>

                    </div>

                    <!-- ITEM END -->

                    <!-- ITEM START -->

                    <div class="item" data-sal="slide-up" style="--sal-duration: 1s">

                        <div class="info-wrpr">

                            

                            <h2 class="h1 text-uppercase font-weight-700">Send us a message</h2>

                            <div class="info">

                            <form name="ajax-contact-form" id="ajax-contact-form" method="post" action="javascript:void(0)">

                                @csrf

                                <div class="row">

                                    <div class="col-xl-12 mb-sm-4 mb-3">

                                        <div class="form-floating w-100">

                                            <input type="text" id="name" class="form-control" name="name"

                                                placeholder="Name">

                                            <label for="floatingInput">Name</label>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 mb-sm-4 mb-3">

                                        <div class="form-floating w-100">

                                            <input type="email" id="email" class="form-control" name="email"

                                                placeholder="Email">

                                            <label for="floatingInput">Email</label>

                                            <label id="unique-error" class="emailUniqueError" for="email"></label>

                                        </div>

                                    </div>



                                    <div class="col-lg-12 mb-sm-4 mb-3">

                                        <div class="form-floating w-100">

                                            <input type="text" id="phone" class="form-control" name="phone"

                                                placeholder="Phone">

                                            <label for="floatingInput">Phone</label>

                                        </div>

                                    </div>



                                    <div class="col-lg-12 mb-sm-4 mb-3">

                                        <div class="form-floating w-100">

                                            <input type="text" id="subject" class="form-control" name="subject"

                                                placeholder="Subject">

                                            <label for="floatingInput">Subject</label>

                                        </div>

                                    </div>



                                    <div class="col-lg-12 mb-sm-4 mb-3">

                                        <div class="form-group">

                                            <textarea name="message" id="message" cols="30" rows="4" class="form-control"

                                                placeholder="Message"></textarea>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 mt-3">

                                        <div class="form-group">

                                           <button class="btn btn-primary mx-auto" type="submit" id="submit">Submit</button>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                        <div id="successmsg"></div>

                        </div>

                    </div>

                    <!-- ITEM END -->

                </div>

            </div>

        </div>

    </div>

</section>

<!-- PLANS END -->



@endsection







@section('script')

<style>

.error{

    color: #FF0000; 

}

#unique-error {

    text-transform: capitalize !important;

    margin-top: 10px !important;

    color: #f28888;

    font-size: 14px !important;

    float: none;

    display: block;

    position: unset !important;

    z-index: 99999;

    opacity: 1 !important;

    text-align: left;

}

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>

$(document).ready(function(){

    if ($("#ajax-contact-form").length > 0) {

    $("#ajax-contact-form").validate({

      rules: {

        name: {

        required: true,

        maxlength: 50

      },

      email: {

        required: true,

        maxlength: 50,

        email: true,

      },

      phone: {

        required: true,

        number: true,

        maxlength: 13,

      } 

      },

      messages: {

      name: {

        required: "Please enter name",

        maxlength: "Your name maxlength should be 50 characters long."

      },

      email: {

        required: "Please enter valid email",

        email: "Please enter valid email",

        maxlength: "The email name should less than or equal to 50 characters",

      },

      phone: {

        required: "Please enter valid phone number",

        number: "Only accepts numbers",

        maxlength: "The phone number should less than or equal to 13 characters",

      }

      },

      submitHandler: function(form) {

      $.ajaxSetup({

        headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

      });

      $('#submit').html('Please Wait...');

      $("#submit"). attr("disabled", true);

      $.ajax({

        url: "{{url('contact')}}",

        type: "POST",

        data: $('#ajax-contact-form').serialize(),

        success: function( response ) {

        console.log(response);

          $('#successmsg').html('<span>' + response.message + '</span>');

          $('#submit').html('Submit');

          $("#submit"). attr("disabled", false);

          //alert('Form has been submitted successfully');

          //$('#successmsg').delay(5000).fadeOut('slow');

          document.getElementById("ajax-contact-form").reset(); 

        },

        // error: function(XMLHttpRequest, textStatus, errorThrown) {

        //     //console.log(XMLHttpRequest.responseJSON.errors.email[0]);

        //     //console.log(XMLHttpRequest.responseJSON.errors);

        //     if(XMLHttpRequest.responseJSON.errors.email[0] != ""){

        //         $(".emailUniqueError").html(XMLHttpRequest.responseJSON.errors.email[0]).show();

        //     }

        //     $("#submit"). attr("disabled", false);

        //     $('#submit').html('Submit');

         

            

        // }   

       });

      }

      });





    }

});

    </script>





@stop