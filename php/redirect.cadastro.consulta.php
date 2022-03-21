<?php

require('./atendente.crud.php');

session_start();

if(isset($_GET['idAnimal']) && !empty($_GET['idAnimal']) && $_GET['idAnimal'] != NULL)
{
    $_SESSION['listamedicos'] = listarVeterinarios();
    
    header("location: atendente.form.cadastro.consulta.php?idAnimal={$_GET['idAnimal']}&nomeAnimal={$_GET['nomeAnimal']}");
    
}