@extends('layouts.admin.adminLayout')
@section('title', 'Admin | On Demand Courses')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">On Demand Courses
                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.ondemand.create') }}">
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
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Trainers</th>
                                        <th>Subscription</th>
                                        <th>Price</th>
                                        <th>Level</th>
                                        <th>Scheduled On</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @if(count($adminondemands) > 0)
                                    @foreach($adminondemands as $adminondemand)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $adminondemand->title }}</strong></td>
                                        <td class="main_page_title"><img style="width:100px;" src="{{ url("/backend/images/courses_images") }}/{{ $adminondemand->featured_image }}" alt="{{ $adminondemand->featured_image }}"></td>
                                        <td class="main_page_title">
                                            @php $ondemand_cats = $adminondemand->adminondemandcats; 
                                            // @dd($ondemand_cats[0]['title'])
                                            
                                            @endphp
                                            {{$ondemand_cats[0]['title']}}
                                        </td>
                                        <td>
                                            @php 
                                                $admin_trainers = $adminondemand->adminondemandtrainers;
                                            @endphp
                                            @foreach($admin_trainers as $trainer)
                                                {{$trainer->trainer_name}}@if(!$loop->last),@endif
                                            @endforeach
                                        </td>
                                        <td class="main_page_title">
                                            @php $admin_subscrip = $adminondemand->adminsubscriptions; @endphp
                                            {{ $admin_subscrip[0]->title }}
                                        </td>
                                        <td>{{ $adminondemand->price }}</td>
                                        <td class="main_page_title">{{ $adminondemand->level }}</td>
                                        <td class="main_page_title">{{ $adminondemand->scheduledate }} {{ $adminondemand->scheduletime }}</td>
                                        <td class="main_page_title">{{ $adminondemand->status }}</td>
                                        <td>
                                            <ul class="actionList">
                                                {{-- <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li> --}}
                                                <li><a href="{{ route('admin.dashboard.ondemand.edit', $adminondemand->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                                                <li>

                                                    <form action="{{ route('admin.dashboard.ondemand.destroy', $adminondemand->id) }}" method="post">
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
                                            <td rowspan="10" colspan="10" style="text-align: center">No courses found</td>
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