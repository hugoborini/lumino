<?php 

function dbConnect() {
    try { $bdd = new PDO('mysql:host=localhost;dbname=charrette;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception  $e) {
    die('Error : ' .  $e->getMessage());
    }
    return $bdd;
}

function checkEmail($email){
    $bdd = dbConnect();
    $select = $bdd->query("SELECT * FROM member");
    while($data = $select->fetch()){
        if ($email == $data['email']){
            return true;
        }
    }
    return false;
}

function insertUser($firstname, $lastname, $email) {
    $bdd = dbConnect();
    $pass_hache =  password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $req = $bdd->prepare("INSERT INTO member(firstname , lastname, email, pass) VALUES(:firstname, :lastname,  :email,  :pass)");
    
    $user = $req->execute(array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email,
        "pass" => $pass_hache
    ));
    return $user;
}

function checkAccount($email, $pass){
    $bdd = dbConnect();
    $member = $bdd->prepare("SELECT id, email, pass, firstname, lastname FROM member WHERE email = :email");
    $member->execute([
        'email' => $email,
    ]);
    $member_data = $member->fetch();
    if (!$member_data){
        return false;
    }
    $ispasscorrect = password_verify($pass, $member_data['pass']);

    if ($ispasscorrect) {
        session_start();
        $_SESSION['id'] = $member_data['id'];
        $_SESSION['firstname'] = $member_data['firstname'];
        $_SESSION['lastname'] = $member_data['lastname'];
        $_SESSION['email'] = $member_data['email'];
        $_SESSION['pass'] = $member_data['pass'];
        return true;
    } else {
        return false;
    }

}

function search($text) {
    $bdd = dbConnect();
    $text = htmlspecialchars($text);

    $get_title = $bdd->prepare("SELECT title FROM film WHERE title LIKE concat(:title,'%')");
    $get_title->execute([
        "title" => $text,
    ]);
    while ($search_data = $get_title->fetch(PDO::FETCH_ASSOC)){
        echo "<a href='index.php?action=home&film=" .$search_data['title'] . "'>" . $search_data['title'] . "</a>";
    }
    $get_title->closeCursor();
}

function getUser($id){
    $bdd = dbConnect();

    $get_user = $bdd->prepare("DELETE FROM member WHERE id= :id");
    $get_user->execute([
        "id" => $id,
    ]);
    return true;
}

function updateUser($id ,$firstname, $lastname, $email, $pass){
    $bdd = dbConnect();

    $update_user = $bdd->prepare("UPDATE member SET firstname = :firstname, lastname = :lastname, email = :email, pass = :pass WHERE id = :id");

    $pass_hache =  password_hash($_POST['pass'], PASSWORD_DEFAULT);
    
    
    $update_user->execute([
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email,
        "pass" => $pass_hache,
        "id" => $id,
    ]);
    return true;

}

function getFilmByGenre($genre) {
    $bdd= dbConnect();

    $get_film = $bdd->prepare("SELECT * FROM film WHERE category = :category");

    $get_film->execute(array(
        "category" => $genre,
    ));

    


    return $get_film;
}

function getRecentFilmByGenre($genre) {
    $bdd = dbConnect();

    $mostRecentFilm = $bdd->prepare("SELECT * FROM film WHERE category = :category ORDER BY release_date DESC LIMIT 1 ");

    $mostRecentFilm->execute(array(
        "category" => $genre,
    ));
return $mostRecentFilm;
};