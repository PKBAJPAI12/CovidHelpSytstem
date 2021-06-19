<?php

 
    include '_dbconnect1.php';
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cov.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>CovidCare</title>
  </head>

  <body>
<?php
include '_header1.php';
?>

<div class="d-flex justify-content-center mx-3 my-5">
<div class="left">
<img src="covid-5064387_640.jpg" alt="" srcset="">
</div>
<div class="right">

<h1>Let's Stay Home & Fight Against Covid-19</h1>

</div>
</div>
<hr>



<div class="d-flex justify-content-center my-5">
<div class="col-md-3">
<div class="card border border-dark" id="card1">
  <div class="card-body">
    <h5 class="card-title text-center">Active</h5>
    <h5 class="card-title text-center">798656</h5>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card border border-dark" id="card2">
  <div class="card-body">
    <h5 class="card-title text-center ">Discharged</h5>
    <h5 class="card-title text-center">28580647</h5>
  </div>
  </div>
  </div>

  <div class="col-md-3">
  <div class="card border border-dark" id="card3">
  <div class="card-body">
    <h5 class="card-title text-center">Death</h5>
    <h5 class="card-title text-center">383490</h5>
  </div>
</div>
</div>

</div>

<hr>

<div class="d-flex justify-content-center mx-3 my-5">
<div id="left" class="leftm">
<img src="vaccine-5454099_640.jpg" alt="" srcset="">
</div>
<div class="rightm">
<a href="covidvaccine.php"><button type="button" id="btn" class="btn btn-success center">Covid-19 Vaccine Registeration</button></a>


</div>
</div>

<hr>

<div class="trackerstates mx-3 my-5">
    
<h3 id=headthree>Covid-19 Cases of States Wise</h3>
<table class="table border border-dark my-4">
    <thead>
        <tr>
            <th class="table-secondary" scope="col">S.No</th>
            <th  class="table-info" scope="col">Name of State</th>
            <th class="table-secondary" scope="col">Active Cases</th>
            <th  class="table-info" scope="col">Discharged Cases</th>
            <th class="table-secondary" scope="col">Death</th>
        </tr>
    </thead>
    <tbody>
    <?php 
$sql="SELECT * FROM `covidstats____sheet2__3_`";
$result=mysqli_query($conn,$sql); 
while($row = mysqli_fetch_assoc($result)){
echo "<tr>        
            <td>" .$row['COL 1']. "</td>
            <td class='table-primary'>" .$row['COL 2']. "</td>
            <td class='table-warning'>" .$row['COL 3']. "</td>
            <td class='table-success'>" .$row['COL 4']. "</td>
            <td class='table-danger'>" .$row['COL 5']. "</td>
        </tr>";

}
        ?>          
    </tbody>
</table>


    </div>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
 crossorigin="anonymous"></script>

 
  </body>
</html>