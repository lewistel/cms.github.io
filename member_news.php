<?php
include("cms_inc_function.php");
check_login();
connect_db();

// Count the total number of records
$countSql = "SELECT COUNT(*) as total FROM member_news";
$countResult = mysqli_query($connect, $countSql);
$countRow = mysqli_fetch_assoc($countResult);
$total = $countRow['total'];

$sql = "SELECT * FROM `member_news`";
$result = mysqli_query($connect, $sql);

// Loop through the data and renumber the id column
$i = 1;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $id = $row['id'];
    $update_sql = "UPDATE `member_news` SET `id` = $i WHERE `id` = $id";
    mysqli_query($connect, $update_sql);
    $i++;
}
?>

<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>CMS | Updates</title>
			<style>
				table {
					border-collapse: collapse;
					width: 100%;
					max-width: 1000px;
					margin: 0 auto;
					text-align: center;
					vertical-align: middle;
				}

				th, td {
					text-align: left;
					padding: 8px;
				}

				tr:nth-child(even) {
					background-color: #F0F0F0;
				}

				.centre {
					display: block; /* Make the link a block-level element */
					text-align: center; /* Center the text within the block */

				}
				table tbody tr:hover,
				table th:hover {
					background-color: #E3E3E3;
				}

				thead {
					font-weight: bold;
					background-color: #DADADA;
					line-height: 2;
				}
				.tablehead {
						overflow-y: scroll;

					}
				.scrolling {
					height: 300px;
					overflow-y: scroll;
				}

				.btn-edit,
				.btn-delete {
					display: inline-block;
					padding: 8px 12px;
					background-color: #ccc;
					color: blue;
					border: none;
					border-radius: 4px;
					cursor: pointer;
					text-decoration: none;
					margin-right: 5px;
					font-size: medium;	
				}
				.btn-edit:hover,
				.btn-delete:hover {
						background-color: #aaa;
				}
				.end-centre {
					display: block; /* Make the link a block-level element */
					text-align: center; /* Center the text within the block */
					line-height: 3;
					font-weight: bold;
				}
				.btn-edit a:visited,
				.btn-delete a:visited {
					 color: blue;
				}
				.centre a:visited {
					color: blue;
				}
				button {
					padding: 8px 12px;
					background-color: #ccc;
					color: blue;
					border: none;
					border-radius: 4px;
					cursor: pointer;
					text-decoration: none;
					margin-right: 5px;
					font-size: medium;			
				}
				button:hover {
					background-color: #aaa;
				}
			</style>
	</head>

	<body>
		<?php include("inc_header.php");?>
		<main>
			<nav class="centre">
				<br>
				<h1>Updates</h1>
				<br>
				<a href="member_news_add.php" class="btn-edit">Add</a>
				<!-- <button onclick="printTable()">Print Table</button> -->
				<a href="test01.php" class="btn-edit" >Export to CSV</a>
				</form>
			</nav>
			<br>
		<div class="scrolling">	
			<table id="content">
				<thead>
					<tr>
						<td>ID Number</td>
						<td>Topic</td>
						<td>Picture</td>
						<td>Date</td>
						<td>Actions</td>
					</tr>
				</thead>
			<tbody>
				<?php $sql="select * from `member_news`"; 
					  $result=mysqli_query($connect,$sql); 
					    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
				?>					
					<tr>
						<td><?=$row["id"]?></td>
						<td><?=urldecode($row["topic"])?></td>
						<td><img src="<?=$row["pic"]?>" height="80" width="100"></td>
						<td><?=$row["date"]?></td>
						<td>
							<span class="btn-edit"><a href="member_news_edit.php?id=<?=$row["id"]?>" style="text-decoration: none;">Edit</a></span>
							<span class="btn-delete"><a onClick="return confirm('sure?')" href="member_news_delete.php?id=<?=$row["id"]?>" style="text-decoration: none;">Delete</a></span>
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<nav class = "end-centre">*** END ***</nav>
		</div>
		<p class="end-centre">Total number of records: <?=$total?></p>
			<?php
			echo($_COOKIE["msg"]);
			setcookie("msg","",time()-10);
			?>
		</main>
				<?php include("inc_footer.php");?>
	</body>
</html>

