<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['signupEmail'];
    $password = $_POST['signupPassword'];
    $cpassword = $_POST['signupcPassword'];

    // Check whether this email exists
    $existSql = "select * from `userbase` where email = '$email'";
    $result = mysqli_query($con, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($password == $cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `userbase` (`email`, `password`, `timestamp`) VALUES ('$email', '$hash', current_timestamp())";
            $result = mysqli_query($con, $sql);
            
            if($result){
                $showAlert = true;
                header("Location: cov.php?signupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "Passwords do not match"; 
            
        }
    }
    header("Location: cov.php?signupsuccess=false&error=$showError");

}
?>
