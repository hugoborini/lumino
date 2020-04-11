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
    $member = $bdd->prepare("SELECT id, email, pass, firstname FROM member WHERE email = :email");
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
        $_SESSION['email'] = $member_data['email'];
        return true;
    } else {
        return false;
    }

}

function search($text) {
    $bdd = dbConnect();
    $text = htmlspecialchars($text);

    $get_title = $bdd->prepare("SELECT title FROM film WHERE title LIKE concat('%',:title,'%')");
    $get_title->execute([
        "title" => $text,
    ]);

    while ($search_data = $get_title->fetch(PDO::FETCH_ASSOC)){
        echo "<a href='#'>" . $search_data['title'] . "</a>";
    }
    $get_title->closeCursor();
}
