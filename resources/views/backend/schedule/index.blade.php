@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Schedule')
   
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Schedules
                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.schedule.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add New</a>
                            </span>
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

            {{-- @if($schedules->contains('trainings.index') || $userdata->id == 1) --}}
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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price ($)</th>
                                        <th>Scheduled Date</th>
                                        <th>Total (Hrs)</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @if($schedules)
                                    @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $schedule->title }}</strong>
                                        </td>
                                        <td class="main_page_title">
                                            <img class="training_biopic" src="{{ asset("/backend/images/schedules_images") }}/{{ $schedule->featured_image }}" alt="{{ $schedule->featured_image }}">
                                        </td>
                                        <td>{{ $schedule->price == 0 ? "Free" : $schedule->price }}</td>

                                        <td>{{ $schedule->scheduledate }} - {{ $schedule->scheduletime }}</td>
                                        <td>{{ $schedule->scheduledminutes }}</td>

                                        <td class="main_page_title">{{ $schedule->status }}</td>
                                        <td>
                                            <ul class="actionList">
                                                {{-- <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li> --}}
                                                <li><a href="{{ route('admin.dashboard.schedule.edit', $schedule->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                                                
                                                <li>
                                                    @php          
                                                        $userdata = App\Models\User::find(auth()->user()->id);
                                                        $permissiondata = $userdata->permissions()->pluck('name');
                                                        //dd($permissiondata);
                                                    @endphp

                                                    @if($permissiondata->contains('trainings.delete') || $userdata->id == 1)
                                                    <form action="{{ route('admin.dashboard.schedule.destroy', $schedule->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                    @endif
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td rowspan="10" colspan="10" style="text-align: center">No schedules found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>

                  
                </div>
             
            </div>
            {{-- @else
            <div class="permission_restricted">You don't have permission to view this page.</div>
            @endif --}}
     
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