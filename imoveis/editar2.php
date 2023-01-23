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

<h1>Editar Imoveis </h1>
<?php 
    $sql = "SELECT * FROM imoveis WHERE idImoveis=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<fieldset>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar2">
        <input type="hidden" name="id" value="<?php print $row->idImoveis; ?>">
        <p>  Novo Imoveis: </p>
        <input type="text" placeholder="Digite um cep..." name="cep" value="<?php print $row->cep; ?>">
        <input type="text" placeholder="rua" name="rua" value="<?php print $row->rua; ?>">
        <input type="text" placeholder="bairro" name="bairro" value="<?php print $row->bairro; ?>">
        <input type="text" placeholder="cidade" name="cidade" value="<?php print $row->cidade; ?>">
        <input type="text" placeholder="estado" name="estado" value="<?php print $row->estado; ?>">
        <input type="text" placeholder="Informe os metros quadrado" name="metros" value="<?php print $row->metros; ?>">
        <input type="text" placeholder="Digite a quantidade de quartos" name="quartos" value="<?php print $row->quartos; ?>">

        <button type="submit"> Enviar </button>
    </form>
    </fieldset>
    
</body>
</html>