<?php
	$data = json_decode(file_get_contents('php://input'), true);
	$file = fopen($data["location"]."_data.csv","a");
	fputcsv($file,explode(',',$data["data"]));
	fclose($file);
	$file = fopen("Combined_data.csv","a");
	fputcsv($file,explode(',',$data["data"]));
	fclose($file);
?>