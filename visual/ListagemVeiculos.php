<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Veículos</title>
</head>
<body>
    <header>
        <h1>Listagem de Veículos</h1>
</header>
    <p>Veja os veículos cadastrados</p>
    <table border="1" class="prod">
        <tr>
            <th>Código</th>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Proprietário</th>
            <th>Proprietário</th>
            <th>Serviço</th>
            <th>Serviço</th>
        </tr>
        <?php
        require_once '../modelo/Veiculo.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoVeiculo.php';

        $dao = new DaoVeiculos();
        $lista = $dao->listatodos();

        foreach ($lista as $linha){
            echo '<tr>';
            echo '<td>' . $linha['id_veiculo'] . '</td>';
            echo '<td>' . $linha['placa'] . '</td>';
            echo '<td>' . $linha['modelo'] . '</td>';
            echo '<td>' . $linha['marca'] . '</td>';
            echo '<td>' . $linha['cliente_proprietario'] . '</td>';
            echo '<td>' . $linha['cliente_nome'] . '</td>';
            echo '<td>' . $linha['servico'] . '</td>';
            echo '<td>' . $linha['nome_servico'] . '</td>';
        }?>
        <a href="../index.php" class="iniciolist">Início</a>
    </table>
</body>
</html>
<?php