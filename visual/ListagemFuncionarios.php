<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Funcionários</title>
</head>
<body>
    <header>
<h1>Listagem de Funcionários</h1>
</header>
    <p>Veja os funcionários cadastrados.</p>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Salário</th>
            <th>Função</th>
            
        </tr>
        <?php
        require_once '../modelo/Funcionarios.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoFuncionarios.php';

        $dao = new DaoFuncionarios();
        $lista = $dao->listatodos();

        foreach ($lista as $linha){
            echo '<tr>';
            echo '<td>' . $linha['idfuncionario'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['cpf'] . '</td>';
            echo '<td>' . $linha['datanasc'] . '</td>';
            echo '<td>' . $linha['salario'] . '</td>';
            echo '<td>' . $linha['funcao'] . '</td>';
        }
        ?>
        <a href="../index.php">Início</a>
    </table>
</body>
</html>
<?php
/*
require_once '../modelo/Funcionarios.php';
require_once '../dao/Conexao.php';
require_once '../dao/DaoFuncionarios.php';

$dao = new DaoFuncionarios();
$lista = $dao->listaTodos();

echo '<pre>';
print_r($lista);
echo '<pre>';
*/
