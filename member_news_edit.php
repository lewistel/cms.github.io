<?php
include("cms_inc_function.php");
check_login();
connect_db();

$id=$_GET["id"];

$sql="select * from `member_news` where id='$id'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>CMS | Edit News</title>
		<style>
						#form {
				  background-color: #f7f7f7;
				  padding: 50px 0;
				}

				.container {
				  max-width: 500px;
				  margin: 0 auto;
				  text-align: center;
				}

				h1 {
				  font-size: 36px;
				  margin-bottom: 30px;
				}

				label {
				  display: block;
				  font-size: 18px;
				  margin-bottom: 10px;
				  text-align: left;
				}

				input[type="text"],
				input[type="date"],
				input[type="file"] {
				  width: 100%;
				  padding: 10px;
				  margin-bottom: 20px;
				  border-radius: 5px;
				  border: none;
				  background-color: #f2f2f2;
				}

				fieldset:last-of-type {
				  margin-bottom: 30px;
				}

				.current-pic {
				  margin-top: 20px;
				}

				.current-pic h3 {
				  font-size: 16px;
				  margin-bottom: 10px;
				}

				.current-pic img {
				  display: block;
				  margin: 0 auto;
				  border-radius: 5px;
				}

				input[type="submit"],
				input[type="reset"] {
				  display: inline-block;
				  padding: 10px 20px;
				  margin-right: 10px;
				  font-size: 16px;
				  font-weight: bold;
				  text-transform: uppercase;
				  color: #fff;
				  background-color: #333;
				  border: none;
				  border-radius: 5px;
				  cursor: pointer;
				  transition: background-color 0.3s ease;
				}

				input[type="submit"]:hover,
				input[type="reset"]:hover {
				  background-color: #555;
				}

			.btns {
				  margin-top: 30px;
				}
			.btn-back {
					padding: 10px 20px;
				  margin-right: 10px;
				  font-size: 16px;
				  font-weight: bold;
				  text-transform: uppercase;
				  color: #fff;
				  background-color: #333;
				  border: none;
				  border-radius: 5px;
				  cursor: pointer;
				  transition: background-color 0.3s ease;
			}
			.btn-back:hover {
					background-color: #aaa;
			}

		</style>
	</head>

	<body>
		<?php include("inc_header.php");?>
		<main>
			<section id="form">
				<div class="container">
					<h1>Edit News</h1>
					<form action="member_news_edit_submit.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<label>Topic</label>
							<input type="text" name="topic" value="<?=urldecode($row["topic"])?>" required>
						</fieldset>
						<fieldset>
							<label>Pic</label>
							<input type="file" name="pic">
							<h3>current:</h3>
							<img src="<?=$row["pic"]?>" height="140">
						</fieldset>
						<fieldset>
							<label>Date</label>
							<input type="date" name="date" value="<?=$row["date"]?>" required>
						</fieldset>
						<div class="btns">
							<input type="submit" value="Submit">
							<input type="reset" value="Reset">
							<a href="javascript:history.back()" class="btn-back" style="text-decoration: none;">Go back</a>
						</div>
						<input type="hidden" name="id" value="<?=$row["id"]?>">
						<input type="hidden" name="cur_pic" value="<?=$row["pic"]?>">
					</form>
					<?php /*
					echo($_COOKIE["msg"]);
					setcookie("msg","",time()-10); */
					?>
				</div>
			</section>
		</main>
		
		
	</body>
</html>




















