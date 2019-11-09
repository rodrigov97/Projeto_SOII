<?php 

$username = $_REQUEST["username"];
$group = $_REQUEST["group"];

echo("Username: ". $username);
echo("grupo 1: ". $group);

shell_exec("sudo deluser ${username} ${group}");

?>
