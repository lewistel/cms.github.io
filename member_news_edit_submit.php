<?php
include("cms_inc_function.php");
check_login();
connect_db();

$topic=urlencode($_POST["topic"]);
$date=$_POST["date"];
$id=$_POST["id"];
$pic=$_POST["cur_pic"];

//====================pic=======================
if($_FILES["pic"]["name"]!=""){
	$org_name=$_FILES["pic"]["name"];
	$tmp_name=$_FILES["pic"]["tmp_name"];
	$ext=pathinfo($org_name,PATHINFO_EXTENSION);

	if($ext!="jpg" && $ext!="png"){
		setcookie("msg","support jpg / png only",time()+60);
		header("location:member_news_edit.php?id=$id");
		exit();
	}

	$new_name=time().rand(1000,9999).".".$ext;
	$pic="images/$new_name";

	move_uploaded_file($tmp_name,"$pic");	
}


//echo("$org_name<br>$tmp_name<br>$ext<br>$new_name<br>$pic");
//exit();
//====================pic=======================



$sql="update `member_news` set topic='$topic',pic='$pic',date='$date' where id='$id'";

if(mysqli_query($connect,$sql)){
	
	/*setcookie("msg","updated",time()+60); */
	header("location:member_news.php");
}else{
	setcookie("msg","fail,pls try again later",time()+60);
	header("location:member_news_edit.php?id=$id");
}


?>





