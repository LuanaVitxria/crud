<?php

include "database.php";

//Resgatar o id via GET para realizar uma consulta por id
$id_aluno = $_GET ['id_aluno'];
//Teste para verificar se o valor via GET foi armazenado
//echo "<h1>".$id_aluno."</h1>";

//Construir uma string para realizar a consulta em SQL por id
$sql_exclui_por_id="DELETE FROM sge_alunos WHERE sge_alunos.id_aluno = '$id_aluno'";

//Teste para verificar se string em SQL está correta
//echo $sql_exclui_por_id;

if(mysqli_query($conexao, $sql_exclui_por_id)){
    header("Location: listar_alunos.php");
}
else
{
    echo "Falha ao excluir cadastro";
}