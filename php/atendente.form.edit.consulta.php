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
                    <a href="./redirect.animal.listar.php">
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
                    <h1 id="title">Cadastrar Consulta</h1>
                </div>
                <div class="main-table">
                    <div class="form-consulta">
                        <form action="" method="post">
                            <div class="form-content">

                                <div class="form-container">
                                    <div class="box">
                                    <div class="input__animal ipt">
                                        <label for="animal" class="label">Animal:</label>
                                        <input type="text" name="idAnimal" class="input" id="animal" value="Scooby" readonly>
                                    </div>
                                    <div class="input__data">
                                        <label for="date" class="label">Data Agendada:</label>
                                        <input type="date" id="date" name="dataAgendada" class="input" value="18/03/2022" readonly>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="ipt">
                                        <label for="veterinario" class="label">Veterinário:</label>
                                        <input type="text" name="idVeterinario" class="input" id="veterinario" value="Joselito" readonly>
                                    </div>
                                    <div class="ipt">
                                        <label for="select" class="label">Serviços:</label>
                                        <select name="select" id="select" autofocus>
                                            <option value="" selected>Escolha um serviço</option>
                                            <option value="valor1">Valor 1</option>
                                            <option value="valor2">Valor 2</option>
                                            <option value="valor3">Valor 3</option>
                                        </select>
                                    </div>
                                </div>
                               
                                
                            </div>
                            <div class="container__textarea" >
                                <label for="" class="label">Motivo:</label>
                                <textarea name="" id="" cols="30" rows="10" class="textarea" maxlength="30" class=""></textarea>
                                <button type="submit" class="cad-consult btn">Editar Consulta</button> 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>