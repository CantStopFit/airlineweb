<?php
    include_once 'navagations/header.php';
    if (isset($_SESSION["useruid"])) {
        header("location: index.php?error=alreadysignedup");
        exit();
    }
?>
    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdRepeat" placeholder="Repeat Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invalidUid") {
                echo "<p>Usernames can only contain a-z, A-Z, 0-9, !, ?, &, _</p>";
            }
            else if ($_GET["error"] == "invalidEmail") {
                echo "<p>Choose Proper Email</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords Dont Match</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Somthing went wrong! Try Again.</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>Success! Thanks for Choosing American!</p>";
            }
        }
    ?>
    </section>
    
<?php 
    include_once 'navagations/footer.php'
?>