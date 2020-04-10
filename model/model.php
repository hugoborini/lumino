<?php 

function insertUser($firstname, $lastname, $email) {
    $bdd = dbConnect();
    $pass_hache =  password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $req = $bdd->prepare("INSERT INTO member(id, firstname , lastname, email, pass) VALUES(:firstname, :lastname,  :email,  :pass)");
    $user = $req->execute(array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email,
        "pass" => $pass_hache
    ));
    return $user;
}

function dbConnect() {
    try {
     $bdd = new PDO('mysql:host=localhost; dbname=charrette;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception  $e) {
    die('Error : ' .  $e->getMessage());
    }
}