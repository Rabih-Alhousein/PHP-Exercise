<?php

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $security = $_POST['security'];

    if ($password == $cpassword) {
        $query = "SELECT * FROM users WHERE username = :username ";
        $result = $pdo->prepare($query);
        $result->execute(
            array(
                'username'     =>     $username,
            )
        );
        if ($result->rowCount() == 0) {
            $sql = "insert into users (username, email, password, phone, date, security) values(:username,:email,:password,:phone,:date,:security)";
            try {
                $result = $pdo->prepare($sql);

                $params = [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'phone' => $phone,
                    'date' => $date,
                    'security' => $security
                ];
                $result->execute($params);
                $_SESSION['username'] = $username;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo "<script>alert(' Username Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}
