<html><head><title>File Uploader</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700i" rel="stylesheet">
<link rel="stylesheet" href="../css/login.css">

</head>
<body style="background:linear-gradient(#6DC1F2, #DFFCFD);font-family: 'Josefin Sans', sans-serif; " class="screen-center">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<h1><center><b>LOGIN</b></center></h1>
<br>

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('login') }}">
    {{ csrf_field() }}
  
  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label"><h3>E-Mail Address</h3></label>

                            <div>
                                <input id="email" style="font-size:20px" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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

  
  <center><button type="submit" class="button" style="vertical-align:middle;border-radius: 100px">Login</button></center></form></div></body></html>