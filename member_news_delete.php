<?php
include("cms_inc_function.php");
check_login();
connect_db();

$id=$_GET["id"];

$sql="delete from `member_news` where id='$id'";

if(mysqli_query($connect,$sql)){
	
	/* setcookie("msg","deleted",time()+60); */
	header("location:member_news.php");
}else{
	setcookie("msg","fail,pls try again later",time()+60);
	header("location:member_news.php");
}


?>





