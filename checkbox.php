<?php  
session_start(); 
error_reporting(E_ALL ^ E_WARNING); 
$host="localhost"; // Host name 
$username="id8981965_root"; // Mysql username 
$password="brandon"; // Mysql password 
$db_name="id8981965_college"; // Database name 

// Connect to server and select databse.
$conn= mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, $db_name)or die("cannot select DB");

$checkbox = $_POST['chk'];
$quantity = $_POST['quantity'];	
$username = $_SESSION['username'];
	
	if($checkbox=='fryrice')
	{

		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','40','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='shfryrice')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','50','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='ckfryrice')
	{

		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','60','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='ckshfryrice')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','70','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='lolipop')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','50','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='french_fries')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','60','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='alootikki')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','50','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='chicken_crispy')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','70','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='sunnysideup')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','50','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}

	if($checkbox=='manchow')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','70','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='russiansalad')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','60','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	 if($checkbox=='lungfung')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','80','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	
	if($checkbox=='chiman')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','80','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}
	if($checkbox=='caesar')
	{
		if(isset($_POST['submit']))
		{       
    		$sql="INSERT INTO orders (name,price,quantity,username) VALUES ('$checkbox','70','$quantity','$username')";     

    		if(mysqli_query($conn,$sql))
    		{
			} 
		}
	}

              

	
	
	
	
	
	
	header("location:order_more.php");

?>  