<?php
$connect="";
function connect_db(){
	global $connect;
	
	$connect=mysqli_connect("localhost","root","12345678","lewis");
	if(mysqli_connect_error()){
		echo("db connect err!");
		exit();
	}	
}

function check_login(){
	session_start();
	if(!isset($_SESSION["username"])){
		header("location:cms_login.php");
		exit();
	}
}

?>









