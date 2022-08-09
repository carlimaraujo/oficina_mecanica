<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Cadastro de Funcionários</title>
</head>
<body>
    <h1>Cadastro de Funcionarios</h1>
    <?php
        require_once '../modelo/Funcionarios.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoFuncionarios.php';

        $nom = filter_input(INPUT_POST, 'input_nome');
        $cpf = filter_input(INPUT_POST, 'input_cpf');
        $nas= filter_input(INPUT_POST, 'input_datanasc');
        $sal = filter_input(INPUT_POST, 'input_salario');
        $fun = filter_input(INPUT_POST, 'input_funcao');

        
        $funcionario = new Funcionario(null, $nom, $cpf, $nas, $sal, $fun);

        $daoFuncionarios = new DaoFuncionarios();
        if($daoFuncionarios->inclui($funcionario)){
            echo 'Cadastro relizado com sucesso.';
        }else{
            echo 'Problema ao realizar o cadastro.';
        }
    ?>
    <a href="../index.php">Início</a>

</body>
</html>