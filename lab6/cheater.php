<!DOCTYPE html>
<html>
	<head>
		<title>Grade Store</title>
		<link href="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/pResources/gradestore.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<?php
		# Ex 4 : 
		# Check the existance of each parameter using the PHP function 'isset'.
		# Check the blankness of an element in $_POST by comparing it to the empty string.
		# (can also use the element itself as a Boolean test!)
		# if (){
		?>

		<!-- Ex 4 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't fill out the form completely. Try again?</p>
		--> 

		<?php
		# Ex 5 : 
		# Check if the name is composed of alphabets, dash(-), ora single white space.
		# } elseif () { 
		?>

		<!-- Ex 5 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't provide a valid name. Try again?</p>
		--> 

		<?php
		# Ex 5 : 
		# Check if the credit card number is composed of exactly 16 digits.
		# Check if the Visa card starts with 4 and MasterCard starts with 5. 
		# } elseif () {
		?>

		<!-- Ex 5 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't provide a valid credit card number. Try again?</p>
		--> 

		<?php
		# if all the validation and check are passed 
		# } else {
		?>

		<h1>Thanks, looser!</h1>
		<p>Your information has been recorded.</p>
		
		<!-- Ex 2: display submitted data -->
		
		<?php   $name = $_POST["name"];
				$id = $_POST["id"];
				$names = array($_POST["CSE326"],$_POST["CSE107"],$_POST["CSE603"],$_POST["CIN870"]);
				$grade = $_POST["grade"];
				$creditcard = $_POST["creditcard"];
				$cardtype = $_POST["cc"];?>
		<ul> 
			<li>Name: <?=$name?></li> 
			<li>ID: <?=$id?></li> 
			<!-- use the 'processCheckbox' function to display selected courses -->
			<li>Course: <?= processCheckbox($names)?></li> 
			<li>Grade: <?= $grade?></li> 
			<li>Credit: <?=$creditcard?> (<?=$cardtype?>) </li> 
		</ul>
		
		<!-- Ex 3 : 
			<p>Here are all the loosers who have submitted here:</p> -->
		<?php
			$filename = "loosers.txt";
			$contents = file_get_contents($filename);
			$contents .="$name;$id;$creditcard;$cardtype";
			/* Ex 3: 
			 * Save the submitted data to the file 'loosers.txt' in the format of : "name;id;cardnumber;cardtype".
			 * For example, "Scott Lee;20110115238;4300523877775238;visa"
			 */
		?>
		
		<?= $contents?>
		<!-- Ex 3: Show the complete contents of "loosers.txt".
			 Place the file contents into an HTML <pre> element to preserve whitespace -->

		
		<?php
		# }
		?>
		
		<?php
			/* Ex 2: 
			 * Assume that the argument to this function is array of names for the checkboxes ("cse326", "cse107", "cse603", "cin870")
			 * 
			 * The function checks whether the checkbox is selected or not and 
			 * collects all the selected checkboxes into a single string with comma seperation.
			 * For example, "cse326, cse603, cin870"
			 */
			 

			function processCheckbox($names){
				
				$class_name = array("CSE326", "CSE107", "CSE603", "CIN870");
				
				for ($i = 0; $i < 4; $i++) {
					if($names[$i]=="on"){
						if($i==0){
							$s=$s.$class_name[$i];
						}
						else{
							$s=$s.",".$class_name[$i];
						}
						
						}
					}
					return $s;
				}
				
		?>
		
	</body>
</html>
