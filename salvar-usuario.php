<?php
   switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];

        $sql = "INSERT INTO usuarios (nome, cpf, email) VALUES ('{$nome}', '{$cpf}', '{$email}')";

        $res = $coon->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Nao foi possivel cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'editar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];

        $sql = "UPDATE usuarios SET
               nome ='{$nome}',
               cpf = '{$cpf}',
               email = '{$email}'
               WHERE
                  id=".$_REQUEST["id"];


        $res = $coon->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Nao foi possivel editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }


        break;
    case 'excluir':
        
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $coon->query($sql);

        if($res==true){
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Nao foi possivel excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }



        break;

        
   }