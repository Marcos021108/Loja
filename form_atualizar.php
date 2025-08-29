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
        <h2>atualização de produto</h2>
    </div>
    <?php
        $id = $_GET['id'];
        //echo "Recebi ==> $id"
        require 'conexao.php';
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $stmt = $pdo->query($sql);
        $produto = $stmt->fetch(PDO::FETCH_ASSOC);


        // while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //     echo "ID: " . $produto['id'] . "<br>";
        //     echo "Nome: " . $produto['nome'] . "<br>";
        //     echo "Preço: R$" . $produto['preco'] . "<br>";
        //     echo "Estoque: " . $produto['estoque'] . "<br><br>";
        // }

    ?>
                                                                    
    <div class="container">
        <form action="#" method="POST">
          <div class="mb-3">
                Nome: <input value="<?php echo $produto['nome']; ?> " type="text" name="produto" class="form-control" >
          </div>
          <div class="mb-3">
                Preço: <input value="<?php echo $produto['preco']; ?> " type="text" name="preco" class="form-control">
          </div>
          <div class="mb-3">
                Quantidade: <input value="<?php echo $produto['quantidade']; ?> " type="text" name="quantidade" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">atualizar</button>
        </form>
    </div>
    
</body>
</html>