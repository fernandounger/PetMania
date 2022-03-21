<?php 
session_start()
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
            include('./menu.php');
        ?>
        <main class="main-container">
            <div class="main-content">
                <div class="container__title">
                    <h1 id="title">Editar Animal</h1>
                </div>
                <div class="main-table">
                    <div class="form-animal">
                        <form action="" method="post">
                            <div class="form-container">
                                <div class="box">
                                    <div class="input__nome ipt">
                                        <label for="nome" class="label">Nome Animal:</label>
                                        <input type="text" id="nome" name="nomeAnimal" class="input"
                                            placeholder="Nome do Animal" value="<?= $_SESSION['idanimal']->Nome ?>">
                                    </div>
                                    <div class="input__data ipt">
                                        <label for="dateanimal" class="label">Data de Nascimento:</label>
                                        <input type="date" id="dateanimal" name="dataNascimento" class="input" value="<?= $_SESSION['idanimal']->Data_Nascimento?>">
                                    </div>
                                </div>
                                <div class="box">

                                    <div class="ipt">
                                        <label for="sexo" class="label">Sexo:</label>
                                        <div class="box-check">
                                            <div>
                                                <input type="radio" id="macho" name="sexo" value="M" <?= ($_SESSION['idanimal']->Sexo == "M")? 'checked' : '' ?> >
                                                <label class="m">Macho</label>

                                                <input type="radio" id="femea" name="sexo" value="F" <?= ($_SESSION['idanimal']->Sexo == "F")? 'checked' : '' ?> >
                                                <label class="f">Fêmea</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="ipt">
                                        <label for="select" class="label">Raça:</label>
                                        <select name="select" id="select" autofocus>
                                            <option value="" disabled>Selecione a Raça</option>
                                            <?php foreach($_SESSION['listaracas'] as $racas): ?>
                                                <option value="<?= $racas->id_raca ?>" <?= ($racas->id_raca == $_SESSION['idanimal']->id_raca) ? 'selected' : '' ?>><?= $racas->nome_raca ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <button name="idanimal" value="<?= $_SESSION['idanimal']->id ?>" type="submit" class="cad-animal btn">Editar Animal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>