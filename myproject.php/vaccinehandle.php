<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect1.php';


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $mobileno = $_POST['mobileno'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];


$sql="INSERT INTO `vaccine` (`fname`, `lname`, `age`, `mobileno`, `state`, `city`, `pin`) VALUES ('$fname', '$lname', '$age', '$mobileno' ,'$state', '$city', '$pin');";
   
    $result=mysqli_query($conn,$sql);

    if($result){
        $showAlarm = true;
        header("Location: covidvaccine.php?vaccineregisterationsuccess=true");
        exit();
    }
    header("Location: covidvaccine.php?vaccineregisterationsuccess=false&error=$showError");

}


?>