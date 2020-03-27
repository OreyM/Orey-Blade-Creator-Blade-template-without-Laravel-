<?php

function __(string $translation)
{
    if(strripos($translation, '.')) {
        list($langFile, $translationString) = explode('.', $translation);

        $langPath = require 'resources' . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . app()->getLocale() .
            DIRECTORY_SEPARATOR.  $langFile . '.php';

        echo $langPath[$translationString];
    } else {
        echo $translation;
    }

}