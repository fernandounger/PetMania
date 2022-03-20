<?php

require('./atendente.crud.php');

session_start();

$_SESSION['clientes'] = ListaClientes();

header('location: ./atendente.listar.cliente.php');