<div class="navbar-header">
    <a class="navbar-brand" href="{{url('/admin/dashboard')}}"><img src="{{url('/')}}/backend/images/general_settings/1679276810.png" alt="Summer Healing Yoga"></a>
</div>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

<ul class="nav navbar-nav navbar-left navbar-top-links">
    <li><a href="{{ url("/") }}" target="_blank"><i class="fa fa-home fa-fw"></i>  View website</a></li>
</ul>

<ul class="nav navbar-right navbar-top-links">
    
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> 
            @if(auth()->check()) {{ auth()->user()->name }} @endif <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-user">
            {{-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li> --}}
            @if(!auth()->user())
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> {{ __('Login') }}</a></li>
            <li class="divider"></li>
            @else
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endif
        </ul>
    </li>
</ul>
<!-- /.navbar-top-links -->