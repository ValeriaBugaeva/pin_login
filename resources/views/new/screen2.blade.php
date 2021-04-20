<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    {{-- <link rel="stylesheet" type="text/css" href="../flag-icon-css-master/css/flag-icon.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset("flag-icon-css-master/css/flag-icon.min.css") }}">

    {{-- <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset("fontawesome/css/all.min.css") }}">

    <title> Screen 2 </title>
  </head>
  <body style="background-color: #283046; font-family: sans-serif;">

    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="#" style="color: white;"><span class="flag-icon flag-icon-us"></span>&nbsp;English</a>
      </li>
    </ul>
    
    <div class="container" style="text-align: center;">

      <p style="color: white; font-size: 2em;"><strong> Confirmation </strong></p>

     <div class="card" style="width: 50%; height: 20rem; margin-left: auto; margin-right: auto; padding: 5px;">
       
     </div>

     <div class="container card" style="height: 10rem; margin-left: auto; margin-right: auto; margin-top: 2rem; padding: 20px; text-align: left;">
      <div class="row">
        <div class="col">
          <p style="font-weight: bold;"> Arrival Date: </p>
        </div>
        <div class="col" style="text-align: right;">
          <p> {{ $request->arrival_date }} </p>
        </div>
      </div>
      
       <hr>

      <div class="row">
        <div class="col">
          <p style="font-weight: bold;"> Arrival Time: </p>
        </div>
        <div class="col" style="text-align: right;">
          <p> {{ $request->arrival_time }} </p>
        </div>
      </div>

     </div>

     <div style="margin-left: auto; margin-right: auto; margin-top: 2rem;">

      <a href="/screen1"> <button type="button" class="btn btn-light" style="width: 7.5rem; color: grey;"> <strong> Back </strong> </button> </a>
      
      

      <a href="/screen3"> <button type="button" class="btn btn-primary" style="width: 7.5rem; color: white; background-color: #7f56ac; border-color: #7f56ac;"> <strong> Confirm </strong> </button> </a>
      
       
     </div>

    	


    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>