<?php
require('./atendente.crud.php');
session_start();

if(isset($_GET['id_animal']) && !empty($_GET['id_animal']) && $_GET['id_animal'] != NULL)
{
    $_SESSION['listamedico'] = listarVeterinarios();
    
}

var_dump($_SESSION['listamedico']);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo $_GET['id_animal'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo $_GET['nome_animal'];

/*
header("location: ./atendente.listar.animal.php?id_animal={$_GET['id_animal']}");
