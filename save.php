<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>save</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php
$db = mysqli_connect("localhost","root","","editor");
if(!$db)
{
	die("connnection failed".mysql_error);
}
$text=$_SESSION['string'];

//echo $text."<br>";
if(isset($_POST['yes']))
{
	
	$email=$_SESSION['email'];
	$sql="INSERT INTO my_work(id,email,work) values(null,'$email','$text')";
	mysqli_query($db,$sql);

	echo"data saved.... :)";
}
else
echo "can not save.... :(";
?>



<a href="userhome.php"><br>go back to previous page :D</a>
</body>
</html>