<?php  
session_start(); 
$page = $_SERVER['PHP_SELF'];
$sec = "10";
error_reporting(0);
error_reporting(E_ALL ^ E_WARNING); 
$host="localhost"; // Host name 
$username="id8981965_root"; // Mysql username 
$password="brandon"; // Mysql password 
$db_name="id8981965_college"; // Database name 

// Connect to server and select databse.
$conn= mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, $db_name)or die("cannot select DB");


  ?>

  <html>
  <head>

    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Canteen Website</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/div.css">
    <link rel="stylesheet" href="css/style.css" >

    <style>
      img
      {
        border-radius: 50%;
      }
  
      input[type=text], input[type=password]
      {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
      }

      button 
      {
          background-color: transparent;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
      }

      button:hover 
      {
        opacity: 0.8;
      }

      .cancelbtn 
      {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
      }

      .imgcontainer 
      {
          text-align: center;
          margin: 24px 0 12px 0;
      }

      img.avatar 
      {
        width: 40%;
        border-radius: 50%;
        opacity: 1.2;
      }

      .container 
      {
          padding: 16px;
          width: 70%;
          background-color: black;
          opacity: 0.7;
      }

      span.psw 
      {
          float: right;
          padding-top: 16px;
      }

    </style>
  </head>
  <body bgcolor="white" style="background-size: 100%">
  
  <header>
    <div class="row">
      <div clas="logo">
        <img src="pic/admin.png" style="width:8% ">
      </div>
    </div>
  </header>
  
  <br><br>
  <div align="center">
  	<h1>
  	<u>
      Order Placed
      <?php  
        $sql = "SELECT * FROM orders";
          if($result = mysqli_query($conn, $sql))
          {
            if(mysqli_num_rows($result) > 0)
            {
              echo "<table background-color=white>";
              echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Username</th>";
                echo "<th>Payment</th>";
                echo "<th>Unique</th>";
              echo "</tr>";
              
              while($row = mysqli_fetch_array($result))
              {
                  echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['quantity'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['pay'] . "</td>";
                    echo "<td>" . $row['uni'] . "</td>";
                  echo "</tr>"; 
              }
              echo "</table>";
              // Free result set
              
            mysqli_free_result($result);
            } 
            else
            {
              echo "No records matching your query were found.";
            }
          } 
          else
          {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          } 
        ?>
    </u>
    <br><br>

      </h1>
      <br><br>
    </div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
	<div align="center">
		<form method="post" action="del_order.php"  style="width: 70%;align-self: center;background-color: transparent;">
        	<div align="center">
          	<label for="id_num"><b>Enter Unique Code that is completed</b></label>
          	<input type="text" placeholder="Enter the Unique Code" name="uni" required>
          	<button type="submit" style="background-color: red"><h2>Completed</h2></button>
        	</div>
    	</form>
    </div>
</html>

