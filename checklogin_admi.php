<?php
  session_start();
$host="localhost"; // Host name 
$username="id8981965_root"; // Mysql username 
$password="brandon"; // Mysql password 
$db_name="id8981965_college"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
$conn= mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, $db_name)or die("cannot select DB");

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$sql="SELECT username,password,name,income,contact_no,address FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];
$contact_no=$row['contact_no'];
$income=$row['income'];
$address=$row['address'];
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['name'] = $name;
$_SESSION['contact_no'] = $contact_no;
$_SESSION['income'] = $income;
$_SESSION['address'] = $address;

header("location:login_success_admi.php");
exit;
}
else {
echo "Wrong Username or Password";
}
?>