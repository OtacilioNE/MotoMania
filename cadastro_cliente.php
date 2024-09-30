<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<!-- Início da página --> 
      <?php include "menu.html";?>
<!--Fim do menu -->
<br>
<form method="get" action="cadastro_cliente_conf.php">

    <label for="cli_nome" class="form-label">Nome do Cliente</label>
    <input type="text" name="cli_nome" placeholder="No máximo 50 caracteres" maxlength="50" required class="form-control" id="cli_nome">
    <br>
    <label for="cli_fone" class="form-label">Telefone</label>
    <input type="number" name="cli_fone" required class="form-control" id="cli_fone">
<br>
    <label for="cli_email" class="form-label">Email</label>
    <input type="email" name="cli_email" required class="form-control" id="cli_email">

  </div>


  <br><br><br>



  <input type="submit" value="Salvar Cliente" class="btn btn-primary">

  <br>
  <br>
</form>


<!-- Fim da página -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
