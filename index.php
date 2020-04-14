
<link rel="icon" type="image/png" href="assets/img/favicon.png" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/reqajax.js"></script>
<title>Lumino</title>
<?php
require("controller/controller.php");
    if (isset($_GET['action'])){

        if($_GET["action"] == "signup") {
            require("views/signup.php");
            if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pass'])) {
                getError($_POST["email"]);
                addUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['pass']);
            }
        }elseif($_GET['action'] == "login"){
            require("views/login.php");
            if (isset($_POST['email']) and isset($_POST['pass'])){
                getConnexion($_POST['email'], $_POST['pass']);
            }
        }
        elseif($_GET['action'] == "home") {
            require("views/home.php");
        }
        elseif($_GET['action'] == "deco"){
            deconnexion();
        }
        elseif($_GET['action'] == "user"){
            require("views/user.php");
        }
        elseif ($_GET['action'] == "delete"){
            deleteUser();
        }
        elseif($_GET['action'] == "update"){
            checkInput($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['pass']);
        }
        elseif( $_GET['action'] == "upload"){
            upload();
        }
        elseif($_GET['action'] == "genre") {
            require("views/genre.php");
        }
        elseif($_GET['action'] == "addListe"){
            updateListe($_SESSION['id'], $_GET['id_film']);
        }
        elseif ($_GET['action'] == "list"){
            require("views/liste.php");
        }
        elseif ($_GET['action'] == "player"){
            require("views/player.php");
        }
        elseif($_GET['action'] == "sub_list" and $_GET['redirection'] == "home") {
            delListe($_GET["id_film"]);
            require("views/home.php");
        }
        elseif($_GET['action'] == "sub_list"){
            delListe($_GET["id_film"]);
            header("Location: index.php?action=list");
        }
        elseif($_GET['action']== "like"){
            upToDate($_GET['id_film']);
            if ($_GET['redirection'] == "genre"){
                header("Location: index.php?action=genre&genre=" . $_GET['genre_red']);
            }
            if ($_GET['redirection'] == "home"){
                header("Location: index.php?action=home");
            }

        }
    }
    else {
        require("views/landing.php");
        //require("views/player.php");
        //require("views/genre.php");
    }
?>


