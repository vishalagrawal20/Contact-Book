<?php

require "connection.php";

if (!isset($_SESSION['user'])) {
    header("location: home.html");
    die();
} 


$user_email=$_SESSION['user'];
$email=$_POST["email"];
$name = ($_POST["name"]);
$address=$_POST["address"];
$gender=$_POST["gender"];
$number=$_POST["number"];
$query = "INSERT INTO data(email,name,address,gender,number,o_email) VALUES('$email','$name','$address','$gender','$number','$user_email')";
$run=mysqli_query($connection, $query);
 if($run){
 header("location: dashbord.php");}
 else{
	 die();
 }

?>