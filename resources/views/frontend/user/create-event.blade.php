@extends('layouts.user.userLayout')
@section('content')
@section('title', 'Create event')
@section('meta_keyword', 'Create event')
@section('meta_description', 'Create event')

<section class="set-top-spacing my-account">
    <div class="container-fluid">
        <!-- ACCOUNT HEADER START -->
        @include('layouts.user.inc.usermenus')
        <!-- ACCOUNT HEADER END -->
<!-- CREATE EVENT START -->
<div class="row index-minus text-center text-xl-start">
    <div class="col-xl-8 mx-auto">
        <h2 class="display-2 text-center text-uppercase font-weight-700 mb-5">
            Create a event
        </h2>

        <form action="{{route('user.eventstore')}}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <div class="create-event">
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">Title</h5>
                    <div class="form-floating w-100">
                        <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{old('title')}}"/>
                        <label for="floatingInput">Title</label>
                    </div>
                    @error('title')
                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">Price</h5>
                    <div class="form-floating w-100">
                        <input type="text" id="price" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" value="{{old('price')}}"/>
                        <label for="floatingInput">Price</label>
                    </div>
                    @error('price')
                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- FORM ITEM END -->
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">Venue</h5>
                    <div class="form-floating w-100">
                        <input type="text" class="form-control @error('venue') is-invalid @enderror" id="venue" name="venue" placeholder="Venue" value="{{old('venue')}}"/>
                        <label for="floatingInput">Venue</label>
                        @error('venue')
                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- FORM ITEM END -->
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">Date</h5>
                    <div class="w-100">
                        <div class="input-group w-100 row">
                            <div class="col-md-6">
                            <input type="date" id="startdate" name="startdate" placeholder="Click to pick date" class="form-control border-right-0" value="{{old('startdate')}}"/>
                            @error('startdate')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-6">
                            <input type="date" name="enddate" id="enddate" placeholder="Click to pick date" class="form-control" value="{{old('enddate')}}"/>
                            @error('enddate')
                                <div class="formAlertError alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FORM ITEM END -->
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">Time</h5>
                    <div class="w-100">
                        <div class="input-group w-100 row">
                            <div class="col-md-6">
                                <input type='text' name="starttime" placeholder="Click to pick time" id="myDatePicker" class="myDatePicker1 form-control" value="{{old('starttime')}}"/>
                                @error('starttime')
                                    <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type='text' name="endtime" placeholder="Click to pick time" id="myDatePicker2" class="myDatePicker2 form-control" value="{{old('endtime')}}"/>
                                @error('endtime')
                                    <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FORM ITEM END -->
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">
                        Button Label & Link
                    </h5>
                    <div class="w-100 d-sm-flex align-items-center justify-content-between">
                        <div class="form-floating w-49">
                            <input type="text" id="buttontext" name="buttontext" class="form-control border-right-0 set-radius-right" placeholder="Label" value="{{old('buttontext')}}"/>
                            <label for="floatingInput">Label</label>
                        </div>
                        <div class="form-floating w-49">
                            <input type="text" id="buttonlink" name="buttonlink" class="form-control rounded-top-left-0 set-radius-left" placeholder="Link" value="{{old('buttonlink')}}"/>
                            <label for="floatingInput">Link</label>
                        </div>
                    </div>
                </div>
                <!-- FORM ITEM END -->
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">Thumbnail</h5>
                    <div class="file-upload-wrapper w-100" data-text="Upload thumbnail">
                        <input name="image" id="image" type="file" class="file-upload-field"/>
                    </div>
                    @error('image')
                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- FORM ITEM END -->
                <!-- FORM ITEM START -->
                <div class="form-item">
                    <h5 class="h5 text-uppercase font-weight-700">
                        description
                    </h5>
                    <div class="form-group w-100">
                        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <input id="type" name="type" value="user" type="hidden">
                    <input id="type" name="status" value="Draft" type="hidden">
                    <input id="type" name="userid" value="{{ auth()->user()->id }}" type="hidden">
                    <input id="type" name="username" value="{{ auth()->user()->name }}" type="hidden">
                    <input id="type" name="useremail" value="{{ auth()->user()->email }}" type="hidden">
                    <input id="type" name="usertype" value="user" type="hidden">
                    <input type="hidden" name="user_id" value="@if(auth()->check()){{ auth()->user()->id }}@endif">

                    <div class="form-group text-center mt-4 w-100">
                        <button class="mx-auto btn btn-primary">Submit</button>
                    </div>
                </div>
                <!-- FORM ITEM START -->
            </div>
        </form>
    </div>
</div>
<!-- CREATE EVENT END -->
</div>
</section>
@endsection

@section('script')
<script src="https://cdn.tiny.cloud/1/n2590ka2n2b7p5syrrlwvtbjcfea73z84bekfmy13ihsxo2k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<link href="{{ asset('backend/css/jquery.datetimepicker.css') }}" rel="stylesheet" type="text/css">
<script src="{{ asset('backend/js/jquery.datetimepicker.js') }}"></script>
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

    jQuery(function(){
        jQuery('#myDatePicker').datetimepicker({
            format:'H:i A',
            inline:false,
            //hours12:true,
        onShow:function( ct ){
        this.setOptions({
            maxTime:jQuery('#myDatePicker2').val()?jQuery('#myDatePicker2').val():false
        })
        },
        datepicker:false
        });
        jQuery('#myDatePicker2').datetimepicker({
            format:'H:i A',
            inline:false,
            //hours12:true,
        onShow:function( ct ){
        this.setOptions({
            minTime:jQuery('#myDatePicker').val()?jQuery('#myDatePicker').val():false
        })
        },
        datepicker:false
        });
    });
</script>

@endsection

@section('style')
<style>
    .w-49 {
        width: 48.5% !important;
    }
    .formAlertError.alert.alert-danger {
        color: #f75858 !important;
        font-size: 13px;
        font-weight: 400 !important;
        margin-bottom: 0;
        padding-bottom: 0;
    }
</style>
@endsection