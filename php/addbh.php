<?php

require 'connection.php';

if(!empty($_SESSION["uname"]) && !empty($_SESSION["role"])){
    echo '';
}else{
    header("location: ../index.php");
}

if(isset($_POST['submit'])){
    $owner = $_POST['owner'];
    $hname = $_POST['hname'];
    $haddress = $_POST['haddress'];

    $_FILES['image'];

    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileactualext = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileactualext, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = $fileName;
                $fileDestination = '../images/'.$fileNameNew;
                if($fileNameNew > 0){
                    move_uploaded_file($fileTmpName, $fileDestination);
                }
                
            }else{
                echo "your file is too big.";
            }
        }
    }else{
        echo "you cannot upload this type of file";
    }
   
    $query = "INSERT INTO `boardinghouses` (`id`, `owner`, `hname`, `haddress`, `image`) VALUES ('','$owner','$hname','$haddress','images/$fileNameNew')";
    mysqli_query($conn, $query);

    header("location: ../index.php");
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
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Add boarding House</h2><br>
            <label for=""> House Owner: </label>
            <input type="text" name="owner"  placeholder="enter here.."><br><br>
            <label for=""> House Name: </label>
            <input type="text" name="hname"  placeholder="enter here.."><br><br>
            <label for=""> House Address: </label>
            <input type="text" name="haddress"  placeholder="enter here.."><br><br>
            <label for=""> Image: </label>
            <input type="file" name="image" placeholder="enter here.."><br><br>
            
            <input type="submit" name="submit" value="Submit">

            <a href="../index.php">Back</a>
        </form>
    </div>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            text-decoration: none;
        }

        .container{
            display: flex;
            justify-content: center;
            margin-top: 50px;
            
        }

        form{
            border: 1px solid black;
            background-color: rgb(221, 221, 221);
            border-radius: 5px; 
            padding: 20px;
            box-shadow: 10px 10px 1px rgba(0, 0, 0, 0.1); 
            font-size: 20px;
        }form h2{
            text-align: center;
        }form a{
            color: black;
        }input[type=text]{
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); 
            font-size: 16px; 
        }input[type=password]{
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); 
            font-size: 16px; 
        }input[type=submit]{
            background-color: rgb(52, 133, 255);
            padding: 10px;
            color: white;
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); 
            font-size: 16px; 
            
        }
    </style>

<body>
</html>