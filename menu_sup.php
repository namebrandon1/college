<?php
  session_start();
  error_reporting(0);
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

      .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 1%  8%;
      font-size: 17px;
      }

      .topnav a:hover {
      background-color: #ddd;
      color: black;
      }

      .topnav a.active {
      background-color: #4CAF50;
      color: white;
      }
    </style>
  </head>
  <body background= "pic/background4.jpg" style="background-size: 100%" style="background-position: fixed">
  
  <header>
    <div class="row">
      <div clas="logo">
        <img src="pic/admin.png" style="width:8%;border-radius: 50%; ">
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
          <a href="menu_mai.php">Main Course</a>
          <a href="menu_sta.php">Starters</a>
          <a class="active" href="menu_sup.php">Soupes and Salads</a>
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
          <img src="pic/ckloli.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: green;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Manchow Soup</h2>
              <h4 align="left">Ingredients:</h4>
              <div align="left">
                  Spicy Manchow soup with tasty veggies.
                <h5>Servings : 2</h5>
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
                  <input type="checkbox" name="chk" value="manchow">
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
          <img src="pic/rusal.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: green;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Russian Salad</h2>
              <h4 align="left">Ingredients:</h4>
                <div align="left">
                  Freshly cut vegetables with cherry tomatoes and russian dressing.
                  <h5>Serving :2 </h5>
                  <h4 align="left">Price : <h3>Rs.60/-</h3></h4>
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
                      <input type="checkbox" name="chk" value="russiansalad">
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
          <img src="pic/fulu.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: red;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Chicken Lung Fung Soup</h2>
              <h4 align="left">Ingredients:</h4>
                <div align="left">
                 Clear Chicken Soup cooked with vegetables and servedwith whipped cream. 
                  <h5>Servings : 2</h5>
                  <h4 align="left">Price : <h3>Rs.80/-</h3></h4>
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
                      <input type="checkbox" name="chk" value="lungfung">
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
          <img src="pic/ces.jpg" style="width: 50%;" align="center" border="5">
        </div>
        <div style="background-color: green;width:60% ;margin-left: 21%; ">
          <div style="width:100%;background-color: white;opacity: 0.8">
            <p>
              <h2 align="center">Caesar Salad</h2>
              <h4 align="left">Ingredients:</h4>
                <div align="left">
                  Fresh vegetables with baked chicken on Caesar Salad dressing.
                  <h5>Servings : 2</h5>
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
                      <input type="checkbox" name="chk" value="caesar">
                    </h4>
                  </div>
                </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
      <br>
      <br>
  <input type="submit" value="submit" name="submit" style="background-color: white;color: black;"><h2>SUBMIT</h2></button>
  </form>

  <p><a href="logout.php">Logout</a></p>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>

</html>