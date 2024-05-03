<?php

require 'php/connection.php';


if(!empty($_SESSION["uname"]) && !empty($_SESSION["role"])){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from rooms where id = $id";
        $result = mysqli_query($conn, $query);
        $fetch = mysqli_fetch_assoc($result);   
    }
}else{
    header('location: index.php');
}

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $datein = $_POST['datein'];
    $addons = $_POST['addons'];
    $roomno = $fetch['room-no'];
    $amenities = $fetch['amenities'];
    $image = $fetch['image'];
    $price = $fetch['price'];
    $status = $fetch['status'];
   
    $query = "INSERT INTO `reservation` (`id`, `fname`, `lname`, `email`, `date_in`, `addons`, `room-no`, `amenities`, `price`, `image`, `status`) VALUES 
                                        ('','$fname','$lname','$email','$datein','$addons','$roomno','$amenities','$price','$image','$status')";
    mysqli_query($conn, $query);

    header("location: thankyou.php");
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
            <a class="btn" href="boardinghouse.php"><button>Back</button></a>
        </nav>

        <div class="breaker"></div>

        <div class="bookingform">
            <form class="form" method="post">
                <div class="roominfo">   
                    <p>The Selected room is Room <?php echo $fetch['room-no']; ?></p>
                    <img src="<?php echo $fetch['image'];?>" height="200" width="200" alt="">
                    <p>Price: <?php echo $fetch['price']?></p>
                    <p>Amenities: <?php echo $fetch['amenities']?></p>
                </div>
             
                <p>enjoy and have fun!</p>
                <div class="flex">
                    <label>
                        <span>Firstname</span>
                        <input placeholder="" type="text" name="fname" class="input">
                    </label>
            
                    <label>
                        <span>Lastname</span>
                        <input placeholder="" type="text" name="lname" class="input"> 
                    </label>
                </div>
            
                <label>
                    <span>Email</span>
                    <input placeholder="" type="email" name="email" class="input">
                </label>

                <label>
                    <span>Date</span>
                    <input placeholder="" type="date" name="datein" class="input">
                </label>
            
                <label>
                    <span>additional request about the room you have picked </span>
                    <input placeholder="" type="text" name="addons" class="input">
                </label>
                <div><a href="boardinghouse.php"><button name='submit' class="submit">Submit</button></a></div>
                <p class="signin">your information will be monitored and safe after
                    pressing submit button.
                </p>
            </form>
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
        }.section1 > :nth-child(2 of .breaker){
            height: 70px;
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

        .footer {
            place-content: center;
            text-align: center;
            height: 35px;
            background-color: black;
            color: white;

        }

        .bookingform {
            height: 800px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .roominfo{
            display: flex;
            flex-direction: column;
        }.roominfo img{
            margin: 10px auto 10px auto;
        }.roominfo p{
            padding: 5px 0 5px 0;
        }

        .form {
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 550px;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            position: relative;
        }

        form p{
            letter-spacing: -1px;
            text-align: center;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: royalblue;
        }

        .flex {
            display: flex;
            width: 100%;
            gap: 6px;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 10px;
            font-size: 24px;
        }

        .submit {
            border: none;
            outline: none;
            background-color: royalblue;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transform: .3s ease;
            width: 150px;
        }

        .submit:hover {
            background-color: rgb(56, 90, 194);
        }
</body>
</html>
        
        