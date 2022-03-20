<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle | Atendente</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/attendantpanel.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/33abab1032.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-container">
                <div>
                    <img src="../assets/img/logo/petmania-black-153.png" alt="Logomarca PetMania" height="105">
                    <h1>Atendente<br><span>Nome Aqui</span></h1>
                </div>
                <div class="sidebar-content">
                <a href="./registerclient.php">
                        <button class="sidebar__button btn-client" role="button" type="button"><i
                                class="fa-solid fa-user-pen"></i>
                            Cadastrar Cliente</button>
                    </a>
                    <a href="./registeranimal.php">
                        <button class="sidebar__button btn-client btn-animal" role="button" type="button"><i
                                class="fa-solid fa-paw"></i>
                            Cadastrar Animal</button>
                    </a>
                    <a href="./registerconsult.php">
                        <button class="sidebar__button btn-consult" role="button" type="button"><i
                                class="fa-solid fa-notes-medical"></i>
                            Cadastrar Consulta</button>
                    </a>
                    <a href="./attendantpanel.php">
                        <button class="sidebar__button  btn-pacient" role="button" type="button"><i
                                class="fa-solid fa-users"></i>
                            Pacientes</button>
                    </a>
                    <div></div>
                </div>
            </div>
        </aside>
        <main class="main-container">
            <div class="main-content">
                <div class="container__title">
                    <h1 id="title">Pacientes Agendados</h1>
                </div>
                <div class="main-table">
                    <div class="table-pacient">
                        <table class="table">
                                <thead id="thead">
                                  <tr>
                                    <th>Dono</th>
                                    <th>Espécie</th>
                                    <th>Raça</th>
                                    <th>Informações</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  <th>Nome aqui</th>
                                <td>Nome aqui</td>
                                <td>Nome aqui</td>
                                <td>mais informações</td>
                                  </tr>
                                  <tr>
                                    <th>Nome aqui</th>
                                    <td>Nome aqui</td>
                                    <td>Nome aqui</td>
                                    <td>mais informações</td>
                                  </tr>
                                  <tr>
                                    <th>Nome aqui</th>
                                    <td>Nome aqui</td>
                                    <td>Nome aqui</td>
                                    <td>mais informações</td>
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