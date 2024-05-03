<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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

    <style>
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
</body>
</html>
        
        