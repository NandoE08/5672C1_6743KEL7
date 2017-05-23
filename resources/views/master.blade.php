<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Be Tour | Termurah di Indonesia</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
<link rel="stylesheet" href="{{ asset("assets/stylesheets/chat2.css") }}" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/style.css">

</head>

<body id="home">


<!-- top
   <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
  top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="collapse navbar-collapse navbar-left">
      <ul class="navbar-brand">
        <a class="navbar-brand" href="{{ url ('/')}}">Be Tour</a>
      </ul>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">        
        <li><a href="{{ url ('/')}}">Home </a></li>
        <li><a href="{{ url ('/wisata')}}">Wisata</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu dropdown-user">
         @if (Auth::guest())
        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
        <li class="divider"></li>
        <li><a href="{{ url ('login') }}"><i class="fa fa-sign-out fa-fw"></i> Login</a>
        </li>
        @else
        <li><a href="#"><i class="fa fa-user fa-fw"></i>{{ Auth::user()->email }}</a>
        </li>
        <li class="divider"></li>
        <li><a href="{{ url ('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
        @endif
        </ul>
        </li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->
    
@yield('section')
<div class="feedback left">
      <div class="tooltips">
          <div class="btn-group dropup">
            <button type="button" class="btn btn-primary dropdown-toggle btn-circle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-comment fa-2x" title="Report Bug"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-form">
              <li>
                <div class="report">
                  {{ csrf_field() }}
                    {!! Form::open(['url'=>'/saran','class'=>'form-horizontal']) !!}
                    <br>
                    <div class="col-sm-12">
                    {!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>'Your Name']) !!}
                    <br>
                      {!! Form::textarea('saran',null,['class'=>'form-control','id'=>'saran','placeholder'=>'Please tell us what bug or issue you found, provide as much detail as possible.']) !!}
                     </div>
                     <div class="col-sm-12 clearfix"><br>
                      <button class="btn btn-primary btn-block">Send</button>
                     </div>
                 {!! Form::close() !!}
                </div>
                <div class="loading text-center hideme">
                  <h2>Please wait...</h2>
                  <h2><i class="fa fa-refresh fa-spin"></i></h2>
                </div>
                @if (Auth::guest())
                 <div class="failed text-center hideme"><br>
                  <h3>Oh no!</h3>
                  <p>It looks like your submission was not sent.<br><br><a href="#">Try contacting us by the old method.</a></p>
                  <div class="col-sm-12 clearfix">
                      <button class="btn btn-danger btn-block do-close">Close</button>
                   </div>
                </div>
                @elseif(Auth::user()->level=='member')
                <div class="failed text-center hideme"><br>
                  <h3>Thank you!</h3>
                  <p>Your submission has been received<br><br><a href="#"></a></p>
                  <div class="col-sm-12 clearfix">
                      <button class="btn btn-success btn-block do-close">Close</button>
                   </div>
                </div>
                @else(Auth::user()->level=='admin')
                <div class="failed text-center hideme"><br>
                  <h3>Sorry..</h3>
                  <p>It looks like your submission was not sent.<br><br><a href="#">Youre Admin, Let User Comented for You.</a></p>
                  <div class="col-sm-12 clearfix">
                      <button class="btn btn-danger btn-block do-close">Close</button>
                   </div>
                </div>
                @endif
              </li>
            </ul>
          </div>
      </div>
    </div>
                                                <!-- this Copyright @nandoe08 -->
<div class="text-center copyright">Created by <a href="https://plus.google.com/112847567773368707611">@Nandoe08</a>
</div>
<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>

<!-- <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
</div> -->

<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
<script src="{{ asset("assets/js/chat.js") }}" type="text/javascript"></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</body>
</html>