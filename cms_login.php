<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>CMS | Login</title>
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
			input[type="password"] {
			  width: 100%;
			  padding: 10px;
			  margin-bottom: 20px;
			  border-radius: 5px;
			  border: none;
			  background-color: #f2f2f2;
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
		</style>
	</head>

	<body>
		<?php include("inc_header.php");?>
		<main>
			<section id="form">
				<div class="container">
					<h1>CMS Login</h1>
					<form action="cms_login_submit.php" method="post">
						<fieldset>
							<label>Username</label>
							<input type="text" name="username" required>
						</fieldset>
						<fieldset>
							<label>Password</label>
							<input type="password" name="password" required>
						</fieldset>
						<div class="btns">
							<input type="submit" value="Submit">
							<input type="reset" value="Reset">
						</div>
					</form>
					<br>
						<?php
						echo "<span style='font-size: 20px; color: red;'>" . str_replace(".", ".<br>", $_COOKIE["msg"]) . "</span>";
						setcookie("msg", "", time()-10);
						?>
				</div>
			</section>
		</main>
		
		
	</body>
</html>




















