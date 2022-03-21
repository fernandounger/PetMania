<?php


require('./veterinario.crud.php');

session_start();

if(
   isset($_GET['id_ficha'])
&& !empty($_GET['id_ficha'])
&& $_GET['id_ficha'] != NULL)
{
    $_SESSION['atualiza_ficha'] = listaFichaID($_GET['id_ficha']);
}

header("location: ./veterinario.form.edit.consulta.php?nomeanimal={$_GET['nomeanimal']}");
