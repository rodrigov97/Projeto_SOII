<?php

$group = $_REQUEST["group"];

shell_exec("sudo groupdel ${group} 2>&1");
echo("Grupo ${group} deletado com sucesso !");
?>