@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Permissions')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Admin Permissions
                            <span>
                            </span>

                            {{-- <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.admin.permission.add') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add Permission</a>
                            </span> --}}
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
                                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}">
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
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Permission</th>
                                        <th>Info</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    {{-- @dd($users) --}}
                                    @if(count($permissions) > 0)
                                    @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $permission->name }}</strong></td>
                                        <td class="main_page_title"><strong>{{ $permission->info }}</strong></td>
                                        <td>
                                            <ul class="actionList">
                                                <li><a href="{{ route('admin.dashboard.admin.permission.edit', $permission->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                                                <li>

                                                    <form action="{{ route('admin.dashboard.admin.permission.destroy', $permission->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">No permissions found.</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
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
        $('#dataTables1').DataTable({
            responsive: true,
            pageLength: 100
        });
    });
</script>

@endsection