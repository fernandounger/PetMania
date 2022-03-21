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
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/33abab1032.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div class="container">
        <?php
        include('./menu.veterinario.php')
        ?>
        <main class="main-container">
            <button type="submit"  class="btn-ficha" name="idFicha" value="<?= $_SESSION['atualiza_ficha']->id_ficha ?>" form="formedita" style="position:absolute; top:15px; left:70px;">Atualizar Ficha</button>
            <div class="main-content">
                <div class="container__title btn__main">
                    </div>
                    
                    <div class="main-table">
                        <div class="form-ficha">
                            <form id="formedita" action="./action.atualizar.ficha.php" method="post">
                                <div class="form-content">
                                    
                                <div class="ficha-container">
                                    <div class="box box-p">
                                        <div class="input__ficha">
                                            <label for="idFicha" class="label">Ficha: </label>
                                            <input type="text" class="input" id="idFicha" value="<?= $_SESSION['atualiza_ficha']->id_ficha ?>" disabled>
                                        </div>
                                        <div class="input__data">
                                            <label for="dataAgendada" class="label">Data:</label>
                                            <input type="text" class="input" id="dataAgendada" value="<?= $_SESSION['atualiza_ficha']->data_visita ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="box box-p">
                                        <div class="input__animal">
                                            <label for="idAnimal" class="label">Animal:</label>
                                            <input type="text" class="input" id="idAnimal" value="<?= $_GET['nomeanimal'] ?>" disabled>
                                        </div>
                                        <div class="">
                                            <label for="select" class="label">Veterinario:</label>
                                            <input type="text" class="input" id="animal" value="<?= $_GET['Veterinario'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="container__area">
                                    <label for="motivo" class="label">Motivo:</label>
                                    <textarea name="motivo" id="motivo" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""><?= $_SESSION['atualiza_ficha']->motivo_visita ?></textarea>
                                    <label for="diagnostico" class="label">Diagnostico:</label>
                                    <textarea name="diagnostico" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""><?= $_SESSION['atualiza_ficha']->diagnostico ?></textarea>
                                    <label for="tratamento" class="label">Tratamento:</label>
                                    <textarea name="tratamento" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""><?= $_SESSION['atualiza_ficha']->tratamento ?></textarea>
                                    <label for="prescricao" class="label">Prescrição:</label>
                                    <textarea name="prescricao" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""><?= $_SESSION['atualiza_ficha']->prescricao ?></textarea>
                                    <label for="observacoes" class="label">Observações:</label>
                                    <textarea name="observacoes" id="" cols="30" rows="10" class="ficha__textarea" maxlength="300" class=""><?= $_SESSION['atualiza_ficha']->observacoes ?></textarea>
                                </div>
                                
                                
                                
                                
                            </form>
                        </div>
                </div>
            </div>
    </div>
    </main>
    </div>
</body>

</html>