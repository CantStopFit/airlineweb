<?php
    include_once 'navagations/header.php';
    if (isset($_SESSION["useruid"])) {
        header("location: index.php?error=alreadyin");
        exit();
    }
?>
    <section class="login-form">
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>
        <?php 
         if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Wrong Username/Email or Password</p>";
            }
        }
        ?>
    </section>
    
<?php 
    include_once 'navagations/footer.php'
?>