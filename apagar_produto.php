<?php
include "menu.html";
include "conexao.php";

// Recebe o ID do cliente da URL
$id = $_GET['id'];

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Executa a consulta para apagar o cliente
$sql = "DELETE FROM tb_produtos WHERE prod_id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Produto apagado com sucesso!";
} else {
    echo "Erro ao apagar produto: " . $conn->error;
}

// Fecha a conexão
$conn->close();

// Redireciona de volta para o relatório de clientes
header("Location: rel_produtos.php");
exit();
?>
