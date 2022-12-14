<?php

class Conexao
{
    private static $dsn = 'mysql:host=localhost;dbname=oficina_mecanica;port=3306;charset=utf8';
    private static $usuario = 'root';
    private static $senha = '12345';
    private static $conexao = null;
    public static function getConexao(){
        if (Conexao::$conexao == null){
            try {
                Conexao::$conexao = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);   
            } catch (PDOException $e){
                echo $e->getMessage();
            } 
        }
        return Conexao::$conexao;
    }
    public static function getPreparedStatement($sql) {
        $pst = null;
        if (Conexao::getConexao() != null){
            try{
                $pst = Conexao::$conexao->prepare($sql);
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        return $pst;
    }
}
Conexao::getConexao();