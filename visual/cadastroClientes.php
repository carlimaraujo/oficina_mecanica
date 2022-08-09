<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css">    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <?php
        require_once '../modelo/Clientes.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoClientes.php';

        $nom = filter_input(INPUT_POST, 'input_nome');
        $cpf = filter_input(INPUT_POST, 'input_cpf');
        $tlf = filter_input(INPUT_POST, 'input_telefone');
        
        $cliente = new Cliente(null, $nom, $cpf, $tlf);

        $daoClientes = new DaoClientes();
        if($daoClientes->inclui($cliente)){
            echo 'Cadastro relizado com sucesso.';
        }else{
            echo 'Problema ao realizar o cadastro.';
        }
    ?>
    <a href="../index.php">Início</a>

</body>
</html>