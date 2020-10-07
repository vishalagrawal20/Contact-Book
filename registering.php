<html>
<head>
<title>register</title>
</head>
<body style="background-color:black;width:100%,height:200px;color:white;text-align:center;">
<?php
include_once("connection.php");
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['repassword'];

    if (empty($name) or empty($email) or empty($password) or empty($confirm_password)) {
        die("All field's are compulsory.");
    }
    if ($password != $confirm_password) {
        die("password mismatched");
    }
    if (!stripos($email, '@')) {
        die("Invalid email address.");
    }
	$result=mysqli_query($connection,"select * from user where email='$email'");
	$num=mysqli_num_rows($result);
	if($num>=1){
		echo "<script>
	alert('email id already exist...plz use another email');
	window.location.href='register.html';</script>";
	}
	else{
	$query="insert into user(name,email,password) values('$name','$email','$password')";
	$run=mysqli_query($connection,$query);
	if($run){
	echo "<script>
	alert('data inserted successfully....login now');
	window.location.href='login.php';</script>";}
	else{
		echo "error:".mysqli_error($connection);
	}}
}
else {
    die('error');
}





//Now we can insert this data into the database

//Remember to write query in between double quotes.


	

?>

</body>
</html>
