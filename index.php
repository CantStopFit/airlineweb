<?php
    include_once 'navagations/header.php'
?>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "alreadyin") {
                echo "
                <div class='error-msg'><p>Already Loged In!</p></div>";
            }
            else if ($_GET["error"] == "alreadysignedup") {
                echo "<p>Already Signed Up and Loged in!</p>";
            }
        }
        ?>

        <img src="imgs/untitled-design.png" alt="" width="100%">
<?php 
    include_once 'navagations/footer.php'
?>