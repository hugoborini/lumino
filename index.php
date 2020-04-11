
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
    }
    else {
        require("views/landing.php");
    }
?>


