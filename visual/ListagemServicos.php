<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Serviços</title>
</head>
<body>
    <header>
<h1>Listagem de serviços</h1>
</header>
    <p>Veja os serviços cadastrados.</p>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            
        </tr>
        <?php
        require_once '../modelo/Servicos.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoServicos.php';

        $dao = new DaoServicos();
        $lista = $dao->listatodos();

        foreach ($lista as $linha){
            echo '<tr>';
            echo '<td>' . $linha['idservico'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['descricao'] . '</td>';
            echo '<td>' . $linha['valor'] . '</td>';
        }
        ?>
        <a href="../index.php" class="iniciolist">Início</a>
    </table>
</body>
</html>
<?php
