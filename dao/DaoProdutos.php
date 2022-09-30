<?php
class DaoProdutos
{
    
    public function listatodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select p.*,f.nome as fornecedor_nome from produtos p inner join fornecedor f 
        on p.idfornecedor=f.idfornecedor;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Produto $produtos)
    {
        $sql = 'insert into produtos (nome, descricao, valor, marca, idfornecedor) values (?, ?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtos->getNome());
        $pst->bindValue(2, $produtos->getDescricao());
        $pst->bindValue(3, $produtos->getValor());
        $pst->bindValue(4, $produtos->getMarca());
        $pst->bindValue(5, $produtos->getCodigofornecedor());
        if ($pst->execute()) {
            return true;
        }else {
            return false;
        }
    }
}
