<?php 
    include_once('cep.php');
    $address = getAddress();
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
    <form action="?page=adcionar" method="POST">
    <p>  Digite o seu cep e confirme: </p>
    <input type="text" placeholder="Digite um cep..." name="cep" value="<?php echo $address->cep ?>">
        <?php 
            if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			}
        ?>
        <button type="submit"> Confirmar </button>
    </form>
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar2">
    <input type="hidden" name="cep" value="<?php echo $address->cep ?>">

        <input type="text" placeholder="rua" name="rua" value="<?php echo $address->logradouro ?>">
        <input type="text" placeholder="bairro" name="bairro" value="<?php echo $address->bairro ?>">
        <input type="text" placeholder="cidade" name="cidade" value="<?php echo $address->localidade ?>">
        <input type="text" placeholder="estado" name="estado" value="<?php echo $address->uf ?>">
        <input type="text" placeholder="Informe os metros quadrado" name="metros">
        <input type="text" placeholder="Digite a quantidade de quartos" name="quartos">

        <button type="submit"> Enviar </button>

        </br>

        
    </form>
    </fieldset>
    
</body>
</html>