<?php

    include_once("connection.php");





if (!isset($_SESSION['user'])) {

    header("location:login.php");

    die();

} else {



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

                    <h3>Add Your Contacts</h3>

                </div>

                <div style="padding: 10px;">

                    <form action="postaddfile.php" method="post" autocomplete="off" enctype="multipart/form-data">

                        

                        <div class="form-group">

                            <label for="name">Name</label>

                            <input type="text" name="name" required="required" class="form-control" value="">

                        </div>                       

                        <div class="form-group">

                            <label for="email">Email Id</label>

                            <input type="text" name="email" class="form-control" value="">

                        </div> 
				

                        <div class="form-group">

                            <label for="address">Address</label>

                            <input type="text" name="address" class="form-control" value="">

                        </div>  
						<div class="form-group">

                            <label for="gender">Gender-->MALE/FEMALE/OTHER</label>

                            <input type="text" name="gender" class="form-control" value="">

                        </div>  
						<div class="form-group">

                            <label for="number">Contact Number</label>
                              <input type="number" name="number" class="form-control" value="">

                        </div>  
					
                        <input type="submit"  class="btn btn-block btn-success" value="Add Contacts">

                    </form>

                </div>

            </div>

        </div>

       

        <footer style="margin-top: 100px;">

            

        </footer>

    </div> 

</body>