<DOCTYPE! HTMl>
<html lan="en">
<head><title>data</title>
	
	<style>
		div{
			width: 100%;
			height: 200px;
		background-color: aquamarine;
			margin: 0px, auto;
		}
		
		
	</style>
	
	</head>
	<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	echo "The data has been entered into the text file" . $filename;
	
	$info = $_POST['info'];
	
	$filename = $_POST['filename'] . ".txt";
	
	
	fopen($filename, "w");
	fclose($filename);
	
    $fhandle = fopen($filename, "a+");
	fwrite ($fhandle, $info);
    fclose($fhandle);

}

	


?>
			

		<a href="index.php">index.php</a>
	</body>
	</html>
