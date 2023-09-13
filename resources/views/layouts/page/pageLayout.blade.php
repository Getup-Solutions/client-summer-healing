<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.page.inc.head') 
        <meta name="description" content="@yield('meta_description', 'meta-description')">
        <meta name="keywords" content="@yield('meta_keyword', 'meta-keyword')">
    </head>
    <body>
        <!-- PAGELOADING START-->
        {{-- <div class="page-loader">
        <div class="spinner"></div>
        </div> --}}
        <!-- PAGELOADING END-->
        <!-- MAIN WRAPPER START -->
        <div class="main-wrpr">
            @include('layouts.page.inc.header')
            @yield('content')
            @include('layouts.page.inc.footer')
        </div>
        <!-- MAIN WRAPPER END -->
        <!-- BACKGROUND VIDEO START -->
        <div class="video-wrapper">
            <video autoplay muted loop>
                <source src="{{ asset('Frontend/assets/video/video.mp4') }}" type="video/mp4">
            </video>
        </div>
        <!-- BACKGROUND VIDEO END -->
        <script src="{{ asset('Frontend/assets/scripts/jquery.min.js')}}"></script>
        {{-- <script src="{{ asset('Frontend/assets/scripts/theme.min.js')}}" async></script> --}}
        <script src="{{ asset('Frontend/assets/scripts/theme.js')}}" async></script>
        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            $(document).ready(function() {
            @if(Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right",
            }
            toastr.success("{{ session('message') }}");
            @endif
            
            @if(Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right",
            }
            toastr.error("{{ session('error') }}");
            @endif
            
            @if(Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right",
            }
            toastr.info("{{ session('info') }}");
            @endif
            
            @if(Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right",
            }
            toastr.warning("{{ session('warning') }}");
            @endif


            @if(Session::has('status'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right",
            }
            toastr.success("{{ session('status') }}");
            @endif



            }); 
        </script>

        @include('layouts.page.inc.nav')
        @yield('style')
        @yield('script')
    </body>
</html>