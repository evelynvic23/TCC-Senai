<?php
    //incluir o arquivo conexao com o banco de dados 
    include 'database.php';

    //resgatar as informações enviadas do formulario via post
    $id_aluno = $_POST ['id'];
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $telefone_aluno = $_POST['telefone_aluno'];

    //construir a string para realizar o comando em sql 
    $sql_update = "UPDATE sge_alunos
                    SET nome_aluno = '$nome_aluno', email_aluno = '$email_aluno', telefone_aluno = '$telefone_aluno' 
                        WHERE sge_alunos.id = '$id_aluno'";

    if(mysqli_query($conexao,$sql_update)){
        header("Location: listar_alunos.php");
    }

    else{
        echo "Falha ao atualizar o cadastro.";
    }   