<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Catálogo online da loja de material de construção e decoração Depósito Athayde.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Depósito Athayde</title>

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">

	<link rel="shortcut icon" href="img/favicon.png">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-orange.min.css">
	<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="Anonymous"></script>
	<link rel="stylesheet" href="css-js/styles.css">  
	<script src="css-js/jquery.bxslider.js"></script>
	<link href="css-js/jquery.bxslider.css" rel="stylesheet" />

	<script type="text/javascript">

		$(document).ready(function(){
			$('.bxslider').bxSlider({
				mode: 'fade',
				captions: true,
				controls: false,
				auto: true,
				adaptiveHeight: true
			});

			$('#divpesquisa').hide();
			$('#categoria').show();

			$('#iconpesquisa').click(function(event){
				event.preventDefault();
				$('#divpesquisa').show();
				$('#categoria').hide();
			});

			$('#fechapesquisa').click(function(){
				$('#divpesquisa').hide();
				$('#categoria').show();
			});

			$('#pesquisa').click(function(){
				$('#pesquisa').val('');
			});

			$('#pesquisa').keyup(function(){
				$('#lista').hide();	
				$('#resultado').show();

				var busca = $('#pesquisa').val();

				$.ajax({
					url: 'php/busca.php',
					type: "POST",
					data: {busca : busca},
					success(data){
						$('#resultado').empty().html(data);
					}
				});
			});
			$('#pesquisa').trigger('submit');

			function chatwoo_a() {
				var s = document.createElement("script");
				s.type = "text/javascript";
				s.src = "https://chatwoo.com/c1.jsp?host=" + window.location.host + "&hostname=https://chatwoo.com/";
				document.getElementsByTagName("head")[0].appendChild(s);
			}
			function chatwoo_d(r) {
				var s = document.createElement("script");
				s.type = "text/javascript";
				s.src = r.d;
				document.getElementsByTagName("head")[0].appendChild(s);
			}	                            
			chatwoo_a();
			
		});

	</script>

</head>
<body class="mdl-color--grey-100 mdl-color-text--grey-800 backbody">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<a href="index.php" style="text-decoration: none;"><span class="mdl-layout-title"><img src="img/faviconamarelo.png" style="max-height: 42px;-webkit-filter: drop-shadow(1px 1px 6px black); filter: drop-shadow(1px 1px 6px black);" >&nbsp&nbsp&nbsp<span class="mdl-color-text--amber" style="text-shadow: 2px 2px 5px black; font-size: 24px;">Depósito Athayde</span></span></a>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation mdl-layout--large-screen-only">
					<a class="mdl-navigation__link" href="sobrenos.php">Sobre nós</a>
					<a class="mdl-navigation__link" href="produto.php">Produtos</a>
					<a class="mdl-navigation__link" href="mapas.php">Encontre-nos</a>
					<a class="mdl-navigation__link" href="pagamento.php">Formas de pagamento</a>
					<a class="mdl-navigation__link" href="politicas.php">Políticas de trocas e devoluções</a>
				</nav>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Athayde</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="sobrenos.php">Sobre nós</a>
				<a class="mdl-navigation__link" href="produto.php">Produtos</a>
				<a class="mdl-navigation__link" href="mapas.php">Encontre-nos</a>
				<a class="mdl-navigation__link" href="pagamento.php">Formas de pagamento</a>
				<a class="mdl-navigation__link" href="politicas.php">Políticas de trocas e devoluções</a>
			</nav>
		</div>

		<main class="mdl-layout__content">
			
