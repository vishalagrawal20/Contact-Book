<?php



require "connection.php";


if (!isset($_SESSION['user'])) {

    header("location: home.html");

} else {

    $user_email = $_SESSION['user'];



        $getQuery = "SELECT * FROM `data` where `email`=$user_email";

        $result = mysqli_query($connection,$getQuery);

 

}
$set=0;
if(isset($_REQUEST['search'])){
	$value=$_REQUEST['name2'];
	$set=1;
}
if(isset($_REQUEST['search1'])){
	$value=$_REQUEST['name3'];
	$set=2;
}
if(isset($_REQUEST['search2'])){
	$set=3;
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Files</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
.form1 input{
	float:left;
	margin-top:20px;
	
}
.form2 input{
	float:right;
}


</style>


</head>

<body>
    <div class="container" style="margin-top: 50px; ">

        <div class="col-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3>All Your Contacts</h3>

                </div>

                <div style="padding: 10px;">

                    <br>

                        <a  href="dashbord.php"><button class="btn btn-sm btn-primary">Home</button></a> 

                        <a  href="addfile.php"><button class="btn btn-sm btn-primary">Add Contacts</button></a>&nbsp;
						<form class="form1" action="files.php" method="post" autocomplete="off" enctype="multipart/form-data">
						<input style="width:180px;" type="text" name="name2" class="form-control" value="">
						<input style="width:180px;" type="submit" name="search" class="btn btn-block btn-success" value="Search by name">&nbsp;
						</form>
						<form class="form2" action="files.php" method="post" autocomplete="off" enctype="multipart/form-data">
						<input style="width:180px;" type="text" name="name3" class="form-control" value="">
						<input style="width:180px;" type="submit" name="search1" class="btn btn-block btn-success" value="Search by email">
						</form>
						<form class="form3" action="files.php" method="post" autocomplete="off" enctype="multipart/form-data">
						<input style="width:397px;" type="submit" name="search2" class="btn btn-block btn-success" value="All Contacts">
						</form>

                    <br><br>

                    <table class="table table-bordered">

                      <thead class="thead-dark" style="background: #2e6fa7; color: white;">

                        <tr>

                          <th scope="col">#</th>

                         
                           <th scope="col">Name</th>
                          <th scope="col">Email </th>

                          <th scope="col">Address</th>
						  
						  <th scope="col">Gender</th>
						  
                          <th scope="col">Contact Number</th>


                        </tr>

                      </thead>

                      <tbody>

                        <?php $count = 0; ?>

                        <?php 
						
						   if($set==0 or $set==3 ){
						   $fileQuery ="SELECT  *  FROM `data` where o_email='$_SESSION[user]'" ;}
						   else if($set==1){
							   $fileQuery ="SELECT  *  FROM `data` where o_email='$_SESSION[user]' and name='$value'" ;
						   }
						   else{
							   $fileQuery ="SELECT  *  FROM `data` where o_email='$_SESSION[user]' and email='$value'" ;
						   }
							$getFileResult = mysqli_query($connection,$fileQuery);
								
							while($row=mysqli_fetch_array($getFileResult)){
								$user=$row['o_email'];
								
								$createdUserQuery =  "SELECT  `name`  FROM `data` WHERE `o_email` = '$user' ;";

                                $getCreatedUserResult = mysqli_query($connection,$createdUserQuery );
								
								$userrow=mysqli_fetch_array($getCreatedUserResult);
							$username=$userrow['name'];
							
							?>
							
                            <?php                             

                                $count++;
                             ?>

                            <tr>

                              <th scope="row"><?php echo $count; ?></th>
							  <td><?php echo $row['name']; ?></td>
							  <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['address']; ?></td>

                              <td><?php echo $row['gender']; ?></td>

                             <td><?php echo $row['number']; ?></td>

                              
							  <td>

                              
                                  
								<?php if ($user == $_SESSION['user']): ?>  
                                  

                                    <a  href="deletefile.php" ><button class="btn btn-sm btn-danger">Delete</button></a> 
									<a  href="update.php" ><button class="btn btn-sm btn-danger">Update</button></a> 

                                  <?php endif ?>
								
						
</td>

                             </tr>
							   
							   <?php
							} 
							
							?>
							
						

                      </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- adding footer -->

        <footer style="margin-top: 100px;">

            

        </footer>

        <!-- footer end -->

    </div> 

    <!-- End Container     -->
</body>
</html>
