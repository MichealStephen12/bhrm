<!-- <?php
require 'connection.php';

if(!empty($_SESSION['uname']) && !empty($_SESSION['role'])){
    header("Location: ../index.php");
}


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = array();
    
    if(empty($email) && empty($password)){
        array_push($errors,"Missing all fields");
    }elseif(empty($email)){
        array_push($errors,"Missing Email");
    }elseif(empty($password)){
        array_push($errors,"Missing Password");
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Email is not valid.");
    }

    $query = "SELECT * FROM `users` WHERE uname = '$email' and pass = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if(count($errors) > 0){
        foreach ($errors as $error){
            echo "<div>$error</div>";
        }
    }if(mysqli_num_rows($result)){
        $role = $row['role'];
        if($role == 'admin'){
            $_SESSION["uname"] = $row['uname'];
            $_SESSION["role"] = $row["role"];
            header("Location: /bhrm/index.php");
        }
        if($role == 'user'){
            $_SESSION["uname"] = $row['uname'];
            $_SESSION["role"] = $row["role"];
            header("Location: /bhrm/index.php");
        }
        if($role == 'landlord'){
            $_SESSION["uname"] = $row['uname'];
            $_SESSION["role"] = $row["role"];
            header("Location: /bhrm/boardinghouse.php");
        }
    }else{
        echo "Account is not found.";
    }
}
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form method="post">
            <h2>Login</h2><br>
            <label for="">Email:</label><br>
            <input type="email" name="email" placeholder ="Enter Here.."><br><br>
            <label for="">Password:</label><br>
            <input type="password"  name="password" placeholder ="Enter Here.."><br><br>
            <input type="submit" name="submit" value="Submit"><br><br>
            <p>No account? register <a href="signup.php">>here<</a></p>
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
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            border: 1px solid black;
            background-color: rgb(221, 221, 221);
            border-radius: 5px; 
            padding: 20px;
            box-shadow: 10px 10px 1px rgba(0, 0, 0, 0.1); 
            font-size: 20px;
            width: 300px;
        }form h2{
            text-align: center;
        }form a{
            color: black;
        }input[type=email]{
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
</body>
</html>