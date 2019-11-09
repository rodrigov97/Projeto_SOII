<?php 

$username = $_REQUEST["username"];
$passwd = $_REQUEST["passwd"];
$confirmedPasswd = $_REQUEST["confirmedPasswd"];
$prGroup = $_REQUEST["prGrouprname"];
$secGroup = $_REQUEST["secGroup"];
$gecos = $_POST["gecos"];

echo("Username: ". $username);
echo("Senha: ". $passwd);
echo("Senha confirmada: ". $confirmedPasswd);
echo("grupo 1: ". $prGroup);
echo("grupo 2: ". $secGroup);
echo("gecos: ". $gecos);

//shell_exec("useradd -m -d /home/${username} ${username} -s /bin/bash");

$cmd = "sudo /usr/sbin/useradd -m -p `openssl passwd -1 ${password}` ${username}";
system($cmd);

?>
