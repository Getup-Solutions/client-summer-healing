@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Events')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Booked Events
                            <span>
                                <a class="bgcolorOne" href="{{ route('admin.export-events') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Export</a>
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

            @if($permissiondata->contains('events.bookedevents') || $userdata->id == 1)
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
                                        <th>Email</th>
                                        <th>Event</th>
                                        <th>Venue</th>
                                        <th>No. Tickets</th>
                                        {{-- <th>Attendees</th> --}}
                                        {{-- <th>Price</th> --}}
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @if(count($events) > 0)
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title"><strong>{{ $event->username }}</strong></td>
                                        <td class="main_page_title">{{ $event->useremail }}</td>
                                        <td class="main_page_title"><strong>{{ $event->title }}</strong></td>
                                        <td>{{ $event->venue }}</td>
                                        <td class="main_page_title"><strong>{{ $event->tickets }}</strong></td>
                                        {{-- <td class="main_page_title"><strong>{{ $event->attendees }}</strong></td> --}}
                                        {{-- <td class="main_page_title"><strong>{{ $event->price }}</strong></td> --}}
                                        <td class="main_page_title">@if($event->startdate != ""){{ date('d-m-Y', strtotime($event->startdate)) }}  - {{ $event->starttime }}@endif</td>
                                        <td class="main_page_title">@if($event->startdate != ""){{ date('d-m-Y', strtotime($event->enddate)) }} - {{ $event->endtime }}@endif</td>
                                        <td>
                                            {{ date('d-m-Y', strtotime($event->created_at))}}
                                        </td>
                                        <td>
                                            <ul class="actionList">
                                                <li><a href="{{ route('admin.dashboard.event.view', $event->id) }}"><i style="color: #5b59d3;" class="fa fa-eye" aria-hidden="true"></i></a></li>

                                                @if($permissiondata->contains('events.bookedevents.delete') || $userdata->id == 1)
                                                <li>
                                                    <form action="{{ route('admin.dashboard.bookedevent.destroy', $event->id) }}" method="post">
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