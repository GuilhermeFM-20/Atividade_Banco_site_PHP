<?php
session_start();
if(!$_SESSION['$numco']){
 header("Location: login.php");
 exit();
}
?>