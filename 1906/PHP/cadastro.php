// PHP/cadastro.php
<?php
include 'conexao.php';

// Ativar exibição de erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['dt_nascimento']; // corrigido
    $senha = $_POST['senha'];
    $tipo = 'cliente';

    // Preparar e executar a consulta SQL
    $stmt = $conn->prepare("INSERT INTO tb_clientes (nome, email, dt_nascimento, senha, tipo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $email, $data_nascimento, $senha, $tipo);

    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso";
        echo"<script>location.href='../login.php';</script>";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
