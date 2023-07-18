<?php
session_start();
unset($_SESSION["username"]);
header("location:cms_login.php");
?>