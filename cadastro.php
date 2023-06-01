<?php
    //incluindo o arquivo de conexão com o banco de dados
    include "database.php";

    //declaração de variáveis para resgatar as informações do formulário via POST
    $nome = $_POST ["nome_aluno"];
    $idade = $_POST ["idade_aluno"];
    $celular = $_POST ["celular_aluno"];
    $email = $_POST ["email_aluno"];

    //Construir uma string em SQL para cadastro das informações.

    $sql= "INSERT INTO sge_alunos (nome_aluno, idade_aluno, celular_aluno, email_aluno) 
    VALUES ('$nome', '$idade', '$celular', '$email')";

    //Função para cadastrar no banco de dados
    //Função mysqli_query necessita de dois parâmetros - 1º conexão com o banco 2ª comando em sql
    if(mysqli_query($conexao, $sql))
    {
        //A função header redireciona para a página indicada.
        header("Location: listar_alunos.php");
    }
    else
    {
        echo "Falha ao realizar o cadastro";
    }
