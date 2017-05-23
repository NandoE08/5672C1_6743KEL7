<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Be Tour</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/login.css") }}" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <div class="search-box">
                <div class="caption">
                    <h3>Sign in | Be Tour</h3>
                    <p>Termurah Di indonesia</p>
                </div>
                {{ csrf_field() }}
                 {!! Form::open(['url'=>'login','class'=>'loginForm']) !!}
                    <div class="input-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <input type="submit" id="submit" class="form-control" value="Login">
                        <a href="{{ url ('/register') }}" class="form-control">Register</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
<!--         <div class="col-md-4">
            <div class="aro-pswd_info">
                <div id="pswd_info">
                    <h4>Password must be requirements</h4>
                    <ul>
                        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                        <li id="number" class="invalid">At least <strong>one number</strong></li>
                        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                        <li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</div>
<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/js/login.js") }}" type="text/javascript"></script>
</body>
</html>