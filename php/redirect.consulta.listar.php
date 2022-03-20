<?php

require('./atendente.crud.php');

session_start();

if(isset($_GET['buscar']) && !empty($_GET['buscar']) && $_GET['buscar'] != NULL)
{
    $_SESSION['consulta'] = listarFichas($_GET['buscar']);
}else
{
    $_SESSION['consulta'] = listarFichas('');
}

header('location: ./atendente.listar.consulta.php');