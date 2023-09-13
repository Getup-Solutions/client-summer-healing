@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Edit On Demand Course')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Edit {{ $adminondemand->title }}<span></h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.ondemand.update', $adminondemand->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $adminondemand->title }}">
                                        @error('title')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description">{{$adminondemand->description}}</textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Excerpt</label>
                                        <textarea class="form-control @error('excerpt') is-invalid @enderror" id="description" name="excerpt">{{$adminondemand->excerpt}}</textarea>
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Featured Image</label>
                                        <input type="file" id="featured_image" name="featured_image">
                                        <img id="featured_image_src" src="{{ url('/backend/images/courses_images') }}/{{ $adminondemand->featured_image }}" alt="{{ $adminondemand->title }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Course Category</label>
                                        <select name="ondemand_category" id="ondemand_category" class="form-control @error('ondemand_category') is-invalid @enderror" id="ondemand_category">
                                            <option value="">--SELECT CATEGORY--</option>
                                            @foreach($adminondemandcats as $adminondemandcat)
                                            <option value="{{ $adminondemandcat->id }}" 
                                            {{$adminondemand->ondemand_category == $adminondemandcat->id ? "selected" : ""}} >
                                                {{ $adminondemandcat->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('course_category')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Subscription Plan</label>
                                        <select name="subscription" id="subscription" class="form-control @error('subscription') is-invalid @enderror" id="subscription">
                                            <option value="">--SELECT PLAN--</option>
                                            @foreach($adminsubscriptions as $adminsubscription)
                                            <option value="{{ $adminsubscription->id }}" 
                                            {{$adminondemand->subscription == $adminsubscription->id ? "selected" : ""}} >
                                                {{ $adminsubscription->title }}
                                            </option>
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
                                            <option value="
                                            {{ $admintrainer->id }}" @if($adminondemand->adminondemandtrainers->contains('id', $admintrainer->id)) {{"selected"}} @endif>
                                                {{$admintrainer->trainer_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                   {{--  @foreach($admintrainers as $admintrainer)
                                    <input @if($admincourse->admincoursetrainers->contains('id', $admintrainer->id)) {{"checked"}} @endif type="checkbox" name="trainers[]" value="{{$admintrainer->id}}"> 
                                    {{$admintrainer->trainer_name}}
                                    @endforeach --}}

                                    <div class="form-group">
                                        <label>Course Level</label>
                                        <select name="level" id="level" class="form-control">
                                            <option value="">--SELECT LEVEL--</option>
                                            <option value="All" {{$adminondemand->level == "All" ? "selected" : ""}}>All</option>
                                            <option value="Beginner" {{$adminondemand->level == "Beginner" ? "selected" : ""}}>Beginner</option>
                                            <option value="Intermediate" {{$adminondemand->level == "Intermediate" ? "selected" : ""}}>Intermediate</option>
                                            <option value="Advanced" {{$adminondemand->level == "Advanced" ? "selected" : ""}}>Advanced</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $adminondemand->price }}">
                                        @error('price')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control" id="status">
                                            <option value="Published" {{$adminondemand->status == "Published" ? "selected" : ""}}>Published</option>
                                            <option value="Draft" {{$adminondemand->status == "Draft" ? "selected" : ""}}>Draft</option>
                                        </select>
                                    </div>

                                    <div class="panel-heading-seo">
                                        VIDEO OPTIONS
                                    </div>

                                    <div class="form-group">
                                        <label>Live Streaming Schedule Date</label>
                                        <div class='input-groups date'>
                                        <input type="date" class="form-control" name="scheduledate" id="scheduledate" value="{{$adminondemand->scheduledate}}"/>
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
                                                    <input type='text' name="scheduletime" placeholder="Click to pick time" id="myDatePicker" class="form-control" value="{{$adminondemand->scheduletime}}"/>
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
                                        <label>Live Streaming URL.</label>
                                        <textarea class="form-control @error('embed_url') is-invalid @enderror" id="embed_url" name="embed_url" style="height:120px;font-weight:700;">{{ $adminondemand->embed_url }}</textarea>
                                    </div>
                                    @error('embed_url')
                                        <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                    @enderror


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
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')

<script src="https://cdn.tiny.cloud/1/n2590ka2n2b7p5syrrlwvtbjcfea73z84bekfmy13ihsxo2k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
        
    });
</script>

@endsection