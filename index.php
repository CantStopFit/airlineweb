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

        <img src="imgs/hero/landing-in-mountains.png" alt="">
        <img src="imgs/hero/plane-take-off-twr-back.png" alt="">
        <img src="imgs/hero/single-plane-parked-at-gate.png" alt="">
        <img src="imgs/hero/single-plane-parked-back.png" alt="">
        <img src="imgs/hero/two-planes-at-gate.png" alt="">
<?php 
    include_once 'navagations/footer.php'
?>