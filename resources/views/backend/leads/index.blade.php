@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Leads') 
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Leads
                            {{-- <span>
                                <a class="bgcolorOne" href="{{ route('admin.dashboard.subscriber.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 Add New</a>
                            </span> --}}

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
            @endphp
            @if($permissiondata->contains('leads.index') || $userdata->id==1)
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
                                        <th>Phone</th>
                                        <th>Subject / Enquiry</th>
                                        <th>Created</th>
                                        <th>Source</th>
                                        <th>Action</th>
                                        <th>Subscriber</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                    $i = 1; 
                                    $leads = App\Models\Contact::all();
                                    @endphp
                                    @foreach($leads as $lead)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="main_page_title">{{ $lead->name }}</td>
                                        <td class="main_page_title">{{ $lead->email }}</td>
                                        <td class="main_page_title">{{ $lead->phone }}</td>
                                        <td class="main_page_title">{{ $lead->subject }}</td>
                                        <td class="main_page_title">{{ $lead->created_at->format('d-m-Y') }}</td>
                                        <td class="main_page_title">{{ $lead->source }}</td>
                                        <td>
                                            @if($permissiondata->contains('leads.delete') || $userdata->id==1)
                                            <form action="{{ route('admin.dashboard.lead.delete', $lead->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="deleteFormBtn" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                            @endif
                                        </td>
                                        @php
                                            $user = App\Models\User::where("email","=",$lead->email)->first();
                                        @endphp
                                        <td>
                                            @if($user)
                                            @if($user->subscription == NULL)
                                            <a href="{{ route('admin.dashboard.subscriber.edit', $user->id) }}?page=leads">Add as subscriber</a>
                                            @else
                                            Subscribed
                                            @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            @else
            <div class="permission_restricted">You don't have permission to view this page.</div>
            @endif
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