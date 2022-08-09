<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Produtos</title>
</head>
<body>
<h1>Listagem de produtos</h1>
    <p>Veja os produtos cadastrados.</p>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Marca</th>
            <th>Valor</th>
            <th>Código Fornecedor</th>
            
        </tr>
        <?php
        require_once '../modelo/Produtos.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoProdutos.php';

        $dao = new DaoProdutos();
        $lista = $dao->listatodos();

        foreach ($lista as $linha){
            echo '<tr>';
            echo '<td>' . $linha['idproduto'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['descricao'] . '</td>';
            echo '<td>' . $linha['marca'] . '</td>';
            echo '<td>' . $linha['valor'] . '</td>';
            echo '<td>' . $linha['idfornecedor'] . '</td>';
        }
        ?>
        <a href="../index.php">Início</a>
    </table>
</body>
</html>
<?php
