<?php 

$username = $_REQUEST["username"];
$group = $_REQUEST["group"];

shell_exec("sudo deluser ${username} ${group} 2>&1");
echo("Usuário ${username} removido do grupo ${group} com sucesso !");
?>
