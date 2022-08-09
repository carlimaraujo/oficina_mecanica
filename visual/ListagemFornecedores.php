<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Fornecedores</title>
</head>
<body>
<h1>Listagem de Fornecedores</h1>
    <p>Veja os fornecedores cadastrados.</p>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Produtos</th>
            <th>Contato</th>
            
        </tr>
        <?php
        require_once '../modelo/Fornecedores.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoFornecedores.php';

        $dao = new DaoFornecedores();
        $lista = $dao->listatodos();

        foreach ($lista as $linha){
            echo '<tr>';
            echo '<td>' . $linha['idfornecedor'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['produtos'] . '</td>';
            echo '<td>' . $linha['contato'] . '</td>';
        }
        ?>
        <a href="../index.php">Início</a>
    </table>
</body>
</html>
<?php
/*
require_once '../modelo/Fornecedores.php';
require_once '../dao/Conexao.php';
require_once '../dao/DaoFornecedores.php';

$dao = new DaoFornecedores();
$lista = $dao->listaTodos();

echo '<pre>';
print_r($lista);
echo '<pre>';
*/