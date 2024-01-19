<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "bookings";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
  die("Connection Failed:" .$conn->connect_error);

}

//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $email = $_POST['email'];
  $message =$_POST['message'];
  

  //prepare and execute the database insertion 
  $sql = "INSERT INTO `message`(`email`, `message`) VALUES ('$email','$message')";

  if($conn->query($sql) == TRUE){
    
    echo "Booking Succecfully";

  }else{
    
    echo "Error:" .$sql . "<br>" .$conn->error;
  }
   

}
$conn->close();
 

?>