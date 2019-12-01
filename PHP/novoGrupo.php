<?php

$group = $_REQUEST["group"];

$checkGroup = shell_exec("sudo ../Scripts/groupvalidator.sh $group 2>&1");

if($checkGroup == 1) {
    echo("Grupo '$group' já existe.");
}
else {
    shell_exec("sudo addgroup ${group} 2>&1");
    echo("Grupo '${group}' criado com sucesso !");
}

?>