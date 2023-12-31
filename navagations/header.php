<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>American Airlines</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="navagations/navagations.css">
    <link rel="stylesheet" href="css/login-signup.css">
    <link rel="icon" type="image/x-icon" href="imgs/aaLogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header">
    <div class="header-branding">
        <img src="imgs/aaLogo.png" alt="">   
        <h1>American</h1>
    </div>
    <div class="header-navagation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Flights</a></li>
            <li><a href="index.php">Hotels</a></li>
            <li><a href="index.php">Cars</a></li>
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Dashboard</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Signup</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
            ?>
        </ul>
    </div> 
    </div>