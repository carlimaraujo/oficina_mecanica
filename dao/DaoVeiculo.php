<?php
class DaoVeiculos
{

    public function listatodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select v.*, c.nome as cliente_nome,s.nome as nome_servico from veiculo v 
        inner join cliente c on v.cliente_proprietario=c.idcliente inner join servicos s on v.servico=s.idservico;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Veiculos $veiculo)
    {
        $sql = 'insert into veiculo(placa, cliente_proprietario, marca, modelo, servico) values (?, ?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $veiculo->getPlaca());
        $pst->bindValue(2, $veiculo->getCodigoCliente());
        $pst->bindValue(3, $veiculo->getMarca());
        $pst->bindValue(4, $veiculo->getModelo());
        $pst->bindValue(5, $veiculo->getCodigoServico());
        if ($pst->execute()) {
            return true;
        }else {
            return false;
        }
    }
}