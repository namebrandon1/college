<?php

session_start();

$host="localhost"; // Host name 
$username="id8981965_root"; // Mysql username 
$password="brandon"; // Mysql password 
$db_name="id8981965_college"; // Database name 
$tbl_name="teacher"; // Table name 

// Connect to server and select databse.
$conn= mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, $db_name)or die("cannot select DB");

// username and password sent from form 
$username = $_POST['username']; 
$password = $_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

header("location:menu_mai.php");
exit;
}
else {
echo "Wrong Username or Password";
}
?>