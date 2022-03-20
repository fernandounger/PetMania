<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle | Atendente</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/attendantpanel.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/33abab1032.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div class="container">
        <?php
        include('./menu.php');
        ?>
        <main class="main-container">
            <div class="main-content">
                <div class="cabecalho__main">
                    <div class="container__title">
                        <h1 id="title">Clientes</h1>
                    </div>
                    <div>
                        <a href="./atendente.form.cadastro.cliente.php" class="btn__lista cliente">Cadastrar Cliente</a>
                    </div>
                </div>
                <div class="main-table">
                    <div class="table-pacient">
                        <form action="./redirect.cliente.listar.php" class="searchbar" method="get">
                            <input type="text" class="search__input" name="buscar">
                            <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="infinit__table">

                            <table class="table">
                                <thead id="thead">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Email</th>
                                        <th><i class="fa-solid fa-plus"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['clientes'] as $cl) : ?>
                                        <tr>
                                            <td><?= $cl->id_dono ?></td>
                                            <td><?= $cl->Nome ?></td>
                                            <td><?= $cl->telefone ?></td>
                                            <td><?= $cl->email ?></td>
                                            <td>
                                                <a href="./redirect.animal.cadastro.php?id_dono=<?= $cl->id_dono ?>&id_especie=1"><i class="fa-solid fa-dog"></i></a>
                                                <a href="./redirect.animal.cadastro.php?id_dono=<?= $cl->id_dono ?>&id_especie=2"><i class="fa-solid fa-cat"></i></a>
                                                <a href="./redirect.action.editar.cliente.php?id_dono=<?= $cl->id_dono ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>