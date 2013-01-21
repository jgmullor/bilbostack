<?php

use Silex\Provider\MonologServiceProvider;

// descomenta las siguientes líneas para activar la depuración
// en el entorno de producción
// $app['debug'] = true;
// $app->register(new MonologServiceProvider(), array(
//     'monolog.logfile' => __DIR__.'/../logs/prod.log',
// ));

// añadir a continuación cualquier otra opción de configuración de producción

$app['version_assets'] = '3.4.2';

require_once __DIR__.'/datos-patrocinadores.php';
require_once __DIR__.'/datos-ponentes.php';
require_once __DIR__.'/datos-ponencias.php';
