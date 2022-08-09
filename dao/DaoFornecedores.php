<?php
class DaoFornecedores
{
    
    public function listatodos()
   {
       $lista = [];
       $pst = Conexao::getPreparedStatement('select * from fornecedor');
       $pst->execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
   }
    
    public function inclui(Fornecedor $fornecedor)
    {
        $sql = 'insert into fornecedor (nome, contato, produtos) values (?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fornecedor->getNome());
        $pst->bindValue(2, $fornecedor->getContato());
        $pst->bindValue(3, $fornecedor->getProdutos());
        if ($pst->execute()) {
            return true;
        }else {
            return false;
        }
    }
}
