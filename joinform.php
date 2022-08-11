<?php
session_start();
$servername= "localhost";
$username = "root";
$password="";
$dbname="joinform";

$conn=  mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['join'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $InternOptions = $_POST['chooseOptions'];
    $duration = $_POST['durationmonth'];
    $query  = "INSERT INTO `join`(`firstName`, `lastName`, `email`, `phone`, `address`, `InternOptions`, `duration`) 
                    VALUES ('$firstName','$lastName','$email','$phone','$address','$InternOptions','$duration')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['status']= "Registraion Successfull";
        header("Location:join.html");
    }
    else{
        $_SESSION['status']= "Failed";
        header("Location:join.html");
    }
     
}

?>

