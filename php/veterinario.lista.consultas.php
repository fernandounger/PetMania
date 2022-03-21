<?php
session_start();
?>
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
        include('./menu.veterinario.php')
        ?>
        <main class="main-container">
            <div class="main-content">
                <div class="cabecalho__main">
                    <div class="container__title">
                        <h1 id="title">Consultas</h1>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="main-table">
                    <div class="table-pacient">
                        <form action="./redirect.consulta.listar.veterinario.php" class="searchbar" method="get">
                            <input type="text" class="search__input" name="buscar">
                            <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="infinit__table">

                            <table class="table">
                                <thead id="thead">
                                    <tr>
                                        <th>ID Ficha</th>
                                        <th>especie</th>
                                        <th>Nome</th>
                                        <th>Veterinário</th>
                                        <th>Dono</th>
                                        <th>Motivo</th>
                                        <th>Data</th>
                                        <th> Atendimento/Edição<i class="fa-solid fa-plus"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['consulta'] as $busca) : ?>
                                        <tr>
                                            <td><?= $busca->id_ficha ?></td>
                                            <td><?= $busca->especie ?></td>
                                            <td><?= $busca->nome_animal ?></td>
                                            <td><?= $busca->Veterinario ?></td>
                                            <td><?= $busca->nome_dono ?></td>
                                            <td><?= $busca->motivo_visita ?></td>
                                            <td><?= $busca->data_visita ?></td>
                                            <td>
                                                <a href="redirect.action.atualizar.ficha.php?idFicha=<?= $busca->id_ficha ?>&nomeanimal=<?= $busca->nome_animal ?>&Veterinario=<?= $busca->Veterinario ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                
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