<?php
    //1º incluir o arquivo de conexao com o banco de dados
    include "database.php";
    //o header é para carregar as configurações em html e css no site
    include "header.php";

    //2º declarando uma variável para receber o camando em sql
    $sql = "SELECT * FROM sge_alunos";

    //3º utilizar a funlão mysqli_query, conectar com o banco e executar o comando em sql
    //é necessário armazenar o resultado em uma variável
    $resultado = mysqli_query($conexao, $sql);
    
?>

<table>
    <!-- Cabeçalho da tabela -->
<thead>
    <!-- tr = table row - linha da tabela -->
    <tr>
        <!-- th = o nome que vai no índice de cada coluna    -->
        <th>Nome: </th>
        <th>Idade: </th>
        <th>Celular: </th>
        <th>E-mail: </th>
        <th>Atualizar</th>
        <th>Excluir</th>
    </tr>
</thead>
<!-- Corpo da tabela -->
<tbody>
        <!-- tr = insere uma linha na tabela -->
        <!-- td = table data - Campo para receber o valor -->
        <!-- A função mysqli_fetch_assoc - converte a consulta do banco de dados em um array
            associativo, permitindo o seu acesso pelo nome do campo da tabela -->
        <?php while($dados = mysqli_fetch_array($resultado)): ?>

            <tr>
               <td><?php echo $dados['nome_aluno']; ?></td>
               <td><?php echo $dados['idade_aluno']; ?></td>
               <td><?php echo $dados['celular_aluno']; ?></td>
               <td><?php echo $dados['email_aluno']; ?></td>
               <td><img src="https://cdn-icons-png.flaticon.com/512/3925/3925153.png" alt="Update" height="18" width="18"></td>
               <td><a href="exclui_cadastro.php?id_aluno=<?php echo $dados['id_aluno']; ?>"><img src="https://cdn-icons-png.flaticon.com/512/5376/5376772.png" alt="Excluir" height="18" width="18"></a></td>

            </tr>


        <?php endwhile; ?>
</tbody>
</table><br><br><br>

<?php

include "footer.php";

?>