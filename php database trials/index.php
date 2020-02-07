<DOCTYPE! HTMl>
<html lan="en">
<head>
    

<title>
Menu
</title>


   
    <style>
        li{
            display: inline;
        }
        
        ul{
            list-style: none;
            text-align: center;
        }
		
		tr{
			border: 1px solid black;
		}
		
		td{border: 1px solid black;}
		
    </style>
    
</head>

<body>

<div id="nav">
    <ul>
       <li><a href="index.php">Index</a></li>
    </ul>
    
    </div>
    
    
     <?php
    
echo "Hello World";
    echo "<br>";
    $x = 8;
    $y = 2;
    function test(){
    global $x, $y, $apples;
        $apples = $x + $y;
    }
    
    
    test();
    echo $apples;
    echo "<br>";
        

?>
	
	<center><h2>Hello this page is my first time using php a server side scripting language.</h2>
	what this does.
		
		<br>1:Creates a text file
		<br>2:Type in what you want to be put into the file and which file you want to put it in
			<br>3:Type in which file you want to open / files that already exist: pokemon, trial, pop.
		<br>
	You dont have to add .txt its done automatically
	
	
	</center>
	
	<center>
		<br><br><br><br><br>
	<table><tr><td>
	<form method="post" action="createfile.php">
		<br>
	<input type="text" name="filename">Creates a text file 
		<input type="submit">
	
	
	</form>
		</td></tr>
	
	
	<tr><td>
	
	
	
	
<form method="post" action="database.php"><br>
	<input type="text" name="info"> What text you want to put into file
	<br>
	<input type="text" name="filename">Which file you want to put text into
	<input type="submit">
	</form>
		</td></tr>
	
	
<tr><td>
	<form method="post" action="read.php">
		<br>
	<input type="text" name="filename">File you want to veiw
		<input type="submit">
	</form>
	</td></tr>
	</table>
		
		
		
	</center>

	
	
	
	
	
</body>
    </html>