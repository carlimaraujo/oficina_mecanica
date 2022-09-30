<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css">    
    <title>Cadastro de Clientes</title>
</head>
<body>
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
            echo '<h6>Cadastro relizado com sucesso.</h6>';
        }else{
            echo 'Problema ao realizar o cadastro.';
        }
    ?>
    <a href="../index.php" class="inicio">Início</a>

</body>
</html>