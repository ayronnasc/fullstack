<?php

use bng\Controllers\Main;

require_once('../vendor/autoload.php'); // arquivo para carregar automaticamente todas as dependencias do projeto

echo APP_NAME;
echo "<br>";

$a = new Main();
echo $a->teste();