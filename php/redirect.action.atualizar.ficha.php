<?php


require('./veterinario.crud.php');
session_start();

if(isset($_GET['idFicha']) && !empty($_GET['idFicha']) && $_GET['idFicha'] !=NULL)
{
    $_SESSION['atualiza_ficha'] = listaFichaID($_GET['idFicha']);
    header("location: ./veterinario.form.edit.consulta.php?nomeanimal={$_GET['nomeanimal']}&Veterinario={$_GET['Veterinario']}");
}
else
{
   #header("location: ./veterinario.form.edit.consulta.php?status=fail");
}

