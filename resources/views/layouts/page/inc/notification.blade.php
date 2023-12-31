<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function() {
    @if(Session::has('message'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.success("{{ session('message') }}");
    @endif
    
    @if(Session::has('error'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.error("{{ session('error') }}");
    @endif
    
    @if(Session::has('info'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.info("{{ session('info') }}");
    @endif
    
    @if(Session::has('warning'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.warning("{{ session('warning') }}");
    @endif
    }); 
   </script>