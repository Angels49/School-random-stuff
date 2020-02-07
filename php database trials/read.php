<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){

$file = $_POST['filename'] . ".txt";


$handle = fopen($file, "r");
echo fread($handle, filesize($file));
fclose($file);

}
?>