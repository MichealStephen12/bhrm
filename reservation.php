<?php require 'php/connection.php';

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
    <section>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="boardinghouse.php">Back</a></li>
            </ul>
        </nav>

        <div class="content">
            <table>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Date in</th>
                  <th>Add ons</th>
                  <th>Amenities</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
        
        <?php
            if(empty($_SESSION) || $_SESSION['role'] == 'user' || $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'landlord'){
                $query = "select * from reservation";
                $result = mysqli_query($conn, $query);
                while ($fetch = mysqli_fetch_assoc($result)){
                $id = $fetch['id'];
            ?>
                <tr>
                    <td><?php echo $fetch['fname']?></td>
                    <td><?php echo $fetch['lname']?></td>
                    <td><?php echo $fetch['email']?></td>
                    <td><?php echo $fetch['date_in']?></td>
                    <td><?php echo $fetch['addons']?></td>
                    <td><?php echo $fetch['amenities']?></td>
                    <td><?php echo $fetch['price']?></td>
                    <td><?php echo $fetch['image']?></td>
                    <td><?php echo $fetch['status']?></td>
                    <td>
                        <a href=""><button>Update</button></a>
                        <a href=""><button>Delete</button></a>
                    </td>
                </tr>
        <?php  }}?>
              </table>
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
            color: rgb(255, 255, 255);
            cursor: pointer;
        }

        nav{
            position: fixed;
            padding: 20px;
            width: 200px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: black;
        }ul{
            padding-top: 40px;
        }li{
            text-align: center;
            list-style: none;
            font-size: 20px;
            border: none;
            border-radius: 10px;
            padding: 10px;
            margin: 20px 0px 0px 0px;
            background-color: rgb(12, 131, 211);
        }li:first-child{
            margin: 0 0px 0px 0px;
        }
        li:last-child{
            margin: 600px 0px 0px 0px;
        }

        .content{
            padding-top: 300px;
            display: flex;
            justify-content: center;
           
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }th{
            padding: 0px 10px 0px 10px;
        }td{
            text-align: center;
        }table, td, th{
            border: 1px solid;
        }th, td{
            padding: 20px;
        }
    </style>
</body>
</html>