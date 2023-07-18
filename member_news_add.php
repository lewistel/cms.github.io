<?php
include("cms_inc_function.php");
check_login();
?>
<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>CMS | Add News</title>
		<style>
		  /* Styles for the form container */
		  .container1 {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f1f1f1;
			border-radius: 5px;
		  }

		  /* Styles for the form heading */
		  .form-heading {
			font-size: 36px;
			text-align: center;
			margin-bottom: 20px;
		  }

		  /* Styles for the form fields */
		  fieldset {
			margin-bottom: 20px;
		  }

		  label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		  }

		  input[type="text"],
		  input[type="file"],
		  input[type="date"] {
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: 1px solid #ccc;
			background-color: #fff;
			font-size: 16px;
		  }

		  /* Styles for the form buttons */
		  .btns {
			display: flex;
			justify-content: center;
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

		  .reset-btn {
			background-color: #f44336;
		  }
			h1{
				line-height: 4;
				text-align: center;
			}
		.btns-container {
				
				justify-content: space-between;
				align-items: center;
				margin-top: 20px;
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
				<div class="container1">
					<h1>Add News</h1>
					<form action="member_news_add_submit.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<label>Topic</label>
							<input type="text" name="topic" required>
						</fieldset>
						<fieldset>
							<label>Pic</label>
							<input type="file" name="pic" required>
						</fieldset>
						<fieldset>
							<label>Date</label>
							<input type="date" name="date" required>
						</fieldset>
						<div class="btns-container">
							<div class="btns">
								<input type="submit" value="Submit">
								<input type="reset" value="Reset">
								<a href="javascript:history.back()" class="btn-back" style="text-decoration: none;">Go back</a>
							</div>
							
						</div>
					</form>
					<?php
					echo($_COOKIE["msg"]);
					setcookie("msg","",time()-10);
					?>
				</div>
			</section>
		</main>
		
		
	</body>
</html>




















