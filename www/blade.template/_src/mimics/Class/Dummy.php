<?php

namespace Orey\Mimics;

class Dummy
{
    private $config;

    public function __construct()
    {
        $this->config = require '_src' . DIRECTORY_SEPARATOR . 'config.php';
    }

    public function check(): bool
    {
        return $this->config['auth'];
    }

    public function getLocale(): string
    {
        return $this->config['locale'];
    }
}