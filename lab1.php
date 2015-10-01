<?php
//lab1.php 

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo basename($_SERVER['PHP_SELF']);
//echo THIS_PAGE;
//die;
?>

<html>
<body>
<?php
if($_POST)
{//show post data
	/*  get the data
    do the calculation:
    
     F= °C  x  9/5 + 32
    
    C= (°F  -  32)  x  5/9
    
    produce feedback for user
    test values: 32=0, 212=100
    */
    
	if (is_numeric($_POST['F'])) {
	//echo $_POST['F'];
    $C=($_POST['F']-32)*5/9;
	echo "Results Celsius: " . $C . " ". "&deg;C"."<br />";
	
	}else {
		
	}
	
	
	
	if (is_numeric($_POST['C'])) {
	//echo $_POST['C'];
    $F = ($_POST['C']*9/5)+32;
	echo  "Results Fahrenheit: " . $F . " ". "&deg;F";
		
	}else {
		
	}
    
   
	
	
	/*echo '<pre>';
		var_dump($_POST);
		echo '</pre>';*/
}else{//show form 
		echo '
		<form action=" ' . THIS_PAGE .   ' " method="post">
		Enter degrees in Fahrenheit to convert to Celsius: <input type="text" name="F" /><br />
		Enter degrees in Celsius to convert to Fahrenheit: <input type="text" name="C" /><br />
		<input type="submit" value="Convert it!" />
		
		</form>			
		';
		}
	?>
	
	
</body>
</html>