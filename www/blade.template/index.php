<?php
require_once 'vendor/autoload.php';

use duncan3dc\Laravel\BladeInstance;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

class Dummy
{
    public function getLocale(): string
    {
        return 'en';
    }
}

function app(): Dummy
{
    return new Dummy();
}

function csrf_token(): string
{
    return sha1(time());
}

function asset(string $path): string
{
    return '/public/' . $path;
}

function dispatcher($router)
{
    $dispatcher =  new Dispatcher($router->getData());

    $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    try {
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $uri);
    } catch (Phroute\Exception\HttpRouteNotFoundException $e) {
        var_dump($e);
        die();
    } catch (Phroute\Exception\HttpMethodNotAllowedException $e) {
        var_dump($e);
        die();
    }

    echo $response;
}

$router = new RouteCollector();
$blade = new BladeInstance("/var/www/html/resources/views", "/var/www/html/resources/cache/views");

require_once 'routes/web.php';

dispatcher($router);
