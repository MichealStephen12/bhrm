<?php 

require 'php/connection.php';

if(!empty($_SESSION["uname"]) && !empty($_SESSION["role"])){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from boardinghouses where id = $id";
        $result = mysqli_query($conn, $query);
        $fetch = mysqli_fetch_assoc($result);   
    }
    
}else{
    header('location: index.php');
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
    
<section id="section2" class="section2">
        <nav>
            <img src="images/logo.png" width="80" height="80" alt="">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About Dodge Boarding House</a></li>
                <li><a href="">Rooms</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
                
            </ul>
            <a class="btn" href="index.php"><button>Back</button></a>';
        </nav>

    <div class="breaker"></div>
        
        <div class="content2">
            <h1>Welcome to
                <?php echo $fetch["hname"]?>
            </h1>
            <img src="<?php echo $fetch["image"]?>" width="1000" alt="">
        </div>

        <div class="description">
            <p>
                <?php echo $fetch["description"]?>
            </p>
        </div>

        <div class="rooms">
            <h1>Rooms</h1>
            <div class="roomcontent">
                <img src="<?php echo $fetch["rooms"]?>" alt="">
                <img src="<?php echo $fetch["rooms"]?>" alt="">
                <img src="<?php echo $fetch["rooms"]?>" alt="">
                <img src="<?php echo $fetch["rooms"]?>" alt="">
            </div>
        </div>

        <div class="description">
            <p><?php echo $fetch["description"]?></p>

        </div>

        <div class="aminities">
            <h1>Aminities</h1>
            <div class="aminitiescontent">
                <img src="<?php echo $fetch["amenities"]?>" alt="">
                <img src="<?php echo $fetch["amenities"]?>" alt="">
                <img src="<?php echo $fetch["amenities"]?>" alt="">
                <img src="<?php echo $fetch["amenities"]?>" alt="">
            </div>
        </div>


        <div class="breaker"></div>


        <div class="bookingform">
            <form class="form">
                <p class="title">Dodge Boarding House</p>
                <p class="message">Book now and enjoy!</p>
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input">
                        <span>Firstname</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input">
                        <span>Lastname</span>
                    </label>
                </div>

                <label>
                    <input required="" placeholder="" type="email" class="input">
                    <span>Email</span>
                </label>

                <label>
                    <span>Select a room (Gray means Un-avilable or occupied)</span><br><br>
                    <input type="radio"> <label for="">Room 1</label>
                    <input type="radio"> <label for="">Room 2</label>
                    <input type="radio"> <label for="">Room 3</label>
                    <input type="radio"> <label for="">Room 4</label>

                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span>additional request about the room you have picked </span>
                </label>
                <div><button class="submit">Submit</button></div>
                <p class="signin">your information will be monitored and safe after
                    pressing submit button.
                </p>
            </form>
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

        .section2 {
            height: 330vh;
        }

        .content2 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .content2 h1 {
            padding: 25px;
        }


        .description {
            height: 280px;
            place-content: center;
            text-align: center;
        }

        .description p {
            padding: 10px;
            font-size: 19px;
        }

        .rooms {
            height: 495px;
        }

        .roomcontent {
            display: flex;
            justify-content: center;
        }

        .roomcontent img {
            width: 100%;
        }

        .rooms h1 {
            text-align: center;
            padding: 20px;
        }

        .aminities {
            height: 510px;
        }

        .aminitiescontent {
            display: flex;
            justify-content: center;
        }

        .aminities img {
            width: 100%;
        }

        .aminities h1 {
            text-align: center;
            padding: 20px;
        }

         
        .bookingform {
            height: 700px;
            display: flex;
            justify-content: center;
            align-items: center;
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
            font-size: 24px;
        }

        .title {
            font-size: 28px;
            color: royalblue;
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 30px;
        }

        .title::before,
        .title::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            left: 0px;
            background-color: royalblue;
        }

        .title::before {
            width: 18px;
            height: 18px;
            background-color: royalblue;
        }

        .title::after {
            width: 18px;
            height: 18px;
            animation: pulse 1s linear infinite;
        }

        .message,
        .signin {
            color: rgba(88, 87, 87, 0.822);
            font-size: 14px;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: royalblue;
        }

        .signin a:hover {
            text-decoration: underline royalblue;
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

        .form label .input+span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form label .input:placeholder-shown+span {
            top: 15px;
            font-size: 0.9em;
        }

        .form label .input:focus+span,
        .form label .input:valid+span {
            top: 30px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form label .input:valid+span {
            color: green;
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

        @keyframes pulse {
            from {
                transform: scale(0.9);
                opacity: 1;
            }

            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }
    </style>

</body>
</html>