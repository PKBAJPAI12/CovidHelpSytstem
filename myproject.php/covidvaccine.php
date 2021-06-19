<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cov.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>CovidCare</title>
  </head>

  <body>
<?php
include '_header1.php';
?>

<div class="d-flex justify-content-center vaccinecenter">
<img src="vaccination-center-5921544_1920.jpg" alt="" srcset="">
</div>
<hr>



<div class="d-flex justify-content-center my-5">
  <div class="col-md-9">
  <div class="card border border-dark" id="card5">
    <div class="card-body">
      <h2 class="card-title text-center">Total Vaccination</h2>
      <h3 class="card-title text-center">2689,60,399</h3>
    </div>
  </div>
  </div>
  
  </div>
  
</div>
<hr>



<div class="vaccine my-5">

<form action="vaccinehandle.php" method="post">
<h3 id="headthree">Register for Covid Vaccination</h3>
  <div class="form-row my-4">
  <div class="col">
      <input type="text" name="fname" id="fname" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name">
    </div>

  </div>


  <div class="form-row my-4">
    <div class="form-group col-md-6">
      <input type="number" class="form-control mobile-input" name="mobileno" id="mobileno" placeholder="Enter 10 Digit Mobile Number">
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" name="age"  id="age" placeholder="Enter Age">
  </div>
  </div>

  
  <div class="form-row my-4">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="state" id="state" placeholder="State">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="city"  id="city" placeholder="City">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" name="pin" id="pin" placeholder="Pin Code">
    </div>
  </div>

  <div class="form-row my-4">
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Confirm</label>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>

<div class="footer">
<div class="footeri d-flex">

<div class="first">
<img src="COVID-Icon.png" alt="" srcset="">
</div>

<div class="second">
<div class="sfirst">
<h1>CovidCare</h1>
<p>Stay Home & Safe</p>
</div>
</div>

<div class="third">
<div class="social">
<img src="iconfinder_5296499_fb_facebook_facebook logo_icon.svg" alt="" srcset="">
<img src="iconfinder_834708_twitter_icon.svg" alt="" srcset="">
<img src="iconfinder_107178_circle_linkedin_icon.svg" alt="" srcset="">
<img src="iconfinder_6636566_instagram_social media_social network_icon.svg" alt="" srcset="">
</div>
</div>
</div>
<div class="copyright">
    <p><b>CovidHelp System</b> is Developed by Prateek Bajpai @ 2021</p>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>




