<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Grade</title>
</head>
<body>

<?php

$marks = 86;
if($marks >= 60){
	echo "First Division";
}elseif ($marks >=45 and $marks<=59) {
	echo "Second Division";
}elseif ($marks >=33 and $marks<=44){
	echo "Third Division";
}else{
	echo "Fail";
}

?>


</body>
</html>