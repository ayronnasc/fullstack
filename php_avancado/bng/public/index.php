<?php

use bng\System\Router;

require_once('../vendor/autoload.php'); // arquivo para carregar automaticamente todas as dependencias do projeto

echo "<pre>";
Router::dispatch();