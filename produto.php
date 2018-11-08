<?php require_once('php/db.class.php'); ?>
<?php include('header.php'); ?>
<div class="page-content mdl-color--white mdl-shadow--2dp mdl-grid" id="conteudo" style="margin: 1% 1% 1% 1%; padding: 1% 2% 1% 2%">

<div class="mdl-cell mdl-cell--12-col" style="z-index: 100000;">
<!--	<div class="mdl-button mdl-js-button mdl-button--icon mdl-textfield--align-right" id="iconpesquisa">
	<i class="material-icons">search</i></div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campopesquisa" style="width: 70%;">
	<input class="mdl-textfield__input" type="text" name="pesquisa" id="pesquisa">
	<label class="mdl-textfield__label" for="pesquisa">Digite aqui o que deseja pesquisar</label>
</div>
<div class="mdl-button mdl-js-button mdl-button--icon mdl-textfield--align-right" id="fechapesquisa">
	<i class="material-icons">close</i></div>-->
<?php include('categorias.php'); ?>
</div>

<div class="mdl-cell mdl-cell--12-col mdl-grid" id="lista" style="height: 99%;">
	<form method='POST' action='' style="width: 100%;">
		<?php

		if(isset($_POST["btn"]) || isset($_POST["btn2"]) || isset($_POST["btn3"]) || isset($_POST["tudo"])){

			if(isset($_POST["btn"])){

				$btn = $_POST["btn"];

				$sql = "SELECT * FROM pdt_produto WHERE setor = '$btn' AND info != '' ORDER BY produto";

			}

			if(isset($_POST["btn2"])){

				$btn2 = $_POST["btn2"];
				$grupo = explode("*", $btn2);

				$sql = "SELECT * FROM pdt_produto WHERE setor = '$grupo[0]' AND grupo = '$grupo[1]' AND info != '' ORDER BY produto ";
			}

			if(isset($_POST["btn3"])){

				$btn2 = $_POST["btn3"];
				$grupo = explode("*", $btn2);

				$sql = "SELECT * FROM pdt_produto WHERE setor = '$grupo[0]' AND grupo = '$grupo[1]' AND subgrupo = '$grupo[2]' AND info != '' ORDER BY produto ";
			}

			if(isset($_POST["tudo"])){
				$sql = "SELECT * FROM pdt_produto WHERE info != '' ORDER BY produto ";
			}

			$objDb = new db();
			$link = $objDb->conecta_mysql();

			$resultado = mysqli_query($link, $sql);

			while ($produtos = mysqli_fetch_assoc($resultado)){
				echo " <div class='detalhes'>
				<div class='mdl-cell mdl-cell--3-col mdl-shadow--4dp card-prod' style='background-image: url(img/produto/".$produtos["id"].".jpg);'>
					<button class='detalhes-content mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--amber mdl-shadow--4dp' id='btndet".$produtos["id"]."' >Detalhes</button>
					<div class='mdl-color-text--black legenda'>".$produtos['produto']."<br>R$ ".$produtos['preco']."</div>
				</div>
			</div> 
			<dialog class='mdl-dialog' id='dialog".$produtos["id"]."' style='width: 80%;'>
				<div class='mdl-dialog__content'>
					<div class='mdl-grid'>
						<div class='mdl-cell mdl-cell--5-col'>
							<img src='img/produto/".$produtos["id"].".jpg' style='max-width: 100%; max-height: 70vh; margin: auto; display: block;' >
						</div>
						<div class='mdl-cell mdl-cell--7-col' style='height: 100%;'>
							<h2>".$produtos['produto']."</h2>
							<small>Codigo: ".$produtos["id"]."</small>
							<h4>R$ ".$produtos['preco']."</h4>
							<p>".$produtos['info']."</p>
							<p>";

								if ((float)$produtos['estoque']>1){
									echo "<span class='mdl-chip mdl-color--green'><span class='mdl-chip__text'>Disponível</span></span>";
								} else{
									echo "<span class='mdl-chip mdl-color--red'><span class='mdl-chip__text'>Consulte estoque</span></span>";
								}

								echo "</p>
							</div>
						</div>
					</div>
					<div class='mdl-dialog__actions mdl-dialog__actions--full-width'>
						<button type='button' class='mdl-button close".$produtos["id"]."'>Fechar</button>
					</div>
				</dialog>

				<script>
					document.querySelector('#btndet".$produtos["id"]."').addEventListener('click', function(event) {
						event.preventDefault();
						document.querySelector('#dialog".$produtos["id"]."').showModal();
					});

					document.querySelector('.close".$produtos["id"]."').addEventListener('click', function(event) {
						event.preventDefault();
						document.querySelector('#dialog".$produtos["id"]."').close();
					});

				</script> ";

			}

		}else{

			$count = 0;

			do{

				$rand = rand(1,6800);

				$sql = "SELECT * FROM pdt_produto WHERE id = $rand AND info != ''";

				$objDb = new db();
				$link = $objDb->conecta_mysql();

				$resultado = mysqli_query($link, $sql);

				while ($produtos = mysqli_fetch_assoc($resultado)){
					echo " <div class='mdl-cell mdl-cell--3-col mdl-shadow--4dp card-prod' style='background-image: url(img/produto/".$produtos["id"].".jpg);'>
					<button class='detalhes-content mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--amber mdl-shadow--4dp mdl-color-text--black' id='btndet".$produtos["id"]."' ><strong>Detalhes</strong></button>
					<div class='legenda'>".$produtos['produto']."<br>R$ ".$produtos['preco']."</div>
				</div>";
				$count++;

				echo "
				<dialog class='mdl-dialog' id='dialog".$produtos["id"]."' style='width: 80%;'>
					<div class='mdl-dialog__content'>
						<div class='mdl-grid'>
							<div class='mdl-cell mdl-cell--5-col'>
								<img src='img/produto/".$produtos["id"].".jpg' style='max-width: 100%; max-height: 70vh; margin: auto; display: block;' class='mdl-shadow--2dp' >
							</div>
							<div class='mdl-cell mdl-cell--7-col' style='height: 100%;'>
								<h2>".$produtos['produto']."</h2>
								<small>Codigo: ".$produtos["id"]."</small>
								<h4>R$ ".$produtos['preco']."</h4>
								<p>".$produtos['info']."</p>
								<p>";

									if ((float)$produtos['estoque']>1){
										echo "<span class='mdl-chip mdl-color--green'><span class='mdl-chip__text'>Disponível</span></span>";
									} else{
										echo "<span class='mdl-chip mdl-color--red'><span class='mdl-chip__text'>Consulte estoque</span></span>";
									}

									echo "</p>
								</div>
							</div>
						</div>
						<div class='mdl-dialog__actions mdl-dialog__actions--full-width'>
							<button type='button' class='mdl-button close".$produtos["id"]."'>Fechar</button>
						</div>
					</dialog>

					<script>
						document.querySelector('#btndet".$produtos["id"]."').addEventListener('click', function(event) {
							event.preventDefault();
							document.querySelector('#dialog".$produtos["id"]."').showModal();
						});

						document.querySelector('.close".$produtos["id"]."').addEventListener('click', function(event) {
							event.preventDefault();
							document.querySelector('#dialog".$produtos["id"]."').close();
						});

					</script> ";

				}

			}while ($count<8);

		}

		?>
	</form>
</div>
<div class="mdl-cell mdl-cell--12-col mdl-grid" id="resultado" style="height: 99%;">

</div>
<?php include('footer.php'); ?>