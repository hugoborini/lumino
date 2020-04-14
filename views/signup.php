<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <title>Lumino | Sign up</title>
</head>
<body>
    <?php 
    require("./components/header_log-in.php");
    ?>
    <div class="back"> <p> <a href="index.php">< Back </a> </p></div>
    <?php
    if (isset($_GET['error']) and $_GET['error'] == "alruse" ){
        echo"<p class='error'>Email already use !</p>";
    }
    require("./components/form_sign-in.php");
  
    require("./components/footer.php");
    ?>
</body>
</html>