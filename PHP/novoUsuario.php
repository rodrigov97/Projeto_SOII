<?php 
$username = $_REQUEST["username"];
$password = $_REQUEST["passwd"];
$confirmedPasswd = $_REQUEST["confirmedPasswd"];
$gecos = $_POST["gecos"];

$checkUsuario = shell_exec("sudo ../Scripts/uservalidator.sh $username 2>&1");

if ($checkUsuario == 1) {
    echo("Usuário '$username' já existe");
}
else {
    if ($password === $confirmedPasswd || $password === null) {
        $cmd = shell_exec("sudo adduser --home /home/${username} ${username} --gecos '${gecos}' 2>&1");
    
        $tmpfname = tempnam('/tmp/', 'chpasswd');
        $handle = fopen($tmpfname, "w");
        fwrite($handle, "$username:".crypt($password)."\n");
        fclose($handle);
        shell_exec("sudo sh -c \"chpasswd -e < $tmpfname\"");
        
        echo("Usuário '$username' cadastrado !");
    }
    else {
        echo('Senha Inválida.');
    }
}
?>
