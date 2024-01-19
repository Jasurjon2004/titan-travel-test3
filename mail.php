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
  $name = $_POST["name"];
  $email = $_POST['email'];
  $place = $_POST['place'];
  $howmany = $_POST['howmany'];
  $howlong = $_POST['howlong'];
  $date = $_POST['date'];


  //prepare and execute the database insertion 
  $sql = "INSERT INTO `booking`(`name`, `email`, `place`, `howmany`, `howlong`, `date`) VALUES ('$name','$email','$place','$howmany','$howlong','$date')";

  if($conn->query($sql) == TRUE){
    echo " Booking Succecfully, We will contact you within 12 hours ";

  }else{
    echo "Error:" .$sql . "<br>" .$conn->error;
  }
   

}
$conn->close();
?>