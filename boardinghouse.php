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
                <li><a href="">Rooms</a></li>
                <li><a href="">About Dodge Boarding House</a></li>
                <li><a href="">Contact</a></li>
                
            </ul>
            <a class="btn" href="index.php"><button>Back</button></a>
        </nav>

        <div class="breaker"></div>

        <div class="content2">
            <h1>Welcome to
                <?php echo $fetch["hname"]?>
            </h1>
            <img src="<?php echo $fetch["image"]?>" width="1000" alt="">
        </div>

        <div class="breaker"></div>

        <div class="description">
            <p> Introducing Azzians Place: The Epitome of Comfort and Convenience in Maranding, Lala, Lanao del Norte </p>
            <p>Located in the serene town of Maranding, Lala, Lanao del Norte, Azzians Place stands as the premier boarding house, offering an unparalleled living experience for students and professionals alike.</p>
            <p>At Azzians Place, we understand the importance of a comfortable and conducive living environment. Our spacious and well-appointed rooms provide a haven for relaxation and productivity. Each room is thoughtfully designed with modern furnishings, ensuring a cozy and inviting atmosphere.</p>
        </div>

        <div class="breaker"></div>

        <div class="rooms">
            <h1>Rooms</h1>
            <div class="roomcontent">
                <div class="col">
                    <h1>Room 1</h1>
                    <img src="beds/dfghdfh.jpg" alt="">
                    <p>Price: P 1000</p>
                    <p>Amenities: Wifi And Cr</p>
                    <p>Beds: Only 1 Single Bed</p>
                    <a href="book-in.php"><button>Book now</button></a>
                </div>
                <div class="col">
                    <h1>Room 2</h1>
                    <img src="beds/drtd.jpg" alt="">
                    <p>Price: P 1000</p>
                    <p>Amenities: Wifi And Cr</p>
                    <p>Beds: Only 1 Single Bed</p>
                    <a href="book-in.php"><button>Book now</button></a>
                </div>
                <div class="col">
                    <h1>Room 3</h1>
                    <img src="beds/sdfghdsf.jpg" alt="">
                    <p>Price: P 1000</p>
                    <p>Amenities: Wifi And Cr</p>
                    <p>Beds: Only 1 Single Bed</p>
                    <a href="book-in.php"><button>Book now</button></a>
                </div>
                <div class="col">
                    <h1>Room 4</h1>
                    <img src="beds/sgsdgs.jpg" alt="">
                    <p>Price: P 1000</p>
                    <p>Amenities: Wifi And Cr</p>
                    <p>Beds: Only 1 Single Bed</p>
                    <a href="book-in.php"><button>Book now</button></a>
                </div>
            </div>
        </div>

        <div class="breaker"></div>

        <div class="description">
            <p> Azzians Place: Serving Maranding with Excellence for 3 Years </p>
            <p>For the past three years, Azzians Place has been a trusted and reliable provider of exceptional boarding services in the beautiful town of Maranding, Lala, Lanao del Norte. Since our establishment, we have been committed to delivering an unmatched living experience to our residents.</p>
            <p>Throughout these years, Azzians Place has become a beloved and integral part of the Maranding community. We have built strong relationships with our residents, creating a warm and welcoming atmosphere that feels like home. Our dedication to customer satisfaction has earned us a stellar reputation as the go-to boarding house in the area.</p>
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
            font-size: 13px;
        }

        li:first-child {
            padding-left: 0;
        }

        .section2 {
            height: auto;
            margin: 0 400px 0 400px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 0 20px 0 20px;
        }

        .section2 >:first-child{
            margin: -20px;
        }.section2 >:last-child{
            margin: -20px;
        }

        .breaker {
            height: 50px;
        }.section2 > :nth-child(0 of .breaker){
            height: 72px;
        }

        .content2 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 450px;
        }
        .content2 h1 {
            padding: 10px;
        }
        .content2 img{
            width: 50%;
        }


        .description {
            height: 230px;
            place-content: center;
            text-align: justify;
        }.section2 > :nth-child(2 of .description){
            height: 250px;
            place-content: center;
            text-align: justify;
        }
        .description p {
            padding: 10px;
            font-size: 19px;
        }

        .rooms {
            height: 400px;
        }

        .roomcontent {
            display: flex;
            justify-content: center;
        }

        .roomcontent .col{
            padding: 20px;
            margin: 0 10px 0 10px ;
            transition: 0.3s;
            border: 1px solid black;
            width: 100%;
        }.roomcontent .col:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .roomcontent .col img{
            padding: auto;
            width:  200px;
            height: 150px;
        }

        .rooms h1 {
            text-align: center;
            padding: 10px;
        }
    

        .footer {
            place-content: center;
            text-align: center;
            height: 49px;
            background-color: black;
            color: white;
        }

    </style>

</body>
</html>