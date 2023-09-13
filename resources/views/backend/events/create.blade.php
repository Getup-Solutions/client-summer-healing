@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Add Event')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Add Course <span></h1>
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

            @if($permissiondata->contains('events.create') && $permissiondata->contains('events.index') || $userdata->id == 1)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">

                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.events.store') }}" enctype="multipart/form-data">
                                    @csrf
      
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group banner-image-field">
                                        <label>Featured Image</label>
                                        <input type="file" id="image" name="image">
                                        <p class="descriptionz">Please use <b>430 x 625</b> pixel for featured images</p>
                                    </div>
                                    
                                    <div class="row mb-5 col-md-12" id="img_crop_and_container" style="display:none;margin-bottom:3rem;">
                                        <div class="img_crop_div1 col-md-7">
                                            <div id="cropie-demo" style="width:250px;height:auto;"></div>
                                            <a href="#" class="btn btn-success upload-result">Crop Image</a>
                                            <p class="descriptionz">Select and drag the white border to resize the image and click on Crop Image button to see the output. Also use mouse scroll to scale or fit the image.</p>
                                        </div>
                                        <div class="img_crop_div1 col-md-5">
                                            <div id="image-preview" style="background:#e1e1e1;padding:0px;height:300px;display:none;text-align:center;align-content:center;justify-content:center;}"></div>
                                        </div>
                                        
                                    </div>
                        
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Venue</label>
                                        <input class="form-control @error('venue') is-invalid @enderror" id="venue" name="venue" value="{{ old('venue') }}">
                                        @error('venue')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <span class="datecal">
                                        <input type="text" placeholder="Select Date"  class="form-control @error('startdate') is-invalid @enderror" id="from" name="startdate" value="{{ old('startdate') }}">
                                        </span>
                                        @error('startdate')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>End Date</label>
                                        <span class="datecal">
                                        <input type="text" placeholder="Select Date" class="form-control @error('enddate') is-invalid @enderror" id="to" name="enddate" value="{{ old('enddate') }}">
                                        </span>
                                        @error('enddate')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Start Time</label>
                                        <div class="timepickerinput">
                                            <div class='input-groups time'>
                                                <input type='text' name="starttime" placeholder="Click to pick time" id="myDatePicker" class="myDatePicker1 form-control" value="{{old('starttime')}}"/>
                                                <span class="input-group-addon timeClock1" id="timeClock">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>    
                                        </div>
                                        @error('starttime')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>End Time</label>
                                        <div class="timepickerinput">
                                            <div class='input-groups time'>
                                                <input type='text' name="endtime" placeholder="Click to pick time" id="myDatePicker2" class="myDatePicker2 form-control" value="{{old('endtime')}}"/>
                                                <span class="input-group-addon timeClock2" id="timeClock">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>    
                                        </div>
                                        @error('endtime')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                                        @error('price')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Button Link</label>
                                        <input class="form-control @error('buttonlink') is-invalid @enderror" id="buttonlink" name="buttonlink" value="{{ old('buttonlink') }}">
                                        @error('buttonlink')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Button Label</label>
                                        <input class="form-control @error('buttontext') is-invalid @enderror" id="buttontext" name="buttontext" value="{{ old('buttontext') }}">
                                        @error('buttontext')
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

                                    <input id="finalImageValue" name="finalImageValue" value="" type="hidden">
                                    <input id="type" name="type" value="admin" type="hidden">

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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link href="{{ asset('backend/css/jquery.datetimepicker.css') }}" rel="stylesheet" type="text/css">
<script src="{{ asset('backend/js/jquery.datetimepicker.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/n2590ka2n2b7p5syrrlwvtbjcfea73z84bekfmy13ihsxo2k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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
    $("#image").change(function(){
        $('#featured_image_src').css("display", "block");
        readURL(this);
    });

    $(document).ready(function() {
        $('#trainers').select2();

        jQuery('.timeClock1').click(function(){
            jQuery('.myDatePicker1').datetimepicker('show');
        });
        jQuery('.timeClock2').click(function(){
            jQuery('.myDatePicker2').datetimepicker('show');
        });

        // $('#myDatePicker').datetimepicker({
        //     format:'H:i A',
        //     datepicker:false,
        //     step:15,
        //     inline:false,
        //     hours12:true,

        //     onChangeDateTime:function(dp,$input){
        //         $('.timoutputlist').val($input.val());
        //     }

        // });

        // $('#myDatePicker2').datetimepicker({
        //     format:'H:i A',
        //     datepicker:false,
        //     step:15,
        //     inline:false,
        //     hours12:true,

        //     onChangeDateTime:function(dp,$input){
        //         $('.timoutputlist').val($input.val());
        //     }

        // });






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
                width: 430,
                height: 625,
                // type: 'circle'
            },
            boundary: {
                width: 500,
                height: 650
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
                    url: "/admin/event/image-crop-class",
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




    $( function() {
    var dateFormat = "mm-dd-yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          showOn: "button",
          buttonImage: '{{asset("/backend/images/cal.png")}}',
          buttonImageOnly: true,
          //dateFormat: 'dd-mm-yy'
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        showOn: "button",
        buttonImage: '{{asset("/backend/images/cal.png")}}',
        buttonImageOnly: true,
        //dateFormat: 'dd-mm-yy'
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
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
    .datecal{position: relative; display:block;width:200px;}
    .datecal img{
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        width: 15px;
    }
</style>
@endsection