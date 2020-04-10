<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/css/style.css">
</head>
<body>
<?php
    require("components/header_sign-in.php"); 
?>
<div class="back"> <p> <a href="index.php">< Back </a> </p></div>
<?php
  if (isset($_GET['error']) and $_GET['error'] == "badinf" ){
    echo"<p class='error'>Bad password or email !</p>";
}
    require("components/form_log-in.php");
    require("components/footer.php")
?>

</body>
</html>