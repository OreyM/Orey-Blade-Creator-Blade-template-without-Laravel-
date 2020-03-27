<?php
require_once 'vendor/autoload.php';

use duncan3dc\Laravel\BladeInstance;


require '_src/mimics/__.mimic.php';
require '_src/mimics/app.mimic.php';
require '_src/mimics/auth.mimic.php';
require '_src/mimics/asset.mimic.php';
require '_src/mimics/config.mimic.php';
require '_src/mimics/csrf_field.mimic.php';
require '_src/mimics/csrf_token.mimic.php'; // @csrf
require '_src/mimics/url.mimic.php';
require '_src/mimics/route.mimic.php';

/**
 * @return $router
 */
require '_src/router.php';


$blade = new BladeInstance("/var/www/html/resources/views", "/var/www/html/resources/cache/views");

require_once 'routes/web.php';
dispatcher($router);