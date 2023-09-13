@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Contact Settings')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Contact Settings </h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
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
                            <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.contactsettings.update', 1) }}">
                                @csrf
                                @method('PUT')
                                <div class="panel-heading-seo" style="margin-top: 0;">
                                    CONTACT DETAILS
                                </div>

                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" id="contact_number" name="contact_number" value="@if(!empty($admincontactsetting->contact_number)
                                    ){{ $admincontactsetting->contact_number }} @endif">
                                </div>

                                <div class="form-group">
                                    <label>Contact Email</label>
                                    <input class="form-control" type="text" id="contact_email" name="contact_email" value="@if(!empty($admincontactsetting->contact_email)
                                    ){{ $admincontactsetting->contact_email }} @endif">
                                </div>

                                <div class="form-group">
                                    <label>Contact Address</label>
                                    <textarea class="form-control" id="description" name="contact_address">@if(!empty($admincontactsetting->contact_address)
                                        ){{ $admincontactsetting->contact_address }} @endif</textarea>
                                </div>

                                <div class="panel-heading-seo">
                                    SOCIAL MEDIA LINKS
                                </div>

                                <div class="form-group">
                                    <label>Instagram URL</label>
                                    <input class="form-control" type="text" id="instagram_url" name="instagram_url" value="@if(!empty($admincontactsetting->instagram_url)
                                    ){{ $admincontactsetting->instagram_url }} @endif">
                                </div>

                                <div class="form-group">
                                    <label>Facebook URL</label>
                                    <input class="form-control" type="text" id="facebook_url" name="facebook_url" value="@if(!empty($admincontactsetting->facebook_url)
                                    ){{ $admincontactsetting->facebook_url }} @endif">
                                </div>

                                <div class="form-group">
                                    <label>TikTok URL</label>
                                    <input class="form-control" type="text" id="tiktok_url" name="tiktok_url" value="@if(!empty($admincontactsetting->tiktok_url)
                                    ){{ $admincontactsetting->tiktok_url }} @endif">
                                </div>


                                <div class="form-group">
                                    <label>Telegram URL</label>
                                    <input class="form-control" type="text" id="telegram_url" name="telegram_url" value="@if(!empty($admincontactsetting->telegram_url)
                                    ){{ $admincontactsetting->telegram_url }} @endif">
                                </div>

                                {{-- <div class="form-group">
                                    <label>YouTube URL</label>
                                    <input class="form-control" type="text" id="youtube_url" name="youtube_url" value="@if(!empty($admincontactsetting->youtube_url)
                                    ){{ $admincontactsetting->youtube_url }} @endif">
                                </div>     --}}                                

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

</script>

@endsection