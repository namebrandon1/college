<?php
	session_start(); 
  	error_reporting(0);
  	error_reporting(E_ALL ^ E_WARNING); 
?>

 <html>
  <head>
    <title>Canteen Website</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/div.css">
    <link rel="stylesheet" href="css/style.css" >

    <style>
      
      
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

      .topnav 
      {
      overflow: hidden;
      background-color: #333;
      }
      
      .topnav 
      {
      overflow: hidden;
      background-color: #333;
      }

      .topnav a 
      {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 1%  8%;
      font-size: 17px;
      }

      .topnav a:hover 
      {
      background-color: #ddd;
      color: black;
      }

      .topnav a.active 
      {
      background-color: #4CAF50;
      color: white;
      }

    </style>
  </head>
  <body background= "pic/background4.jpg" style="background-size: 100%">
  
  <header>
    <div class="row">
      <div clas="logo">
        <img src="pic/admin.png" style="width:8% ;border-radius: 50%;">
        <ul class="main-nav" style="margin-top: -1%">
          <li><h1 style="font-size:300%;color: white;">B N M Canteen</h1></li>  
          <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li class="active"><a href ="index.html">HOME</a></li>
          <li><a href ="about.html">ABOUT</a></li>
          <li><a href ="contact.html">CONTACT</a></li>
        </ul> 
      </div>
    </div>
  </header>
  
  <br><br>
  <div align="center">
    
  </div>
  
  <div align="center">
    <form  method="post" action="checklogin_stud.php" style="width: 90%;align-self: center;background-color: transparent;">
        <div class="topnav" style="width: 90%">
          <a class="active" href="menu_mai.php">Main Course</a>
          <a href="menu_sta.php">Starters</a>
          <a href="menu_sup.php">Soupes and Salads</a>
          <a href="menu_des.php">Desert</a>
        </div>
    </form>
    <br><br>
    <div align="center">
      <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
      <br><br>
    </div>
  </div>
  
  <form action="checkbox.php" method="Post">

    <div align="center">


    <div style="width: 85%;">
      
      <div style="width: 90%;">
        <div style="width:40%;align-self: left;float: left;">
          <img src="pic/fryrice.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: red;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Chicken Fried Rice</h2>
              <h4 align="left">Ingedriants:</h4>
                <div align="left">
                  <p> Rice,chilli,tomato,onion,tumeric,pepper,capsicum,spring onion,spices.</p>
                  <br>
                  <h4 align="left">Price : <h3>Rs.60/-</h3></h4>
                  <div style="float: right;margin-top: -6%">
                    Quantity:
                    <select name="quantity" size="1" >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div style="float: right;margin-top: -3%" >
                    <h4>Select : 
                      <input type="checkbox" name="chk" value="ckfryrice">
                    </h4>
                  </div>
                </div>
            </p>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>


      <div style="width: 90%;">
        <div style="width:40%;align-self: left;float: left;">
          <img src="pic/shfryrice.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: red;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Chicken Shezewan Fried Rice</h2>
              <h4 align="left">Ingedriants:</h4>
                <div align="left">
                  Rice,chilli,tomato,onion,tumeric,pepper,capsicum,spring onion,spices,shezwan sauce,chicken.
                  <br>
                  <h4 align="left">Price : <h3>Rs.70/-</h3></h4>
                  <div style="float: right;margin-top: -10%">
                    Quantity:
                    <select name="quantity" size="1" >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div style="float: right;margin-top: -3%" >
                    <h4>Select : 
                      <input type="checkbox" name="chk" value="ckshfryrice">
                    </h4>
                  </div>
                </div>
            </p>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>

      <div style="width: 90%;">
        <div style="width:40%;align-self: left;float: left;">
          <img src="pic/fryrice.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: green;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Veg Fried Rice</h2>
              <h4 align="left">Ingedriants:</h4>
                <div align="left">
                  Rice,chilli,tomato,onion,tumeric,pepper,capsicum,spring onion,spices.
                  <br><br>
                  <h4 align="left">Price : <h3>Rs.40/-</h3></h4>
                  <div style="float: right;margin-top: -10%">
                    Quantity:
                    <select name="quantity" size="1" >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div style="float: right;margin-top: -3%" >
                    <h4>Select : 
                      <input type="checkbox" name="chk" value="fryrice">
                    </h4>
                  </div>
                </div>
            </p>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>


      <div style="width: 90%;">
        <div style="width:40%;align-self: left;float: left;">
          <img src="pic/shfryrice.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: green;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Veg Shezewan Fried Rice</h2>
              <h4 align="left">Ingedriants:</h4>
                <div align="left">
                  Rice,chilli,tomato,onion,tumeric,pepper,capsicum,spring onion,spices,shezwan sauce.
                  <br>
                  <h4 align="left">Price : <h3>Rs.50/-</h3></h4>
                  <div style="float: right;margin-top: -10%">
                    Quantity:
                    <select name="quantity" size="1" >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div style="float: right;margin-top: -3%" >
                    <h4>Select : 
                      <input type="checkbox" name="chk" value="shfryrice">
                    </h4>
                  </div>
                </div>
            </p>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>

    </div>
  </div>
  <input type="submit" value="submit" name="submit" style="background-color: white;color: black;"><h2>SUBMIT</h2>
  </form>

  <div style="width: 35%;float: right;margin-left: 80%;">
    <a href="logout.php">
      <button style="background-color: white;color: black">
        <h3>
          Logout
        </h3>
      </button>
    </a>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>

</html>