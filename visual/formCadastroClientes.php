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
        <input type="text" name="input_nome" id="input_nome"><br><br>

        <label for="input_cpf">CPF</label>
        <input type="text" name="input_cpf" id="input_cpf"><br><br>

        <label for="input_telefone">Telefone</label>
        <input type="text" name="input_telefone" id="input_telefone"><br><br>

        <button class="save">Salvar</button>
    </form>
    <a href="../index.php">Início</a>
</body>
</html>