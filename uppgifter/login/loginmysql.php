<?php

$dbc = mysqli_connect("localhost","root","","login");
$username = $_POST["usnm"];
$name = $_POST["nm"];
$email = $_POST["eml"];
$date = $_POST["dob"];
$password = $_POST["psw"];

$query = "insert into users(name ,username, email, date, password) VALUES ('$username','$name','$email','$date','$password');";

if(mysqli_query($dbc,$query)){
	echo "It worked.";
	
}
else{
	echo "it didnt work.";
	echo mysqli_error($dbc);
}
?>
