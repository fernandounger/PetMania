<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle | Cadastrar Animal</title>
    <link rel="stylesheet" href="./assets/css/root.css">
    <link rel="stylesheet" href="./assets/css/attendantpanel.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/33abab1032.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-container">
                <div>
                    <img src="./assets/img/logo/petmania-black-153.png" alt="Logomarca PetMania" height="105">
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
                        <form action="" method="post">
                            <div class="form-container">
                                <div class="box">
                                    <div class="input__nome ipt">
                                        <label for="nome" class="label">Nome Animal:</label>
                                        <input type="text" id="nome" name="nomeAnimal" class="input"
                                            placeholder="Nome do Animal">
                                    </div>
                                    <div class="input__data ipt">
                                        <label for="dateanimal" class="label">Data de Nascimento:</label>
                                        <input type="date" id="dateanimal" name="dataNascimento" class="input">
                                    </div>
                                </div>
                                <div class="box">

                                    <div class="ipt">
                                        <label for="sexo" class="label">Sexo:</label>
                                        <div class="box-check">
                                            <div>
                                                <input type="radio" id="macho" name="sexo" value="m">
                                                <label class="m">Macho</label>

                                                <input type="radio" id="femea" name="sexo" value="f">
                                                <label class="f">Fêmea</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="ipt">
                                        <label for="especie" class="label">Espécie:</label>
                                        <input type="text" name="especie" class="input" id="especie"
                                            placeholder="Digite a espécie">
                                    </div>
                                    <div class="ipt">
                                        <label for="select" class="label">Raça:</label>
                                        <select name="select" id="select" autofocus>
                                            <option value="" selected>Selecione a Raça</option>
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2">Valor 2</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="cad-animal btn">Cadastrar Animal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>