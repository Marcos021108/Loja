<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

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
        <h2>ATUALIZAÇÃO DO PRODUTO</h2>
        <?php
          include "cabecalho.php";  // Cabeçalho da página
          require 'conexao.php';     // Conexão com o banco de dados
      

          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              // Pegando os dados do formulário
              $nome = $_POST['produto'];
              $preco = $_POST['preco'];
              $quantidade = $_POST['quantidade'];
              $id = $_GET['id'];  // Pegando o ID do produto que será atualizado
      

              $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";
              $stmt = $pdo->prepare($sql);
              $stmt->bindParam(':nome', $nome);
              $stmt->bindParam(':preco', $preco);
              $stmt->bindParam(':quantidade', $quantidade);
              $stmt->bindParam(':id', $id);

              if ($stmt->execute()) {
                  echo "<p>Produto atualizado com sucesso!</p>";
              } else {
                  echo "<p>Erro ao atualizar o produto. Tente novamente.</p>";
              }
          }
      
          $id = $_GET['id'];
          $sql = "SELECT * FROM produtos WHERE id = :id";
          $stmt = $pdo->prepare($sql);
          $stmt->bindParam(':id', $id);
          $stmt->execute();
          $produto = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
    </div>
                                                                    
    <div class="container">
        <form action="#" method="POST">
          <div class="mb-3">
                Nome: <input value=" <?php echo $produto['nome']; ?>" type="text" name="produto" class="form-control">
          </div>
          <div class="mb-3">
                Preço: <input value=" <?php echo $produto['preco']; ?>" type="text" name="preco" class="form-control">
          </div>
          <div class="mb-3">
                Quantidade: <input value=" <?php echo $produto['quantidade']; ?>" type="text" name="quantidade" class="form-control">
          </div>
          <a href="listar.php" type="button" class="btn btn-danger">Voltar</a>
          <button type="submit" class="btn btn-success">Atualizar</button>
        </form>
    </div>
    
</body>
</html>