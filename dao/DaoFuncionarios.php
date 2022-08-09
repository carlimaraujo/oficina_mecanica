<?php
class DaoFuncionarios
{
    
    public function listatodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from funcionario');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Funcionario $funcionarios)
    {
        $sql = 'insert into funcionario (nome, cpf, salario, funcao, datanasc) values (?, ?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionarios->getNome());
        $pst->bindValue(2, $funcionarios->getCpf());
        $pst->bindValue(3, $funcionarios->getSalario());
        $pst->bindValue(4, $funcionarios->getFuncao());
        $pst->bindValue(5, $funcionarios->getDatanasc());
        if ($pst->execute()) {
            return true;
        }else {
            return false;
        }
    }
}
