<?php

	//variable starts with $
	//string has to use quotation marks
	// line ends with semicolon 
	$first_name = "oh nana whats my name,";
	$last_name = " its	tony";
	
	// show code to browser 
	//for adding up numbers + sign
	// for adding up strings 
	echo $first_name.$last_name;
	
	// > greater than
	// < smaller than 
	// >= greater than or equal
	// <= smaller than or equal
	// != not equal
	
	$age = 5;
	//if age sis smaller than or equal to 6.
	if($age <= 6) {
		//it is true
		echo " yes you can sleep at lunchtime";
	}else{
		//it is false
		echo "no, you are at school";
	}
?>

<br>

<?php
 //loop
 
 for ($i=1; $i <= $age; $i=$i+1){
	//if condition is true
	echo $i;
	
	}
 ?>
 <br>
 
 <?php
	
	echo "today is ".date("d.m.Y H:i ");
	
 ?>