<?php
include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insercao</title>
   
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">Email</label>
                    <input type="text" name="email" id="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                </div>
               
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>