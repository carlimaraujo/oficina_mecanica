<?php
class DaoClientes
{

   public function listatodos()
   {
       $lista = [];
       $pst = Conexao::getPreparedStatement('select * from cliente');
       $pst->execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
   }
   
   
    public function inclui(Cliente $cliente)
    {
        $sql = 'insert into cliente (nome, cpf, telefone) values (?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getCpf());
        $pst->bindValue(3, $cliente->getTelefone());
        if ($pst ->execute()){
            return true;
        }else {
            return false;
        }
    }
}