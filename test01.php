<?php
include("cms_inc_function.php");
check_login();
connect_db();

// Export data to CSV
if (isset($_POST['export'])) {
  // Set headers to force download of the CSV file
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="data.csv"');

  // Create a new CSV file
  $file = fopen('php://output', 'w');

  // Write the column headers to the file
  fputcsv($file, array('id', 'topic', 'pic', 'date'));

  // Write the data to the file
  $sql = "select * from `member_news`";
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    fputcsv($file, array($row['id'], urldecode($row['topic']), $row['pic'], $row['date']));
  }

  // Close the file
  fclose($file);
  exit;
}

// Count the total number of records
$countSql = "SELECT COUNT(*) as total FROM member_news";
$countResult = mysqli_query($connect, $countSql);
$countRow = mysqli_fetch_assoc($countResult);
$total = $countRow['total'];
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
				border: 1px solid #ccc;
			}

			th, td {
				text-align: left;
				padding: 8px;
				border-bottom: 1px solid #ddd;
			}

			tr:hover {
				background-color: #f5f5f5;
			}

			.centre a:visited {
				color: blue;
			}

			.btn {
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

			.btn:hover {
				background-color: #aaa;
			}

			.btn-back {
				background-color: #999;
			}

			.centre {
			display: block; /* Make the link a block-level element */
			text-align: center; /* Center the text within the block */
			align-content: center;	
			}
		
			.btn-1 {
				display: inline-block;
				padding: 10px;
			}
			
			.end-centre {
				display: block; /* Make the link a block-level element */
				text-align: center; /* Center the text within the block */
				line-height: 3;
				font-weight: bold;
			}
		</style>

	</head>

	<body>
		<?php include("inc_header.php");?>
		<div class="cms_body">
			<br>
			<br>
			<br>
			<nav class="centre">
				<form method="post" class="btn-1">
					<input type="submit" name="export" value="Export to CSV">
					<input type="button" onclick="printTable()" value="Print Table">
					<input type="button" onclick="history.back()" value="Go Back">

				</form>
			</nav>

		<br>
			<br>
			<table id="content">
				<thead>
					<tr>
						<th>ID</th>
						<th>Topic</th>
						<th>Picture</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Retrieve data from the database
					$sql = "SELECT * FROM `member_news`";
					$result = mysqli_query($connect, $sql);

					// Loop through the data and display it in the table
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<tr>';
						echo '<td>' . $row['id'] . '</td>';
						echo '<td>' . urldecode($row['topic']) . '</td>';
						echo '<td><img src="' . $row['pic'] . '" height="80" width="100"></td>';
						echo '<td>' . $row['date'] . '</td>';
						echo '</tr>';
					} 
					?>
				</tbody>
			</table>
			<p class="end-centre">Total number of records: <?=$total?></p>
			<nav class = "end-centre">*** END ***</nav>
		</div>
	</body>
		<script>
		function printTable() {
		  var table = document.getElementById("content");
		  var printWindow = window.open('', '', 'height=500,width=800');
		  printWindow.document.write('<html><head><title>Data</title>');
		  printWindow.document.write('</head><body>');
		  printWindow.document.write(table.outerHTML);
		  printWindow.document.write('</body></html>');
		  printWindow.document.close();
		  printWindow.print();
		}
	</script>
	
	
</html>