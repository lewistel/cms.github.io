<?php
include("cms_inc_function.php");
check_login();
connect_db();

$topic=urlencode($_POST["topic"]);
$content=urlencode($_POST["content"]);
$date=$_POST["date"];

//====================pic=======================
$org_name=$_FILES["pic"]["name"];
$tmp_name=$_FILES["pic"]["tmp_name"];
$ext=pathinfo($org_name,PATHINFO_EXTENSION);

if($ext!="jpg" && $ext!="png"){
	setcookie("msg","support jpg / png only",time()+60);
	header("location:member_news_add.php");
	exit();
}

$new_name=time().rand(1000,9999).".".$ext;
$pic="images/$new_name";

move_uploaded_file($tmp_name,"$pic");

//echo("$org_name<br>$tmp_name<br>$ext<br>$new_name<br>$pic");
//exit();
//====================pic=======================



$sql="insert into `member_news` (topic,pic,date) values ('$topic','$pic','$date')";

if(mysqli_query($connect,$sql)){
	
	/* setcookie("msg","added",time()+60); */
	header("location:member_news.php");
}else{
	setcookie("msg","fail,pls try again later",time()+60);
	header("location:member_news_add.php");
}


?>





