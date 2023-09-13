@extends('layouts.admin.adminLayout')

@section('title', 'Admin | Add Course')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div id="page-wrapper">

    <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                    <div class="row">

                        <h1 class="page-header">Add Class <span></h1>

                    </div>

                </div>

                <!-- /.col-lg-12 -->

            </div>

            @php          

                $userdata = App\Models\User::find(auth()->user()->id);

                $permissiondata = $userdata->permissions()->pluck('name');

                //dd($permissiondata);

            @endphp



            @if($permissiondata->contains('courses.create') && $permissiondata->contains('courses.index')  || $userdata->id == 1)

            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12 col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-body">

                            <div class="row">



                                @if(isset($_GET['coursetype']) == "course" || isset($_GET['coursetype']) == 'ondemand')



                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.courses.store') }}" enctype="multipart/form-data">

                                    @csrf

      

                                    <div class="form-group">

                                        <label>Title <span style="color:red">*</span></label>

                                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">

                                        @error('title')

                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>

                        

                                    <div class="form-group">

                                        <label>Description</label>

                                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>

                                    </div>

                                    

                                    <div class="form-group">

                                        <label>Excerpt</label>

                                        <textarea class="form-control  @error('excerpt') is-invalid @enderror" id="description2" name="excerpt">{{old('excerpt')}}</textarea>

                                    </div>



                                    <div class="form-group banner-image-field">

                                        <label>Featured Image</label>

                                        <input type="file" id="featured_image" name="featured_image">

                                        {{-- <img id="featured_image_src" src="" style="display: none;" alt="course title"> --}}

                                    </div>



                                    <div class="row mb-5 col-md-12" id="img_crop_and_container" style="display:none;margin-bottom:3rem;">

                                        <div class="img_crop_div1 col-md-7">

                                            <div id="cropie-demo" style="width:250px;height:auto;"></div>

                                            <a href="#" class="btn btn-success upload-result">Crop Image</a>

                                        </div>

                                        <div class="img_crop_div1 col-md-5">

                                            <div id="image-preview" style="background:#e1e1e1;padding:0px;height:300px;display:none;text-align:center;align-content:center;justify-content:center;}"></div>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label>Course Category <span style="color:red">*</span></label>

                                        <select name="course_category" id="course_category" class="form-control @error('course_category') is-invalid @enderror" id="course_category">

                                            <option value="" selected disabled>--SELECT CATEGORY--</option>

                                            @foreach($admincoursecats as $admincoursecat)

                                            <option value="{{ $admincoursecat->id }}" @if(old('course_category') == $admincoursecat->id) selected @endif>{{ $admincoursecat->title }}</option>

                                            @endforeach

                                        </select>

                                        @error('course_category')

                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Subscription Plan <span style="color:red">*</span></label>

                                        <select name="subscription[]" id="subscription" multiple="multiple" class="form-control @error('subscription') is-invalid @enderror" id="subscription">


                                            @foreach($adminsubscriptions as $adminsubscription)

                                            <option value="{{ $adminsubscription->id }}" @if(old('subscription') == $adminsubscription->id) selected @endif>{{ $adminsubscription->title }}</option>

                                            @endforeach

                                        </select>

                                        @error('subscription')

                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Trainers</label>

                                        <select class="form-control" id="trainers" name="trainers[]" multiple="multiple">

                                            @foreach($admintrainers as $admintrainer)

                                            <option value="{{ $admintrainer->id }}">{{ $admintrainer->trainer_name }}</option>

                                            @endforeach

                                        </select>

                                    </div>



                                    <div class="form-group">

                                        <label>Course Level</label>

                                        <select name="level" id="level" class="form-control" id="level">

                                            <option value="">--SELECT LEVEL--</option>

                                            <option value="All" @if(old('level') == "All") selected @endif>All</option>

                                            <option value="Beginner" @if(old('level') == "Beginner") selected @endif>Beginner</option>

                                            <option value="Intermediate" @if(old('level') == "Intermediate") selected @endif>Intermediate</option>

                                            <option value="Advanced" @if(old('level') == "Advanced") selected @endif>Advanced</option>

                                        </select>

                                    </div>



                                    <div class="form-group">

                                        <label>Price <span style="color:red">*</span></label>

                                        <input class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">

                                        @error('price')

                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Status</label>

                                        <select name="status" id="status" class="form-control" id="status">

                                            <option value="Published">Published</option>

                                            <option value="Draft">Draft</option>

                                        </select>

                                    </div>



                                    <div class="panel-heading-seo">

                                        VIDEO OPTIONS

                                    </div>



                                    {{-- @if($_GET['coursetype'] == 'ondemand')



                                    <div class="form-group">

                                        <label>Live Streaming Schedule Date <span style="color:red">*</span></label>

                                        <div class='input-groups date'>

                                        <input type="date" class="form-control" name="scheduledate" id="scheduledate" value="{{old('scheduledate')}}"/>

                                        @error('scheduledate')

                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                        </div>

                                    </div>



                                    <div class="form-group lievstreamTimeInputWraps">

                                        <label>Live Streaming Time <span style="color:red">*</span></label>

                                        <div class="liveStreamInputs">

                                            <div class="timepickerinput">

                                                <div class='input-groups time'>

                                                    <input type='text' name="scheduletime" placeholder="Click to pick time" style="pointer-events: none;" id="myDatePicker" class="form-control" value="{{old('scheduletime')}}"/>

                                                    <span class="input-group-addon" id="timeClock">

                                                        <span class="glyphicon glyphicon-time"></span>

                                                    </span>

                                                </div>    

                                            </div>

                                        </div>



                                        @error('scheduletime')

                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    @endif --}}



                                    <div class="form-group">

                                        <label>Video Embed URL. <span style="color:red">*</span></label>

                                        <div class="samplecode">

                                            <p>copy the Iframe sample to this field and change src URL(YOUTUBE EMBED URL ONLY!)</p>

                                            <pre>&lt;iframe src="https://www.youtube.com/embed/D0UnqGm_miA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen&gt;&lt;/iframe&gt;</pre>

                                        </div>

                                        <textarea class="form-control @error('embed_url') is-invalid @enderror" id="embed_url" name="embed_url" style="height: 120px; font-weight:700;" placeholder="This is a sample Iframe code and please copy to the video embed URL field and change src URL(YOUTUBE EMBED URL)">{{old('embed_url')}}</textarea>

                                                                            @error('embed_url')

                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>

                                        @enderror

                                    </div>







                                    <input type="hidden" name="coursetype" value="{{$_GET['coursetype']}}">



                                    <input id="finalImageValue" name="finalImageValue" value="" type="hidden">



                                    <div class="rightSideBtn">

                                    <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Create</button>

                                    </div>

                                </form>

                                @else

                                <p style="color:red; text-align:center;">YOU HAVE NO ACCESS TO THIS PAGE.</p>

                                <p style="text-align:center">

                                    <a class="btn btn-success" href="{{ route('admin.dashboard.courses.create') }}?coursetype=course">Add New Course</a>

                                    <a class="btn btn-success" href="{{ route('admin.dashboard.courses.create') }}?coursetype=ondemand">Add New Ondemand Course</a>

                                </p>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- /.col-lg-4 -->

        </div>

        <!-- /.row -->

        @else

            <div class="permission_restricted">You don't have permission to view this page.</div>

        @endif

    </div>

    <!-- /.container-fluid -->

