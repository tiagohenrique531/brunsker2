<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Editar Usuário </h1>
<?php 
    $sql = "SELECT * FROM usuario WHERE idUsuario=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<fieldset>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->idUsuario; ?>">
        <p>  Novo Usuário: </p>
        <input type="text" placeholder="Digite seu nome" name="nome" value="<?php print $row->nome; ?>">
        <input type="email" placeholder="Digite o email" name="mail" value="<?php print $row->email; ?>">
        <input type="password" placeholder="Digite sua senha" name="senha" required >
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>">

        <button type="submit"> Enviar </button>
    </form>
    </fieldset>
    
</body>
</html>