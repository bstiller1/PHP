<?php
	if(isset($_POST['submitted']))
	{
		$newBgColor = $_POST['bgColor'];
		$newColor = $_POST['txtColor'];
		$newUsername = $_POST['username'];
		define("NEW_TIME", 60*60*24*7);
		setcookie("bgColor", $newBgColor, time() + NEW_TIME);
		setcookie("txtColor", $newColor, time() + NEW_TIME);
		setcookie("username", $newUsername, time() + NEW_TIME);
	}
	if((!isset($_COOKIE['bgColor'])) && (!isset($_COOKIE['txtColor'])) && (!isset($_COOKIE['username'])))
	{
		$bgColor = "White";
		$txtColor = "Black";
		$username = "Guest";	
	} else {
		$bgColor = $_COOKIE['bgColor'];
		$txtColor = $_COOKIE['txtColor'];
		$username = $_COOKIE['username'];	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Example 12.3</title>
</head>

<body bgcolor="<?php echo $bgColor; ?>" text="<?php echo $txtColor; ?>">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div style="width:80%; margin: 10%;">
<h3>Hello, <?php echo $username; ?></h3>
<input type="text" name="username" size="30" />
<h3>Select a background color for the page:</h3>
<select name="bgColor">
<option value=""></option>
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Yellow">Yellow</option>
<option value="Black">Black</option>
<option value="Brown">Brown</option>
<option value="White">White</option>
</select>
<h3>Select a color for the text:</h3>
<select name="txtColor">
<option value=""></option>
	<option value="Green">Green</option>
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Yellow">Yellow</option>
    <option value="Black">Black</option>
    <option value="Brown">Brown</option>
    <option value="White">White</option>
</select>
<p><input type="hidden" name="submitted" value="true" />
   <input type="submit" value="Click here twice to check your settings" /></p>
   </div>
   </form>
</body>
</html>