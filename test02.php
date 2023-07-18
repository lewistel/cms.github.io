<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
// Include PHPExcel library
require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
	echo "PHPExcel library is installed correctly!";

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties for the Excel file
$objPHPExcel->getProperties()->setTitle("My Excel File");
$objPHPExcel->getProperties()->setCreator("My Name");

// Add data to the Excel file
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Name');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Email');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Phone');
$objPHPExcel->getActiveSheet()->setCellValue('A2', 'John Doe');
$objPHPExcel->getActiveSheet()->setCellValue('B2', 'johndoe@example.com');
$objPHPExcel->getActiveSheet()->setCellValue('C2', '555-1234');

// Set headers for the Excel file
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="my_excel_file.xls"');
header('Cache-Control: max-age=0');

// Write the Excel file to the output buffer and send it to the browser
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
	
</body>
</html>