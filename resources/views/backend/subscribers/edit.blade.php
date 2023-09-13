@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Edit Subscriber')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Edit {{ $user->name }} <span></h1>
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
            @if($permissiondata->contains('subscribers.edit') || $permissiondata->contains('users.edit') || $userdata->id == 1)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.subscriber.update', $user->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Subscription Plan</label>
                                        <select name="subscription" id="subscription" class="form-control @error('subscription') is-invalid @enderror" id="subscription">
                                            <option value="">--SELECT PLAN--</option>
                                            @foreach($adminsubscriptions as $adminsubscription)
                                            <option 
                                            data-val="{{ $adminsubscription->id }}" 
                                            data-price="{{ $adminsubscription->price }}" 
                                            data-interval="{{$adminsubscription->interval}}"
                                            value="{{ $adminsubscription->title }}"
                                             @if($adminsubscription->id == $user->subscription_id || $adminsubscription->title == $user->subscription) selected @endif>
                                            {{ $adminsubscription->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                                        @error('name')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ $user->lastname }}">
                                        @error('lastname')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" value="{{ $user->phone }}">
                                        @error('phone')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                        
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                                        @error('email')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" >
                                        @error('password')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    @php
                                        $subscriptionGet = App\Models\Adminsubscription::where('id', $user->subscription_id)->first();
                                        //@dd($subscriptionGet)
                                    @endphp
                                    
                                    @if($subscriptionGet)
                                    <input type="hidden" class="form-control" id="subscriptionid" name="subscription_id" value="{{ $user->subscription_id }}">

                                    <input type="hidden" class="form-control" id="subscriptionprice" name="subscription_price" value="{{ $subscriptionGet->price }}">

                                    <input type="hidden" class="form-control" id="interval" name="interval" value="{{ $subscriptionGet->interval }}">
                                    @endif
                                    
                                    
                                    <input type="hidden" class="form-control" id="subscriptionid" name="subscription_id_onselect">
                                    <input type="hidden" class="form-control" id="userid" name="userid" value="{{$user->id}}">
                                    <input type="hidden" class="form-control" id="pageParam" name="pageParam" value="{{$pageParam}}">
                                    
                                    

                                    <div class="rightSideBtn">
                                    <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="permission_restricted">You don't have permission to view this page.</div>
            @endif
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



    $(document).ready(function(){
        $("#price").change(function(){
            if($("#price").val() == 0){
                $("#intvalField").slideUp("medium");
            }
            else{
                $("#intvalField").slideDown("medium");
            }
        });




        $("#subscription").change(function(){
            var selectedSubscription = $(this).children("option:selected").attr("data-val");
            var selectedSubscriptionPrice = $(this).children("option:selected").attr("data-price");
            var selectedSubscriptionInterval = $(this).children("option:selected").attr("data-interval");
            //alert(selectedSubscription);
            $("#subscriptionid").val(selectedSubscription);
            $(".subscription_id_onselect").val(selectedSubscription);
            $("#subscriptionprice").val(selectedSubscriptionPrice);
            $("#interval").val(selectedSubscriptionInterval);
        });


    });
</script>

@endsection