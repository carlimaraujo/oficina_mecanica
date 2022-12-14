<!DOCTYPE html>
<html lang="pT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Produtos</title>
</head>
<body>
    <header>
<h1>Listagem de produtos</h1>
</header>
    <p>Veja os produtos cadastrados.</p>
    <table border="1" class="prod">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Marca</th>
            <th>Valor</th>
            <th>Fornecedor</th>
            <th>Fornecedor</th>

            
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
            echo '<td>' . $linha['fornecedor_nome'] . '</td>';
        }
        ?>
        <a href="../index.php" class="iniciolist">Início</a>
    </table>
</body>
</html>
<?php
