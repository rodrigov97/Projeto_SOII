<?php 

$username = $_REQUEST["username"];

echo("Username: ". $username);

shell_exec("sudo userdel -r ${username}");

?>
