<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("connection.php");
include("login.php");
include("signup.php");
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LogSignUp.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box login">
            <form method="post" autocomplete="off">
                <h2 class="text">Login</h2>
                <label>Username</label>
                <input type="text" name="username" required autocomplete="off">
                <label>Password</label>
                <input type="password" name="password" required>
                <button class="link" type="submit" name="login">Login</a>
            </form>
        </div>
        <div class="box signup">
            <form method="post" autocomplete="off">
                <h2 class="text">SignUp</h2>
                <div class="wrapper">
                    <div class="col col-1">
                        <label>Username</label>
                        <input type="text" name="username" required>
                        <label>Password</label>
                        <input type="password" name="password" required>
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" required>
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="col col_2">
                        <label>Phone</label>
                        <input type="tel" name="phone" required>
                        <label>Date of Birth</label>
                        <input type="date" name="date" required>
                        <label>Social Security Number</label>
                        <input type="number" name="security" required>
                    </div>
                </div>
                <button class="link" type="submit" name="register">SignUp</a>
            </form>
        </div>
    </div>
</body>

</html>