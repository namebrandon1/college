<?php

session_start(); 
error_reporting(E_ALL ^ E_WARNING); 
$host="localhost"; // Host name 
$username="id8981965_root"; // Mysql username 
$password="brandon"; // Mysql password 
$db_name="id8981965_college"; // Database name 
$tbl_name="orders"; // Table name 

// Connect to server and select databse.
$conn= mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, $db_name)or die("cannot select DB");

$id=$_POST['uni']; 

$sql = "DELETE FROM orders WHERE uni='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:displaydb.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

?>