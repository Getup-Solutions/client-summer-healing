@extends('layouts.admin.adminLayout')
@section('title', 'Admin | View Schedule')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Schedule - {{ $scheduleitem->title }} <span></h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default" style="border:none;">
                        <div class="panel-body">
                            <div class="row">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="4" class="tbl-heading-style"><h4>Schedule Details</h4></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $fullDay = date('l', strtotime($scheduleitem->scheduledate));
                                            $dateInt = date('jS M Y', strtotime($scheduleitem->scheduledate));
                                            //dd($new_date);
                                            $course = App\Models\Admincourse::where("id", $scheduleitem->courseid)->first();
                                            $subscription = App\Models\Adminsubscription::where("id", $course->subscription)->first();
                                            //dd($subscription->title);
                                            @endphp
                                            <tr>
                                                <td><strong>Schedule Course</strong></td>
                                                <td>{{ $scheduleitem->title }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Schedule Date</strong></td>
                                                <td>{{ $fullDay }}, {{$dateInt}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Schedule time</strong></td>
                                                <td>{{ $scheduleitem->scheduletime }} - {{ $scheduleitem->scheduletimeend }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Status</strong></td>
                                                <td>{{ $scheduleitem->status }}</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" style="background: #bb8a45;color: #fff;">
                                                    <h4>Course Details</h4>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>Description</strong></td>
                                                <td>{!! $course->description !!}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Price</strong></td>
                                                <td>${{ $course->price }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Level</strong></td>
                                                <td>{{ $course->level }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td><strong>Subscription</strong></td>
                                                <td>{{ $subscription->title }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Price</strong></td>
                                                <td><img style="width:150px;height:auto;" src="{{asset('backend/images/courses_images/')}}/{{ $course->featured_image }}"/></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')

<script src="https://cdn.tiny.cloud/1/n2590ka2n2b7p5syrrlwvtbjcfea73z84bekfmy13ihsxo2k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    //tinymce cloud
    tinymce.init({
        selector: 'textarea#description',
        height: 300,
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        toolbar: 'code | undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        image_advtab: true,
        toolbar_mode: 'sliding',
        contextmenu: "link image imagetools table",
    });

    //Preview image on select
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#featured_image_src').css("display", "block");
                $('#featured_image_src').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#featured_image").change(function(){
        $('#featured_image_src').css("display", "block");
        readURL(this);
    });



</script>

@endsection