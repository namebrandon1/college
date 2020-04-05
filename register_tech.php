<?php

$host="localhost"; // Host name 
$username="id8981965_root"; // Mysql username 
$password="brandon"; // Mysql password 
$db_name="id8981965_college"; // Database name 

// Connect to server and select databse.
$conn= mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, $db_name)or die("cannot select DB");
// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 


$sql="INSERT INTO teacher (username,password) VALUES ('$username','$password')";     
if (mysqli_query($conn, $sql)) {
      header("location:tech_log.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>