<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Replit</title>
    <link href="./style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login_container">
        <h1 class="login_logo">Toy <br> Mania</h1>
        <form action="PHP/login.php" method="POST">
            <input type="text" id="email" name="email" placeholder="Email">
            <input type="text" id="senha" name="senha" placeholder="Senha">
            <a href="cadastro.php">Não tem uma conta?</a>
            <button type="submit">Login</button>
          </form>
    </div>
</body>

</html>