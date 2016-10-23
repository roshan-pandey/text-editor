<?php
  session_start();
  session_destroy();
  unset($_SESSION['email']);
  unset($_SESSION['name']);
  $_SESSION['message']="you are now logged out";
 header("location: txtedit.php");
?>