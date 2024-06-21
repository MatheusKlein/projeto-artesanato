<?php
    $dbhost ='localhost';
    $user='aluno';
    $senha='';
    $db='matheus';

    $conn = mysqli_connect($dbhost, $user, $senha, $db);
   
    $mysqli = new mysqli($dbhost, $user, $senha, $db);

    if ($conn ->connect_errno){
        echo "falha ao conectar (" . $mysqli->connect_errno . ")"
         . $mysqli->connect_errno;

    }else{
        echo " conectado ao banco de dadosssss,
        acessando a base $db";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("conexao.php");
?>
    <h1>conexao com o banco !!!!</h1>
 
    <?php
   
        $sql = "select * from aluno";
        $resultado = mysqli_query($conn, $sql);
       
        while ($dados = mysqli_fetch_assoc($resultado)) {
            echo"".$dados["codigo"]." ".$dados["nome"]." ".$dados["endereco"]."<br>";
        }
    ?>
   

</body>
</html>