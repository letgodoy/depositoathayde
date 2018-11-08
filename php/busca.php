<?php
require_once "db.class.php";

	$queryString = $_POST['busca'];

		$sql = "SELECT * FROM pdt_produto WHERE produto LIKE '$queryString%' ";

		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$resultado = mysqli_query($link, $sql);


		while ($produtos = mysqli_fetch_assoc($resultado)){
							echo " <div class='mdl-cell mdl-cell--3-col mdl-shadow--4dp card-prod' style='background-image: url(img/produto/".$produtos["id"].".jpg);'>
							<button class='detalhes-content mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--amber mdl-shadow--4dp mdl-color-text--black' id='btndet".$produtos["id"]."' ><strong>Detalhes</strong></button>
							<div class='legenda'>".$produtos['produto']."<br>R$ ".$produtos['preco']."</div>
						</div>";

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

?>