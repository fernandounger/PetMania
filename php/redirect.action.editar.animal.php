<?php
require('./atendente.crud.php');

session_destroy();
session_start();

echo $_GET['id_especie'];
echo $_GET['id'];

if((isset($_GET['id_especie']) && !empty($_GET['id_especie']) && $_GET['id_especie'] != NULL) && (isset($_GET['id']) && !empty($_GET['id']) && $_GET['id'] != NULL))

{

$_SESSION['listaracas'] = listaRacas($_GET['id_especie']);

$_SESSION['idanimal'] = listaAnimaisID($_GET['id']);



header("location: atendente.form.edit.animal.php");

}else{
    echo "erro";
    header("Refresh: 10; atendente.animal.listar.php");
}