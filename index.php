<?php
require 'php/connection.php';

if(!empty($_SESSION["uname"]) && !empty($_SESSION["role"])){
    $uname = $_SESSION["uname"];
    $role = $_SESSION["role"];
    $result = mysqli_query($conn, "select * from users where uname = '$uname'");
    $fetch = mysqli_fetch_assoc($result);
}else{
    echo '';
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
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>

            <?php  if ($_SESSION == true){
                    echo '
                    <a class="btn" href="php/logout.php"><button>Logout</button></a>';
                }if($_SESSION == false){
                    echo '<a class="btn" href="php/login.php"><button>Login</button></a>';
                }
                
                ?>
        </nav>

        <div class="content">
            <h1> Welcome to Maranding Boarding House Center
                <?php if(empty($_SESSION)){echo '';} else {echo $fetch['fname'];}?>
            </h1>
            <p>where we show you the best boarding house around Maranding <br>
                please select your desired borading house and have an
                amazing experience and <br> chill moments ahead.
            </p>
        </div>

        <div class="breaker"></div>

        <?php 
            
            if($_SESSION == true){
                if($_SESSION['role'] == "admin"){
            ?>
            <div class="add-boarding">
                <div>
                    <a href="php/addbh.php">Add Boarding House</a>
                </div>
            </div>

        <?php }}?>

        <div class="boardinghouse">
            <?php
            if(empty($_SESSION) || $_SESSION['role'] == 'user' || $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'landlord'){
                $query = "select * from boardinghouses";
                $result = mysqli_query($conn, $query);
                while ($fetch = mysqli_fetch_assoc($result)){
                $id = $fetch['id'];
            ?>
            <div class="col">
                <img src="<?php echo $fetch["image"]?>" alt="">
                <h1>Name:<?php echo $fetch["hname"]?></h1>
                <p>Address:<?php echo $fetch["haddress"]?></p>
                <p>Availability:<?php echo $fetch["status"]?></p>
                <p>Price: P <?php echo $fetch["price"]?></p>
                <a href="boardinghouse.php?id=<?php echo $id;?>"><button id="btn">Book Now!</button></a>
            </div>
            <?php  }} ?>
        </div>
    </section>

    <div class="footer">
        <p>Copyright ©2024 All rights reserved | This template is made with by BHRM Devs</p>
    </div>

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
            height: 97vh;
            background-image: url(images/pxfuel.jpg);
            background-size: cover;

        }

        .breaker {
            height: 35px;
        }

        nav {
            height: 70px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: black;
            top: 0;
            position: sticky;
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
            width: 110px;
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
            height: 250px;
            place-content: center;
            text-align: center;
            margin-left: 150px;
            margin-right: 150px;
            color: white;
            border-radius: 30px;
        }

        .content h1 {
            padding: 20px;
        }

        .add-boarding{
            height: 50px;

            margin: 0px 50px 10px 180px;
            background-color: rgb(21, 157, 219);
            color: white;
            border: none;
            padding: 15px;
            width: 190px;
            text-align: center;
            border-radius: 20px
        }

        .boardinghouse {
            height: 500px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-left: 150px;
            margin-right: 150px;
            background-color: rgb(0, 0, 0);
            border-radius: 30px;
        }

        .boardinghouse p {
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .boardinghouse button {
            background-color: rgb(21, 157, 219);
            color: white;
            border: none;
            padding: 15px;
            width: 110px;
            margin-top: 8px;
        }

        .col {
            padding: 30px;
            border: 1px solid white;
            border-radius: 20px;

            color: white;
        }

        .col img {
            place-content: center;
            width: 100%;
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