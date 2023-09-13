@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Add admin Permission')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Admin Permission add
                        </h1>
                        
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
                                <form role="form" style="padding:1rem 2rem;" method="post" action="{{ route('admin.dashboard.admin.permission.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Permission</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Permission Info</label>
                                        <input type="text" class="form-control @error('info') is-invalid @enderror" id="info" name="info" value="{{ old('info') }}">
                                        @error('info')
                                            <div class="formAlertError alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="rightSideBtn">
                                    <button type="submit" class="btn btn-default common-button" id="createBtn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Add</button>
                                    </div>
                                </form>
                            </div>
                        
                        </div>
                        <!-- /.table-responsive -->
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
<script>
    $(document).ready(function() {
        
    });
</script>

@endsection