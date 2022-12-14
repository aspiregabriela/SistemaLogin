
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <form action="/funcionario/save" method="post">
        <fieldset>
            <input name="id" value= "<?= $model-> id ?>" type="hidden"/>
            <legend>Cadastro de Funcionário</legend>
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value= "<?= $model-> nome ?>" type="text" />
            <label for="rg">RG:</label>
            <input name="rg" id="rg" value= "<?= $model-> rg ?>" type="text" />
            <label for="data_nasc">Data Nascimento:</label>
            <input name="data_nasc" id="data_nasc" value= "<?= $model-> data_nasc ?>" type="date" />
            <label for="email">E-mail:</label>
            <input name="email" id="email" value= "<?= $model-> email ?>" type="email" />
            <label for="telefone">Telefone:</label>
            <input name="telefone" id="telefone" value= "<?= $model-> telefone ?>" type="numer" />
            <label for="endereco">Endereço:</label>
            <input name="endereco" id="endereco" value= "<?= $model-> endereco ?>" type="text" />
            <button type="submit">Enviar</button>

        </fieldset>
    </form>
</body>

</html>