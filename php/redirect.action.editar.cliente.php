<?php


require('./atendente.crud.php');

session_start();

if(isset($_GET['id_dono']) && !empty($_GET['id_dono']) && $_GET['id_dono'] != NULL){
    $_SESSION['atualiza_cliente'] = listaClienteID($_GET['id_dono']);
}

header('location: ./atendente.form.edit.cliente.php');
