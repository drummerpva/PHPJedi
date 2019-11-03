<?php
session_start();
require "vendor/autoload.php";
require './config.php';

spl_autoload_register(function($class){
    
    if(file_exists("./core/".$class.".php")){
        require "./core/".$class.".php";
    }else if(file_exists("./controllers/".$class.".php")){
        require "./controllers/".$class.".php";
    }else if(file_exists("./models/".$class.".php")){
        require "./models/".$class.".php";
    }
    
});
$log = new Monolog\Logger("teste");
$log->pushHandler(new Monolog\Handler\StreamHandler('error.log',Monolog\Logger::WARNING));

$log->addError("Aviso: Deu algo errado!");
$core = new Core();
$core->run();