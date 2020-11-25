<?php
session_start();

function autoload($nClase){
    require_once 'clases/'.$nClase.'.php';
}

spl_autoload_register('autoload');