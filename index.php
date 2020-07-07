<?php include 'cabeca.php';  ?>
<?php include "backend/incluirCadastro.php"; ?>

    <!-- TIPO DE MENSAGEM EM QUALQUER AÇÃO -->
    <?php
    if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
            ?>
		</div>
	
    <?php endif ?>
        	
            <div id="listaPessoas">
				<h1>Início</h1>
				<?php
				$mysqli = new mysqli('localhost', 'root', 'MatheusQwerty123', 'cadastrodepessoas') or die(mysqli_error($mysqli));
				$result = $mysqli->query("SELECT * FROM cadastro");
				?>
				
				<!-- ESQUELETO DA TABELA DE REGISTRO -->
				<div class='row justify-content-center'>
					<table class='table'>
						<thead>
							<tr>
								<th>Nome</th>
								<th>Data de Nascimento</th>
								<th>Email</th>
								<th colspan='2'>Action</th>
							</tr>
						</thead>
				</div>
				<?php while($row = $result->fetch_assoc()):?>
				<!-- PREENCHIMENTO DA TABELA DE REGISTRO -->
            </tr>
        <?php endwhile; ?>
        </table>
    </div>

<?php include 'rodape.php';  ?>