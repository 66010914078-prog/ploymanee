<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พลอยมณี หอมดวง(พลอย)</title>
</head>

<body>
<h1>a.php</h1>

<?php
	$_SESSION['name']='พลอยมณี หอมดวง';
	$_SESSION['nickname']='พลอย';
	
	echo $_SESSION['name']."<br>";
	echo $_SESSION['nickname']."<br>";
?>
</body>
</html>