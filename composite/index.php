<?php
require './classes.php';
$form = new Form();

$form->addElement(new Label('Usuario:'));
$form->addElement(new InputText('usuario'));

$form->addElement(new Label('Senha:'));
$form->addElement(new InputText('senha',"password"));

$form->addElement(new SubmitButton("Enviar"));

echo $form->render();