<?php include 'cabeca.php';  ?>

<div id="listaPessoas">

    <h1>Incluindo um Novo Cadastro</h1>
   
    <form id="formCadastrar" method="post" enctype="multipart/form-data" action="backend/incluirCadastro.php">
        <label for="cNome">Nome</label><br />
        <input id="cNome" name="cNome"><br >

        <label for="cDataNasc">Data de Nascimento</label><br />
        <input id="cDataNasc" name="cDataNasc" type="date"><br />

        <label for="cEmail">E-Mail</label><br />
        <input id="cEmail" name="cEmail"><br />
		
        <label for="cFoto">Foto</label><br />
        <input id="cFoto" name="cFoto" type="file"><br />   
        <button type="submit" value='Submit' name='save'href="backend/incluirCadastro" class="btSave">Salvar</td>   
    </form>
</div>


<?php include 'rodape.php';  ?>