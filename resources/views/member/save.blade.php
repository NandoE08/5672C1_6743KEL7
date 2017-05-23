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
    <!-- Website CSS style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/login.css") }}" />
</head>
<body>
    <div class="container">
        <div class="col-md-12 col-md-12">
            <div class="aro-pswd_info">
                <div id="pswd_info">
                    <h4>Password Recomended</h4>
                    <ul>
                        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                        <li id="number" class="invalid">At least <strong>one number</strong></li>
                        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row main">
            <div class="main-login main-center">
                <h5 align="center">Sign up | Be Tour</h5>
                {{ csrf_field() }}
                {!! Form::open(['url'=>'/register','class'=>'form-horizontal']) !!}

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            {!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Enter your Name"]) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Live in</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            {!! Form::text('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Enter your Place"]) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            {!! Form::email('email',null,['class'=>'form-control','id'=>'email','placeholder'=>"Enter your Email"]) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>"Enter your Password"]) !!}
                        </div>
                    </div>
                </div>

                    <!-- <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>"Enter your Password"]) !!}
                            </div>
                        </div>
                    </div> -->

                    <div class="form-group ">
                     <button id="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                 </div>
                 {!! Form::close() !!}
             </div>
         </div>
     </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js"></script>
     <script src="{{ asset("assets/js/login.js") }}" type="text/javascript"></script>
 </body>
 </html>