<?php
// Header
include_once 'includes/header.php';
include_once 'php_action/db_connect.php';
include_once 'php_action/create.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Nova Agenda </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
			<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">child_care</i>
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">email</i>
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">Telefone</i>
				<input type="text" name="Fone" id="Fone">
				<label for="email">Telefone</label>

			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="text" name="datanasc" id="date">
				<label for="idade">Data de Nascimento</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="agendas.php" class="btn green"> Lista de agendas </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
