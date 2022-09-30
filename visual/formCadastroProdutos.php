<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Formulário de Produtos</title>
</head>
<body>
<header>    
<h1>Cadastro de Produtos</h1>
</header>
<form action="cadastroProdutos.php" method="POST">
        
        <label for="input_nome">Nome</label>
        <input type="text" name="input_nome" id="input_nome"placeholder="Nome"><br><br>

        <label for="input_descricao">Descrição</label>
        <input type="text" name="input_descricao" id="input_descricao"placeholder="Descrição"><br><br>

        <label for="input_marca">Marca</label>
        <input type="text" name="input_marca" id="input_marca"placeholder="Marca"><br><br>

        <label for="input_valor">Valor</label>
        <input type="text" name="input_valor" id="input_valor"placeholder="Valor"><br><br>

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
        <button class="savecad">Salvar</button>
    </form>
    <a href="../index.php" class="iniciocad">Início</a>
    <div>
    <img class="ferrarilogo" src="../assets/ferrarilogo.png" alt="Logo ferrari"/>
    </div>
</body>
</html>