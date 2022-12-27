<?php

/* Constants */
define('APPDIR', base_url());

/* Function for get the url base from the server */
function base_url($redirect = "")
{
    $base_url = "";
    $base_url .= isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
    $base_url .= isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] ? $_SERVER['HTTP_HOST'] . '/' : '';

    $base_url = ($redirect != "") ? $base_url . $redirect : $base_url;
    return $base_url;
}
