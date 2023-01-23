<h1>Listar Usuário </h1>
<?php 
    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0 ) {
        print "<table border='1' cellpadding='18pt' cellspacing='2pt' >";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->idUsuario."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->idUsuario."';\"> Editar </button> 
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->idUsuario."';}else{false;}\"> Excluir </button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p> Não encontrou resultados </p>";
    }

?>