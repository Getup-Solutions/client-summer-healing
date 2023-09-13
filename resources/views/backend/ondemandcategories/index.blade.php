@extends('layouts.admin.adminLayout')
@section('title', 'Admin | On Demand Categories')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Course Categories                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.adminondemandcategories.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add New</a>
                            </span>
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
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @if(count($adminondemandcats) > 0)
                                    @foreach($adminondemandcats as $adminondemandcat)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $adminondemandcat->title }}</strong></td>
                                        <td>
                                            <ul class="actionList">
                                                {{-- <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li> --}}
                                                <li><a href="{{ route('admin.dashboard.adminondemandcategories.edit', $adminondemandcat->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                                                <li>

                                                    <form action="{{ route('admin.dashboard.adminondemandcategories.destroy', $adminondemandcat->id) }}" method="post">
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
                                            <td rowspan="10" colspan="10" style="text-align: center">No categories found</td>
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