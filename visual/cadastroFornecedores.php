<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css">    <title>Cadastro de Fornecedores</title>
</head>
<body>
    <h1>Cadastro de Forneceodres</h1>
    <?php
        require_once '../modelo/Fornecedores.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoFornecedores.php';

        $nom = filter_input(INPUT_POST, 'input_nome');
        $ctt = filter_input(INPUT_POST, 'input_contato');
        $pro = filter_input(INPUT_POST, 'input_produtos');
        
        $fornecedores = new Fornecedor(null, $nom, $ctt, $pro);

        $daoFornecedores = new DaoFornecedores();
        if($daoFornecedores->inclui($fornecedores)){
            echo 'Cadastro relizado com sucesso.';
        }else{
            echo 'Problema ao realizar o cadastro.';
        }
    ?>
    <a href="../index.php">Início</a>

</body>
</html>