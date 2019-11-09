<?php

$group = $_REQUEST["group"];

shell_exec("sudo groupadd -g ${group}")

?>