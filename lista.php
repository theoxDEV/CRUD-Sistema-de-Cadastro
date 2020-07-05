<?php include 'cabeca.php';  ?>
        	
            <div id="listaPessoas">
            	<h1>Cadastros</h1>

		<a href="javascript:;" class="btPadraoExcluir">Excluir</a>
                
                <table id="tLista" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="5%"><input type="checkbox" /></th>
                        <th width="10%">ID</th>
                        <th class="tL">Nome</th>
                        <th width="20%">Data de Nascimento</th>
                        <th width="10%">Dep</th>
                        <th width="8%">Status</th>
                    </tr>

                    <tr>
                    	<td align="center" style="border-left:0;"><input type="checkbox" /></td>
                    	<td align="center">001</td>
                    	<td><a href="editar.php" class="linkUser">Fulano de Tal Silva</a></td>
                    	<td align="center">08/12/1982</td>
                        <td align="center"><a href="dependentes.php" class="btAdicionar"></a></td>
                    	<td align="center"><a href="javascript:;" class="btCinza"></a></td>
                    </tr>
                    
		    <tr bgcolor="#cddeeb">
                        <td align="center" style="border-left:0;"><input type="checkbox" /></td>
                    	<td align="center">001</td>
                    	<td><a href="editar.php" class="linkUser">Fulano de Tal Silva</a></td>
                    	<td align="center">08/12/1982</td>
                        <td align="center"><a href="dependentes.php" class="btAdicionar"></a></td>
                    	<td align="center"><a href="javascript:;" class="btVerde"></a></td>
                    </tr>
                    
                    <tr>
                    	<td align="center" style="border-left:0;"><input type="checkbox" /></td>
                    	<td align="center">001</td>
                    	<td><a href="editar.php" class="linkUser">Fulano de Tal Silva</a></td>
                    	<td align="center">08/12/1982</td>
                        <td align="center"><a href="dependentes.php" class="btAdicionar"></a></td>
                    	<td align="center"><a href="javascript:;" class="btVerde"></a></td>
                    </tr>
                    
                    <tr bgcolor="#cddeeb">
	                <td align="center" style="border-left:0;"><input type="checkbox" /></td>
                    	<td align="center">001</td>
                    	<td><a href="editar.php" class="linkUser">Fulano de Tal Silva</a></td>
                    	<td align="center">08/12/1982</td>
                        <td align="center"><a href="dependentes.php" class="btAdicionar"></a></td>
                    	<td align="center"><a href="javascript:;" class="btVerde"></a></td>
                    </tr>
                   
                </table>
            	
            </div>
            
            <div id="paginacao">
                <a href="" class="btSeta1"></a> <div id="pags">1 de 10</div> <a href="" class="btSeta2"></a> 
                <select id="paginas">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            
<?php include 'rodape.php';  ?>