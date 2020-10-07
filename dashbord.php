<?php 

    require "connection.php";



if (!isset($_SESSION['user'])) {

    header("location: home.html");

}

   else {
		$user_email = $_SESSION['user'];

        $getQuery = "SELECT * FROM `user` where `email`=$user_email ";

        $result = mysqli_query($connection,$getQuery);
        
    }

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Dashbord</title>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body style="background-color:gray">

    <div class="container" style="margin-top: 50px; width: 850px\;">


        <div class="row" style="border: 2px solid #CCC;">
 
           <li><button class="btn btn-block btn-danger"><h3>Welcome: <?php echo $user_email;?> in Contact Me</h3></button></li><br>


		   <!-- Main Content -->

            <div class="col-md-4">

                <!-- Sidebar -->

                

                <ul style="list-style: none; text-align: center; padding: 0;">

                  

                    <?php if (isset($_SESSION['user'])): ?>


                        <li><a  href="addfile.php"><button class="btn btn-block btn-primary">Add Contacts</button></a></li><br>

                        <li><a  href="files.php"><button class="btn btn-block btn-primary">All Contacts</button></a></li><br>


                        <li><a  href="logout.php"><button class="btn btn-block btn-danger">Log Out</button></a></li>

                    <?php endif ?>

                    

                </ul>

            </div>

        </div>

        <!-- adding footer -->

        <footer style="margin-top: 100px;">

            

        </footer>

        <!-- footer end -->

    </div> 

    <!-- End Container     -->

</body>