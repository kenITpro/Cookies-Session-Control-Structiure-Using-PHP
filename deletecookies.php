<?php
	setcookie("user", time() * 3600); //86400 is 1day
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Cookies</title>
</head>
<body>
	<?php
		echo "Cookie 'user' is deleted";
	?>

</body>
</html>