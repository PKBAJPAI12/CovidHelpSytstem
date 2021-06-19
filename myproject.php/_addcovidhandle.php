<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect1.php';
    
    $name = $_POST['centername'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pin = $_POST['pincode'];
    $totalbed = $_POST['totalbed'];
    $vacantbed = $_POST['vacantbed'];

$sql="INSERT INTO `covidcenter` (`centername`, `state`, `city`, `pincode`, `totalbed`, `vacantbed`) VALUES ('$name', '$state', '$city', '$pin', '$totalbed', '$vacantbed');";
   
    $result=mysqli_query($conn,$sql);

    if($result){
        $showAlarm = true;
        header("Location: cov.php?addcovidcentersuccess=true");
        exit();
    }
    header("Location: cov.php?addcovidcentersuccess=false&error=$showError");


}
?>
