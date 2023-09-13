@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Edit Schedule')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Edit Schedule - {{$schedule->title}}<span></h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @php          
                $userdata = App\Models\User::find(auth()->user()->id);
                $permissiondata = $userdata->permissions()->pluck('name');
                //dd($permissiondata);
            @endphp

            {{-- @if($permissiondata->contains('courses.create') && $permissiondata->contains('courses.index')  || $userdata->id == 1) --}}
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">

                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.schedules.update', $schedule->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $schedule->title }}">
                                        @error('title')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $schedule->description }}</textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Excerpt</label>
                                        <textarea class="form-control @error('excerpt') is-invalid @enderror" id="description" name="excerpt">{{ $schedule->excerpt }}</textarea>
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Featured Image</label>
                                        <input type="file" id="featured_image" name="featured_image">
                                        <img id="featured_image_src" src="{{ url('/backend/images/schedules_images') }}/{{ $schedule->featured_image }}" alt="{{ $schedule->title }}">
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
                                        <label>Course Level</label>
                                        <select name="level" id="level" class="form-control">
                                            <option value="">--SELECT LEVEL--</option>
                                            <option value="All" {{$schedule->level == "All" ? "selected" : ""}}>All</option>
                                            <option value="Beginner" {{$schedule->level == "Beginner" ? "selected" : ""}}>Beginner</option>
                                            <option value="Intermediate" {{$schedule->level == "Intermediate" ? "selected" : ""}}>Intermediate</option>
                                            <option value="Advanced" {{$schedule->level == "Advanced" ? "selected" : ""}}>Advanced</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $schedule->price }}">
                                        @error('price')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control" id="status">
                                            <option value="Published" {{$schedule->status == "Published" ? "selected" : ""}}>Published</option>
                                            <option value="Draft" {{$schedule->status == "Draft" ? "selected" : ""}}>Draft</option>
                                        </select>
                                    </div>

                                    <div class="panel-heading-seo">
                                        VIDEO OPTIONS
                                    </div>

                                    <div class="form-group">
                                        <label>Live Streaming Schedule Date</label>
                                        <div class='input-groups date'>
                                        <input type="date" class="form-control" name="scheduledate" id="scheduledate" value="{{ $schedule->scheduledate }}"/>
                                        @error('scheduledate')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group lievstreamTimeInputWraps">
                                        <label>Live Streaming Time</label>
                                        <div class="liveStreamInputs">
                                            <div class="timepickerinput">
                                                <div class='input-groups time'>
                                                    <input type='text' name="scheduletime" placeholder="Click to pick time" id="myDatePicker" class="form-control" value="{{ $schedule->scheduletime }}"/>
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

                                    <div class="form-group">
                                        <label>Scheduling for how many Hours?</label>
                                        <div class='input-groups date' id="timefor">
                                        <select name="scheduledminutes" id="scheduledminutes" class="form-control">
                                            <option value="">-Select a hour-</option>
                                            <option value="1" {{$schedule->scheduledminutes == "1" ? "selected" : ""}}>1 Hour</option>
                                            <option value="2" {{$schedule->scheduledminutes == "2" ? "selected" : ""}}>2 Hour</option>
                                            <option value="3" {{$schedule->scheduledminutes == "3" ? "selected" : ""}}>3 Hour</option>
                                            <option value="4" {{$schedule->scheduledminutes == "4" ? "selected" : ""}}>4 Hour</option>
                                            <option value="5" {{$schedule->scheduledminutes == "5" ? "selected" : ""}}>5 Hour</option>
                                            <option value="6" {{$schedule->scheduledminutes == "6" ? "selected" : ""}}>6 Hour</option>
                                            <option value="7" {{$schedule->scheduledminutes == "7" ? "selected" : ""}}>7 Hour</option>
                                            <option value="8" {{$schedule->scheduledminutes == "8" ? "selected" : ""}}>8 Hour</option>
                                            <option value="9" {{$schedule->scheduledminutes == "9" ? "selected" : ""}}>9 Hour</option>
                                            <option value="10" {{$schedule->scheduledminutes == "10" ? "selected" : ""}}>10 Hour</option>
                                            <option value="11" {{$schedule->scheduledminutes == "11" ? "selected" : ""}}>11 Hour</option>
                                            <option value="12" {{$schedule->scheduledminutes == "12" ? "selected" : ""}}>12 Hour</option>
                                        </select>
                                        @error('scheduledminutes')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Video Embed URL.</label>
                                        <textarea class="form-control @error('embed_url') is-invalid @enderror" id="embed_url" name="embed_url" style="height: 120px; font-weight:700;">{{ $schedule->embed_url }}
                                        </textarea>

                                    </div>
                                    @error('embed_url')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <input id="finalImageValue" name="finalImageValue" value="" type="hidden">

                                    <div class="rightSideBtn">
                                    <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        {{-- @else
            <div class="permission_restricted">You don't have permission to view this page.</div>
        @endif --}}
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

    $(document).ready(function() {
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
                    url: "/admin/schedule/image-crop-class",
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


    });
    
</script>



@endsection