<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Clientes</title>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <p>Veja os clientes cadastrados.</p>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
        </tr>
        <?php
        require_once '../modelo/Clientes.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoClientes.php';

        $dao = new DaoClientes();
        $lista = $dao->listatodos();

        foreach ($lista as $linha){
            echo '<tr>';
            echo '<td>' . $linha['idcliente'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['cpf'] . '</td>';
            echo '<td>' . $linha['telefone'] . '</td>';
        }
        ?>
        <a href="../index.php">Início</a>
    </table>
</body>
</html>
<?php
/*

require_once '../modelo/Clientes.php';
require_once '../dao/Conexao.php';
require_once '../dao/DaoClientes.php';

$dao = new DaoClientes();
$lista = $dao->listaTodos();

echo '<pre>';
print_r($lista);
echo '<pre>';
*/
