<?php

function asset(string $path): string
{
    return '/public/' . $path;
}