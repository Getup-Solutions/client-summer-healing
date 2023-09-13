@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Payment Settings')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Payment Settings </h1>
                        
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="list-style:none;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.paymentsettings.update', 1) }}">
                                @csrf
                                @method('PUT')
                                <div class="panel-heading-seo" style="margin-top: 0;">
                                    STRIPE TEST KEYS
                                </div>

                                <div class="form-group">
                                    <label>Test publishable key</label>
                                    <input class="form-control" type="text" id="stripe_test_publishable_key" name="stripe_test_publishable_key" value="@if(!empty($adminpaymentsetting->stripe_test_publishable_key)
                                    ){{ $adminpaymentsetting->stripe_test_publishable_key }} @endif">
                                </div>

                                <div class="form-group">
                                    <label>Test secret key</label>
                                    <input class="form-control" type="text" id="stripe_test_secret_key" name="stripe_test_secret_key" value="@if(!empty($adminpaymentsetting->stripe_test_secret_key)
                                    ){{ $adminpaymentsetting->stripe_test_secret_key }} @endif">
                                </div>

                                <div class="panel-heading-seo">
                                    STRIPE LIVE KEYS
                                </div>

                                <div class="form-group">
                                    <label>Live publishable key</label>
                                    <input class="form-control" type="text" id="stripe_live_publishable_key" name="stripe_live_publishable_key" value="@if(!empty($adminpaymentsetting->stripe_live_publishable_key)
                                    ){{ $adminpaymentsetting->stripe_live_publishable_key }}  @endif">
                                </div>

                                <div class="form-group">
                                    <label>Live secret key</label>
                                    <input class="form-control" type="text" id="stripe_live_secret_key" name="stripe_live_secret_key" value="@if(!empty($adminpaymentsetting->stripe_live_secret_key)
                                    ){{ $adminpaymentsetting->stripe_live_secret_key }}  @endif">
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