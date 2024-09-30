<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
  // Inclui o menu
  include "menu.html";

  // Inclui a conexão com o banco de dados
  include "conexao.php";

  // Criar a conexão com o banco de dados
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar a conexão
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  // Consultar os clientes no banco de dados
  $sql = "SELECT cli_id, cli_nome, cli_fone, cli_email FROM tb_cliente";
  $result = $conn->query($sql);

  // Verificar se a consulta foi bem-sucedida
  if ($result === false) {
    echo "Erro na consulta: " . $conn->error; // Exibir o erro do MySQL
  }
?>

<div class="container mt-5">
  <h1>Relatório de Clientes</h1>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Ações</th> <!-- Nova coluna para ações -->
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result && $result->num_rows > 0) {
          // Saída dos dados para cada cliente
          while($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo $row['cli_nome']; ?></td>
              <td><?php echo $row['cli_fone']; ?></td>
              <td><?php echo $row['cli_email']; ?></td>
              <td>
                <!-- Botão de Apagar -->
                <a href="apagar_cliente.php?id=<?php echo $row['cli_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja apagar este cliente?');">Apagar</a>
              </td>
            </tr>
            <?php
          }
        } else {
          echo "<tr><td colspan='5'>Nenhum cliente encontrado. </td></tr>";
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
