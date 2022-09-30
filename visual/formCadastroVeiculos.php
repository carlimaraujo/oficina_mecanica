<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Formulário de Veículos</title>
</head>
<body>
<header>
    <h1>Cadastro de Veículos</h1>
</header>
<form action="cadastroVeiculo.php" method="POST">

        <label for="input_placa">Placa</label>
        <input type="text" name="input_placa" id="input_placa"placeholder="Placa">

        <label for="input_cliente_proprietario">Proprietário</label>
        <select name="input_cliente_proprietario" id="id_cliente">
            <option value="" disabled selected>Proprietário</option>
        <?php
        require_once '../modelo/Clientes.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoClientes.php';

        $dao = new DaoClientes();
        $lista = $dao->listatodos();
        foreach($lista as $linha)
        {
            echo '<option value="' . $linha['idcliente'] . '">' . $linha['nome']. '</option>';        
        }
        ?>


    </select>

        <label for="input_marca">Marca</label>
        <input type="text" name="input_marca" id="input_marca"placeholder="Marca">

        <label for="input_modelo">Modelo</label>
        <input type="text" name="input_modelo" id="input_modelo"placeholder="Modelo">

        <label for="input_servico">Serviço</label>
        <select name="input_servico" id="input_servico">
            <option value="" disabled selected>Serviço</option>
        <?php
        require_once '../modelo/Servicos.php';
        require_once '../dao/Conexao.php';
        require_once '../dao/DaoServicos.php';

        $dao = new DaoServicos ();
        $lista = $dao->listatodos();
        foreach($lista as $linha)
        {
            echo '<option value="' . $linha['idservico'] . '">' . $linha['nome']. '</option>';        
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
