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
  <body class="list">

    <?php require("components/header_homepage.php")?>

    <div class="genre">

    <?php

        $get_film = catchFilmFromList($_SESSION['id']);
        $data = $get_film->fetch();

        if($data == '') {
          echo "<p class='empty'>Your list is empty</p> <br> <br> <br>";
        }else{
        //while($data = $get_film->fetch()){
          ?>
                <div class="genre__movie">
                  <div class="genre__title"><?= htmlspecialchars($data['title']);?></div>
                    <div class="genre__box">
                      <div class="box__picture"><img loading="lazy" src="<?=$data['path_mini']; ?>" alt="affiche"></div>
                        <div class="box__description description">
                          <div class="description__item"><span>SYNOPSIS : </span> <?= htmlspecialchars($data['description']);?></div>
                            <div class="description__item"><span>RELEASED : </span><?= htmlspecialchars($data['release_date']);?></div>
                              <div class="description__button">
                              <a href="index.php?action=player&film=<?=$data['path_film']?>&title=<?=$data['title']?>"><img class="button__item play_button_2" src="./assets/icon/big_play.svg" alt="play"/></a>
                              <img class="button__item add_button_2" src="./assets/icon/like.svg" alt="like"/>
                              <a href="index.php?action=sub_list&id_film=<?=$data['id']?>"><img class="button__item add_button_2" src="./assets/icon/sub_icon.svg" alt="sub"/></a>
                              </div>
                        </div>
                    </div>
                </div>
          <?php
        }
//      }
    ?>

  <!-- <?php
  $get_film = catchFilmFromList($_SESSION['id']);
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
                      <a href="index.php?action=player&film=<?=$data['path_film']?>&title=<?=$data['title']?>"><img class="button__item play_button_2" src="./assets/icon/big_play.svg" alt="play"/></a>
                      <img class="button__item add_button_2" src="./assets/icon/like.svg" alt="like"/>
                      <a href="index.php?action=sub_list&id_film=<?=$data['id']?>"><img class="button__item add_button_2" src="./assets/icon/sub_icon.svg" alt="sub"/></a>
                      </div>
                </div>
            </div>
        </div>
  <?php
  }
  ?> -->



    </div>



    <?php require("components/footer.php") ?>

  </body>
</html>