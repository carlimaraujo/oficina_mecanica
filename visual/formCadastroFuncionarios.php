<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo.css"><title>Formulário de Funcionários</title>
</head>
<body>
    <header>
    <h1>Cadastro de Funcionarios</h1>
    </header>
    <form action="cadastroFuncionarios.php" method="POST">
        
        <label for="input_nome">Nome</label>
        <input type="text" name="input_nome" id="input_nome"><br><br>

        <label for="input_cpf">CPF</label>
        <input type="text" name="input_cpf" id="input_cpf"><br><br>

        <label for="input_datanasc">Data de Nascimento</label>
        <input type="text" name="input_datanasc" id="input_datanasc"><br><br>

        <label for="input_salario">Salario</label>
        <input type="text" name="input_salario" id="input_salario"><br><br>

        <label for="input_funcao">Função</label>
        <input type="text" name="input_funcao" id="input_funcao"><br><br>

        <button class="savecad">Salvar</button>
    </form>
    <a href="../index.php" class="iniciocad">Início</a>
    <div>
    <img class="ferrarilogo" src="../assets/ferrarilogo.png" alt="Logo ferrari"/>
    </div>
</body>
</html>