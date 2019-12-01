<?php

$group = $_REQUEST["group"];

$checkGroup = shell_exec("sudo ../Scripts/groupvalidator.sh $group 2>&1");

if($checkGroup == 1) {
    shell_exec("sudo groupdel ${group} 2>&1");
    echo("Grupo '${group}' deletado com sucesso !");
}
else {
    echo("Grupo '$group' não encontrado");
}
?>