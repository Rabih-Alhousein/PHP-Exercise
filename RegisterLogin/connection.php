<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Registration";
$dsn = "mysql:host=$dbhost;dbname=$dbname";
$pdo = new PDO($dsn, $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (!$pdo) {
    die("<script>alert('Connection Failed.')</script>");
}
