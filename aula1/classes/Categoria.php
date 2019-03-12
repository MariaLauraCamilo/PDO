<?php

require_once 'classes/Conexao.php';

class Categoria
{

    public $id;
    public $nome;

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar(){

        $query = "SELECT id, nome FROM categorias where id = ". $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha){
            return $linha;
        }
    }

    public function inserir($nome){

        $query = "INSERT INTO categorias (nome) VALUES ('". $nome ."')";
        $conexão = Conexao::pegarConexao();
        $conexão->exec($query);
    }

    public function atualiza(){

        $query = "UPDATE categorias set nome '".$this->nome."' where id = ". $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
}