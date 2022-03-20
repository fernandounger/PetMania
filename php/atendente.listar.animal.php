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
        <aside class="sidebar">
            <div class="sidebar-container">
                <div>
                    <img src="../assets/img/logo/petmania-black-153.png" alt="Logomarca PetMania" height="105">
                    <h1>Atendente<br><span>Nome Aqui</span></h1>
                </div>
                <div class="sidebar-content">
                    <a href="./atendente.listar.cliente.php">
                    <button class="sidebar__button btn-client" role="button" type="button"><i
                                class="fa-solid fa-user-pen"></i>
                             Clientes</button>
                    </a>
                    <a href="./atendente.listar.animal.php">
                        <button class="sidebar__button btn-client btn-animal" role="button" type="button"><i class="fa-solid fa-paw"></i>
                             Animais</button>
                    </a>
                    <a href="./atendente.listar.consulta.php">
                        <button class="sidebar__button btn-consult" role="button" type="button"><i
                                class="fa-solid fa-notes-medical"></i>
                             Consultas</button>
                    </a>
                </div>
            </div>
        </aside>
        <main class="main-container">
            <div class="main-content">
                <div class="cabecalho__main">
                    <div class="container__title">
                        <h1 id="title">Animais</h1>
                    </div>
                    <div>
                        <a href="./atendente.form.cadastro.animal.php" class="btn__lista animal">Cadastrar Animal</a>
                    </div>
                </div>
                <div class="main-table">
                    <div class="table-pacient">
                        <form action="./attendantpanel.html" class="searchbar" method="get">
                            <input type="text" class="search__input" name="buscar">
                            <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
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
                                <tr>
                                    <th>Arthur</th>
                                    <td>Cachorro</td>
                                    <td>Golden</td>
                                    <td >mais informações</td>
                                    <td>mais informações</td>
                                    <td>mais informações</td>
                                    <td>
                                        <i class="fa-solid fa-file-pen"></i>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Arthur</th>
                                    <td>Cachorro</td>
                                    <td>Golden</td>
                                    <td >mais informações</td>
                                    <td>mais informações</td>
                                    <td>mais informações</td>
                                    <td>
                                        <i class="fa-solid fa-file-pen"></i>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Arthur</th>
                                    <td>Cachorro</td>
                                    <td>Golden</td>
                                    <td >mais informações</td>
                                    <td>mais informações</td>
                                    <td>mais informações</td>
                                    <td>
                                        <i class="fa-solid fa-file-pen"></i>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>