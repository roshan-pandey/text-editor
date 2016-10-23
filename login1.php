<?php
session_start();
$db = mysqli_connect("localhost","root","","editor");
if(!$db)
{
	die("database connection error: ".mysqli_connect_error());
}
//echo"connected<br>";
if(isset($_POST['login']))
{

    $email = array_key_exists('email', $_POST) ? $_POST['email'] : null;
	$password = ($_POST['pass']);
	
	$password = md5($password);
	$sql = "select * from user where email = '$email' and password = '$password' ";
	$result = mysqli_query($db,$sql);
	
	if(mysqli_num_rows($result)==1)
	{
		$row=$result->fetch_assoc();
		 $_SESSION["message"]="you are now logged in ";
		 $_SESSION['name'] = $row["name"];
		 $_SESSION['email'] = $row["email"];
		 echo"u r logged in <br>";
		 echo $_SESSION['name'];
         $user_email=$_SESSION['email'];
		 $sql1=" select * from  my_work where my_work.email=user.email and my_work.email like 'rohanp1998@gmail.com%' ";
		 $result1=mysqli_query($db,$sql1);
		 
		  

		    $row=$result1->fetch_assoc()
		 	
		 	$_SESSION['saved_text']=$row['work'];
		 	echo $_SESSION['saved_text'];
		 	
		 	header("location: userhome.php");
		
	}
	else
	{
		echo "username password do not match";
		
	}
}
?>