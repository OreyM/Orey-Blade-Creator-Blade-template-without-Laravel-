<?php
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

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

return $router = new RouteCollector();