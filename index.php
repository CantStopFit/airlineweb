<?php
    include_once 'navagations/header.php'
?>
    <main class="hero">
        <img src="imgs/americanPlaneAtGateCroped.JPG" alt="" id="desktop-hero-image">
        <img src="imgs/IMG_1331.WEBP" alt="" id="mobile-hero-image">
    </main>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "alreadyin") {
            echo "<p>already loged in!</p>";
        }
        else if ($_GET["error"] == "alreadysignedup") {
            echo "<p>Already Signed Up and Loged in!</p>";
        }
    }
    ?>
    <section class="home-body">
        <section class="plan-your-trip">
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h3>Hello there " . $_SESSION["usersName"] . "</h3>";
            }
            ?>
            <h1 id="plan-heading">Plan Your Trip</h1>
            <div class="plan-cards">
                <div class="plan-card">
                    <span><i class="fa-solid fa-plane"></i></span>
                    <h3>Flights</h3>
                </div>
                <div class="plan-card">
                    <span><i class="fa-solid fa-hotel"></i></span>
                    <h3>Hotels</h3>
                </div>
                <div class="plan-card">
                    <span><i class="fa-solid fa-car"></i></span>
                    <h3>Cars</h3>
                </div>
            </div>
        </section>
        <div class="spacer"></div>
    </section>
<?php 
    include_once 'navagations/footer.php'
?>