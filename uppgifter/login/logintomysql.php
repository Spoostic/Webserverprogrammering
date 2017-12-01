<?php

$dbc = mysqli_connect("localhost","root","","login");

$username = $_POST["usnm"];
$password = $_POST["psw"];

$query = "select * from users where name ='$username' and password='$password';";

mysqli_query($dbc,$query);

$result = mysqli_query($dbc,$query);

if($row = mysqli_fetch_array($result)){

echo "Welcome!";
}
else {
	echo "Wrong account details!";
}
?>