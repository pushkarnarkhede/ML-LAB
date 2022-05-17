<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>radio</title>
</head>
<body>
<form action="" method="post">
    <label>
        <input type="radio" name="radio" value="Lock & Key">Lock & Key
    </label>
    <label>
        <input type="radio" name="radio" value="Umbrella Academy">Umbrella Academy
    </label>
    <label>
        <input type="radio" name="radio" value="Stranger Things">Stranger Things
    </label>
    <label>
        <input type="radio" name="radio" value="Ozark">Ozark
    </label>
    <input type="submit" name="submit" vlaue="Get Values">
</form>
<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['radio'])) {
        echo '  ' . $_POST['radio'];
    } else {
        echo 'Please select the value.';
    }
    }
?>
</body>
</html>