
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <title>Document</title>
    <script defer src="./js/home.js"></script>
</head>
<body>
    <?php include("./components/header_homepage.php")?>
    <main>
        <section class="category">
            <div class="category__texts">
                <h1 class="category__title">Action</h1>
                <p class="category__more">see more</p>
            </div>
            <div class="category__movies">
                <div id ="2" class="movie movie--avengers" 
                    data-title="Avengers : Infinity wars" 
                    data-category="Action" 
                    data-synopsis="The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe." 
                    data-released="2018"
                    data-mini="avengers.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Avengers : Infinity wars</p>
                            <p class="element__category">Action - Hero - SF</p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron">
                        <img  class="movie__chevron chevron" src="assets/icon/chevron.svg" alt="icon chevron down"/>
                    </div>
                </div>
                <div id ="4" class="movie movie--kingsman"
                    data-title="Kingsman" 
                    data-category="Action" 
                    data-synopsis="A spy organisation recruits a promising street kid into the agency\'s training program, while a global threat emerges from a twisted tech genius." 
                    data-released="2014"
                    data-mini="kingsman.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Kingsman</p>
                            <p class="element__category">Action - Secret Agent</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="5" class="movie movie--readyPlayerOne"
                    data-title="Ready Player One" 
                    data-category="Action" 
                    data-synopsis="When the creator of a virtual reality called the OASIS dies, he makes a posthumous challenge to all OASIS users to find his Easter Egg, which will give the finder his fortune and control of his world." 
                    data-released="2018"
                    data-mini="ready-Player-One.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Ready Player One</p>
                            <p class="element__category">Action - Video Game</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="8" class="movie movie--matrix"
                    data-title="Matrix" 
                    data-category="Action" 
                    data-synopsis="A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers." 
                    data-released="1999"
                    data-mini="matrix.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Matrix</p>
                            <p class="element__category">Action - SF</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="1" class="movie movie--1917"
                    data-title="1917" 
                    data-category="Action" 
                    data-synopsis="April 6th, 1917. As a regiment assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap." 
                    data-released="2019"
                    data-mini="1917.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">1917</p>
                            <p class="element__category">Action - war - History</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="7" class="movie movie--kickAss"
                    data-title="Kick Ass" 
                    data-category="Action" 
                    data-synopsis="Dave Lizewski is an unnoticed high school student and comic book fan who one day decides to become a superhero, even though he has no powers, training or meaningful reason to do so." 
                    data-released="2010"
                    data-mini="kick-ass.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Kick Ass</p>
                            <p class="element__category">Action - Super Hero</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category__modal category__modal--close"></div>
        </section>
        <section class="category">
            <div class="category__texts">
                <h1 class="category__title">Comedy</h1>
                <p class="category__more">see more</p>
            </div>
            <div class="category__movies">
                <div id ="14" class="movie movie--bigLebowski"
                    data-title="The Big Lebowski" 
                    data-category="Comedy" 
                    data-synopsis="Jeff, The Dude, Lebowski, mistaken for a millionaire of the same name, seeks restitution for his ruined rug and enlists his bowling buddies to help get it." 
                    data-released="1998"
                    data-mini="big-Lebowski.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Big Lebowski</p>
                            <p class="element__category">Comedy - Bowling</p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron"></div>
                </div>
                <div id ="9" class="movie movie--intouchables"
                    data-title="Intouchables" 
                    data-category="Comedy" 
                    data-synopsis="After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver." 
                    data-released="2011"
                    data-mini="intouchables.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Intouchables</p>
                            <p class="element__category">Comedy - Handicapable</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="16" class="movie movie--zoolander"
                    data-title="Zoolander" 
                    data-category="Comedy" 
                    data-synopsis="At the end of his career, a clueless fashion model is brainwashed to kill the Prime Minister of Malaysia." 
                    data-released="2001"
                    data-mini="zoolander.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Zoolander</p>
                            <p class="element__category">Comedy - Fashion</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="15" class="movie movie--littleMiss"
                    data-title="Little Miss Sunshine" 
                    data-category="Comedy" 
                    data-synopsis="A family determined to get their young daughter into the finals of a beauty pageant take a cross-country trip in their VW bus." 
                    data-released="2006"
                    data-mini="little-miss-sunshine.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Little Miss Sunshine</p>
                            <p class="element__category">Comedy - Family</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="13" class="movie movie--bridesmaids"
                    data-title="Bridesmaids" 
                    data-category="Comedy" 
                    data-synopsis="Competition between the maid of honor and a bridesmaid, over who is the bride's best friend, threatens to upend the life of an out-of-work pastry chef." 
                    data-released="2011"
                    data-mini="bridesmaids.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Bridesmaids</p>
                            <p class="element__category">Comedy - Wedding</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="12" class="movie movie--zombieland"
                    data-title="Zombieland" 
                    data-category="Comedy" 
                    data-synopsis="A shy student trying to reach his family in Ohio, a gun-toting tough guy trying to find the last Twinkie, and a pair of sisters trying to get to an amusement park join forces to travel across a zombie-filled America." 
                    data-released="2009"
                    data-mini="zombieland.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Zombieland</p>
                            <p class="element__category">Comedy - Zombies</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category__modal category__modal--close"></div>
        </section>
        <section class="category">
            <div class="category__texts">
                <h1 class="category__title">Horror</h1>
                <p class="category__more">see more</p>
            </div>
            <div class="category__movies">
                <div id ="35" class="movie movie--plateform"
                    data-title="The Plateform" 
                    data-category="Horror" 
                    data-synopsis="A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole." 
                    data-released="2019"
                    data-mini="the-platform.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Plateform</p>
                            <p class="element__category">Horror - Prison</p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron"></div>
                </div>
                <div id ="38" class="movie movie--shinning"
                    data-title="The Shining" 
                    data-category="Horror" 
                    data-synopsis="A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future." 
                    data-released="1980"
                    data-mini="the-shining.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Shining</p>
                            <p class="element__category">Horror - Psychologycal</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="39" class="movie movie--jaws"
                    data-title="Jaws" 
                    data-category="Horror" 
                    data-synopsis="When a killer shark unleashes chaos on a beach community, it\'s up to a local sheriff, a marine biologist, and an old seafarer to hunt the beast down." 
                    data-released="1975"
                    data-mini="jaws.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Jaws</p>
                            <p class="element__category">Horror - See</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="36" class="movie movie--midsommar"
                    data-title="Midsommar" 
                    data-category="Horror" 
                    data-synopsis="A couple travels to Sweden to visit a rural hometown\'s fabled mid-summer festival. What begins as an idyllic retreat quickly devolves into an increasingly violent and bizarre competition at the hands of a pagan cult." 
                    data-released="2019"
                    data-mini="midsommar.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Midsommar</p>
                            <p class="element__category">Horror - Norway</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="33" class="movie movie--invisible"
                    data-title="The Invisible Man" 
                    data-category="Horror" 
                    data-synopsis="When Cecilia's abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see." 
                    data-released="2020"
                    data-mini="the-invisible-man.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Invisible Man</p>
                            <p class="element__category">Horror - Man</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="37" class="movie movie--paranormal"
                    data-title="Paranormal Activity" 
                    data-category="Horror" 
                    data-synopsis="After moving into a suburban home, a couple becomes increasingly disturbed by a nightly demonic presence." 
                    data-released="2009"
                    data-mini="paranormal-activity.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Paranormal activity</p>
                            <p class="element__category">Horror - Camera</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category__modal category__modal--close"></div>
        </section>
        <section class="category">
            <div class="category__texts">
                <h1 class="category__title">Documentary</h1>
                <p class="category__more">see more</p>
            </div>
            <div class="category__movies">
                <div id ="48" class="movie movie--pedal"
                    data-title="Pedal The World" 
                    data-category="Documentary" 
                    data-synopsis="Young millennial German fueled by wanderlust and a lack of real world responsibilities travels the globe by bike, peddling across 22 countries and over 20,000 kms to find meaning in life. Leverages power of social media and parental support to overcome obstacles." 
                    data-released="2015"
                    data-mini="pedal-the-world.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Pedal The World</p>
                            <p class="element__category">Documentary - Bycicle</p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron"></div>
                </div>
                <div id ="42" class="movie movie--fahrenheit"
                    data-title="Fahrenheit 9/11" 
                    data-category="Documentary" 
                    data-synopsis="Michael Moore's view on what happened to the United States after September 11, and how the Bush Administration allegedly used the tragic event to push forward its agenda for unjust wars in Afghanistan and Iraq." 
                    data-released="2004"
                    data-mini="fahrenheit-911.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Fahrenheit 9/11</p>
                            <p class="element__category">Documentary - USA</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="45" class="movie movie--plasticOcean"
                    data-title="A Plastic Ocean" 
                    data-category="Documentary" 
                    data-synopsis="It begins when journalist Craig Leeson, searching for the elusive blue whale, discovers plastic waste in what should be pristine ocean. In this adventure documentary, Craig teams up with free diver Tanya Streeter and an international team of scientists and researchers, and they travel to twenty locations around the world over the next four years to explore the fragile state of our oceans, uncover alarming truths about plastic pollution, and reveal working solutions that can be put into immediate effect." 
                    data-released="2016"
                    data-mini="a-plastic-ocean.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">A Plastic Ocean</p>
                            <p class="element__category">Documentary - Ocean</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="47" class="movie movie--creativeBrain"
                    data-title="The Creative Brain" 
                    data-category="Documentary" 
                    data-synopsis="Neuroscientist David Eagleman taps into the creative process of various innovators while exploring brain-bending, risk-taking ways to spark creativity." 
                    data-released="2019"
                    data-mini="the-creative-brain.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Creative Brain</p>
                            <p class="element__category">Documentary - Brain</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="43" class="movie movie--heartsOfDarkness"
                    data-title="Hearts Of Darkness: A Filmmaker's Apocalypse" 
                    data-category="Documentary" 
                    data-synopsis="Documentary that chronicles how Francis Ford Coppola's Apocalypse Now (1979) was plagued by extraordinary script, shooting, budget, and casting problems, nearly destroying the life and career of the celebrated director." 
                    data-released="2014"
                    data-mini="hearts-of-darkness.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Hearts Of Darkness</p>
                            <p class="element__category">Documentary</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="41" class="movie movie--youNegro"
                    data-title="I Am Not Your Negro" 
                    data-category="Documentary" 
                    data-synopsis="Writer James Baldwin tells the story of race in modern America with his unfinished novel, Remember This House." 
                    data-released="2016"
                    data-mini="i-am-not-your-negro.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">I Am Not Your Negro</p>
                            <p class="element__category">Documentary - Africa</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category__modal category__modal--close"></div>
        </section>
        <section class="category">
            <div class="category__texts">
                <h1 class="category__title">Science-Fiction</h1>
                <p class="category__more">see more</p>
            </div>
            <div class="category__movies">
                <div id ="17" class="movie movie--interstellar"
                    data-title="Interstellar" 
                    data-category="Science-Fiction" 
                    data-synopsis="A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival." 
                    data-released="2014"
                    data-mini="interstellar.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Interstellar</p>
                            <p class="element__category">SF - Space</p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron"></div>
                </div>
                <div id ="19" class="movie movie--hungerGames"
                    data-title="The Hunger Games : Mockingjay part 1" 
                    data-category="Science-Fiction" 
                    data-synopsis="Katniss Everdeen voluntarily takes her younger sister's place in the Hunger Games: a televised competition in which two teenagers from each of the twelve Districts of Panem are chosen at random to fight to the death." 
                    data-released="2012"
                    data-mini="hunger-games.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Hunger Games : Mockingjay part 1</p>
                            <p class="element__category">SF - Games</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="23" class="movie movie--fifthElement"
                    data-title="The Fifth Element" 
                    data-category="Science-Fiction" 
                    data-synopsis="In the colorful future, a cab driver unwittingly becomes the central figure in the search for a legendary cosmic weapon to keep Evil and Mr. Zorg at bay." 
                    data-released="1997"
                    data-mini="fifth-element.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Fifth Element</p>
                            <p class="element__category">SF - Future</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="21" class="movie movie--avatar"
                    data-title="Avatar" 
                    data-category="Science-Fiction" 
                    data-synopsis="A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home."
                    data-released="2009"
                    data-mini="avatar.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Avatar</p>
                            <p class="element__category">SF - Planet</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="24" class="movie movie--backToTheFuture"
                    data-title="Back To The Future" 
                    data-category="Science-Fiction" 
                    data-synopsis="Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his close friend, the eccentric scientist Doc Brown." 
                    data-released="1985"
                    data-mini="back-to-the-future.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Back To The Future</p>
                            <p class="element__category">SF - Dolorean</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="22" class="movie movie--jurassicPark"
                    data-title="Jurassic Park" 
                    data-category="Science-Fiction" 
                    data-synopsis="A pragmatic paleontologist visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the park's cloned dinosaurs to run loose." 
                    data-released="1973"
                    data-mini="jurrasic-park.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Jurassic Park</p>
                            <p class="element__category">SF - Dynosaure</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category__modal category__modal--close"></div>
        </section>
        <section class="category">
            <div class="category__texts">
                <h1 class="category__title">Animation</h1>
                <p class="category__more">see more</p>
            </div>
            <div class="category__movies">
                <div id ="32" class="movie movie--frozen"
                    data-title="Frozen" 
                    data-category="Animation" 
                    data-synopsis="When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister Anna teams up with a mountain man, his playful reindeer, and a snowman to change the weather condition." 
                    data-released="2013"
                    data-mini="frozen.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Frozen</p>
                            <p class="element__category">Animation - Princess</p>
                            <p class="element__synopsis"></p>
                            <p class="element__releasedDate"></p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                    <div class="movie__chevron"></div>
                </div>
                <div id ="25" class="movie movie--insideOut"
                    data-title="Inside Out" 
                    data-category="Animation" 
                    data-synopsis="After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust and Sadness - conflict on how best to navigate a new city, house, and school." 
                    data-released="2015"
                    data-mini="inside-out.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Inside Out</p>
                            <p class="element__category">SF - Brain</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="29" class="movie movie--peterPan"
                    data-title="Peter Pan" 
                    data-category="Animation" 
                    data-synopsis="Wendy and her brothers are whisked away to the magical world of Neverland with the hero of their stories, Peter Pan." 
                    data-released="1953"
                    data-mini="peter-pan.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Peter Pan</p>
                            <p class="element__category">Animation - Island</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="31" class="movie movie--walle"
                    data-title="Wall-E" 
                    data-category="Animation" 
                    data-synopsis="In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind." 
                    data-released="2008"
                    data-mini="wall-e.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Wall-e</p>
                            <p class="element__category">Animation - Robot</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
                <div id ="30" class="movie movie--incredibles"
                    data-title="The Incredibles" 
                    data-category="Animation" 
                    data-synopsis="A family of undercover superheroes, while trying to live the quiet suburban life, are forced into action to save the world." 
                    data-released="2004"
                    data-mini="the-incredibles.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">The Incredibles</p>
                            <p class="element__category">Animation - Super Hero</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon"/>
                            <img class="element__icon element__icon"/>
                            <img class="element__icon element__icon--play"/>
                        </div>
                    </div>
                </div>
                <div id ="28" class="movie movie--moana"
                    data-title="Moana" 
                    data-category="Animation" 
                    data-synopsis="In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches Moana's island, she answers the Ocean's call to seek out the Demigod to set things right." 
                    data-released="2016"
                    data-mini="moana.jpg">
                    <div class="movie__elements">
                        <div class="elements__text">
                            <p class="element__title">Moana</p>
                            <p class="element__category">Animation - Beach</p>
                        </div>
                        <div class="elements__icon">
                            <img class="element__icon element__icon" src="assets/icon/like.svg" alt="icon heart"/>
                            <img class="element__icon element__icon" src="assets/icon/Add.svg" alt="icon plus signe"/>
                            <img class="element__icon element__icon--play" src="assets/icon/big_play.svg" alt="icon play"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category__modal category__modal--close"></div>
        </section>
    </main>
</body>
</html>