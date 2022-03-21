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
   $_POST['numero'] == NULL)
{
    header('location: redirect.cliente.listar.php?status=acess-deny');
	die();
}

$cliente = new stdClass();
$cliente->cpf = $_POST['cpf'];
$cliente->nome = $_POST['nome_cliente'];
$cliente->email = $_POST['email'];
$cliente->telefone = $_POST['telefone'];
$cliente->cidade = $_POST['cidade'];
$cliente->bairro = $_POST['bairro'];
$cliente->logradouro = $_POST['logradouro'];
$cliente->numero = $_POST['numero'];
$cliente->cep = $_POST['cep'];

if(CadastroCliente($cliente))
{
    header('location: redirect.cliente.listar.php');
    die;
}