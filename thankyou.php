<?php
require 'php/connection.php';

if(!empty($_SESSION["uname"]) && !empty($_SESSION["role"])){
    $uname = $_SESSION["uname"];
    $role = $_SESSION["role"];
    $result = mysqli_query($conn, "select * from users where uname = '$uname'");
    $fetch = mysqli_fetch_assoc($result);
}else{
    echo '<script> alert("YOU MUST LOG IN FIRST")</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <section class="section1">
        <nav>
            <img src="images/logo.png" width="80" height="80" alt="">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <a class="btn" href="index.php"><button>Back</button></a>

        </nav>

        <div class="content">
            <h1> Thank you For Booking in!
                <?php if(empty($_SESSION)){echo '';} else {echo $fetch['fname'];}?>
            </h1>
            <p>"We would like to express our deepest gratitude to all our valued tenants for choosing Azzians Place as your home away from home. Your trust and confidence in our services have greatly contributed to our success and growth. It's been a privilege to serve you, and we look forward to providing you with the comfort and convenience you've come to expect from us. Thank you for being a part of our Azzians Place family."
                now just wait for our confirmation and visit us for further discussions. 
            </p>
        </div>

        <div class="breaker"></div>

        <div class="footer">
            <p>Copyright ©2024 All rights reserved | This template is made with by BHRM Devs</p>
        </div>

    </section>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: sans-serif;

        }

        a {
            color: white;
            cursor: pointer;
        }

        .section1 {
            height: 100vh;
            background-image: url(images/pxfuel.jpg);
            background-size: cover;
        }

        .breaker {
            height: 35px;
        }.section1 > :nth-child(1 of .breaker){
            height: 89px;
        }

        nav {
            height: 70px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: black;
        }

        nav .btn {
            place-content: center;
            cursor: pointer;
            
        }

        nav button {
            background-color: rgb(21, 157, 219);
            color: white;
            border: none;
            padding: 15px;
            text-align: center;
            border-radius: 20px;
            width: 100px;
        }

        ul {
            display: flex;
            padding: 20px;
            justify-content: center;
        }

        li {
            padding-left: 30px;
            list-style: none;
            font-size: 24px;
        }

        li:first-child {
            padding-left: 0;
        }

        .content {
            height: 80vh;
            place-content: center;
            text-align: center;
            margin-left: 150px;
            margin-right: 150px;
            color: white;
            border-radius: 30px;
            font-size: 20px;

        }.content p{
            margin: auto;
            text-align: center;
            width: 800px;
        }

        .content h1 {
            padding: 20px;
        }

        .footer {
            place-content: center;
            text-align: center;
            height: 35px;
            background-color: black;
            color: white;
        }

       
    </style>

</body>

</html>