<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Cadastro de Serviços</title>
</head>
<body>
    <h1>Cadastro de Servicos</h1>
    <?php
        require_once '../modelo/Servicos.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoServicos.php';

        $nom = filter_input(INPUT_POST, 'input_nome');
        $dsc = filter_input(INPUT_POST, 'input_descricao');
        $val = filter_input(INPUT_POST, 'input_valor');
        
        $servicos = new Servicos(null, $nom, $dsc, $val);

        $daoServicos = new DaoServicos();
        if($daoServicos->inclui($servicos)){
            echo 'Cadastro relizado com sucesso.';
        }else{
            echo 'Problema ao realizar o cadastro.';
        }
    ?>
    <a href="../index.php">Início</a>

</body>
</html>