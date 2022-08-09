<?php
class DaoServicos
{

   public function listatodos()
   {
       $lista = [];
       $pst = Conexao::getPreparedStatement('select * from servicos');
       $pst->execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
   }
   
   
    public function inclui(Servicos $servicos)
    {
        $sql = 'insert into servicos(idservico, nome, descricao, valor) values (?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $servicos->getCodigo());
        $pst->bindValue(2, $servicos->getNome());
        $pst->bindValue(3, $servicos->getDescricao());
        $pst->bindValue(4, $servicos->getValor());
        if ($pst ->execute()){
            return true;
        }else {
            return false;
        }
    }
}