@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Events')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Events
                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.event.create') }}">
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

            @if($permissiondata->contains('events.index') || $userdata->id == 1)
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
                                        <th>Image</th>
                                        <th>Venue</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Price</th>
                                        <th>Created</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @if(count($events) > 0)
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $event->title }}</strong></td>
                                        <td class="main_page_title"><img style="width:100px;" src="{{ asset("/backend/images/events_images") }}/{{ $event->image }}" alt="{{ $event->image }}"></td>
                                        <td>{{ $event->venue }}</td>
                                        <td class="main_page_title">{{ $event->startdate }} - {{ $event->starttime }}</td>
                                        <td class="main_page_title">{{ $event->enddate }} - {{ $event->endtime }}</td>
                                        <td class="main_page_title">{{ $event->price == 0 ? "Free" : "$".$event->price }}</td>
                                        <td class="main_page_title">{{ $event->type }}</td>
                                        <td class="main_page_title">
                                            {{ $event->status }}<br/>
                                            <span>
                                                @if($event->usertype === "user" && $event->status == "Draft")
                                                <form action="{{ route('admin.eventapprove', $event->id) }}" method="POST" id="approvalForm">
                                                    @csrf
                                                    @method('PUT')
                                                    <Button type="submit" onclick="return confirm('{{ __('Are you sure you want to confirm?') }}')">Approve</Button>
                                                </form>
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <ul class="actionList">
                                                <li><a href="{{ route('admin.dashboard.events.edit', $event->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                                                @if($permissiondata->contains('events.delete') || $userdata->id == 1)
                                                <li>
                                                    <form action="{{ route('admin.dashboard.event.destroy', $event->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                
                                                </li>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td rowspan="10" colspan="10" style="text-align: center">No events found</td>
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