</div>

<!-- /#page-wrapper -->

@endsection



@section('script')



<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<link href="{{ asset('backend/css/jquery.datetimepicker.css') }}" rel="stylesheet" type="text/css">

<script src="{{ asset('backend/js/jquery.datetimepicker.js') }}"></script>

<script src="https://cdn.tiny.cloud/1/n2590ka2n2b7p5syrrlwvtbjcfea73z84bekfmy13ihsxo2k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>

<script>

    //tinymce cloud

    tinymce.init({

        selector: 'textarea#description,textarea#description2',

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



    $(document).ready(function() {

        $('#subscription').select2();
        $('#trainers').select2();



        jQuery('#timeClock').click(function(){

            jQuery('#myDatePicker').datetimepicker('show');

        });



        $('#myDatePicker').datetimepicker({

            format:'H:i A',

            datepicker:false,

            step:15,

            inline:false,

            hours12:true,



            onChangeDateTime:function(dp,$input){

                $('.timoutputlist').val($input.val());

            }



        });







        //image cropie



        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });



        $uploadCrop = $('#cropie-demo').croppie({

            enableExif: true,

            enableResize: true,

            viewport: {

                width: 450,

                height: 250,

                // type: 'circle'

            },

            boundary: {

                width: 500,

                height: 300

            }

        });





        $('#featured_image').on('change', function() {

            var reader = new FileReader();

            reader.onload = function(e) {

                $uploadCrop.croppie('bind', {

                    url: e.target.result

                }).then(function() {

                    console.log('jQuery bind complete');

                });

            }

            reader.readAsDataURL(this.files[0]);

        });





        $('.upload-result').on('click', function(ev) {

            ev.preventDefault();

            $uploadCrop.croppie('result', {

                type: 'canvas',

                size: 'viewport'

            }).then(function(resp) {

                $.ajax({

                    url: "/admin/course/image-crop-class",

                    type: "POST",

                    data: {

                        "featured_image": resp

                    },

                    success: function(data) {

                        $('#image-preview').css("display", "flex");

                        html = '<img src="' + resp + '" />';

                        $("#image-preview").html(html);

                        $("#finalImageValue").val(data.image);

                        console.log(resp);

                    }

                });

            });

        });

        

        

        

        

                                                

        $("#featured_image").change(function(){

            $("#img_crop_and_container").show();

        });

        

        

        //DISABLE PREVIOUS DATES ON DATE PICKERS

         var today = new Date();

        var dd = String(today.getDate()).padStart(2, '0');

        var mm = String(today.getMonth() + 1).padStart(2, '0');

        var yyyy = today.getFullYear();



        today = yyyy + '-' + mm + '-' + dd;

        $('#scheduledate').attr('min',today);





    });

    

</script>







@endsection