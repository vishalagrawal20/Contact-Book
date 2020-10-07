<?php



require "connection.php";





//Protecting Pages

if (!isset($_SESSION['user'])) {

    header("location: home.html");

}

session_destroy();

header("location: home.html");