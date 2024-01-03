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
        <div id="slider">
            <figure>
                <img src="imgs/hero/landing-in-mountains.png" alt="">
                <img src="imgs/hero/plane-take-off-twr-back.png" alt="">
                <img src="imgs/hero/single-plane-parked-at-gate.png" alt="">
                <img src="imgs/hero/single-plane-parked-back.png" alt="">
                <img src="imgs/hero/two-planes-at-gate.png" alt="">
            </figure>
        </div>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<h3>Hello there " . $_SESSION["useruid"] . "</h3>";
        }
        ?>
        <main class="body">
            <div class="home-grid-item aadvantage">
                <div class="aadvantage-content">
                    <div class="aadvantage-text">
                        <h1>Join AAdvantage</h1>
                        <p>Join AAdvantage to get benefits such as, flight to nearly 1,100 destinations world wide, earn miles when you fly with <strong>one</strong>world or any of your particpating partners! Unlock access to upgrades along with vacations, cars, and hotels. Also benefit from a free first checked bag on any domestic flight! Save up to 35% on Avis or Budget rental cars and earn 500 bonus miles!</p>
                        <span class="join-now"><a href="">Join Now...</a></span>
                    </div>
                    <div class="aadvantage-img">
                        <img src="imgs/aadvantage-card.png" alt="">
                    </div>
                </div>
            </div>
        </main>
<!-- 
        <div class="container">
            <div class="item item-1">1</div>
            <div class="item item-2">2</div>
            <div class="item item-3">3</div>
        </div> -->
<?php 
    include_once 'navagations/footer.php'
?>