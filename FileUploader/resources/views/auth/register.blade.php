<head><title>File Uploader</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700i" rel="stylesheet">
<link rel="stylesheet" href="../css/register.css">

</head>
<body style="background:linear-gradient(#6DC1F2, #DFFCFD);font-family: 'Josefin Sans', sans-serif; " class="screen-center">


<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<h1><center><b>REGISTER</b></center></h1>

<form class="form-horizontal" action ='#' method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label"><h3>Name</h3></label>
                            <div>
                                <input id="name" style="font-size:20px" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label"><h3>E-Mail Address</h3></label>

                            <div>
                                <input id="email" style="font-size:20px" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label"><h3>Password</h3></label>

                            <div>
                                <input id="password" style="font-size:20px" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label"><h3>Confirm Password</h3></label>

                            <div>
                                <input id="password-confirm" style="font-size:20px" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
  
  <center><button type="submit" class="button" style="vertical-align:middle;border-radius: 100px">Register</button></center></form></div></div></body>