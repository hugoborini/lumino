<?php
function addUser($firstname, $lastname, $email) {
$user = insertUser($firstname, $lastname, $email);
if ($user === false) {
    die('Impossible d\'ajouter le chakal !');
}
else {
    header('Location: index.php?action=home');
}
};

?>