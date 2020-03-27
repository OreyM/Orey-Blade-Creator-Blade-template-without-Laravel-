<?php

function csrf_token(): string
{
    return sha1(time());
}