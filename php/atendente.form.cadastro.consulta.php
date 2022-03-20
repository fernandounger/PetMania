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
                    <h1 id="title">Cadastrar Consulta</h1>
                </div>
                <div class="main-table">
                    <div class="form-consulta">
                        <form action="./action.cadastrar.consulta.php" method="post">
                            <div class="form-content">

                                <div class="form-container">
                                    <div class="box">
                                    <div class="input__animal ipt">
                                        <label for="animal" class="label">Animal:</label>
                                        <input type="text" name="idAnimal" class="input" id="animal" value="<?= $_GET['nome_animal']?>" disabled>
                                    </div>
                                    
                                </div>
                                <div class="box">
                                    <div class="ipt">
                                        <label for="select" class="label">Veterinario:</label>
                                        <select name="select" id="select" autofocus>
                                            <option value="" selected>Escolha um serviço</option>
                                            <option value="valor1">Valor 1</option>
                                        </select>
                                    </div>
                                </div>
                               
                                
                            </div>
                            <div class="container__textarea" >
                                <label for="" class="label">Motivo:</label>
                                <textarea name="" id="" cols="30" rows="10" class="textarea" maxlength="30" class=""></textarea>
                                <button type="submit" class="cad-consult btn">Cadastrar Consulta</button> 
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