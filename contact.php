<?php
session_start();
$servername= "localhost";
$username = "root";
$password="";
$dbname="joinform";

$conn=  mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['contact_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $query  = "INSERT INTO `contactform`(`name`, `email`, `phone`, `message`) 
                    VALUES ('$name','$email','$phone','$message')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['status']= "Thank you for contacting us!!";
        header("Location:contact.html");
    }
    else{
        $_SESSION['status']= "Failed";
        header("Location:contact.html");
    }
     
}

?>

