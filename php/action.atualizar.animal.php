<?php

require('atendente.crud.php');

if(
$_POST['nomeAnimal'] == NULL ||
$_POST['sexo'] == NULL ||
$_POST['dataNascimento'] == NULL ||
$_POST['select'] == NULL ||
$_POST['idanimal'] == NULL
)
{
    header('location: atendente.listar.animal.php?status=acess-deny');
	die();
}

$atualizaanimal = new stdClass();

$atualizaanimal->nome_animal = $_POST['nomeAnimal'];
$atualizaanimal->sexo_animal = $_POST['sexo'];
$atualizaanimal->data_nasc = $_POST['dataNascimento'];
$atualizaanimal->raca_animal = $_POST['select'];
$atualizaanimal->id_animal = $_POST['idanimal'];

if(AtualizaAnimal($atualizaanimal)){
    header('location: redirect.animal.listar.php');
    die();
}