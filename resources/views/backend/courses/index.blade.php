@extends('layouts.admin.adminLayout')

@section('title', 'Admin | Courses')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div id="page-wrapper">

    <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                    <div class="row">

                        

                        <h1 class="page-header">Classes

                            {{-- <span>

                                <a class="bgcolorOne" href="{{ route('admin.dashboard.courses.create') }}">

                                <i class="fa fa-plus" aria-hidden="true"></i>

                                 Add New</a>

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



            @if($permissiondata->contains('courses.index') || $userdata->id == 1)

            <div class="row">

                <div class="col-lg-12 col-md-12">

                    @if ($message = Session::get('success'))

                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>

                    @endif
                    
                    
                    
                    <div class="row filterOptions">
                        <div class="col-lg-12 col-md-12">
                          <form method="get" action="/admin/courses/all">
                                <div class="input-group">
                                    <select class="form-select-filter" name="date_filter">
                                        <option value="">All</option>
                                        <option value="today" {{ $dateFilter == 'today' ? 'selected' : '' }}>Today</option>
                                        <option value="yesterday" {{ $dateFilter == 'yesterday' ? 'selected' : '' }}>Yesterday</option>
                                        <option value="this_week" {{ $dateFilter == 'this_week' ? 'selected' : '' }}>This Week</option>
                                        <option value="last_week" {{ $dateFilter == 'last_week' ? 'selected' : '' }}>Last Week</option>
                                        <option value="this_month" {{ $dateFilter == 'this_month' ? 'selected' : '' }}>This Month</option>
                                        <option value="last_month" {{ $dateFilter == 'last_month' ? 'selected' : '' }}>Last Month</option>
                                        <!--<option value="last3_month" {{ $dateFilter == 'last3_month' ? 'selected' : '' }}>Last 2 Month</option>-->
                                        <option value="this_year" {{ $dateFilter == 'this_year' ? 'selected' : '' }}>This Year</option>
                                        <option value="last_year" {{ $dateFilter == 'last_year' ? 'selected' : '' }}>Last Year</option>
                                        </select>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="panel-body">

                        <div class="table-responsive">

                            <button id="dltall" style="display:none;margin-bottom: 10px" class="btn btn-danger delete_all" data-url="{{ route('admin.dashboard.course.deleteAll') }}">Delete All Selected</button>

                            <table class="table table-striped table-bordered table-hover" id="dataTables2">

                                <thead>

                                    <tr>

                                        <th width="50px"><input type="checkbox" id="master"></th>

                                        <th>#</th>

                                        <th>Title</th>

                                        <th>Featured Image</th>

                                        {{-- <th>Course Category</th> --}}

                                        <th>Trainers</th>

                                        <th>Subscription</th>

                                        <th>Price</th>

                                        <th>Course</th>

                                        <th>Level</th>

                                        <th>Status</th>
                                        
                                        <!--<th>Created</th>-->

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @php $i = 1 @endphp

                                    @if(count($admincourses) > 0)

                                    @foreach($admincourses as $admincourse)

                                    <tr>

                                        <td><input type="checkbox" class="sub_chk" data-id="{{$admincourse->id}}"></td>

                                        <td>{{ $i++ }}</td>

                                        <td class="main_page_title"><strong>{{ $admincourse->title }}</strong></td>

                                        <td class="main_page_title"><img style="width:100px;" src="{{ asset("/backend/images/courses_images") }}/{{ $admincourse->featured_image }}" alt="{{ $admincourse->featured_image }}"></td>

                                        {{-- <td class="main_page_title">

                                            @php $course_cats = $admincourse->admincoursecats; @endphp

                                            {{ $course_cats[0]->title }}

                                        </td> --}}

                                        <td>

                                            @php 

                                                $admin_trainers = $admincourse->admincoursetrainers;

                                            @endphp

                                            @foreach($admin_trainers as $trainer)

                                                {{$trainer->trainer_name}}@if(!$loop->last),@endif

                                            @endforeach

                                        </td>

                                        <td class="main_page_title">

                                            @php $admin_subscrip = $admincourse->adminsubscriptions; 

                                                //dd($admin_subscrip[0]->title);

                                            @endphp

                                            {{ $admin_subscrip[0]->title }}

                                        </td>

                                        <td>{{ $admincourse->price }}</td>

                                        <td>

                                            @if($admincourse->coursetype=="ondemand") <span class="coursecolor2">On Demand</span> @endif

                                            @if($admincourse->coursetype=="course") <span class="coursecolor1">Class</span> @endif

                                        </td>

                                        <td class="main_page_title">{{ $admincourse->level }}</td><td class="main_page_title">{{ $admincourse->status }}</td>
                                        <!--<td class="main_page_title">{{ $admincourse->created_at }}</td>-->

                                        <td>

                                            <ul class="actionList">

                                                {{-- <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li> --}}

                                                @if($admincourse->coursetype == "course")

                                                <li><a href="{{ route('admin.dashboard.course.edit', $admincourse->id) }}?coursetype=course"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>

                                                @endif

                                                @if($admincourse->coursetype == "ondemand")

                                                <li><a href="{{ route('admin.dashboard.course.edit', $admincourse->id) }}?coursetype=ondemand"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>

                                                @endif

                                                <li>

                                                    @if($permissiondata->contains('courses.delete') || $userdata->id == 1)

                                                    <form action="{{ route('admin.dashboard.course.destroy', $admincourse->id) }}" method="post">

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


//multiple delete function



$(document).ready(function () {

$("#master").val("");



$('#master').on('click', function(e) {

  

    if($(this).is(':checked',true)) {

        $("#dltall").css("display","block");

        $(".sub_chk").prop('checked', true);  

        

    } else {  

        

        $("#dltall").css("display","none");

        $(".sub_chk").prop('checked',false);  

    }  



});





$('.delete_all').on('click', function(e) {

    var allVals = [];  

    $(".sub_chk:checked").each(function() {  

        allVals.push($(this).attr('data-id'));

    });  



    if(allVals.length <=0){  

        alert("Please select row.");  

    }  else {  



        var check = confirm("Are you sure you want to delete this row?");  

        if(check == true){  

            var join_selected_values = allVals.join(","); 

            $.ajax({

                url: $(this).data('url'),

                type: 'DELETE',

                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                data: 'ids='+join_selected_values,

                success: function (data) {

                    if (data['success']) {

                        $(".sub_chk:checked").each(function() {  

                            $(this).parents("tr").remove(); 

                        });

                        $("#master").val("");

                        //alert(data['success']);

                        location.reload();



                    } else if (data['error']) {

                        alert(data['error']);

                    } else {

                        alert('Whoops Something went wrong!!');

                    }

                },



                error: function (data) {

                    alert(data.responseText);

                }

            });



          $.each(allVals, function( index, value ) {

              $('table tr').filter("[data-row-id='" + value + "']").remove();

          });

        }  

    }  

});











//DATA TABLES

$('#dataTables2').DataTable({

    responsive: true

});


var table = $('#dataTables2').DataTable();

  // Event listener to the two range filtering inputs to redraw on input
  $('#mois, #annee').keyup(function() {
    table.draw();
  });
  
  $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var month = parseInt( $('#mois').val(), 0 );
        var year = parseInt( $('#annee').val(), 0 );
        var date = data[1].split('-');
        console.log(year)
        if ( ( isNaN( year ) && isNaN( month ) ) ||
             ( isNaN( month ) && year == date[0] ) ||
             ( date[1] == month && isNaN( year ) ) ||
             ( date[1] == month && year == date[0] ) 
            )
        {
            return true;
        }
        return false;
    }
);







});

</script>



@endsection