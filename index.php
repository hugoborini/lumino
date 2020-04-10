<?php
require ("controller/controller.php");
    if (isset($_GET['action'])){

        if($_GET["action"] == "signup") {
            if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pass'])) {
                addUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['pass']);
            }
            else {
                echo "non";
            }
        }
        elseif($_GET['action'] == "home") {
            require("views/home.php");
        }
    }
    else {
        require("views/landing.php");
    }
?>