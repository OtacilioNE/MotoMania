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
<form method="get" action="cadastro_produtos_conf.php">

    <label for="input_produto" class="form-label">Nome da Moto</label>
    <input type="text" name="prod_nome" placeholder="No máximo 50 caracteres" maxlength="50" required class="form-control" id="input_produto">
    <br>
    <label for="input_valor" class="form-label">Valor</label>
    <input type="number" name="prod_valor" required class="form-control" id="input_valor">
<br>
    <label for="input_qtde" class="form-label">Quantidade</label>
    <input type="number" name="prod_qtde" required class="form-control" id="input_qtde">

  </div>


  <br><br><br>



  <input type="submit" value="Salvar produto" class="btn btn-primary">

  <br>
  <br>
</form>


<!-- Fim da página -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
