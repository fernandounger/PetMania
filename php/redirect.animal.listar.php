<?php

require('./atendente.crud.php');

session_start();

if(isset($_GET['buscar']) && !empty($_GET['buscar']) && $_GET['buscar'] != NULL)
{
    $_SESSION['busca'] = listaAnimais($_GET['buscar']);
}else
{
    $_SESSION['busca'] = listaAnimais('');
}

header('location: ./atendente.listar.animal.php');