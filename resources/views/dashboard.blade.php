<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Be Tour</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="info.css">
 <!--    <link rel="stylesheet" type="text/css" href="JQuery.js">
    <link rel="stylesheet" type="text/css" href="toastr.min.js">
    <script src="JQuery.js"></script>
    <script src="toastr.min.js"></script> -->

    <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body>      
 <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url ('/admin') }}">Admin | Be Tour</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
                <!-- @if (Auth::guest())
                <li><a href="{{ url('login') }}">Login</a></li>
                <li><a href="{{ url('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->email }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('logout') }}">Logout</a></li>
                    </ul>
                </li>
                @endif -->
                <!-- /.dropdown -->
                @if (Auth::guest())
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="{{ url ('login') }}"><i class="fa fa-sign-out fa-fw"></i> Login</a>
                        </li>
                        @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{ Auth::user()->email }}
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                            @endif
                        </ul>
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li> -->

                        <!-- /input-group -->
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/') }}"><i class="fa fa-dashboard fa-fw"></i> Welcome Be Tour</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-globe fa-fw"></i> Wisata<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/wisata') }}"><i class="fa fa-map-marker fa-fw"></i> Paket Wisata</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-home fa-fw"></i> Penginapan<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{ url ('admin/jenis_penginapan') }}">Tipe Penginapan</a>
                                        </li>
                                        <li>
                                            <a href="{{ url ('admin/penginapan') }}">Penginapan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url ('admin/transportasi') }}"><i class="fa fa-plane fa-fw"></i> Transportasi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li {{ (Request::is('*pesanan') ? 'class="active"' : '') }}>
                            <a href="{{ url('admin/pesanan') }}"><i class="fa fa-shopping-cart fa-fw"></i> Pesanan</a>
                        </li>

                        <li {{ (Request::is('*pengguna') ? 'class="active"' : '') }}>
                            <a href="{{ url('admin/pengguna') }}"><i class="fa fa-users fa-fw"></i> Pengguna</a>
                        </li>

                        <li {{ (Request::is('*pengguna') ? 'class="active"' : '') }}>
                            <a href="#"><i class="fa fa-group fa-fw"></i> User Sistem<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/admins') }}"><i class="fa fa-user fa-fw"></i> admin</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/member') }}"><i class="fa fa-users fa-fw"></i> Member</a>
                                </li>
                            </ul>
                        </li>

                        <li {{ (Request::is('*saran') ? 'class="active"' : '') }}>
                            <a href="{{ url('admin/saran') }}"><i class="fa fa-envelope-o fa-fw"></i> Kritik & Saran</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			<div class="row">
                <div class="col-lg-12">
                   
                </div>
            </div>
            <div class="row">  
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
<!--     <script>
  @if(Session::has('notification'))
  alert("{{ Session::get('notification.alert-type') }}");
    var type = "{{ Session::get('notification.alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('notification.message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('notification.message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('notification.message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('notification.message') }}");
            break;
    }
  @endif
</script> -->
    <!-- <script>
    $(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script> -->
    <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- <script src="JQuery.js"></script>
    <script src="toastr.min.js"></script> -->
</body>
</html>