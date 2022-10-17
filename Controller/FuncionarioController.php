
<?php

namespace Sistema Login\Controller;

use Sistema Login\Model\FuncionarioModel;

class FuncionarioController extends Controller
{
    public static function index()
    {
        $model = new FuncionarioModel();
        $model->getAllRows();

        parent :: render('Funcionario/ListaFuncionario', $model);
    }
    public static function form()
    {
      
        $model = new FuncionarioModel;
        
        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);

        
        parent::render('Funcionario/FormFuncionario', $model);
    }


    public static function save()
    {
        $funcionario = new FuncionarioModel();
        $funcionario->nome = $_POST['nome'];
        $funcionario->rg = $_POST['rg'];
        $funcionario->data_nasc = $_POST['data_nasc'];
        $funcionario->email = $_POST['email'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->endereco = $_POST['endereco'];

        $funcionario->save();
        header("Location: /funcionario");
    }

    public static function delete()
    {
        $model = new FuncionarioModel();
        $model-> delete( (int) $_GET['id']);
    }
    
    