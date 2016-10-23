<?php
session_start();
?>
<html>
<title>LOGIN</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		form{
			text-align: center;
			font-size: 25px;
			color: white;
		}
		body{
			background: linear-gradient(pink,white);
			background-repeat: no-repeat;
			background-size: cover;
		}
		input{
			background-color: rgba(0,0,0,0.0);
			color:white;
			line-height: 2;
			width:55%;
			border-radius: 10px;
		}
		#info{
			background-color: rgba(0,0,0,0.5);
			width:50%;
			margin-left: 420px;
			border-radius: 20px;
			padding-top: 40px;
			padding-bottom: 40px;
			margin-top: 100px;

		}
		#main{
			text-align: center;
		}
		#header{

		}
		#nav{
			float: right;
			margin-right: 10px;
			font-size: 20px;
		}

	</style>
</head>
<div id="main">
<body>
<div id="header">
   <h1 style="text-align: center;">Welcome, Enter your email and password...!!</h1>
   <div id="nav">
   
   	<a href="txtedit.php">Home</a>
   	
   	<a href="signup.php">Sign up</a>
   </div>
 </div>
<div id="info">
  <form method="POST" action="login1.php">
     
		    EMAIL:</br>
			<input type="text" name="email" required  ><br><br>
			PASSWORD:</br>
			<input type="password" name="pass" required ><br><br>
			<input type="submit" name="login" value="let me in :)" style=" width:20%; line-height: 2; background-color:hsl(120,100%,75%); color:black;">
  </form>
  </div>
</body>
</div>
</html>