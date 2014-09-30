<?php

$major = $_GET["major"];

?>

<!DOCTYPE html>
<html>
<body>
<head>
	<title>Page 2</title>
<head>

<?php

switch ($major)

{

case "journalism":
$full_major = "Journalism";
$outlook = "poor bastard";
break;

case "labor":
$full_major = "Labor Studies";
$outlook = "poor bastard";
break;

case "art":
$full_major = "Art";
$outlook = "you'll be homeless";
break;

default:
$outlook = "something man I don't know";
break;

}

echo "<p>your major is " . $full_major . "</p>";
echo "<p>Your career outlook is... ";
echo $outlook;

?>

</body>
</html>