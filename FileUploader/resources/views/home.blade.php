<?php $user = Auth::user();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700i" rel="stylesheet">
<link rel="stylesheet" href="../css/home.css">


  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="L1JBMR3Ki2We40cq4cCTIKxsLsdLNjMdkh4rC9Yg">
    <title>File Uploader</title>
    <!-- Styles -->
    <link href="http://uploader.dev/css/app.css" rel="stylesheet">
</head>
<body style="background: -webkit-gradient(linear, left top, left bottom, from(#6DC1F2), to(#DFFCFD)) fixed;;font-family: 'Josefin Sans', sans-serif;" class="screen-left">

        
            <div class="container">
              <h3><b><div align="right"><?php if ($user)
                    {echo "Hello $user->name";} ?></b> &nbsp&nbsp&nbsp&nbsp
                                       
                                        <button href="http://uploader.dev/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="button">
                                           <b>Logout</b></h3>
                                        </button></div>

                                        <form id="logout-form" action="http://uploader.dev/logout" method="POST" style="display: none;">{{ csrf_field() }}
                                            <input type="hidden" name="_token" value="L1JBMR3Ki2We40cq4cCTIKxsLsdLNjMdkh4rC9Yg">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                                           
                </div>
            </div>

           
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<h1><center><b>Upload CSV Files to a MySQL Database</b></center></h1>

<br>
<div class="container">
<div class="col-sm-8">
<form class="form-horizontal" action ='/response' method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="fname"><h3>File Name: </h3></label>
    <input type="text" class="form-control" id="fname" name="fname" required>
  </div>
  <div class="form-group">
    <label for="pname"><h3>Project Name: </h3></label>
    <input type="text" class="form-control" id="pname" name ="pname" required>
  </div>
  <div class="form-group">
    <label for="plname"><h3>Project Lead Name: </h3></label>
    <input type="text" class="form-control" id="plname" name="plname" required>
  </div>
  <div class="form-group">
    <label for="fd"><h3>File Description: </h3></label>
    <textarea class="form-control" id="fd" name="fd" rows="5"  required></textarea>
  </div>

  <div class="form-group">
    <label for="sharetype"><h3>Share Type (Public/Private): </label><br><br>
    <input type="radio" name="sharetype" value="Public" checked>  Public<br>
    <input type="radio" name="sharetype" value="Private">  Private</h3>
  </div>


  <div class="form-group">
    <h3><label for="file" class="filelabel">Choose a file </label></h3>
    <h4><input type="file" id="file" name="file" class="inputfile" required size="100" >
  </div></h4>


<button type="submit" class="button">Upload</button>
</form> 
<form class="form-horizontal" action ='/view_files' method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <button type="submit" class="button">View Uploaded Files</button><br><br><br></form>
</form>
</div>
</div>
                
          


    <!-- Scripts -->
    <script src="http://uploader.dev/js/app.js"></script>
</body>
</html>
