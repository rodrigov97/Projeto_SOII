<?php 

$username = $_REQUEST["username"];

$cmd = shell_exec("sudo userdel -r ${username} 2>&1");
$cmd2 =shell_exec("sudo rm -r /home/${username} 2>&1");

echo("Usuário ${username} removido com sucesso !");
?>
