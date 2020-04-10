
<form action="index.php?action=signup" method="post" class="register">
    <div class="form-container">
        <h2 class="register__title">SIGN UP</h2>
        
        <div class="register__input-container">
            <label>
            First name
            </label>
            <input type="text" name="firstname" class="register__input">
        </div>
        <div class="register__input-container">
            <label>
                Last name
            </label>
            <input type="text" name="lastname" class="register__input">
        </div>
        <div class="register__input-container">
            <label>Mail address</label>
            <input type="email" name="email" class="register__input"/>
        </div>
        <div class="register__input-container">
            <label>Password</label>
            <input type="password" name="pass" class="register__input"/>
        </div>
        <input type="submit" class="btn button__connexion" value="Start my free trial">
    </div>
</form>
