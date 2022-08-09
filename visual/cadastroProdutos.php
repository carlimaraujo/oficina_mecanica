<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <?php
        require_once '../modelo/Produtos.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoProdutos.php';

        $nom = filter_input(INPUT_POST, 'input_nome');
        $dsc = filter_input(INPUT_POST, 'input_descricao');
        $val = filter_input(INPUT_POST, 'input_valor');
        $mar = filter_input(INPUT_POST, 'input_marca');
        $cfn = filter_input(INPUT_POST, 'input_idfornecedor');
        
        $produtos = new Produto(null, $nom, $dsc, $val, $mar, $cfn);

        $daoProdutos = new DaoProdutos();
        if($daoProdutos->inclui($produtos)){
            echo 'Cadastro relizado com sucesso.';
        }else{
            echo 'Problema ao realizar o cadastro.';
        }
    ?>
    <a href="../index.php">Início</a>

</body>
</html>