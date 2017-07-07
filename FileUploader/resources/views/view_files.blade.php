<?php
 $path = storage_path();
 ?>
 <?php $user = Auth::user();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="L1JBMR3Ki2We40cq4cCTIKxsLsdLNjMdkh4rC9Yg">
    <title>File Uploader</title>
    <!-- Styles -->
    <link href="http://uploader.dev/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700i" rel="stylesheet">
    <link rel="stylesheet" href="../css/view.css">

  
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
        
<head>
  <title>View Uploaded Files</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Uploaded Files</h2>
    
  <h4><table class="table table-hover">
    <thead >
      <tr>
        <th>ID</th>
        <th>FILE NAME</th>
        <th>PROJECT NAME</th>
        <th>PROJECT LEAD NAME</th>
        <th>FILE DESCRIPTION</th>
        <th>SHARE TYPE</th>
        <th>DOWNLOAD FILE</th>
      </tr>
    </thead>
    <tbody>
      @foreach($request_data as $row)
          <tr> 
              <td>{{$row->id}}</td>
              <td>{{$row->file_name}}</td>
              <td>{{$row->project_name}}</td>
              <td>{{$row->project_lead_name}}</td>
              <td>{{$row->file_description}}</td>
              <td>{{$row->share_type}}</td>
              
              <td><a href="{{ url('/download/'.$row->stored_file_name) }}">Download</a></td>
          </tr>
      @endforeach 
    </tbody>
  </table></h4>
</div>
<br>
<div class="container">
<div class="col-sm-8">
  <form class="form-horizontal" action ='/home' method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <button type="submit" class="button" style="vertical-align:middle;border-radius: 100px"><span>Go Back</span></button>
</form>
</div>
</body>
