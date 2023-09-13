<div class="navbar-default sidebar" role="navigation">

    <span class="minimizeSidebar"><i class="fa fa-bars" aria-hidden="true"></i>

    </span>

    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

            @if(auth()->user()->type == 1 || auth()->user()->type == 3 || auth()->user()->is_trainer != 1)

            <li class="firstMenu">

                <a href="{{ route('admin.dashboard') }}" class="parentMenuItem"><i class="fa fa-dashboard fa-fw"></i> &nbsp;Dashboard</a>

            </li>



            <li class="parentMenuList">

                <a href="#" data-page="pages" class="parentMenuItem"><i class="fa fa-file-text fa-fw"></i> &nbsp;Pages<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level collapse">

                    <li>

                        <a href="{{ route('admin.dashboard.pages') }}">All Pages</a>

                    </li>

                    @if(auth()->check())

                        @if(auth()->user()->type == "superadmin")

                        <li>

                            <a href="{{ route('admin.dashboard.page.create') }}">Add New</a>

                        </li>

                        @endif

                    @endif

                </ul>

            </li>

            @endif



            <li class="parentMenuList">

                <a href="#" data-page="courses" class="parentMenuItem"><i class="fa fa-tasks fa-fw"></i> &nbsp;Classes<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ route('admin.dashboard.courses') }}">All Classes</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.courses.create') }}?coursetype=course">Add Class</a>

                        <a href="{{ route('admin.dashboard.courses.create') }}?coursetype=ondemand">Add Ondemand Class</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.admincoursecategories') }}">Category</a>

                    </li>

                </ul>

            </li>

    

            <li class="parentMenuList">

                <a href="#" data-page="trainings" class="parentMenuItem"><i class="fa fa-male fa-fw"></i> &nbsp;Trainings<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ route('admin.dashboard.trainings') }}">All Trainings</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.trainings.create') }}">Add Training</a>

                    </li>

                </ul>

            </li>



            <li class="parentMenuList">

                <a href="#" data-page="events" class="parentMenuItem">

                    <i class="fa fa-calendar-o fa-fw"></i> &nbsp;Events<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ route('admin.dashboard.events') }}">All Events</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.event.create') }}">Add Event</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.bookedevents') }}">Booked Events</a>

                    </li>

                </ul>

            </li>









            {{-- <li class="parentMenuList">

                <a href="#" data-page="trainings" class="parentMenuItem"><i class="fa fa-male fa-fw"></i> &nbsp;Schedules<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ route('admin.dashboard.schedule.index') }}">All Schedules</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.schedule.create') }}">Add Schedule</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.schedule.bookings') }}">All Bookings</a>

                    </li>

                </ul>

            </li> --}}





            <li class="ordermenu">

                <a href="#" data-page="schedule" class="parentMenuItem"><i class="fa fa-user-circle-o fa-fw"></i> &nbsp;Schedule<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level collapse">

                    <li>

                        <a href="{{ route('admin.dashboard.schedulez.scheduleindex') }}">&nbsp; New  Schedule</a>

                    </li>

                <li>

                    <a href="{{ route('admin.dashboard.schedule.allschedules') }}">&nbsp; Schedule list</a>

                </li>

                </ul>

            </li>





            <li class="ordermenu">

                <a href="{{ route('admin.dashboard.users') }}" class="parentMenuItem"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>&nbsp; Users</a>

            </li>



            @if(auth()->check())

            @if(auth()->user()->id == 1)

                <li class="parentMenuList">

                    <a href="#" data-page="admins" class="parentMenuItem"><i class="fa fa-user-circle-o fa-fw"></i> &nbsp;Admin & Roles<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        <li>

                            <a href="{{ route('admin.dashboard.admins') }}">Admin Users</a>

                        </li>

                        <li>

                            <a href="{{ route('admin.dashboard.admin.permissions') }}">Roles</a>

                        </li>

                    </ul>

                </li>

                @endif

            @endif



            @if(auth()->user()->type == 1 || auth()->user()->type == 3 || auth()->user()->is_trainer != 1)

            <li class="ordermenu">

                <a href="{{ route('admin.dashboard.orders') }}" class="parentMenuItem"><i class="fa fa-shopping-cart fa-fw"></i> &nbsp;Orders</a>

            </li>



            <li class="parentMenuList">

                <a href="#" data-page="Trainers" class="parentMenuItem"><i class="fa fa-users fa-fw"></i> &nbsp;Trainers<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ route('admin.dashboard.trainers') }}">All Trainers</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.trainer.create') }}">Add New</a>

                    </li>

                </ul>

            </li>



            <li class="parentMenuList">

                <a href="#" data-page="subscriptions" class="parentMenuItem"><i class="fa fa-ticket fa-fw"></i> &nbsp;Subscriptions<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ route('admin.dashboard.subscriptions') }}">Subscriptions</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.subscription.create') }}">Add New</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.dashboard.subscribers') }}">Subscribers</a>

                    </li>

                </ul>

            </li>

            

            <li class="parentMenuList">

                <a href="#" data-page="subscriptions" class="parentMenuItem"><i class="fa fa-book fa-fw"></i> &nbsp;Reports<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    {{-- <li>

                        <a href="{{ route('admin.dashboard.transactions') }}" >Transactions</a>

                    </li> --}}

                    <li>

                        <a href="{{ route('admin.dashboard.reports') }}"> Subscribers</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.orderReports') }}"> Order Reports</a>

                    </li>

                </ul>

            </li>

            

            <li class="ordermenu">

                <a href="{{ route('admin.dashboard.wellness.index') }}" class="parentMenuItem"><i class="fa fa-file-text fa-fw"></i> &nbsp;Wellness Center</a>

            </li>



            @endif

            



            <li class="leadsmenu">

                <a href="{{ route('admin.dashboard.userleads') }}" class="parentMenuItem"><i class="fa fa-list-alt fa-fw"></i> &nbsp;Leads</a>

            </li>

          



            @if(auth()->check())

                @if(auth()->user()->id == 1)            

                <li class="parentMenuList">

                    <a href="#" data-page="settings" class="parentMenuItem"><i class="fa fa-cog fa-fw"></i> Settings<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        <li>

                            <a href="{{ route('admin.dashboard.generalsettings.index', 1) }}">General Settings</a>

                        </li>

                        <!--<li>

                            <a href="{{ route('admin.dashboard.paymentsettings.index', 1) }}">Payment Settings</a>

                        </li>-->

                        <li>

                            <a href="{{ route('admin.dashboard.contactsettings.index', 1) }}">Contact Settings</a>

                        </li>

                        <li>

                            <a href="{{ url('/clear-cache') }}">Clear Cache</a>

                        </li>

                        @if(auth()->check())

                            @if(auth()->user()->type == 3)

                            <li>

                                <a href="{{ route('admin.dashboard.adminusersettings.index') }}">Admin users</a>

                            </li>

                            @endif

                        @endif

                    </ul>

                </li>

                @endif

            @endif



            

        </ul>

    </div>

</div>





















































