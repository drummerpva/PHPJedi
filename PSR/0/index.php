<?php
//PSR-0
spl_autoload_register(function($class){
    $file = 'classes/'.$class.".php";
    if(file_exists($file)){
        require $file;
    }
});
$douglas = new Douglas();
echo $douglas->getIdade();
