<?php
    include "cabecalho.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Bem vindo 1º Sistema com CRUD</h1>
        <h2>Ramon Alves & Marcos Gabriel</h2>
        <h2>CADASTRO DE PRODUTOS</h2>
    </div>
                                                                    
    <div class="container">
        <form>
          <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do produto" >
          </div>
          <div class="mb-3">
                <input type="text" class="form-control" placeholder="Digite o preço do produto">
          </div>
          <div class="mb-3">
                <input type="text" class="form-control" placeholder="Digite a quantidade">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    
</body>
</html>