<?php

require 'connection.php';

if(!empty($_SESSION["uname"]) && !empty($_SESSION["role"])){
    header("location: ../index.php");
}

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $conpassword = $_POST['confirmpassword'];

    $query = "SELECT * FROM `users` WHERE uname = '$uname'";
    $result = mysqli_query($conn, $query);

    $errors = array();
    
    if(empty($fname) && empty($lname) && empty($uname) && empty($pass) && empty($conpassword)){
        array_push($errors,"Missing all fields");
    }elseif(empty($fname)){
        array_push($errors,"Missing First Name");
    }elseif(empty($lname)){
        array_push($errors,"Missing Last Name");
    }elseif(empty($uname)){
        array_push($errors,"Missing Email");
    }elseif(empty($pass)){
        array_push($errors,"Missing Password");
    }elseif(!filter_var($uname, FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Email is not valid.");
    }elseif(strlen($pass) < 3){
        array_push($errors,"Password must be 8 characters long.");
    }elseif($pass !== $conpassword){
        array_push($errors,"Password didnt match.");
    }elseif($result && mysqli_num_rows($result) > 0){
        echo "Email already exist..";
    }

    if(count($errors)> 0){
        foreach ($errors as $error){
            echo "<div>$error</div>";
        }
    }else{
        $query = "INSERT INTO `users`(`id`, `fname`, `lname`, `uname`, `pass`, `role`) VALUES ('','$fname','$lname','$uname','$pass', 'user')";
        mysqli_query($conn, $query);
        echo "Successfully added the information.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
<div class="background">
    <div class="head">
        <h2>MBHC</h2>
        <h2>Maranding Boarding House Center</h2>
    </div>
    <div class="form">
        <form method="post">
            <h2>Make an Account</h2>
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder ="Enter Here..">
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder ="Enter Here..">
            <label for="">Email</label>
            <input type="text" name="uname" placeholder ="Enter Here..">
            <label for="">Password</label>
            <input type="password" name="pass" placeholder ="Enter Here..">
            <label for="">Confirm Password</label>
            <input type="password" name="confirmpassword" placeholder="Enter Here..">
            <input type="submit" name="submit" value="Submit"><br> <br>
            <div class="links">    
                <a href="login.php">Login HERE..</a>
                <a class="btn" href="../index.php">Back</a>
            </div>
        
        </form>
      
    </div>
</div>

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }a{
            text-decoration: none;
            color: white;
        }

        .head{
            display: flex;
            justify-content: center;
        }

        .btn{
            padding: 7px;
            background-color: rgb(0, 105, 243);
            border-radius: 6px;
            border: none;
            font-size: 24px;
            color: white;
            width: 90px;
            text-align: center;
        }
        .background{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify 
        }
        
        .form{
            display: flex;
            justify-content: center;
            align-items: center;

            height: 800px;
        }

        form{
            background-color: black;
            border-radius: 15px;
            padding: 20px;
            width: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;

        }form h2{
            background-color: rgb(51, 51, 51);
            text-align: center;
            color: white;
         
        }form label{
            color: white;
            font-size: 24px;
        }input[type=submit]{
            padding: 7px;
            background-color: rgb(0, 105, 243);
            border-radius: 6px;
            border: none;
            font-size: 24px;
            color: white;
            width: 120px;
            margin-top: 20px;
        }input[type=email]{
            padding: 7px;
            font-size: 18px;
            border-radius: 6px;
        }input[type=text]{
            padding: 7px;
            font-size: 18px;
            border-radius: 6px;
        }input[type=password]{
            padding: 7px;
            font-size: 18px;
            border-radius: 6px;
        }input[type=password], input[type=text], input[type=email]{
            width: 300px
        }input{
            margin-top: 3px;
            margin-bottom: 3px;
        }label{
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .links{
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: left;
        }.links a{
            margin-top: 20px;
        }.links a:first-child{
            margin-top: 0px;
            text-align: center;
        }

    </style>
    
</body>
</html>