<?php

namespace Sistema Login\Controller;

use Sistema Login\Model\ProdutoModel;

class ProdutoController extends Controller
{
    public static function index()
    {
        $model = new ProdutoModel();
        $model->getAllRows();   

        parent :: render('Produto/ProdutoListar', $model);
    }


    public static function form()
    {
        $model = new ProdutoModel();
        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        parent :: render('Produto/ProdutoCadastro', $model);
    }


    public static function save()
    {

        include 'Model/ProdutoModel.php';

        $produto = new ProdutoModel();
        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];
        $produto->descricao = $_POST['descricao'];


        $produto->save();
        header("Location: /produto");
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model-> delete( (int) $_GET['id']);

        header("Location: /produto");
    }
}