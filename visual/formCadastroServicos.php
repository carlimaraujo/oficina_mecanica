<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Formulário de Serviços</title>
</head>
<body>
    <header>
    <h1>Cadastro de Serviços</h1>
</header>
    <form action="cadastroServicos.php" method="POST">
        
        <label for="input_nome">Nome</label>
        <input type="text" name="input_nome" id="input_nome"><br><br>

        <label for="input_descricao">Descrição</label>
        <input type="text" name="input_descricao" id="input_descricao"><br><br>

        <label for="input_valor">Valor</label>
        <input type="text" name="input_valor" id="input_valor"><br><br>

        <button class="save">Salvar</button>
    </form>
    <a href="../index.php">Início</a>
</body>
</html>