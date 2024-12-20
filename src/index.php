<?php
require_once __DIR__ . '/vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Incluir las rutas de estudiantes
require __DIR__ . '/routes/estudiantes.php';

// Ejecutar la aplicación
$app->run();
?>