<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["mail"];
            $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuario(nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true) {
                print "<script> alert('Cadastro efetuado com sucesso'); </script>";
                print "<script> location.href='?page=listar'; </script>";
            } else {
                print "<script> alert('Não foi possível cadastrar'); </script>";
                print "<script> location.href='?page=listar'; </script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["mail"];
            $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
            $data_nasc = $_POST["data_nasc"];

           // $sql = "UPDATE usuario SET nome='{$nome}' , email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE idUsuario=".$_REQUEST["id"];
            $sql = "UPDATE usuario SET nome='{$nome}', 
                                       email='{$email}', 
                                       senha='{$senha}', 
                                       data_nasc='{$data_nasc}'
                     WHERE 
                        idUsuario=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true) {
                print "<script> alert('Editado com sucesso'); </script>";
                print "<script> location.href='?page=listar'; </script>";
            } else {
                print "<script> alert('Não foi possível editar'); </script>";
                print "<script> location.href='?page=listar'; </script>";
            }

                break;
                
        case 'excluir':

            $sql = "DELETE FROM usuario WHERE idUsuario=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true) {
                print "<script> alert('Excluído com sucesso'); </script>";
                print "<script> location.href='?page=listar'; </script>";
            } else {
                print "<script> alert('Não foi possível excluir'); </script>";
                print "<script> location.href='?page=listar'; </script>";
            }

            break;

        case 'cadastrar2':
                $cep = $_POST["cep"];
                $rua = $_POST["rua"];
                $bairro = $_POST["bairro"];
                $cidade = $_POST["cidade"];
                $estado = $_POST["estado"];
                $metros = $_POST["metros"];
                $quartos = $_POST["quartos"];
    
                //$sql = "INSERT INTO imoveis(cep, rua, bairro, cidade, estado, metros, quartos, , codUsuario) VALUES ('{$cep}','{$rua}','{$bairro}','{$cidade}','{$estado}','{$metros}','{$quartos}', '1')";
    
                $sql = "INSERT INTO imoveis(cep, rua, bairro, cidade, estado, metros, quartos) VALUES ('{$cep}','{$rua}','{$bairro}','{$cidade}','{$estado}','{$metros}','{$quartos}')";
    
                $res = $conn->query($sql);
    
                if($res==true) {
                    print "<script> alert('Cadastro efetuado com sucesso'); </script>";
                    print "<script> location.href='?page=listar2'; </script>";
                } else {
                    print "<script> alert('Não foi possível cadastrar'); </script>";
                    print "<script> location.href='?page=listar2'; </script>";
                } 
                
                break;

        case 'editar2':
                $cep = $_POST["cep"];
                $rua = $_POST["rua"];
                $bairro = $_POST["bairro"];
                $cidade = $_POST["cidade"];
                $estado = $_POST["estado"];
                $metros = $_POST["metros"];
                $quartos = $_POST["quartos"];
        
                   
                    $sql = "UPDATE imoveis SET cep='{$cep}', 
                                               rua='{$rua}', 
                                               bairro='{$bairro}', 
                                               cidade='{$cidade}',
                                               estado='{$estado}', 
                                               metros='{$metros}', 
                                               quartos='{$quartos}'
                             WHERE 
                                idImoveis=".$_REQUEST["id"];
        
                    $res = $conn->query($sql);
        
                    if($res==true) {
                        print "<script> alert('Editado com sucesso'); </script>";
                        print "<script> location.href='?page=listar2'; </script>";
                    } else {
                        print "<script> alert('Não foi possível editar'); </script>";
                        print "<script> location.href='?page=listar2'; </script>";
                    }
        
                        break;

        case 'excluir2':

                            $sql = "DELETE FROM imoveis WHERE idImoveis=".$_REQUEST["id"];
                
                            $res = $conn->query($sql);
                
                            if($res==true) {
                                print "<script> alert('Excluído com sucesso'); </script>";
                                print "<script> location.href='?page=listar2'; </script>";
                            } else {
                                print "<script> alert('Não foi possível excluir'); </script>";
                                print "<script> location.href='?page=listar2'; </script>";
                            }
                
                            break;

    
        


    }

?>