@extends('layouts.admin.adminLayout')
@section('title', 'Admin | All Pages')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Pages 
                            @if(auth()->check())
                                @if(auth()->user()->type == "superadmin")
                                    <span>
                                        <a class="bgcolorThree" href="{{ route('admin.dashboard.pages.trash') }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        Trash list</a>
                                        
                                        <a class="bgcolorOne" href="{{ route('admin.dashboard.page.create') }}">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Add New</a>
                                    </span>
                                @endif
                            @endif
                        </h1>
                        
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
            @if($permissiondata->contains('pages.index') || $userdata->id==1)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Banner Image</th>
                                        <th>Date of created</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @if(count($adminpages) > 0)
                                    @foreach($adminpages as $adminpage)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $adminpage->title }}</strong></td>
                                        <td>
                                            <img style="width:100px;" src="{{ url("/backend/images/banner_images") }}/{{ $adminpage->banner_image }}"alt="{{ $adminpage->banner_image }}">
                                        </td>
                                        <td>{{ $adminpage->created_at }}</td>
                                        <td>{{ $adminpage->status == 1 ? "Published" : "Draft" }}</td>
                                        <td>
                                            <ul class="actionList">
                                                {{-- <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li> --}}
                                            <li><a href="{{ route('admin.dashboard.page.edit', $adminpage->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                                            @if(auth()->check())
                                                @if(auth()->user()->type == "superadmin")
                                                    <li>
                                                
                                                        <form action="{{ route('admin.dashboard.page.destroy', $adminpage->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    
                                                    </li>
                                                    @endif
                                                @endif
                                                </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td rowspan="10" colspan="10" style="text-align: center">No pages found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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

<script>
    $(document).ready(function() {
        $('#dataTables1').DataTable({
            responsive: true
        });
    });
</script>

@endsection