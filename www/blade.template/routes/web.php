<?php

// For Example
$router->get('/', function() use ($blade){
    return $blade->render('home');
});

$router->get('test', function() use ($blade){
    return $blade->render('test');
});

$router->get('login', function() use ($blade){
    return $blade->render('auth.login');
});

$router->get('block/index', function() use ($blade){
    return $blade->render('block.index');
});