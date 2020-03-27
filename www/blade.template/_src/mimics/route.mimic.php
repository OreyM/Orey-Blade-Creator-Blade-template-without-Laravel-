<?php

function route(string $url)
{
    return str_replace('.', '/', $url);
}