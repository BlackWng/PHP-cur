<?php

spl_autoload_register(function ($class){
    $namespace = "Source\\";
    $basedir = __DIR__."/";
    $len = strlen($namespace);

    if (strncmp($namespace, $class, $len) !== 0){
        return ;
    }

    $relativeClass = substr($class, $len);
    var_dump($relativeClass);

    $file = $basedir.str_replace("\\", "/", $relativeClass).".php";
    var_dump($file);

    var_dump($class, $namespace, $basedir);
});