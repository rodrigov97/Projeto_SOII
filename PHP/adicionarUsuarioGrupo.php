<?php 

$username = $_REQUEST["username"];
$group = $_REQUEST["group"];

$checkUsername = shell_exec("sudo ../Scripts/uservalidator.sh $username 2>&1");
$checkGroup = shell_exec("sudo ../Scripts/groupvalidator.sh $group 2>&1");

if ($checkUsername == 1) {
    if($checkGroup == 1) {
        shell_exec("sudo gpasswd -a ${username} ${group} 2>&1");
        echo("Usuário '${username}' adicionado ao grupo '${group}' com sucesso !");
    }
    else {
        echo("Grupo '$group' não encontrado");
    }
}
else {
    echo("Usuário '$username' não encontrado");
}
?>