<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?action=login" method="post" class="login">
    <div class="form-container">
    <h2 class="login__title">LOG IN</h2>

    <div class="login__input-container">
        <label>Mail address</label>
        <input type="email" name="email" class="register__input"/>
    </div>
    <div class="login__input-container">
        <label>Password</label>
        <input type="password" name="pass" class="register__input"/>
        <a href="#"><p class="forgot-password">I forgot my password</p></a>
    </div>
    <input type="submit" class="cta__noradius--yb cta__register" value="Log in">
</div>
    </form>
</body>
</html>