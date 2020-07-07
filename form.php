<?php include 'cabeca.php';  ?>

<div id="listaPessoas">

    <h1>Incluindo um Novo Cadastro</h1>
   
    <form id="formCadastrar" action="backend/incluirCadastro.php" method="POST" enctype="multipart/form-data">
        <label for="cNome">Nome</label><br />
        <input id="cNome" name="cNome" placeholder="Digite seu nome:"><br >

        <label for="cDataNasc">Data de Nascimento</label><br />
        <input id="cDataNasc" name="cDataNasc" type="date"><br />

        <label for="cEmail">E-Mail</label><br />
        <input id="cEmail" name="cEmail" placeholder="Email"><br />
		
        <label for="cFoto">Foto</label><br />
        <input id="cFoto" name="cFoto" type="file"><br />   
        <button type="submit" value='Submit' name='save'href="backend/incluirCadastro" class="btSave">Salvar</td>   
    </form>
</div>


<?php include 'rodape.php';  ?>