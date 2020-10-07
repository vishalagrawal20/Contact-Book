<?php ?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="">
    <style>
    *{
    padding: 0px;
        margin: 0px;}
        body{
            background-size: cover;
            font-family: sans-serif;
            background-repeat: no-repeat;
            background-color:lightgrey;
        }
        .box{
            position: absolute;
            left: 50%;
            top: 50%;
            background-color: black;
            transform: translate(-50%,-50%);
            width: 350px;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 20px;
            box-shadow: 0 15px 15px rgba(0,0,0,.5);
        }
        h2{
            text-align: center;
            margin: 0 0 30px;
            padding: 0px;
            color: white;
            
        }
        .box .inputbox{
            position: relative;
        }
       
        .box .inputbox input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            margin-bottom: 10px;
            border: none;
            outline: none;
            background:transparent;
            border-bottom: 1px solid white;
        }
         .box .inputbox label{
            position: absolute;
            left: 0;
            top: 0;
             padding: 10px 0;
            font-size: 16px;
            color: white;
            pointer-events: none;
            transition: .5s;
            
        }
        .box .inputbox input:focus~label, .box .inputbox input:valid~label{
            top: -20px;
            left: 0;
            color: deepskyblue;
            font-size: 12px;
        }
        .box input[type="submit"]{
            margin-top: 10px;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            background:grey;
            padding: 10px 40px;
            border-radius: 5px;
            cursor: pointer;
            
        }
         .sub1 {
            height: 100px;
            width: 100%;
            background-color: coral;
            position: sticky;
            top: 0;
        }

        .nav a {
            color: white;
            font-size: 150%;
            float: right;
            margin: 10px;
            margin-top: 5%;
            text-decoration: none;
        }
        .nav a:hover{
            color: cadetblue;
        }

        .sub1 nav img {
            width: 20%;
            height: 70px;
        }
    </style>
</head>

<body>
   <div class="sub1">
            <nav class="nav">
                
                <a href="register.html">Sign Up</a>
                <a href="">Explore</a>
                <a href="">About us</a>
                <a href="home.html">Home</a>
            </nav>
        </div>
   <div class="container">
    <div class="box">
      
        <h2>Login</h2>
        <form action="logging.php" method="post">
            <div class="inputbox">
                <input name="name1" type="email" required>
                <label>email</label>
            </div>
            <div class="inputbox">
                <input  name="password" type="password" required>
                <label>password</label>
            </div>
           
                <input  name="submit" type="submit" value="submit"><br><br>
				<a href="" style="color:white">Forgot Password?</a>
        
        </form>
    </div>
    </div>
</body>
</html>
