<?php

$group = $_REQUEST["group"];

shell_exec("sudo addgroup ${group} 2>&1");
echo("Grupo ${group} criado com sucesso !");
?>