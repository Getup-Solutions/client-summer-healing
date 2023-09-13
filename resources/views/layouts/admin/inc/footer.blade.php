<!-- jQuery -->
<script src="{{ asset('backend/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
{{-- <script src="{{ asset('backend/js/raphael.min.js') }}"></script>
<script src="{{ asset('backend/js/morris.min.js') }}"></script>
<script src="{{ asset('backend/js/morris-data.js') }}"></script> --}}

<!-- Custom Theme JavaScript -->
<script src="{{ asset('backend/js/startmin.js') }}"></script>
<script src="{{ asset('backend/script.js') }}"></script>

<!-- DataTables JavaScript -->
<script src="{{ asset('backend/js/dataTables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/dataTables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<script>
    // $(document).ready(function() {
    //     $('#dataTables-example').DataTable({
    //             responsive: true
    //     });
    // });

    (function($){
        $(window).on("load",function(){
            $(".sidebar-nav").mCustomScrollbar();
        });
    })(jQuery);
</script>