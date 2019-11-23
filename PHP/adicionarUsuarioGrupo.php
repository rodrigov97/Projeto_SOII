<?php 

$username = $_REQUEST["username"];
$group = $_REQUEST["group"];

shell_exec("sudo gpasswd -a ${username} ${group} 2>&1");
echo("Usuário ${username} adicionado ao grupo ${group} com sucesso !");
?>