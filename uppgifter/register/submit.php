<?php

$dbc = mysqli_connect("localhost","root","","login");
$anvandarnamn = $_POST["username"];
$namn = $_POST["name"];
$email = $_POST["email"];
$fodelsedatum = $_POST["dof"];
$losenord = $_POST["password"];

$query = "insert into log(namn ,anvandarnamn, email, fodelsedatum, losenord) VALUES ('$anvandarnamn','$namn','$email','$fodelsedatum','$losenord');";

mysqli_query($dbc,$query);

?>