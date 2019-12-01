<?php 
$username = $_REQUEST["username"];
$password = $_REQUEST["passwd"];


if($username == 'rodrigo' && $password == 'qwe123') {
    header("location: ../home.html");
}
else {
    echo("Senha ou Usuário inválido !!!");
}

?>
