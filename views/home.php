<?php
$filepath = 'assets/uploads/'.$_SESSION['id'].".png";
$action_movie = catchFilmByGenreAndLimit("Action");
$comedy_movie = catchFilmByGenreAndLimit("Comedy");
$horror_movie = catchFilmByGenreAndLimit("Horror");
$documentary_movie = catchFilmByGenreAndLimit("Documentary");
$sf_movie = catchFilmByGenreAndLimit("SF");
$animation_movie = catchFilmByGenreAndLimit("animation");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
    <script defer src="./js/home.js"></script>
</head>
<body>
    <?php include("./components/header_homepage.php")?>
    
    <main>
        <?php require("components/main_movie.php") ?>
        
        <section class="category">


            <div class="category__texts">
                <h1 class="category__title">Action</h1>
                <a href="index.php?action=genre&genre=Action">
                    <p class="category__more">See more</p>
                    <img src="assets/icon/chevron-right.svg" alt="Chevron vers la droite"/>
                </a>
            </div>
            <div class="category__movies">
            <?php while($data_action = $action_movie->fetch()){
            ?>
                <div id ="<?= $data_action['id']?>" class="movie"
                    data-title="<?= $data_action['title']?>" 
                    data-category="<?= $data_action['category']?>" 
                    data-synopsis="<?= $data_action['description']?>" 
                    data-released="<?= $data_action['release_date']?>"
                    data-mini="<?= $data_action['path_mini']?>"
                    data-path="<?= $data_action['path_film']?>">

                    <div class="movie__elements">
                        <div class="movie__element">
                            <div class="elements__text">
                                <p class="element__title"><?= $data_action['title']?></p>
                                <p class="element__category"><?= $data_action['category']?></p>
                            </div>
                            <div class="elements__icon">
                                <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                                <a href="index.php?action=addListe&id_film=<?=$data_action['id']?>"><img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/></a>
                                <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                            </div>
                        </div>
                        <div class="movie__chevron">
                            <img  class="movie__chevron chevron" src="assets/icon/chevron.svg" alt="icon chevron down"/>
                        </div>
                    </div>
                    <div class="elements__hover">
                    </div>
                    
                </div>  
                <?php
                }
                ?>
                
            </div> 
            <div class="category__modal category__modal--close"></div> 
        </section>

        <section class="category">

            <div class="category__texts">
                <h1 class="category__title">Comedy</h1>
                <a href="index.php?action=genre&genre=Comedy">
                    <p class="category__more">See more</p>
                    <img src="assets/icon/chevron-right.svg" alt="Chevron vers la droite"/>
                </a>
            </div>
            <div class="category__movies">
            <?php while($data_comedy = $comedy_movie->fetch()){
            ?>
                <div id ="<?= $data_comedy['id']?>" class="movie" 
                    data-title="<?= $data_comedy['title']?>" 
                    data-category="<?= $data_comedy['category']?>" 
                    data-synopsis="<?= $data_comedy['description']?>" 
                    data-released="<?= $data_comedy['release_date']?>"
                    data-mini="<?= $data_comedy['path_mini']?>"
                    data-path="<?= $data_comedy['path_film']?>"
                    data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                    <div class="movie__elements">
                        <div class="movie__element">
                            <div class="elements__text">
                                <p class="element__title"><?= $data_comedy['title']?></p>
                                <p class="element__category"><?= $data_comedy['category']?></p>
                                <p class="element__synopsis"></p>
                                <p class="element__releasedDate"></p>
                            </div>
                            <div class="elements__icon">
                                <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                                <a href="index.php?action=addListe&id_film=<?= $data_comedy['id']?>"><img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/></a>
                                <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                            </div>
                        </div>
                        <div class="movie__chevron">
                            <img  class="movie__chevron chevron" src="assets/icon/chevron.svg" alt="icon chevron down"/>
                        </div>
                    </div>
                    <div class="elements__hover">
                    </div>
                </div>  
                <?php
                }
                ?>
                
            </div> 
            <div class="category__modal category__modal--close"></div> 
        </section>

        <section class="category">

            <div class="category__texts">
                <h1 class="category__title">Horror</h1>
                <a href="index.php?action=genre&genre=Horror">
                    <p class="category__more">See more</p>
                    <img src="assets/icon/chevron-right.svg" alt="Chevron vers la droite"/>
                </a>
            </div>
            <div class="category__movies">
            <?php while($data_horror = $horror_movie->fetch()){
            ?>
                <div id ="<?= $data_horror['id']?>" class="movie" 
                    data-title="<?= $data_horror['title']?>" 
                    data-category="<?= $data_horror['category']?>" 
                    data-synopsis="<?= $data_horror['description']?>" 
                    data-released="<?= $data_horror['release_date']?>"
                    data-mini="<?= $data_horror['path_mini']?>"
                    data-path="<?= $data_horror['path_film']?>"
                    data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                    <div class="movie__elements">
                        <div class="movie__element">
                            <div class="elements__text">
                                <p class="element__title"><?= $data_horror['title']?></p>
                                <p class="element__category"><?= $data_horror['category']?></p>
                                <p class="element__synopsis"></p>
                                <p class="element__releasedDate"></p>
                            </div>
                            <div class="elements__icon">
                                <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                                <a href="index.php?action=addListe&id_film=<?= $data_horror['id']?>"><img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/></a>
                                <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                            </div>
                        </div>
                        <div class="movie__chevron">
                            <img  class="movie__chevron chevron" src="assets/icon/chevron.svg" alt="icon chevron down"/>
                        </div>
                    </div>
                    <div class="elements__hover">
                    </div>
                </div>  
                <?php
                }
                ?>
                
            </div> 
            <div class="category__modal category__modal--close"></div> 
    </section>

        <section class="category">

        <div class="category__texts">
            <h1 class="category__title">Documentary</h1>
            <a href="index.php?action=genre&genre=Documentary">
                    <p class="category__more">See more</p>
                    <img src="assets/icon/chevron-right.svg" alt="Chevron vers la droite"/>
                </a>
            </div>
        <div class="category__movies">
        <?php while($data_documentary = $documentary_movie->fetch()){
        ?>
            <div id ="<?= $data_documentary['id']?>" class="movie" 
                data-title="<?= $data_documentary['title']?>" 
                data-category="<?= $data_documentary['category']?>" 
                data-synopsis="<?= $data_documentary['description']?>" 
                data-released="<?= $data_documentary['release_date']?>"
                data-mini="<?= $data_documentary['path_mini']?>"
                data-path="<?= $data_documentary['path_film']?>"
                data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                <div class="movie__elements">
                    <div class="movie__element">
                        <div class="elements__text">
                            <p class="element__title"><?= $data_documentary['title']?></p>
                            <p class="element__category"><?= $data_documentary['category']?></p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <a href="index.php?action=addListe&id_film=<?= $data_documentary['id']?>"><img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/></a>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron">
                        <img  class="movie__chevron chevron" src="assets/icon/chevron.svg" alt="icon chevron down"/>
                    </div>
                </div>
                <div class="elements__hover">
                    </div>
            </div>  
            <?php
            }
            ?>
            
        </div> 
        <div class="category__modal category__modal--close"></div> 
        </section>

        <section class="category">

        <div class="category__texts">
            <h1 class="category__title">Sience-fiction</h1>
            <a href="index.php?action=genre&genre=SF">
                    <p class="category__more">See more</p>
                    <img src="assets/icon/chevron-right.svg" alt="Chevron vers la droite"/>
                </a>
            </div>
        <div class="category__movies">
        <?php while($data_sf = $sf_movie->fetch()){
        ?>
            <div id ="<?= $data_sf['id']?>" class="movie" 
                data-title="<?= $data_sf['title']?>" 
                data-category="<?= $data_sf['category']?>" 
                data-synopsis="<?= $data_sf['description']?>" 
                data-released="<?= $data_sf['release_date']?>"
                data-mini="<?= $data_sf['path_mini']?>"
                data-path="<?= $data_sf['path_film']?>"
                data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                <div class="movie__elements">
                    <div class="movie__element">
                        <div class="elements__text">
                            <p class="element__title"><?= $data_sf['title']?></p>
                            <p class="element__category"><?= $data_sf['category']?></p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <a href="index.php?action=addListe&id_film=<?= $data_sf['id']?>"><img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/></a>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron">
                        <img  class="movie__chevron chevron" src="assets/icon/chevron.svg" alt="icon chevron down"/>
                    </div>
                </div>
                <div class="elements__hover">
                    </div>
            </div>  
            <?php
            }
            ?>
            
        </div> 
        <div class="category__modal category__modal--close"></div> 
        </section>

        <section class="category">

        <div class="category__texts">
            <h1 class="category__title">Animation</h1>
            <a href="index.php?action=genre&genre=Animation">
                    <p class="category__more">See more</p>
                    <img src="assets/icon/chevron-right.svg" alt="Chevron vers la droite"/>
                </a>
            </div>
        <div class="category__movies">
        <?php while($data_animation = $animation_movie->fetch()){
        ?>
            <div id ="<?= $data_animation['id']?>" class="movie" 
                data-title="<?= $data_animation['title']?>" 
                data-category="<?= $data_animation['category']?>" 
                data-synopsis="<?= $data_animation['description']?>" 
                data-released="<?= $data_animation['release_date']?>"
                data-mini="<?= $data_animation['path_mini']?>"
                data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                <div class="movie__elements">
                    <div class="movie__element">
                        <div class="elements__text">
                            <p class="element__title"><?= $data_animation['title']?></p>
                            <p class="element__category"><?= $data_animation['category']?></p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <a href="index.php?action=addListe&id_film=<?= $data_animation['id']?>"><img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/></a>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron">
                        <img  class="movie__chevron chevron" src="assets/icon/chevron.svg" alt="icon chevron down"/>
                    </div>
                </div>
                <div class="elements__hover">
                </div>
            </div>  
            <?php
            }
            ?>
            
        </div> 
        <div class="category__modal category__modal--close"></div> 
        </section>
    </main>
    <?php require("components/footer.php") ?>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>