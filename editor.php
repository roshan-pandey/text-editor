<?php
session_start();
?>
<html>
<body bgcolor="sky blue" style="font-size:30;">
<blockquote>
<h3> Entered text is:</h3>

<?php
$txt= $_POST["txt"];
$key_word=$_POST["key_word"];
$rword=$_POST["rword"];
$nword=$_POST["nword"];
$operation = $_POST["operation"];
$start_pos = array_key_exists('start_pos', $_POST) ? $_POST['start_pos'] : null;
$numberOfWord = array_key_exists('numberOfWord', $_POST) ? $_POST['numberOfWord'] : null;

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
</blockquote>
</body>
</html>