<?php
session_start();
$servername= "localhost";
$username = "root";
$password="";
$dbname="joinform";

$conn=  mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['registration'])){
    $userName= $_POST['user_name'];
    $schoolName = $_POST['school_name'];
    $principleName = $_POST['principal_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['mobile_no'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $query  = "INSERT INTO `register`(`userName`, `schoolName`, `principleName`,`email`, `phoneNumber`, `city`, `state`) 
                    VALUES ('$userName','$schoolName','$principleName','$email','$phoneNumber','$city','$state')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['status']= "Registraion Successfull";
        header("Location:schoolform.html");
    }
    else{
        $_SESSION['status']= "Failed";
        header("Location:schoolform.html");
    }
     
}

?>

