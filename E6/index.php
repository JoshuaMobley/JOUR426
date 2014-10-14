<?php

$limit = $_GET{"count"};

?>

<!DOCTPE html>

<html>

<head>
	<title>Joshua Mobley E6</title>
	<link rel="stylesheet" href="style.css" style="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>

<?php


$counter = 0;

while ($counter < $limit)

{
	echo "Counter Value is: $counter <br />";
	$counter++;
}

?>

</body>

</html>