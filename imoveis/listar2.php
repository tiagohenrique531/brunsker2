<h1>Listar Imoveis </h1>
<?php 
    $sql = "SELECT * FROM imoveis";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0 ) {
        print "<table border='1' cellpadding='18pt' cellspacing='2pt' >";
        print "<tr>";
            print "<th>#</th>";
            print "<th>IdImoveis</th>";
            print "<th>CEP</th>";
            print "<th>Rua</th>";
            print "<th>Bairro</th>";
            print "<th>Cidade</th>";
            print "<th>Estado</th>";
            print "<th>Metros</th>";
            print "<th>Quartos</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->idImoveis."</td>";
            print "<td>".$row->cep."</td>";
            print "<td>".$row->rua."</td>";
            print "<td>".$row->bairro."</td>";
            print "<td>".$row->cidade."</td>";
            print "<td>".$row->estado."</td>";
            print "<td>".$row->metros."</td>";
            print "<td>".$row->quartos."</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar2&id=".$row->idImoveis."';\"> Editar </button> 
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir2&id=".$row->idImoveis."';}else{false;}\"> Excluir </button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p> Não encontrou resultados </p>";
    }

?>