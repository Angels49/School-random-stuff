<DOCTYPE! HTML>
<html>
	<head>
	<title>form submit</title>
	
		
	</head>
	
	
	<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$filename = $_POST['filename'] . ".txt";
	
	
$file = fopen($filename, "x+");
	fclose($filename);

}

?>
		
		<br>
		<center><h1>Thank you the file was created</h1></center>
		
		
		
	</body>
	</html>