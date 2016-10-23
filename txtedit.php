<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TEXT EDITOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

p1{
	background-color:black;
}
button{
	padding-left: 20px;
	padding-right: 20px;
}
#header{
	color: black;
    background-color: silver;
	width:100%;
	padding:0em;
	line-height: 3;
	clear: left;
	
}
#inText{
	float: right;
	width: 850px;
	
}
#nav{
	float : left;
	line-height:2;
	background-color: black;
	color: white;
}
#footer{
	margin-top: 800px;
	line-height:2;
	color: black;
    background-color: silver;
	clear:both;

}
#login{
	margin-left:1380px;
	padding:0em;
}

</style>
</head>
<div class="container-fluid">
<div id="header" >
<p align="center" style="font-size: 160%; font-family: verdana;">
<b>SIMPLE TEXT EDITOR</b>
<div id="login" border="5px">

<a href="txtedit.php"><button id="home" type="button" style="align:left; background-color:rgba(0,0,0,1); border-radius: 20px;">Home</button></a>
<a href="login.php"><button type="button" style="align:left; background-color: rgba(0,0,0,1); border-radius: 20px;" >Log in</button></a>
<a href="signup.php"><button type="button" style="align:left; background-color: rgba(0,0,0,1); border-radius: 20px;">Sign up</button></a> 
</div>
</p>
</div>
<body style="background-color:black">

<form method="POST" action="editor.php">
<div id="inText">
<p align="center" >
<textarea name="txt" rows="33" cols="110"  style="background-color:white">Type your text here
</textarea>
</p>
</div>
<div id="nav">  
<p>
* required field
<h2>Select operation to be performed on the entered text....!!</h2> 
</p>
<table border="0px" >
<tr>
    <td>
       
           <h3><input type="radio" name="operation" value="string_length" style="font-size:20;">String length</h3><br>
       
    </td>
</tr>
<tr>
    <td>
      
           <h3><input type="radio" name="operation" value="string_word_count">Word Count</h3><br>
       
	</td>
</tr>
<tr>
    <td>	
      
          <h3><input type="radio" name="operation" value="string_reverse">Reverse String</h3><br>
       
	</td>   
</tr>
<tr>
    <td>	   
      
          <h3><input type="radio" name="operation" value="string_search">Search word</h3><br>
	</td>
</tr>
<tr>
    <td>	
          <b>*</b> <b>Enter key word to be searched:</b><input type="textarea" name="key_word" style="background-color:gray; border-radius: 7px; color: white;">

	</td>
</tr>
<tr>
    <td>	
         <h3><input type="radio" name="operation" value="string_replace">String Replace</h3><br>
		 
	</td>
</tr>
<tr>
     <td>	
         <b>*</b> <b>Enter word to be replaced:</b><input type="text" name="rword" style="background-color:gray; color: white; border-radius: 7px;">
	</td>
	<td>
		 <b>*</b><b> Enter new word :</b><input type="text" name="nword" style="background-color:gray; color: white; border-radius: 7px;">
     </td>
</tr>
<tr>
    <td>
	    <h3><input type="radio" name="operation" value="ltou">To UPPER case<br></h3>
	</td>
</td>
<tr>
    <td>
	   <h3> <input type="radio" name="operation" value="utol">To lower case</h3><br>
	</td>
</td>
<tr>
    <td>
	    <h3><input type="radio" name="operation" value="substring">Sub String</h3><br>
	</td>
</td>
<tr>
     <td>	
        <b>*</b><b> Enter the starting position:</b><input type="text" name="start_pos" style="background-color:gray; color: white; border-radius: 7px;" >
	</td>
	<td>
		 <b>*</b><b> Enter number of words:</b><input type="text" name="numberOfWord" style="background-color:gray; color: white; border-radius: 7px;" >
     </td>
</tr>
<tr>
    <td>
	      
         <input type="submit" name="submit" value="submit" style="border-radius:20px; background-color:black; font-size:150%;">
		 
    </td>
</tr>	
</table>

</div>


</form>
<div id="footer"><p align="center">Copyright © BNMweb.com</p></div>
</div>
</body>
</html>