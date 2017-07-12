<header id="signin_header">
    <div class="logo" >
        <a href="Signin.php"> <img src="logo.png"></a>
    </div>
    <div class="title">
        <p>Twime</p>
    </div>
    <div class="signin">
        <form method="post" action="Signin.php">
            <input id="username" type="text" name="username" placeholder="Email or username" class="signin_el">
            <input id="password" type="password" name="psw" placeholder="Password" class="signin_el">
            <input type="submit" value="Log In" class="signin_el">
            <span id="error_username_or_password" class="signin_el"></span>
        </form>
    </div>
</header>