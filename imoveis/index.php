<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<fieldset>
    <form action="e" method="post">
    <header>
        <ul>
            <li><a href="? page=novo">Novo Usuário </a></li>
            <li><a href="? page=adcionar">Adcionar imovel </a></li>
            <li><a href="? page=listar">Listar_Usuario</a></li>
            <li><a href="? page=listar2">Listar_Imoveis</a></li>
        </ul>
    </header>

    </form>
    </fieldset>

    <div class="conteiner">
    <?php 
    include("conexao.php");
    switch(@$_REQUEST["page"]){
        case "novo":
            include("novo_usuario.php");
        break;
        case "adcionar":
            include("cadastro_imovel.php");
        break;
        case "listar":
            include("listar.php");
        break;
        case "salvar":
            include("salvar.php");
        break;
        case "editar":
            include("editar.php");
        break;
        case "editar2":
            include("editar2.php");
        break;
        case "listar2":
            include("listar2.php");
        break;
        default:
            print "<h1> Bem vindos! </h1>";


    }

     ?>
    </div>

</body>
</html>