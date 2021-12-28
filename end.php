<?php

error_reporting(0);

$postingvalue=$_POST['val'];


$val= file_get_contents("Hiox.txt");

$array=(explode("\n",$val));

$result = preg_grep("/^$postingvalue/i", $array);

// echo sizeof($result);

if (sizeof($result)>0) 
{
	foreach ($result as $key => $value) {
		$output .= "<p>" . $value . "</p>";
	}
	
	echo $output;
}
else
{
	echo "<p>No Match Found</p>";
}

?>

<!-- <script>

var colors = <?php $output ?>;
localStorage.setItem("my_colors", JSON.stringify(colors)); //store colors
var storedColors = JSON.parse(localStorage.getItem("my_colors")); 
console.log(storedColors);

</script> -->