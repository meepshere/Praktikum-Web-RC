<?php
    session_start();
    if (isset($_SESSION['userID'])){
        header("Location: home.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style2.css">
    <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>
    <title>percobaan m8</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            position: relative;
            background: linear-gradient(263deg, #00000059, #00000036);
        }

        .body-bg {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .bucket {
            width: 25vw;
            background-color: rgba(67, 0, 220, 0.4);
            /* margin: 25vh auto; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 25px;
            font-size: 12pt;
            /* box-shadow: 10px 10px 5px grey; */
        }

        .bucket p {
            text-align: center;
            text-transform: uppercase;
        }

        .login-field {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            /* background: transparent; */
            border: none;
            text-shadow: 0 0 whitesmoke;
            font-weight: 600;
            opacity: 0.8;
            /* color: white; */
            border-radius: 7px;
        }

        .login-btn-submit {
            background-color: #46de4b;
            color: white;
            font-size: 12pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        body{
            background-color: #ebbafa;
        }
    </style>
</head>

<body>
    <header>
        <img src="assets/pic/itera.png" id="logoitera">
        <b>
            Institut Teknologi Sumatera
        </b>
    </header>
    
    <nav>
        <div class="link">
            <li><a> &nbsp&nbsp Sayyid Muhammad Umar Al Haris &nbsp&nbsp |  &nbsp&nbsp 119140190 &nbsp&nbsp |  &nbsp&nbsp Pemrograman Web RC</a></li>
        </div>
    </nav>

    <div class="bucket">
        <p>Login For Continue </p>
        <form action="./login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
    <footer> 
        Sayyid Haris © 2021
    </footer> 
</body>

</html>