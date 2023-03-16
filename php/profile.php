<?php

$email  = $_POST['email'];
$fname  = $_POST['fname'];
$lname  = $_POST['lname'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$contact  = $_POST['contact'];




if (!empty($email) || !empty($fname) || !empty($lname) || !empty($dob) || !empty($age) || !empty($contact))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "guvi";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{ 
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into profile (email, fname, lname, dob, age, contact )values(?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum!=0) { 
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss", $email,$fname,$lname,$dob,$age ,$contact);
      $stmt->execute(); 
      echo "Sucessfully updated user profile!";
     } 
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>