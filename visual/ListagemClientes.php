<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Clientes</title>
</head>
<body>
    <header>
    <h1>Listagem de Clientes</h1>
    </header>
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
