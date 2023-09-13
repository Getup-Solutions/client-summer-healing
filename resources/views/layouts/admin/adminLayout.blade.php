<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.admin.inc.header')
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('layouts.admin.inc.topNav')
                @include('layouts.admin.inc.sidebar')
            </nav>

            @yield('content')

            

        </div>
        <!-- /#wrapper -->
        @include('layouts.admin.inc.footer')
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            $(document).ready(function() {
            @if(Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-top-right",
            }
            toastr.success("{{ session('message') }}");
            @endif
            
            @if(Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-top-right",
            }
            toastr.error("{{ session('error') }}");
            @endif
            
            @if(Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-top-right",
            }
            toastr.info("{{ session('info') }}");
            @endif
            
            @if(Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-top-right",
            }
            toastr.warning("{{ session('warning') }}");
            @endif
            }); 


            $(document).ready(function(){
                $(".minimizeSidebar").click(function(){
                    $(this).toggleClass('actionActive');
                    $(".sidebar-nav").toggleClass('actionHideSidebar');
                    $("#page-wrapper").toggleClass("displayaction");
                });
            });


        </script>
        @yield('script')
        @yield('style')
    </body>
</html>
