<?php  
$filepath = 'assets/uploads/'.$_SESSION['id'].".png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <title>Document</title>
</head>
  <body>

    <?php require("components/header_homepage.php")?>
    <?php require("components/main_movie.php") ?>

    <div class="genre">

  <?php
  $get_film = catchFilmByGenre($_GET["genre"]);
    while($data = $get_film->fetch()){

  ?>
        <div class="genre__movie">
          <div class="genre__title"><?= htmlspecialchars($data['title']);?></div>
            <div class="genre__box">
              <div class="box__picture"><img loading="lazy" src="<?=$data['path_mini']; ?>" alt="affiche"></div>
                <div class="box__description description">
                  <div class="description__item"><span>SYNOPSIS : </span> <?= htmlspecialchars($data['description']);?></div>
                    <div class="description__item"><span>RELEASED : </span><?= htmlspecialchars($data['release_date']);?></div>
                      <div class="description__button">
                        <img class="button__item" src="./assets/icon/big_play.svg" alt="play"/>
                        <img class="button__item" src="./assets/icon/Add.svg" alt="add"/>
                        <img class="button__item" src="./assets/icon/like.svg" alt="like"/>
                      </div>
                </div>
            </div>
        </div>
  <?php
  }
  ?>



    </div>



    <?php require("components/footer.php") ?>

  </body>
</html>