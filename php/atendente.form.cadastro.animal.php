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
        <aside class="sidebar">
            <div class="sidebar-container">
                <div>
                    <img src="../assets/img/logo/petmania-black-153.png" alt="Logomarca PetMania" height="105">
                    <h1>Atendente<br><span>Nome Aqui</span></h1>
                </div>
                <div class="sidebar-content">
                    <a href="./redirect.cliente.listar.php">
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
                <div class="container__title">
                    <h1 id="title">Cadastrar Animal</h1>
                </div>
                <div class="main-table">
                    <div class="form-animal">
                        <form action="redirect.animal.cadastro2.php" method="post">
                            <div class="form-container">
                                <div class="box">
                                    <div class="input__nome ipt">
                                        <label for="nome_animal" class="label">Nome Animal:</label>
                                        <input type="text" id="nome" name="nome_animal" class="input"
                                            placeholder="Nome do Animal">
                                    </div>
                                    <div class="input__data ipt">
                                        <label for="data_nasc" class="label">Data de Nascimento:</label>
                                        <input type="date" id="dateanimal" name="data_nasc" class="input">
                                    </div>
                                </div>
                                <div class="box">

                                    <div class="ipt">
                                        <label for="sexo_animal" class="label">Sexo:</label>
                                        <div class="box-check">
                                            <div>
                                                <input type="radio" id="macho" name="sexo_animal" value="M">
                                                <label class="m">Macho</label>

                                                <input type="radio" id="femea" name="sexo_animal" value="F">
                                                <label class="f">Fêmea</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ipt">
                                        <label for="raca_animal" class="label">Raça:</label>
                                        <select name="raca_animal" id="select" autofocus>
                                            <option value="" selected disabled>Selecione a Raça</option>
                                            <?php foreach ($_SESSION['racas'] as $raca) : ?>
                                            <option value="<?= $raca->id_raca ?>"><?= $raca->nome_raca ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="cad-animal btn" name="btn_id_dono" value="<?= $_SESSION['id_dono'] ?>">Cadastrar Animal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>