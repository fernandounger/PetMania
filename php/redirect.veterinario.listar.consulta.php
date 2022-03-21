<?php

require('./veterinario.crud.php');

session_start();

if(isset($_GET['buscar']) && !empty($_GET['buscar']) && $_GET['buscar'] != NULL)
{
    $_SESSION['consulta'] = listarFichas($_GET['buscar']);
}else
{
    $_SESSION['consulta'] = listarFichas('');
}

header('location: ./veterinario.lista.consultas.php');