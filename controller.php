<?php
// superglobal variable
$age = $_GET['age'];
if (!empty($age) && isset($age)) {
	 
	 switch ($age) {
	 	case 20:
	 		echo "You are Younger then others!";
	 		break;
	 	case 30:
	 		echo "Your are under 40";
	 		break;
	 	case 40:
	 		echo "You are under 50";
	 		break;
	 	default:
	 		echo "Sorry, you are not in this range of age!";
	 		break;
	 }
}
else{
	echo "please fill out the form!";
}

?>