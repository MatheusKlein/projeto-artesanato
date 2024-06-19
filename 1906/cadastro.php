<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Toy Mania - Cadastro de Cliente</title>
    <link href="./style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>  
    <div class="login_container">
        <h1 class="login_logo">Toy Mania - Cadastro</h1>
        <form action="PHP/cadastro.php" method="POST">
            <input type="text" id="nome" name="nome" placeholder="Nome">
            <input type="email" id="email" name="email" placeholder="E-mail">
            <input type="date" id="dt_nascimento" name="dt_nascimento" placeholder="Data de Nascimento"> <!-- corrigido -->
            <input type="password" id="senha" name="senha" placeholder="Senha">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>
