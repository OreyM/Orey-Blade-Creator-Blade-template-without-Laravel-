<?php

$router->get('/', function() use ($blade){
    return $blade->render('home');
});

$router->get('test', function() use ($blade){
    return $blade->render('test');
});