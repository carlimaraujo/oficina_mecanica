<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Formulário de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="cadastroProdutos.php" method="POST">
        
        <label for="input_nome">Nome</label>
        <input type="text" name="input_nome" id="input_nome"><br><br>

        <label for="input_descricao">Descrição</label>
        <input type="text" name="input_descricao" id="input_descricao"><br><br>

        <label for="input_marca">Marca</label>
        <input type="text" name="input_marca" id="input_marca"><br><br>

        <label for="input_valor">Valor</label>
        <input type="text" name="input_valor" id="input_valor"><br><br>

        <label for="input_idforncedor">Código do fornecedor</label>
        <select name="input_idfornecedor" id="id_fornecedor">
        <?php
        require_once '../modelo/Fornecedores.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoFornecedores.php';
        $dao = new DaoFornecedores();
        $lista = $dao->listatodos();
        foreach ($lista as $linha)
        {
            echo '<option value="' . $linha['idfornecedor'] . '">' . $linha['nome']. '</option>'; 
        }
        ?>
        </select>
        
        <!--<input type="text" name="input_idfornecedor" id="input_idfornecedor"><br><br>-->
        <!--<select name="select_idfornecedor" id="select_idfornecedor">
            <option value="1">Geraldo Raul Heitor de Paula</option>
            <option value="2">Rodrigo Heitor Erick da Silva</option>
            <option value="3">Caleb Nelson Danilo Drumond</option>
        </select>-->

        <button class="save">Salvar</button>
    </form>
    <a href="../index.php">Início</a>
</body>
</html>