<?php
	function selfMultiply(&$number){
		$number *= $number;
		return $number;
	}
	
	$mynum = 5;
	echo "The number is: " . $mynum;
	echo "<br>";
	selfMultiply($mynum);
	echo "Number after multiplication: " . $mynum;
	echo "<br><br>";
    echo"Program By Bhuvanyu Chhibber (2220100266)" ;
?>
