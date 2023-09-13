@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Add Trainings')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Add Trainer <span></h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @php          
                $userdata = App\Models\User::find(auth()->user()->id);
                $permissiondata = $userdata->permissions()->pluck('name');
                //dd($permissiondata);
            @endphp

            @if($permissiondata->contains('trainings.create') && $permissiondata->contains('trainings.index') || $userdata->id == 1)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.trainings.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Image</label>
                                        <input type="file" id="image" name="image">
                                        {{-- <img id="image_src" src="" style="display: none;"> --}}
                                    </div>

                                    <div class="row mb-5 col-md-12" id="img_crop_and_container" style="display:none;margin-bottom:3rem;">
                                        <div class="img_crop_div1 col-md-7">
                                            <div id="cropie-demo" style="width:250px;height:auto;"></div>
                                            <p class="description__small"><span class="exclamationmark">&excl;</span> You can resize the image by dragging and selecting the white border. Click on the crop to resize image.</p>
                                            <a href="#" class="btn btn-success upload-result">Crop Image</a>
                                        </div>
                                        <div class="img_crop_div1 col-md-5">
                                            <div id="image-preview" style="background:#e1e1e1;padding:0px;height:300px;display:none;text-align:center;align-content:center;justify-content:center;}"></div>
                                        </div>
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Price</label>
                                        <input class="form-control type="text" @error('price') is-invalid @enderror" id="price" pattern="[0-9]+" title="please enter number only" name="price" value="{{ old('price') }}">
                                        @error('price')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                        
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" selected>Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                    </div>

                                    <input id="finalImageValue" name="finalImageValue" value="" type="hidden">

                                    <div class="rightSideBtn">
                                    <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            @else
            <div class="permission_restricted">You don't have permission to view this page.</div>
            @endif
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')

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
                $('#image_src').css("display", "block");
                $('#image_src').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function(){
        $('#image_src').css("display", "block");
        readURL(this);
    });


    jQuery(document).ready(function($){
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


        $('#image').on('change', function() {
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
                    url: "/admin/training/image-crop-class",
                    type: "POST",
                    data: {
                        "image": resp
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
        
        
        
        
                                                
        $("#image").change(function(){
            $("#img_crop_and_container").show();
        });




    });

</script>

@endsection