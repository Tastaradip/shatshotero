<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>Shat Shotero</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    
    @include('auth.common.includes.styles')
    @yield('page-css')

</head>

<body>
    <div class="accountbg"></div>

    <!-- Begin page -->
    <div class="home-btn d-none d-sm-block">
        <a href="{{route('web.index')}}" class="text-white"><i class="mdi mdi-home h1"></i></a>
    </div>
	<!-- Begin page -->
    <div id="wrapper-page">

    	<!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="container">

        @yield('content-own')
        			
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== --> 	
    </div>
    <!-- END wrapper -->

    @include('auth.common.includes.scripts')
    @yield('page-js')

</body>

</html>