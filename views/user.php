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

    <div class="user__back"> < Back </div>

    <div class="user__container">

      <div class="user__image">

        <div class="user__picture">

          <img src="assets/img/profil.png" alt="picture profil"/>

        </div>

        <div class="button__user">
          <input type="submit" class="button " value="UPLOAD PICTURE">
          <input type="submit" class="button " value="DELETE">
        </div>

      </div>

      <div class="user__account">

        <form action="" method="post" class="user__form">
          <div class="user__info">
              <h1 class="user__title">My Account</h1>

              <div class="input__info">
                <div class="inputForm user__firstName">
                    <label>
                    First name
                    </label>
                    <input type="text" name="firstname" class="firstName__input" value="Hugo">
                </div>
                <div class="inputForm user__lastName">
                    <label>
                        Last name
                    </label>
                    <input type="text" name="lastname" class="lastName__input" value="Chakal">
                </div>
                <div class="inputForm user__email">
                    <label>Mail address</label>
                    <input type="email" name="email" class="mail__input" value="Hugo.le.dz@gmail.com"/>
                </div>
                <div class="inputForm user__password">
                    <label>Password</label>
                    <input type="password" name="pass" class="password__input" value="*********"/>
                </div>
              </div>

              <div class="button__user">
                <input type="submit" class="button__end button__account" value="LOG OUT">
                <input type="submit" class="button__end button__account " value="SAVE">
              </div>
          </div>
        </form>
        <div class="user__delete">Delete account</div>
      </div>

    

    </div>



    <?php  require("components/footer.php") ?>
</body>
</html>