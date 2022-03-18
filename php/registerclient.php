<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle | Cadastrar Cliente</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/attendantpanel.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
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
                    <h1 id="title">Cadastrar Cliente</h1>
                </div>
                <div class="main-table">
                    <div class="form-cliente">
                        <form action="" method="post">
                            <div class="form-container">
                                 <div class="box"> 
                                     <div>
                                        <label for="cliente" class="label">Nome:</label>
                                        <input type="text" name="idCliente" class="input" id="Nome" placeholder="Nome">
                                    </div>
                                    <div>
                                        <label for="CPF" class="label">CPF:</label>
                                        <input type="CPF" name="CPF" class="input" id="CPF" placeholder="000.000.000-00">
                                    </div>
                                    <div>
                                        <label for="Email" class="label">Email:</label>
                                        <input type="email" name="email" class="input" id="email" placeholder="Email">
                                    </div>
                                    <div>
                                        <label for="telefone" class="label">Telefone:</label>
                                        <input type="tel" name="telefone" class="input" id="telefone" placeholder="(00) 00000-0000">
                                    </div>
                                </div>
                                <div class="box">
                                     <div>
                                        <label for="Cidade" class="label">Cidade:</label>
                                        <input type="text" name="cidade" class="input" id="cidade" placeholder="Rio de Janeiro">
                                    </div>
                                    <div>
                                        <label for="Bairro" class="label">Bairro:</label>
                                        <input type="text" name="bairro" class="input" id="bairro" placeholder="Galeão">
                                    </div>
                                    <div>
                                        <label for="Logradouro" class="label">Logradouro:</label>
                                        <input type="text" name="logradouro" class="input" id="logradouro" placeholder="Avenida, Travessa">
                                    </div>
                                    <div>
                                        <label for="CEP" class="label">CEP:</label>
                                        <input type="CEP" name="CEP" class="input" id="CEP" placeholder="00000-000">
                                    </div>
                                    <div>
                                        <label for="Numero" class="label">Número:</label>
                                        <input type="text" name="numero" class="input" id="numero" placeholder="Nº da Casa / Apartamento">
                                    </div>

                                </div>
                                <button type="submit" class="cad-cliente btn">Cadastrar Cliente</button>                               

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>