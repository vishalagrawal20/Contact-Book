<?php

    include_once("connection.php");

if (!isset($_SESSION['user'])) {

    header("location:login.php");

    die();

} else if(isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$number=$_POST['number'];
$user_email=$_SESSION['user'];
$sql= "update data set name='$name',email='$email',address='$address',number='$number' where o_email='$user_email'";
$run=mysqli_query($connection,$sql);
	if($run){
	echo "<script>
	alert('your data updated successfully....');
	window.location.href='dashbord.php';</script>";}
	else{
		echo "error:".mysqli_error($connection);
	}
}
else{
	
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Profile</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>

    <div class="container" style="margin-top: 0px; width:100%; heigth:100%;">

        

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3>Update DATA</h3>

                </div>

                <div style="padding: 10px;">

                    <form action="update.php" method="post" autocomplete="off" enctype="multipart/form-data">

                        

                        <div class="form-group">

                            <label for="name">Name</label>

                            <input type="text" name="name" required="required" class="form-control" value="">

                        </div>                       

                        <div class="form-group">

                            <label for="email">Email</label>

                            <input type="text" name="email" class="form-control" value="">

                        </div> 
				

                        <div class="form-group">

                            <label for="address">Address</label>

                            <input type="text" name="address" class="form-control" value="">

                        </div>  
						<div class="form-group">

                            <label for="number">Contact Number</label>

                            <input type="text" name="number" class="form-control" value="">

                        </div>  
						
                        <input type="submit" name="submit" class="btn btn-block btn-success" value="Update Data">

                    </form>

                </div>

            </div>

        </div>


        <footer style="margin-top: 100px;">

            

        </footer>

        <!-- footer end -->

    </div> 

    <!-- End Container     -->

</body>