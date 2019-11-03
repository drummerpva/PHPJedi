<?php
//Data Access Object
require './classes.php';
$usuarioDAO = new UsuarioDAO();
/*$usuarioDAO->insert(array(
    "name"=>"Teste Insert",
    "email"=> "teste@insert.com",
    "pass"=> md5("1234")
));
  */
$novoUsuario = new Usuario(array(
    "name"=>"Teste Insert Obj",
    "email"=> "testeObj@insert.com",
    "pass"=> md5("1234")
));
$usuarioDAO->insert($novoUsuario);
$usuarios = $usuarioDAO->get();
foreach ($usuarios as $usuario){
    echo "Usuario: ".$usuario->getName()." - E-mail: ".$usuario->getEmail()."<hr>";
}