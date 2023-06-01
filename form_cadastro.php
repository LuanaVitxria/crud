<?php

include "header.php";
?>

<h3>Formulário de Cadastro de Alunos</h3>
<p>Obrigatório o preenchimento de todos os campos</p>
<br>
<div class="formulario">

<form action="cadastro.php" method="post">
    <label for="nome_nome">Nome: </label>
    <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Informe seu nome"><br><br>
    
    <label for="idade_aluno">Idade:</label>
    <select name="idade_aluno" id="idade_aluno">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
    </select><br><br>

    <label for="celular_aluno">Celular: </label>
    <input type="text" name="celular_aluno" id="celular_aluno" placeholder="Informe o número do seu celular"><br><br>

    <label for="aluno_email">E-mail: </label>
    <input type="email" name="email_aluno" id="email_aluno" placeholder="Informe o seu e-mail:"><br><br>

    <input type="submit" value="Efetivar Cadastro">
</form>
</div>

<?php

include "footer.php";
?>