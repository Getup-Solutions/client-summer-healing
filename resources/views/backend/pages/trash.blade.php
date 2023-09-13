@extends('layouts.admin.adminLayout')
@section('title', 'Admin | Page Trash')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        
                        <h1 class="page-header">Trash Archive 
                            <span>
                                <a class="bgcolorTwo" href="{{ route('admin.dashboard.pages') }}">
                                    <i class="fa file-text" aria-hidden="true"></i>
                                    All pages</a>
                                <form style="display:inline-block;vertical-align:middle;" action="{{ route('admin.dashboard.pages.restoreAll') }}" method="POST">
                                    @csrf
                                    <button class="bgcolorOne" type="submit">Restore All</button>
                                </form>
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
                    @include('sweetalert::alert')
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Trashed Pages
                            </div>
                            <div class="panel-body">
                                @if(count($adminpages) > 0)
                                @foreach($adminpages as $adminpage)
                                    <div class="alert alert-warning restoreWarning">
                                        {{ $adminpage->title }}  <br/>   
                                            <form class="restoreOnebyOne" style="display:inline-block;vertical-align:middle;" action="{{ route('admin.dashboard.pages.restore', $adminpage->id) }}" method="POST">
                                                @csrf
                                                <button class="bgcolorOne" type="submit">Restore</button>
                                            </form>&nbsp;&nbsp;| 
                                            <form class="forceDeleteForm" action="{{ route('admin.dashboard.pages.forceDelete', $adminpage->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="alert-link" id="forceDeleteFormBtn">
                                                    Delete permanently
                                                </button>
                                            </form>
                                    </div>
                                @endforeach
                                @else
                                    <div class="alert alert-success" style="text-align: center">
                                        No pages found.
                                    </div>
                                @endif
                            </div>
                        </div>
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