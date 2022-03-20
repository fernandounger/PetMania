<?php

require('./atendente.crud.php');

session_start();

if(isset($_GET['buscar']) && !empty($_GET['buscar']) && $_GET['buscar'] != NULL)
{
    $_SESSION['clientes'] = ListaClientes($_GET['buscar']);
}else
{
    $_SESSION['clientes'] = ListaClientes('');
}

header('location: ./atendente.listar.cliente.php');