<?php include 'cabeca.php';  ?>
        	
            <div id="listaPessoas">
            	<h1>Dependentes</h1>
                
                <div id="infoDep">

                    <div id="fotoCadastro">
                        <img src="images/fotoCadastro.png" width="77" height="77" />
                    </div> 
                    
                    <table id="tListaCad" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="tituloTab">Nome</td>    
                            <td>Steves Jobs</td>    
                        </tr>              
                        <tr bgcolor="#cddeeb">
                            <td class="tituloTab">Data de Nascimento</td>    
                            <td>25/08/1964</td>    
                        </tr>              
                        <tr>
                            <td class="tituloTab">Email</td>    
                            <td>steve.jobs@apple.com</td>    
                        </tr>              
                    </table>
                    
                    <form id="frmAdicionaDep" action="">

                        <div class="agrupa mB mR">
                            <label for="cNomeDep">Nome</label><br />
                            <input type="text" name="cNomeDep" id="cNomeDep" />
                        </div>    
                        <div class="agrupa">
                            <label for="cDataNasc">Data de Nascimento</label><br />
                            <input type="text" name="cDataNasc" id="cDataNasc" />
                        </div>                            

	                    <a href="javascript:;" class="btPadrao">Adicionar</a>

                    </form>
                    
                    
                    <table id="tLista" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <th width="60%" class="tL">Nome do Dependente</th>
                            <th width="33%">Data de Nascimento</th>
                            <th></th>
                        </tr>    
                        <tr>
                            <td>Fulano de Tal Silva</td>
                            <td align="center">01/01/1980</td>
                            <td align="center"><a href="" class="btRemover"></a></td>
                        </tr>    
                        <tr bgcolor="#cddeeb">
                            <td>Fulano de Tal Silva</td>
                            <td align="center">01/01/1980</td>
                            <td align="center"><a href="" class="btRemover"></a></td>
                        </tr>
                        <tr>
                            <td>Fulano de Tal Silva</td>
                            <td align="center">01/01/1980</td>
                            <td align="center"><a href="" class="btRemover"></a></td>
                        </tr>
                        <tr bgcolor="#cddeeb">
                            <td>Fulano de Tal Silva</td>
                            <td align="center">01/01/1980</td>
                            <td align="center"><a href="" class="btRemover"></a></td>
                        </tr>
                    </table>
                    
                    <a href="javascript:;" class="btPadrao mT">Salvar</a>
                </div>
                
            </div>    

<?php include 'rodape.php';  ?>
