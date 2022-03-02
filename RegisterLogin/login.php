<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $result = $pdo->prepare($query);

    $result->execute(
        array(
            'username'     =>     $username,
            'password'     =>     $password
        )
    );
    if ($result->rowCount() > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "<script>alert(' Email or Password is Wrong.')</script>";
    }
}
