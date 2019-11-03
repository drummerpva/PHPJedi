<?php
require './classes.php';
$olheiro = new UsuarioObserver();
$usuario = new Usuario("Douglas");
$usuario->attach($olheiro);
$usuario->setName("Doug");
//$usuario->detach($olheiro);
$usuario->setName("Dougie");

