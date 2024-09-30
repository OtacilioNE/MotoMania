<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MotoMania</title>
  <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style.css">
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
  <div class="row">
    <?php
      if ($result->num_rows > 0) {
        // Saída dos dados para cada produto
        while($row = $result->fetch_assoc()) {
          ?>
          <div class="col-md-4 mb-4">
            <div class="card">
              <!-- Exibir a imagem do produto -->
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['prod_nome']; ?></h5>
                <p class="card-text">Valor: R$<?php echo number_format($row['prod_valor'], 2, ',', '.'); ?></p>
                <p class="card-text">Quantidade: <?php echo $row['prod_qtde']; ?></p>
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "<p>Nenhum produto encontrado.</p>";
      }

      // Fechar a conexão com o banco de dados
      $conn->close();
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
