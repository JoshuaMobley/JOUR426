<?php

$user_id = $_POST["userid"];
$password = $_POST["password"]

?>

<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>

<body>

	<h1>Results</h1>
	
	<p>User Id: <?= $user_id ?></p>
	<p>Password: <?= $password ?></p>

</body>

<?php

if $password = "password" {
	echo "Authentication Successful";
}

else {
	echo "Intruder!!!!";
}

?>

</html>