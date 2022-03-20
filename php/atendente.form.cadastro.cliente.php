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

<body id="body">
    <div class="container">
        <?php
            include('./menu.php');
        ?>
        <main class="main-container">
            <div class="main-content">
                <div class="container__title">
                    <h1 id="title">Cadastrar Cliente</h1>
                </div>
                <div class="main-table">
                    <div class="form-cliente">
                        <form action="redirect.cliente.cadastro.php" method="post">
                            <div class="form-container">
                                <div class="cliente__box">
                                    <div class="ipt">
                                        <label for="cliente" class="label">Nome:</label>
                                        <input type="text" name="nome_cliente" class="input" id="nome"
                                            placeholder="Digite Seu Nome">
                                    </div>
                                    <div class="ipt">
                                        <label for="cpf" class="label">CPF:</label>
                                        <input type="text" name="cpf" class="input" id="cpf"
                                            placeholder="000.000.000-00">
                                    </div>
                                    <div class="ipt">
                                        <label for="email" class="label">Email:</label>
                                        <input type="text" name="email" class="input" id="email"
                                            placeholder="Digite Seu Email">
                                    </div>
                                    <div class="ipt">
                                        <label for="telefone" class="label">Telefone:</label>
                                        <input type="text" name="telefone" class="input" id="telefone"
                                            placeholder="(00) 00000-0000">
                                    </div>
                                </div>

                                <div class="cliente__box--right">
                                    <div class="ipt">
                                        <label for="cidade" class="label">Cidade:</label>
                                        <input type="text" name="cidade" class="input" id="cidade"
                                            placeholder="Digite o Nome da Sua Cidade">
                                    </div>
                                    <div class="ipt">
                                        <label for="bairro" class="label">Bairro:</label>
                                        <input type="text" name="bairro" class="input" id="bairro"
                                            placeholder="Digite o Nome da Seu Bairro">
                                    </div>
                                    <div class="ipt">
                                        <label for="logradouro" class="label">Logradouro:</label>
                                        <input type="text" name="logradouro" class="input" id="logradouro"
                                            placeholder="Digite o Seu Logradouro">
                                    </div>
                                    <div class="ipt">
                                        <label for="cep" class="label">CEP:</label>
                                        <input type="text" name="cep" class="input" id="cep" placeholder="00000-000">
                                    </div>
                                    <div    >
                                        <label for="numero" class="label">Número:</label>
                                        <input type="text" name="numero" class="input input-n" id="numero"
                                            placeholder="N°">
                                    </div>

                                </div>
                                <button type="submit" class="cad-cliente btn">Cadastrar Cliente</button>
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