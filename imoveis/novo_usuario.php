<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Novo Usuário </h1>
<fieldset>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <p>  Novo Usuário: </p>
        <input type="text" placeholder="Digite seu nome" name="nome">
        <input type="email" placeholder="Digite o email" name="mail" >
        <input type="password" placeholder="Digite sua senha" name="senha" >
        <input type="date" name="data_nasc">

        <button type="submit"> Enviar </button>
    </form>
    </fieldset>
    
</body>
</html>