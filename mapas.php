<?php include('header.php'); ?>
<div class="page-content mdl-color--white mdl-shadow--2dp mdl-grid" id="conteudo" style="margin: 1% 15% 1% 15%; padding: 2% 3% 2% 3%">
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--6-col">
		<h3>Contato</h3>
		<p>(12) 3125-3885<br>
		deposito566@gmail.com</p>
		<br>
		<p>Olá! Estamos instalados em Guaratinguetá, na rua Tenente Quirino, 566, no bairro Pedregulho, com o CEP 12515-200.<br>
		Estamos abertos das 7:30 as 18:00 de segunda a sexta e das 7:30 as 13:00 aos sábados (exceto feriados).<br>
		Deixe aqui sua duvida, reclamação, elogio que iremos responder em breve.</p>
		<p>Visite nossa loja!</p>
	</div>
	<div class="mdl-cell mdl-cell--6-col">
		<form action="php/contato.php" method="post">
			<input type="hidden" name="emaildest" value="deposito566@gmail.com">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="nome" name="nome">
				<label class="mdl-textfield__label" for="nome">Nome</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="email" name="email">
				<label class="mdl-textfield__label" for="email">Email</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="assunto" name="assunto">
				<label class="mdl-textfield__label" for="assunto">Assunto</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield">
				<textarea class="mdl-textfield__input" type="text" rows= "5" id="msg" name="msg"></textarea>
				<label class="mdl-textfield__label" for="msg">Mensagem...</label>
			</div>
			<br>
			<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Enviar</button>
		</form>
	</div>
	<div class="mdl-cell mdl-cell--12-col">
	<hr>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.0969674108055!2d-45.20307578557539!3d-22.798870585066766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccc438cadb1609%3A0xbd542e7b6d336a57!2sR.+Ten.+Querino%2C+566+-+Alto+Pedregulho%2C+Guaratinguet%C3%A1+-+SP%2C+12515-200!5e0!3m2!1spt-BR!2sbr!4v1499967760189" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>

<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>
<?php include('footer.php'); ?>