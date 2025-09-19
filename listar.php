<?php
    include "cabecalho.php"
?>
<body>
<div class="container">
    <h1>Bem vindo 1º Sistema com CRUD</h1>
    <h2>Ramon Alves & Marcos Gabriel</h2>
    <h2>LISTAGEM DE PRODUTOS</h2>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">PREÇO</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">OPÇÕES</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require 'conexao.php';
            $sql = "SELECT * FROM produtos";
            $stmt = $pdo->query($sql);

            while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$produto['id']."</td>";
                echo "<td>".$produto['nome']."</td>";
                echo "<td>".$produto['preco']."</td>";
                echo "<td>".$produto['quantidade']."</td>";
                echo"
                    <td>
                       <div class='btn-group' role='group'>
                          <a href='form_atualizar.php?id=".$produto['id']."' type='button' class='btn btn-success'>Atualizar</a>
                          <a href='apagar.php?id=".$produto['id']."' type='button' class='btn btn-danger'>Apagar</a>
                        </div>
                    </td>
                    ";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
    <a href="index.php" type="button" class="btn btn-danger">voltar</a>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
