
<?php
$_POST = json_decode(file_get_contents('php://input'),true);
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$to = "fashevskij@gmail.com";
$subject = "Письмо с портфолиоl";
$message = "Имя: " .$_POST["name"]. "   Имейл: " .$_POST["email"]. "   Сообщение: " .$_POST["mess"];
mail($to,$subject,$message);
?>
