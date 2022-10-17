<?php

namespace Sistema Login\Model;
use Sistema Login\DAO\FuncionarioDAO;

class FuncionarioModel extends Model
{
    public $id, $nome, $rg;
    public $data_nasc, $email;
    public $telefone, $endereco;

    public $rows;

    public function save()
    {
  
        $dao = new FuncionarioDAO();
        if ($this->id == null) {
            $dao->insert($this);
        } else {
        }
    }

    public function getAllRows()
    {
       $dao = new FuncionarioDAO();
       $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new FuncionarioDAO();

        $obj = $dao-> SelectById($id);

        if($obj)
        {

            return $obj;
        }else {
            return new FuncionarioModel();
        }
    }

    public function delete(int $id) {
        
        $dao = new FuncionarioDAO();

        $dao->delete( (int) $id);
        header("Location: /funcionario");
    }
}