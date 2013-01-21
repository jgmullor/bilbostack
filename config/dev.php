<?php

use Silex\Provider\MonologServiceProvider;

// incluir primero la configuración de producción
require __DIR__.'/prod.php';

// activar el modo debug en la aplicación
$app['debug'] = true;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../logs/dev.log',
));
