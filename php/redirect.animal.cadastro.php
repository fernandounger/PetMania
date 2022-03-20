<?php

require('./atendente.crud.php');

session_start();

if(isset($_GET['id_dono']) && !empty($_GET['id_dono']) && $_GET['id_dono'] != NULL)
{
    $_SESSION['id_dono'] = $_GET['id_dono'];
    
}
if(isset($_GET['id_especie']) && !empty($_GET['id_especie']) && $_GET['id_especie'] != NULL)
{
    $_SESSION['racas'] = listaRacas($_GET['id_especie']);
    
    header('location: atendente.form.cadastro.animal.php');
}