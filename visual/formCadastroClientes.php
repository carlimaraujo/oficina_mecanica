<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Formulário de Clientes</title>
    <style>

    </style>
</head>
<body>
    <header>
    <h1>Cadastro de Clientes</h1>
    </header>
    <form action="cadastroClientes.php" method="POST">
        <label for="input_nome">Nome</label>
        <input type="text" name="input_nome" id="input_nome"placeholder="Nome:"><br><br>
        <label for="input_cpf">CPF</label>
        <input type="text" name="input_cpf" id="input_cpf"placeholder="CPF:"><br><br>
        <label for="input_telefone">Telefone</label>
        <input type="text" name="input_telefone" id="input_telefone"placeholder="Telefone"><br><br>
        <button class="savecad">Salvar</button>
    </form>
    <a href="../index.php" class="iniciocad">Início</a>
    <div>
    <img class="ferrarilogo" src="../assets/ferrarilogo.png" alt="Logo ferrari"/>
    </div>

</body>
</html>