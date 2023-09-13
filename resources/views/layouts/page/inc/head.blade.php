@php
$favicon = DB::table('admingeneralsettings')->pluck('favicon');
@endphp
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="msapplication-TileColor" content="#000" />
<meta name="theme-color" content="#000" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>@yield('title', 'title')</title>
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Frontend/assets/images/apple-touch-icon.png')}}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('backend/images/general_settings')}}/{{ $favicon[0] }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Frontend/assets/images/favicon-16x16.png')}}" />
<link rel="mask-icon" href="{{ asset('Frontend/assets/images/safari-pinned-tab.svg')}}" color="#5bbad5" />
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&amp;family=Proza+Libre:wght@400;500&amp;display=swap" rel="stylesheet">
<link href="{{ asset('Frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{ asset('Frontend/assets/theme.min.css')}}" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
<link href="{{ asset('Frontend/page-styles.css')}}" rel="stylesheet"/>
<link href="{{ asset('Frontend/user-styles.css')}}" rel="stylesheet"/>