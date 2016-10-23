<?php
session_start();
?>
<html>
<head>
	<style type="text/css">
		form{
			text-align: center;

		}
		body{
			background-color: skyblue;
			background:linear-gradient(skyblue,orange);
			background-repeat: no-repeat;

		}
		#submain{
			margin-left: 300px;
			width:60%;
			background-color: rgba(0,0,0,0.5);
			border-radius: 50px;
			padding-top: 40px;
			padding-bottom: 40px;
			color: white;
			font-size: 25px;
			text-align: center;
		}
		#main{
			margin-top: 0px;
			padding: 100px;
			padding-bottom: 190px;
		}
		input{
			width:50%;
			line-height: 2;
			border-radius: 10px;
		}
		#header{
			text-align: center;
			background: white;
			background: -moz-linear-gradient(left,skyblue,white);
			height: 90px;
		}
		#nav{
			float:right;
		}
	</style>
</head>
<body>
<div id="header">
	<h1>Simple Text Editor</h1>
	<div id="nav">
		<a href="txtedit.php"><button>Home</button></a>
		<a href="login.php"><button>Login</button></a>
	</div>
</div>
<div id="main">
<div id="submain">
	<form method="POST" action="signup1.php">
		NAME: <br><input type="text" name="name" required /><br><br>
		EMAIL:<br><input type="text" name="email" required /><br><br>
		PASSWORD:<br> <input type="password" name="password" required /><br><br>
		CONFIRM-PASSWORD:<br><input type="password" name="password2" required /><br><br>
		<input type="submit" name="reg_btn" value="Sign Up" style="width: 10%; line-height: 3; background-color:rgba(255,255,0,0.5);" />
	</form>
</div>	
</body>