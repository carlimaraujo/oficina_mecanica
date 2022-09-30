<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="./visual/estilo.css">
</head>

<style>

</style>

<body>
<div class="container">
    <header>
        <h1>Sistema da Oficina Mecânica</h1>
    </header>
  <div class="listbox">
        <a href="./visual/ListagemClientes.php" class="index">Listar Clientes</a>
        <a href="./visual/ListagemFornecedores.php" class="index">Listar Fornecedores</a>
        <a href="./visual/ListagemFuncionarios.php" class="index">Listar Funcionários</a>
        <a href="./visual/ListagemProdutos.php" class="index">Listar Produtos</a>
        <a href="./visual/ListagemServicos.php" class="index">Listar Serviços</a>
        <a href="./visual/ListagemVeiculos.php" class="index">Listar Veículos</a>

    </div>
    <div class='formbox'>
        <a href="./visual/formCadastroClientes.php" class="index">Formulário de Cadastro de Clientes</a>
        <a href="./visual/formCadastroFornecedores.php" class="index">Formulário de Cadastro de Fornecedores</a>
        <a href="./visual/formCadastroFuncionarios.php" class="index">Formulário de Cadastro de Funcionários</a>
        <a href="./visual/formCadastroProdutos.php" class="index">Formulário de Cadastro de Produtos</a>
        <a href="./visual/formCadastroServicos.php" class="index">Formulário de Cadastro de Serviços</a>
        <a href="./visual/formCadastroVeiculos.php" class="index">Formulário de Cadastro de Veículos</a>

    </div>
<img class="ferrari" src="./assets/ferrari.png" alt="Foto de ferrari"/>

</div>
</body>

</html>

<!--    

/*
require_once './modelo/Clientes.php';
require_once './modelo/Fornecedores.php';
require_once './dao/Conexao.php';
require_once './dao/DaoClientes.php';
require_once './dao/DaoFornecedores.php';
require_once './modelo/Funcionarios.php';
require_once './modelo/Funcionarios.php';
require_once './modelo/Produtos.php';
require_once './dao/DaoFuncionarios.php';




$cliente = new Cliente(1,'Carlos Eduardo',16304990642,38998686204);
$daoClientes = new DaoClientes();
if($daoClientes->inclui($cliente))
{
    echo 'Cliente Cadastrado!';
}
else
{
    echo 'Deu Ruim!';
}


$fornecedor = new Fornecedor(1,'Carlos Eduardo',38998686204, 'Pneus');
$daoFornecedor = new DaoFornecedores();
if($daoFornecedor->inclui($fornecedor))
{
    echo 'Fornecedor Cadastrado!';
}
else
{
    echo 'Deu Ruim!';
}




$funcionario = new Funcionario(null,'Matheus Queiroz',16304992054,'2005-11-16', 1500.0, 'Mecanico');
$daoFuncionario = new DaoFuncionarios();
if($daoFuncionario->inclui($funcionario))
{
    echo 'Funcionario Cadastrado!';
}
else
{
    echo 'Deu Ruim!';
}
-->