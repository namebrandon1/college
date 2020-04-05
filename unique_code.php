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
  <body background= "pic/background4.jpg" style="background-size: 100%">
  
  <header>
    <div class="row">
      <div clas="logo">
        <img src="pic/admin.png" style="width:8% ">
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
      <h1>Welcome 
        ?> 
      </h1>
      <br><br>
    </div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>

</html>
















  