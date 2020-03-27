<?php
function config(string $param, string $value = null)
{
    $config = [
        'app.name' => 'Blade Project'
    ];

    if ($value) {
        echo $value;
    } else {
        echo $config[$param];
    }
}