<?php





require "connection.php";


$user_email=$_SESSION['user'];

$fileQuery =  "SELECT  *  FROM `data` WHERE 'o_email' = '$user_email';";

$getFileResult = mysqli_query($connection,$fileQuery );


if($getFileResult){
		$fileDeleteQuery = "DELETE FROM `data` WHERE `o_email` ='$user_email'";
		
  mysqli_query($connection,$fileDeleteQuery);
	
	header("location: files.php");
	
	
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}