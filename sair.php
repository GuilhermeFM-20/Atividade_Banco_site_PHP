<?php
session_start();
unset($_SESSION['$numcon']);
session_destroy();
header("Location: login.php");
exit();
?>