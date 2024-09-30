<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório de Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
  // Inclui o menu
  include "menu.html";

  include "conexao.php";

  // Criar a conexão
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar a conexão
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  // Consultar os produtos no banco de dados
  $sql = "SELECT prod_id, prod_nome, prod_valor, prod_qtde FROM tb_produtos";
  $result = $conn->query($sql);
?>

<div class="container mt-5">
  <h1>Relatório de Produtos</h1>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Quantidade</th>
          <th>Valor (R$)</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          // Saída dos dados para cada produto
          while($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo $row['prod_nome']; ?></td>
              <td><?php echo $row['prod_qtde']; ?></td>
              <td>R$<?php echo number_format($row['prod_valor'], 2, ',', '.'); ?></td>
              <td>
                <a href="apagar_produto.php?id=<?php echo $row['prod_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja apagar este cliente?');">Apagar</a>
              </td>
            </tr>
            <?php
          }
        } else {
          echo "<tr><td colspan='4'>Nenhum produto encontrado.</td></tr>";
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
