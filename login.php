<?php
    include_once 'navagations/header.php'
?>
    <section class="login-form">
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>
    </section>
    
<?php 
    include_once 'navagations/footer.php'
?>