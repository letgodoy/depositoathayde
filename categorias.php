<?php require_once('php/db.class.php'); ?>

<div class="mdl-cell mdl-cell--12-col" id="divpesquisa" style="z-index: 10000; float: left;">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campopesquisa" style="width: 70%;">
	<input class="mdl-textfield__input" type="text" name="pesquisa" id="pesquisa">
	<label class="mdl-textfield__label" for="pesquisa">Digite aqui o que deseja pesquisar</label>
</div>

<div class="mdl-button mdl-js-button mdl-button--icon mdl-textfield--align-right" id="fechapesquisa">
	<i class="material-icons">close</i></div>
	</div>

<div class="mdl-cell mdl-cell--12-col" id="categoria" style="z-index: 10000; float: left;">
	<form action="" method="POST">

		<?php

		$sql = "SELECT DISTINCT setor FROM pdt_produto WHERE info!='' ORDER BY setor ";

		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$resultado = mysqli_query($link, $sql);

		echo "<ul class='menu'>";
		echo "<li><button class='btnnav mdl-button--icon' id='iconpesquisa'>
	<i class='material-icons'>search</i></button></li>";

		while ($cat = mysqli_fetch_assoc($resultado)){
			if (empty($cat['setor'])) break;
			$setor = $cat["setor"];
			echo " <li><button class='btnnav' name='btn' type='submit' value='".$setor."'>".$setor."</button>";

			$sql1 = "SELECT DISTINCT grupo FROM pdt_produto WHERE setor = '$setor' AND info != '' ORDER BY grupo ";

			$objDb1 = new db();
			$link1 = $objDb1->conecta_mysql();

			$resultado1 = mysqli_query($link1, $sql1);
			$ul = true;
			$fecha1 = false;

			while ($grp = mysqli_fetch_assoc($resultado1)){
				if (empty($grp['grupo'])) break;
				$grupo = $grp['grupo'];
				if($ul){
					echo "<ul class='submenu-1'>";
					$fecha1 = true;
					$ul = false;
				}
				echo " <li><button class='btnnav' name='btn2' type='submit' value='".$setor."*".$grupo."'>".$grupo."</button>";

				$objDb2 = new db();
				$link2 = $objDb2->conecta_mysql();

				$sql2 = "SELECT DISTINCT subgrupo FROM pdt_produto WHERE setor = '$setor' AND grupo = '$grupo' AND info != '' ORDER BY subgrupo ";

				$resultado2 = mysqli_query($link2, $sql2);

				$fecha2 = false;
				$ul1 = true;
				
				while ($sgrp = mysqli_fetch_assoc($resultado2)){
					if (empty($sgrp['subgrupo'])) break;
					$subgrupo = $sgrp['subgrupo'];
					if($ul1){
						echo "<ul class='submenu-2'>";
						$fecha2 = true;
						$ul1 = false;
					}
					echo " <li><button class='btnnav' name='btn3' type='submit' value='".$setor."*".$grupo."*".$subgrupo."'>".$subgrupo."</button></li> ";
				}
				if ($fecha2) echo "</ul>";
				echo "</li> ";
			}
			if ($fecha1) echo "</ul>";
			echo "</li>";
		}
		echo " <li><button class='btnnav' name='tudo' type='submit'>Todos</button></li>";
		echo "</ul>";

		?>

	</form>
</div>