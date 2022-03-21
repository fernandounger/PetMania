<?php

require('./atendente.crud.php');


if(
    !empty($_POST['nome_cliente']) ||
    !empty($_POST['cpf']) ||
    !empty($_POST['email']) ||
    !empty($_POST['telefone']) ||
    !empty($_POST['cidade']) ||
    !empty($_POST['bairro']) ||
    !empty($_POST['logradouro']) ||
    !empty($_POST['cep']) ||
    !empty($_POST['numero']) ||
    !empty($_POST['id_cliente'])
    
)
{
    $cliente = new stdClass();
    $cliente->Nome = $_POST['nome_cliente'];
    $cliente->cpf = $_POST['cpf'];
    $cliente->email = $_POST['email'];
    $cliente->telefone = $_POST['telefone'];
    $cliente->cidade = $_POST['cidade'];
    $cliente->bairro = $_POST['bairro'];
    $cliente->logradouro = $_POST['logradouro'];
    $cliente->CEP = $_POST['cep'];
    $cliente->numero = $_POST['numero'];
    $cliente->id_dono = $_POST['id_cliente'];
    $cliente->endereco = $_POST['id_end'];


    if(AtualizaCliente($cliente)){
        header('location: redirect.cliente.listar.php?status=sucess');
        die();
    }else{
        header('location: redirect.cliente.listar.php?status=fail');
        die();
    }
    
}