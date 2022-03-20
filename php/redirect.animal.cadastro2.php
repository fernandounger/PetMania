<?php

require('./atendente.crud.php');

if($_POST['data_nasc'] == NULL ||
   $_POST['nome_animal'] == NULL ||
   $_POST['raca_animal'] == NULL ||
   $_POST['sexo_animal'] == NULL || 
   $_POST['raca_animal'] == NULL)
{
    header('location: atendente.listar.cliente.php?status=acess-deny');
	die();
}



$animal = new stdClass();

$animal->id_dono = $_POST['btn_id_dono'];
$animal->data_nasc = $_POST['data_nasc'];
$animal->nome_animal = $_POST['nome_animal'];
$animal->raca_animal = $_POST['raca_animal'];
$animal->sexo_animal = $_POST['sexo_animal'];

if(CadastroAnimal($animal))
{
    header('location: redirect.animal.listar.php');
    die();
}