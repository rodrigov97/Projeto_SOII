<?php 
$username = $_REQUEST["username"];
$password = $_REQUEST["passwd"];
$confirmedPasswd = $_REQUEST["confirmedPasswd"];
$gecos = $_POST["gecos"];

if ($password === $confirmedPasswd) {
    $cmd = shell_exec("sudo adduser --home /home/${username} ${username} --gecos '${gecos}' 2>&1");

    $tmpfname = tempnam('/tmp/', 'chpasswd');
    $handle = fopen($tmpfname, "w");
    fwrite($handle, "$username:".crypt($password)."\n");
    fclose($handle);
    shell_exec("sudo sh -c \"chpasswd -e < $tmpfname\"");
    
    echo('Usuário cadastrado !');
}
else {
    echo('Senha Inválida.');
}
?>
