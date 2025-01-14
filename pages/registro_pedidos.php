<?php

    include_once ('../arquivos/conexao.php');

    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header("Location: login.php");
    }

    $sql = "SELECT * FROM usuario ORDER BY id DESC";

    $resulta = $conn->query($sql);

    //print_r($resulta);

?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/r_pedidos.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <html>
</head>

    <body>
        

    <div class="corpo">
        <div class="cabecalho">
            <div id="lista">
                <h1 class="titulo"><br>Tabela de Pedidos</h1><br>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            
                            <th scope="col">Cliente</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Classificação</th>
                            <th scope="col">Data de Entrega</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="3"></td>
                            <td></td>
                        </tr>



                    </tbody>
                </table>
            </div>
            <h1 class="titulo"><br>Registro de Pedidos</h1><br>
            <div class="form-produtos">
                <form registro de produtos>
                <form method="POST" action="../arquivos/produto/funcao_registro_produto.php">
                    <div class="nome-produto">
                        <label for="produto">Nome do produto:</label>
                        <input type="text" name="produto"><br><br>
                    </div>
                    <div class="lucratividade">
                        <label for="preco_produto">Valor do produto:</label>
                        <input type="text" name="preco_produto"><br><br>
                        <label for="preco_venda">Valor de revenda:</label>
                        <input type="text" name="revenda"><br><br>
                    </div>
                    <div class="descricao-produto">
                        <label for="descricao-produto">Descreva o produto:</label>
                        <input type="text" name="descricao_produto"><br><br>
                        <button type="button" class="btn btn-outline-dark">Enviar</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
    <br>
    <?php if (isset($_GET['erro'])) {
        echo $_GET['erro'];
    } ?>
</body>

</html>