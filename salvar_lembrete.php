<?php

switch($_REQUEST["acao"]){
    case 'cadastrar':
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $statuss = $_POST['statuss'];
        $data_conc = $_POST['data_conc'];

    if(empty($titulo) || empty($descricao) || empty($statuss) || empty($data_conc)){

        print('<script>alert("Faltando informações. Preencha todos os campos.");</script>');
        print('<script>location.href("?page=novo");</script>');

    }else{

        $sql = "INSERT INTO lista (titulo,  descricao, statuss,data_conc) VALUES ( '{$titulo}' ,'{$descricao}', '{$statuss}','{$data_conc}')";

        $res = $conn->query($sql);
        if($res == true){
            print ('<script>alert("cadastro feito com sucesso");</script>');
            print ('<script>location.href("?page=listar")</script>');
        }else{
            print('<script>alert("Algo deu errado, tente novamente")</script>');
            print('<script>location.href("?page=novo");</script>');
        }
    }
        break;
        case "editar":
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $statuss = $_POST['statuss'];
            $data_conc = $_POST['data_conc'];
    
            $sql = "UPDATE lista SET
            titulo = '{$titulo}',
            descricao = '{$descricao}',
            statuss = '{$statuss}',
            data_conc = '{$data_conc}'
            WHERE 
            id= " . $_REQUEST["id"];
            
    
            $res = $conn->query($sql);
    
            if($res == true){
                print ('<script>alert("Lembrete editado com sucesso");</script>');
                print ('<script>location.href("?page=listar")</script>');
            }else{
                print('<script>alert("Algo deu errado, tente novamente")</script>');
                print('<script>location.href("?page=listar");</script>');
            }
    
            break;
            case "excluir":
                $sql = "DELETE FROM lista WHERE id =". $_REQUEST['id'];

                $res = $conn->query($sql);

                if($res == true){
                    print '<script>alert("Excluido com sucesso");</script>';
                    print '<script>location.href("?page=listar");</script>';
                }
            break;

}
