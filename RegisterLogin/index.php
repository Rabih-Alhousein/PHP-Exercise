<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: LogSignUp.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>My website</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="containe">

    </div>
    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>

    <br>
    Hello, <?php echo $_SESSION['username']; ?>
</body>

</html>