<?php
  $dbhost ='localhost';
  $user='aluno';
  $senha='';
  $db='matheus';

try {
  $conn = new PDO("mysql:host=$servername;dbname=3ds", $username, $password);
  //set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  echo "<br>";
  print_r( $e->getMessage());
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
      
        $cmd = $conn->prepare("select * from aluno");
        $cmd-> execute();
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        echo"<pre>";
        print_r($res);
        echo"</pre>";

        foreach ($res as $key=> $vl){
         echo"".$vl["codigo"]." ".$vl["nome"]." ".$vl["endereco"]."<br>";
        }
    ?>
</body>
</html>