<?php

require('./atendente.crud.php');

if($_POST['id_animal'] == NULL ||
   $_POST['data_nasc'] == NULL ||
   $_POST['nome_animal'] == NULL ||
   $_POST['raca_animal'] == NULL ||
   $_POST['sexo_animal'] == NULL ||
   $_POST['observacoes'] == NULL)
{
    header('location: registerclient.php?status=acess-deny');
	die();
}



$animal = new stdClass();

$animal->id_animal = $_POST[''];
$animal->data_nasc = $_POST[''];
$animal->nome_animal = $_POST[''];
$animal->raca_animal = $_POST[''];
$animal->sexo_animal = $_POST[''];
$animal->observacoes = $_POST[''];

if(AtualizaAnimal($animal))
{
    header('location attendantpanel.php');
    die();
}