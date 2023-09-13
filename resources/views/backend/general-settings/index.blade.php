@extends('layouts.admin.adminLayout')
@section('title', 'Admin | General Settings')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">General Settings </h1>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="panel-body">
                        <div class="row">
                            <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.generalsettings.update', $admingeneralsetting->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="panel-heading-seo" style="margin-top: 0;">
                                    GENERAL
                                </div>

                                <div class="form-group logo-image-field">
                                    <label>Logo image</label>
                                    <input type="file" id="logo" name="logo">
                                    @if($admingeneralsetting->logo)
                                    <img id="logo_src" src="{{url("/backend/images/general_settings") }}/{{ $admingeneralsetting->logo }}">
                                    @else
                                    <img id="logo_src" src="" style="display: none;">
                                    @endif
                                </div>

                                <div class="form-group favicon-image-field">
                                    <label>Favicon image</label>
                                    <input type="file" id="favicon" name="favicon">
                                    @if($admingeneralsetting->favicon)
                                    <img id="favicon_src" src="{{url("/backend/images/general_settings") }}/{{ $admingeneralsetting->favicon }}">
                                    @else
                                    <img id="favicon_src" src="" style="display: none;">
                                    @endif
                                    <p>use 16 x 16 image size.</p>
                                </div>

                                <div class="panel-heading-seo">
                                    OTHER PAGES
                                 </div>
                    
                                <div class="form-group">
                                    <label>Terms & Conditions</label>
                                    <textarea class="form-control" id="description" name="terms">{{ $admingeneralsetting->terms }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Privacy Policy</label>
                                    <textarea class="form-control" id="description" name="privacy_policy">{{ $admingeneralsetting->privacy_policy }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Refund Policy</label>
                                    <textarea class="form-control" id="description" name="refund_policy">{{ $admingeneralsetting->refund_policy }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Copyright</label>
                                    <input class="form-control" type="text" id="copyright" name="copyright" value="{{ $admingeneralsetting->copyright }}">
                                </div>

                                <div class="rightSideBtn">
                                <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                </div>

                            </form>
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
    function readLogoURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#logo_src').css("display", "block");
                $('#logo_src').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo").change(function(){
        $('#logo_src').css("display", "block");
        readLogoURL(this);
    });

    function readFaviconURL(input) {
        if (input.files && input.files[0]) {
            var reader1 = new FileReader();
            reader1.onload = function (e) {
                $('#favicon_src').css("display", "block");
                $('#favicon_src').attr('src', e.target.result);
            }
            reader1.readAsDataURL(input.files[0]);
        }
    }
    $("#favicon").change(function(){
        $('#favicon_src').css("display", "block");
        readFaviconURL(this);
    });
</script>

@endsection