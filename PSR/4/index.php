<?php
//PSR-4
spl_autoload_register(function($class){
    $base_dir = __DIR__."/pacotes/";
    $file = $base_dir.str_replace("\\", "/", $class).".php";
    echo $file;
    if(file_exists($file)){
        require $file;
    }
});

$clienteInfo = new Loja\Clients\ClientInfo();

//Teoria
/*
 * Vendor Name
 * Subnamespaces 1+
 */
