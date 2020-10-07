<?php 
include_once("connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = trim($_POST['name1']);

    $password = trim($_POST['password']);

} else {

    die('getted');

}




//fetching User from the database

//



$getQuery = "SELECT * FROM `user` where `email` = '$email' and `password` = '$password' ;";

$result = mysqli_query($connection, $getQuery);



$userData = mysqli_fetch_array($result);

if (!$userData) {

    die('Invalid password and email combination.');

}

$user_email = $userData['email'];

$_SESSION['user'] = $user_email;

header('location:dashbord.php');
?>