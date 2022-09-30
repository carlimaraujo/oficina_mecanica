<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Cadastro de Veículos</title>
</head>
<body>
    <h1>Cadastro de Veículos</h1>
    <?php
    require_once '../modelo/Veiculo.php';
    require_once '../dao/DaoVeiculo.php';
    require_once '../dao/Conexao.php';

    $plc = filter_input(INPUT_POST, 'input_placa');
    $cpr = filter_input(INPUT_POST, 'input_cliente_proprietario');
    $mrc = filter_input(INPUT_POST, 'input_marca');
    $mod = filter_input(INPUT_POST, 'input_modelo');
    $ser = filter_input(INPUT_POST, 'input_servico');
    
    $veiculo = new Veiculos(null, $plc, $cpr, $mrc, $mod, $ser);

    $daoVeiculos = new DaoVeiculos();

    $daoVeiculos = new DaoVeiculos();
    if($daoVeiculos->inclui($veiculo)){
        echo 'Cadastro relizado com sucesso.';
    }else{
        echo 'Problema ao realizar o cadastro.';
    }
    ?>
    <a href="../index.php" class="inicio">Início</a>
</body>
</html>