<?php
session_start();
require "model/model.php";
function addUser($firstname, $lastname, $email) {
$user = insertUser($firstname, $lastname, $email);


if ($user === false) {
    die('Impossible d\'ajouter le chakal !');
}
else {
    header('Location: index.php?action=login');
}
};


function getError($email){
    $email_check = checkEmail($email);

    if ($email_check == true){
        header("Location: index.php?action=signup&error=alruse");
    }
}


function getConnexion($email, $pass){
    $check_account = checkAccount($email, $pass);

    if ($check_account == true){
        header("Location: index.php?action=home");
    } else {
        header("Location: index.php?action=login&error=badinf");
    }
}
function deconnexion() {
    $_SESSION = array();
    session_destroy();
    header("Location: index.php?deco=1");
}

?>