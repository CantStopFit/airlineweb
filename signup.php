<?php
    include_once 'navagations/header.php'
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
    </section>
    
<?php 
    include_once 'navagations/footer.php'
?>