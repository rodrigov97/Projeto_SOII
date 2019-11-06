<?php 

$username = $_REQUEST["username"];
$passwd = $_REQUEST["passwd"];
$confirmedPasswd = $_REQUEST["confirmedPasswd"];
$prGroup = $_REQUEST["useprGrouprname"];
$secGroup = $_REQUEST["secGroup"];
$gecos = $_POST["gecos"];

echo("Username: ". $username);
echo("Senha: ". $passwd);
echo("Senha confirmada: ". $confirmedPasswd);
echo("grupo 1: ". $prGroup);
echo("grupo 2: ". $secGroup);
echo("gecos: ". $gecos);

?>
