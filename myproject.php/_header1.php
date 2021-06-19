<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="cov.php">CovidCare</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="cov.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="covhost.php">Covid Facilities</a>
    </li>';

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<li class="nav-item active">
      <a class="nav-link" data-toggle="modal" data-target="#addcovidModal" href="#">Add Covid Care Center</a>
    </li>';
  }
else{
  echo '<li class="nav-item active">
  <a class="nav-link" data-toggle="modal" data-target="#loginModal" href="#">Add Covid Care Center</a>
</li>';
}

 echo '<li class="nav-item active">
 <a class="nav-link" href="nearcovidcenter.php">Covid Center Near Your Home</a>
</li>
 </ul>
  <div class="row mx-2">';

  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
      <input class="form-control mr-sm-2" name="search" type="search" actiion="search.php" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
        <a href="_logout.php" class="btn btn-outline-success ml-2">Logout</a>
        </form>';
  }
else{
  echo '
  <button class="btn btn-outline-success mx-2 my-2" data-toggle="modal" data-target="#signupModal">Sign Up</button>
  <button class="btn btn-outline-success mx-2 my-2"  data-toggle="modal" data-target="#loginModal">Log In</button>';
}
 
 echo '
 </div>
 </div>
</nav>';


include '_loginModal.php';
include '_signupModal.php';
include '_addcovidmodal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
if(isset($_GET['addcovidcentersuccess']) && $_GET['addcovidcentersuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> Thanks for Submitting Covid Center Information
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}

if(isset($_GET['vaccineregisterationsuccess']) && $_GET['vaccineregisterationsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> Your Covid Registeration Successfully Done
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
?>