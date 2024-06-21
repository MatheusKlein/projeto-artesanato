<?php
$dbhost ='localhost';
$user='aluno';
$senha='';
$db='matheus';

$conn = new mysqli($dbhost, $user, $senha, $db);
if($conn->connect_errno)
{
  echo "erro" ;
}
else
{
  echo"conexao OKAY";
} 
?>