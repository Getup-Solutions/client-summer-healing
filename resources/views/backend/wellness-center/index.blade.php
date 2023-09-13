@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Wellness Center')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Wellness Center
                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.wellness.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add</a>
                            </span>

                            {{-- <span>
                                <a class="bgcolorOne" href="{{ route('admin.export-orders') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Export</a>
                            </span> --}}
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

            @if($permissiondata->contains('wellness.index') || $userdata->id == 1)
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        {{-- <th>Description</th> --}}
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @if(count($wellnesscenters) > 0)
                                    @foreach($wellnesscenters as $wellnesscenter)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><img style="width:100px;" src="{{ url("/backend/images/wellness_images") }}/{{ $wellnesscenter->featured_image }}" alt="{{ $wellnesscenter->featured_image }}"></td>
                                        <td class="main_page_title"><h4><strong>{{ $wellnesscenter->title }}</strong></h4></td>
                                        {{-- <td class="main_page_title">{{ strip_tags($wellnesscenter->description) }}</td> --}}
                                        <td class="main_page_title">{{ $wellnesscenter->status }}</td>
                                        <td>
                                            <ul class="actionList">
                                                <li><a href="{{ route('admin.dashboard.wellness.edit', $wellnesscenter->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                </li>
                                                @if($permissiondata->contains('wellness.delete') || $userdata->id == 1)
                                                <li>
                                                <form action="{{ route('admin.dashboard.wellness.delete', $wellnesscenter->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                                @endif
                                                @if($permissiondata->contains('wellness.show') || $userdata->id == 1)
                                                <li>
                                                    <a href="{{ route('admin.dashboard.wellness.view', $wellnesscenter->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </li>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">No content found.</td>
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