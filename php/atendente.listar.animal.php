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
                        <h1 id="title">Animais</h1>
                    </div>
                </div>
                <div class="main-table">
                    <div class="table-pacient">
                        <form action="./redirect.animal.listar.php" class="searchbar" method="get">
                            <input type="text" class="search__input" name="buscar">
                            <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="infinit__table">

                            <table class="table">
                                <thead id="thead">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Sexo</th>
                                        <th>Nascimento</th>
                                        <th>Raça</th>
                                        <th>Dono</th>

                                        <th><i class="fa-solid fa-plus"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['busca'] as $busca) : ?>
                                        <tr>
                                            <td><?= $busca->id ?></td>
                                            <td><?= $busca->Nome ?></td>
                                            <td><?= $busca->Sexo ?></td>
                                            <td><?= $busca->Data_Nascimento ?></td>
                                            <td><?= $busca->Raca ?></td>
                                            <td><?= $busca->Dono ?></td>
                                            <td>
                                                <a href="./redirect.cadastro.consulta.php?idAnimal=<?= $busca->id ?>&nomeAnimal=<?= $busca->Nome ?>"><i class="fa-solid fa-file-pen"></i></a>
                                                <a href="./redirect.action.editar.animal.php?id=<?= $busca->id ?>&id_especie=<?= $busca->id_especie ?>"><i class="fa-solid fa-pen-to-square"></i></a>
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