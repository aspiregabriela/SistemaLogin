
<?php

namespace Sistema Login\Model;

use Sistema Login\DAO\ProdutoDAO;

class ProdutoModel extends Model
{
    public $id, $nome, $preco, $descricao;

    public $rows;


    public function save()
    {

        $dao = new ProdutoDAO();

        if ($this->id == null) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {

        $dao = new ProdutoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id);

        if($obj)
        {
            return $obj;
        }else {
            return new ProdutoModel();
        }
    }

    public function delete(int $id) {
      
        $dao = new ProdutoDAO();

        $dao->delete( (int) $id);
        header("Location: /produto");
    }