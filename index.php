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
        <div class="rotating-hero">
            <img src="imgs/aaLogo.png" alt="">
            <img src="imgs/IMG_1329.jpg" alt="">
            <img src="imgs/IMG_1330.jpg" alt="">
            <img src="imgs/IMG_1331.WEBP" alt="">
        </div>
<?php 
    include_once 'navagations/footer.php'
?>