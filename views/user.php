<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/css/style.css">
  <title>Document</title>
</head>
<body>
    <?php  require("components/header_homepage.php") ?>

    <div class="user__container">

      <div class="user__image">
        <div class="user__back"> < Back </div>
        <img class="user__picture picture" src="assets/img/profil.png"/>
        <div class="user__button">
          <button class="button__upload">UPLOAD PICTURE</button>
          <button class="button__upload">DELETE</button>
        </div>
      </div>

      <div class="user__account">

        <form action="index.php?action=signup" method="post" class="register">
    <div class="form-container">
        <h2 class="register__title">My Account</h2>
        
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


      </div>

    

    </div>



    <?php  require("components/footer.php") ?>
</body>
</html>