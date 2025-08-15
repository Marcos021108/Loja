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
                <tr>
                    <th scope="row">1</th>
                        <td>Monitor Gamer</td>
                        <td>549,00 </td>
                        <td>237</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="#" type="button" class="btn btn-danger">Atualizar</a>
                                <a href="#" type="button" class="btn btn-warning">Apagar</a>
                            </div>
                        </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>