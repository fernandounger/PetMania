<?php

require('./atendente.crud.php');

session_start();

if(isset($_GET['idficha']) && !empty($_GET['idficha']) && $_GET['idficha'] != NULL){

    $_SESSION['servicos'] = listarServicos($_GET['idficha']);
    $_SESSION['todosservicos'] = listarTodosServicos();



    header("location: atendente.form.cadastro.servico.consulta.php?idficha={$_GET['idficha']}&nomeanimal={$_GET['nomeanimal']}");
}