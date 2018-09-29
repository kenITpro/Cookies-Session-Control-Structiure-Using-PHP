<?php
	$cookie_name = "kenneth";
	$cookie_password = "doria";
	setcookie($cookie_name, $cookie_password, time()+(86400*30),"/"); //86400 is 1day
?>
<!DOCTYPE html>
<html>
<head>
	<title>Using Cookies</title>
</head>
<body>
	<?php
		if (!isset($_COOKIE[$cookie_name])) {
			echo "Cookie Name ".'$cookie_name'." is not set!";
		}
		else {
			echo "Cookie ".'cookie_name'." is set! <br>";
			echo "Value is: ".$_COOKIE[$cookie_name];
		}
	?>
</body>
</html>