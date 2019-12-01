<?php 

$username = $_REQUEST["username"];

$checkUsuario = shell_exec("sudo ../Scripts/uservalidator.sh $username 2>&1");

if ($checkUsuario == 1) {
    shell_exec("sudo userdel -r $username 2>&1");
    shell_exec("sudo rm -r /home/$username 2>&1");
    echo("Usuário '$username' removido com sucesso !");
}
else {
    echo("Usuário '$username'  não encontrado");
}
?>
