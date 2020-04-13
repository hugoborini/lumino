
<?php
if(empty($_GET['genre'])) {
 ?>
<section class="main__movie">
    <div class="category__main">
      <div class="video__wrapper"></div>
      <div class="category__video"><video autoplay="true" loop muted src="./assets/video/1917.mp4">Votre navigateur ne supporte pas la vidéo</video></div>
      <div class="category__info info">
        <div class="info__title item__hero">1917</div>
        <div class="info__released item__hero"><strong>NEW</strong> <span>2019</span> <a href="index.php?action=addListe&id_film=1"><img class="info__list" src="./assets/icon/Add.svg" alt="add to my list" /></a> <img class="info__list" src="./assets/icon/like.svg" alt="like" /> </div>
        <div class="info__synopsis item__hero">April 6th, 1917. As a regiment assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.</div>
        <a href="index.php?action=player&film=assets/video/1917.mp4&title=1917"><img class="info__play item__hero" src="./assets/icon/big_play.svg" alt="play"/></a>
      </div>
    </div>
</section>
<?php 
}
else {
  $mostRecentFilm = catchMostRecentFilmByGenre($_GET['genre']);
  $data = $mostRecentFilm->fetch();
  ?>
  <section class="main__movie">
    <div class="category__main">
      <div class="video__wrapper"></div>
      <div class="category__video"><video autoplay="true" loop muted src="<?= htmlspecialchars($data['path_film']) ?>">Votre navigateur ne supporte pas la vidéo</video></div>
      <div class="category__path">Genre > <span><?= $_GET['genre'] ?></span> </div>
      <div class="category__info info">
        <div class="info__title item__hero"><?= htmlspecialchars($data['title']) ?></div>
        <div class="info__released item__hero"><strong>NEW</strong> <span><?= htmlspecialchars($data['release_date']) ?></span> <a href="index.php?action=addListe&id_film=<?=$data['id']?>"><img class="info__list" src="./assets/icon/Add.svg" alt="add to my list" /></a> <img class="info__list" src="./assets/icon/like.svg" alt="like" /> </div>
        <div class="info__synopsis item__hero"><?= htmlspecialchars($data['description'])?></div>
        <a href="index.php?action=player&film=<?=$data['path_film']?>&title=<?=$data['title']?>"><img class="info__play item__hero" src="./assets/icon/big_play.svg" alt="play"/></a>
      </div>
    </div>
</section>
  <?php
}
?>