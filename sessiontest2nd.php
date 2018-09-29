<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Test 2nd</title>
</head>
<body>

	<?php
	$_SESSION("favcolor") = "yellow";
	print_r($_SESSION);
	?>

</body>
</html>