<header id="signin_header">
    <div class="logo" >
        <a href="signin.php"> <img src="../view/user/logo.png"></a>
    </div>
    <div class="title">
        <p>Twime</p>
    </div>
    <div class="signin">
        <span><?php echo $this->validLogin->getError() ?></span>
        <form method="post" action="../public/index.php?page=authentication&action=login">
            <input id="username" type="text" name="user" placeholder="Username" class="signin_el">
            <input id="password" type="password" name="psw" placeholder="Password" class="signin_el">
            <input type="submit" value="Log In" class="signin_el" name="signin_btn">
            <span class="signup_error"></span>
        </form>
    </div>
</header>