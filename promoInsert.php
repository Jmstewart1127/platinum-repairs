<?php
error_reporting(E_ALL);
$link = mysqli_connect('localhost', 'root', '******', 'platinum');
echo $link->connect_errno;

if ($link->connect_errno) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';



$name = $_POST['promo'];

$insert = "INSERT INTO promo (id, promotion)
			VALUES ('', '$name')";

if ($link->query($insert) == true) {
	echo "recorded successfully... Thank you!";
}
else {
	echo "error";
}

$link->close();


?>