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

function catchData($text){
    search($text);
}

function deleteUser(){
    $check_user = getUser($_SESSION['id']);
    if ($check_user == true){
        header("Location: index.php");
    }
}

function checkInput($firstname, $lastname, $email, $pass){
    if (empty($pass)){
        $pass = $_SESSION['pass'];
    } else {
        $pass_hache =  password_hash($pass, PASSWORD_DEFAULT);
        $_SESSION['pass'] = $pass_hache;
    }
    if (empty($firstname)){
        $firstname = $_SESSION['firstname'];
    } else {
        $_SESSION['firstname'] = $firstname;
    }
    if (empty($lastname)){
        $lastname = $_SESSION['lastname'];
    } else {
        $_SESSION['lastname'] = $lastname;
    }
    if (empty($email)){
        $email = $_SESSION['email'];
    } else{
        $_SESSION['email'] = $email;
    }
    $check_update = updateUser($_SESSION['id'],$firstname, $lastname, $email, $pass);

    if ($check_update == true){
        header("Location: index.php?action=user");
    }
}

function upload(){
    if(isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0 ){

        if($_FILES['photo']['size'] <= 1000000){
            $infosfichier = pathinfo($_FILES['photo']['name']);
            $extension_upload = $infosfichier['extension'];
            $extension_autorisées = array('png');
            $newname = $_SESSION['id'].".".$extension_upload;
    
            if(in_array($extension_upload , $extension_autorisées)) {
                move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/uploads/' . $newname);
                header("Location: index.php?action=user");
            } else {
                header("Location: index.php?action=user&error_format=1");
            }
        }
    }
}

function catchFilmByGenre($genre) {
    $get_film = getFilmByGenre($genre);
    return $get_film;
}
?>