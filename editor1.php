<?php
session_start();
?>
<html>
<head>
<title>save result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		#save{
			text-align: center;
			margin-top: 560px;
		}
		#valid{
			float: left;
			margin-top: 100px;
		}
		#header{
			width:100%;
			float: top;
			text-align: center;
			background-color: rgba(0,0,0,0.5);
			color:white;
			height: 100px;
		}
		#nav{
			float: right;
		}
	</style>


</head>
<body style="font-size:30; background:linear-gradient(skyblue,pink); background-repeat: no-repeat;">
<div id="header">
	<h1 >Simple text editor</h1>
	<div id="nav">
		<a href="userout.php"><button style="font-size: 20px; margin-right: 5px; margin-top:10px; ">Log out</button></a>
	</div>
</div>
<blockquote>
<div id="valid">
<?php
$txt=$_SESSION["string"] = $_POST["txt"];
$key_word=$_POST["key_word"];
$rword=$_POST["rword"];
$nword=$_POST["nword"];
$operation = $_POST["operation"];
$start_pos = array_key_exists('start_pos', $_POST) ? $_POST['start_pos'] : null;
$numberOfWord = array_key_exists('numberOfWord', $_POST) ? $_POST['numberOfWord'] : null;
?>
<h3> Entered text is:</h3>
<?php
 echo nl2br($txt)."<br>";
//echo"text after replacing the old word with new one is: ".str_replace("$rword","$nword","$txt");

if($operation=="string_length")
{
	?> 
	<h3>String length is: </h3><?php echo strlen("$txt");
}
if($operation=="string_word_count")
{
	?>
	<h3>Number of words in entered text is:</h3><?php echo str_word_count("$txt");
}
if($operation=="string_reverse")
{
	?>
	<h3>Reversed string is :</h3><?php echo strrev("$txt");
}
if($operation=="string_search")
{
	if(null!=$key_word)
	{
		?>
	  <h3>Starting index of the searched word is:</h3><?php echo strpos("$txt","$key_word");
	}
	else{
		?>
		<h3>Please enter key word...!!!</h3> <?php
	}
}
if($operation=="string_replace")
{
	if(!empty($rword) && !empty($nword))
	{
		?>
		<h3>Text after replacing the old word with new one is:</h3><?php echo str_replace("$rword","$nword","$txt");
	//echo "$txt";
	}
	else{
		?>
		<h3>Please enter some values....!!</h3><?php
	}
}

if($operation=="ltou")
{
	?>
	<h3>Text in upper case is:</h3> <?php echo strtoupper("$txt");
}
if($operation=="utol")
{     $ntxt=nl2br($txt);
	?>
	<h3>Text in lower case is:</h3><?php echo strtolower("$ntxt");
}
if($operation=="substring")
{
   ?>
   	<h3>Sub string  is:</h3>
	<?php echo substr("$txt",$start_pos,$numberOfWord);
}
?>
<br><a href="userhome.php">go back to previous page</a>

</div>
</blockquote>
<div id="save">
<form method="POST" action="save.php">
	Do you want to save your work..?<br>
	<input type="submit" name="yes" value="Yess.. :)" style="line-height: 2;  border-radius: 10px;	  background-color:hsl(120,100%,75%);" />
	<input type="submit" name="no" value="No.." style="line-height: 2; border-radius: 10px; margin-left: 5px; padding-left: 25px; padding-right: 25px; background-color:hsl(120,100%,75%);" />
</form>
</div>
</body>
</html>