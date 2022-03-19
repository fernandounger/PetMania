<?php

require('./atendente.crud.php');

if($_POST['nome_cliente'] == NULL ||
   $_POST['cpf'] == NULL ||
   $_POST['email'] == NULL ||
   $_POST['telefone'] == NULL ||
   $_POST['cidade'] == NULL ||
   $_POST['bairro'] == NULL ||
   $_POST['logradouro'] == NULL ||
   $_POST['cep'] == NULL ||
   $_POST['numero'] == NULL ||
   $_POST['id_dono'] == NULL ||
   $_POST['endereco'] == NULL)
{
    header('location: registerclient.php?status=acess-deny');
	die();
}

$cliente = new stdClass();
$cliente->cpf = $_POST[''];
$cliente->nome = $_POST[''];
$cliente->email = $_POST[''];
$cliente->telefone = $_POST[''];
$cliente->cidade = $_POST[''];
$cliente->bairro = $_POST[''];
$cliente->logradouro = $_POST[''];
$cliente->numero = $_POST[''];
$cliente->cep = $_POST[''];
$cliente->id_dono = $_POST[''];
$cliente->endereco = $_POST[''];

if(AtualizaCliente($cliente))
{
    header('location: attendantpanel.php');
    die;
}