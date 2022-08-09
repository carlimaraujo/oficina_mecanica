<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Formulário de Fornecedores</title>
</head>
<body>
    <h1>Cadastro de Fornecedores</h1>
    <form action="cadastroFornecedores.php" method="POST">
        
        <label for="input_nome">Nome</label>
        <input type="text" name="input_nome" id="input_nome"><br><br>

        <label for="input_contato">Contato</label>
        <input type="text" name="input_contato" id="input_contato"><br><br>

        <label for="input_produtos">Produtos</label>
        <input type="text" name="input_produtos" id="input_produtos"><br><br>

        <button class="save">Salvar</button>
    </form>
    <a href="../index.php">Início</a>
</body>
</html>