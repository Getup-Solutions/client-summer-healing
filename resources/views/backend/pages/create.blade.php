@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Add Page')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Add New Page <span></h1>
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
                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.page.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Page Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    {{-- <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div> --}}

                                    <div class="panel-heading-seo">
                                        PAGE BANNER
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Banner Image</label>
                                        <input type="file" id="banner_image" name="banner_image">
                                        <img id="banner_image_src" src="" style="display: none;">
                                    </div>

                                    <div class="panel-heading-seo">
                                       OTHER SECTIONS
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Section 1 heading</label>
                                        <input type="text" class="form-control" id="section1_heading" name="section1_heading">
                                    </div>

                                    <div class="form-group">
                                        <label>Section 1</label>
                                        <textarea class="form-control" id="description" name="section1">{{ old('section1') }}</textarea>
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Section 2 heading</label>
                                        <input type="text" class="form-control" id="section2_heading" name="section2_heading">
                                    </div>

                                    <div class="form-group">
                                        <label>Section 2</label>
                                        <textarea class="form-control" id="description2" name="section2">{{ old('section2') }}</textarea>
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Section 3 heading</label>
                                        <input type="text" class="form-control" id="section3_heading" name="section3_heading">
                                    </div>

                                    <div class="form-group">
                                        <label>Section 3</label>
                                        <textarea class="form-control" id="description3" name="section3">{{ old('section3') }}</textarea>
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Section 4 heading</label>
                                        <input type="text" class="form-control" id="section4_heading" name="section4_heading">
                                    </div>

                                    <div class="form-group">
                                        <label>Section 4</label>
                                        <textarea class="form-control" id="description4" name="section4">{{ old('section4') }}</textarea>
                                    </div>

                                    <div class="panel-heading-seo">
                                        SEARCH ENGINE OPTIMISATION (SEO)
                                    </div>

                                    <div class="form-group">
                                        <label>SEO Title</label>
                                        <input class="form-control" type="text" id="seo_title" name="seo_title">
                                    </div>

                                    <div class="form-group">
                                        <label>SEO Description</label>
                                        <input class="form-control" type="text" id="seo_description" name="seo_description">
                                    </div>

                                    <div class="form-group">
                                        <label>SEO Keyword</label>
                                        <input class="form-control" type="text" id="seo_keyword" name="seo_keyword">
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" selected>Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                    </div>

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
        selector: 'textarea#description, textarea#description2, textarea#description3, textarea#description4',
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
                $('#banner_image_src').css("display", "block");
                $('#banner_image_src').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#banner_image").change(function(){
        $('#banner_image_src').css("display", "block");
        readURL(this);
    });
</script>

@endsection