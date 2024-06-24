<?php include 'incs/header.php'; ?>
<?php include 'incs/enviar-email.php'; ?>
<section class="sucesso <?= $success?>">
	<div class="sucesso_inner">
		<h2>Mensagem enviada!</h2>
		<p>Recebemos sua mensagem e em breve retornaremos. Obrigado.</p>
		<a href="<?php echo $root; ?>contato" class="button ghost">Voltar</a>
	</div>
</section>
<section class="cabecalho">
	<div class="row">
		<div class="small-12  large-6 column">
			<h2>Fale conosco sem compromisso</h2>
		</div>
		<div class="small-12 large-6  column">
			<p>Você pode entrar em contato através do formulário abaixo ou por telefone <em>(21) 3215-4728 </em>ou através do email <em>contato@simacontabil.com</em></p>
			<p>O escritório funciona de segunda a sexta das 9 às 18h. Aguardamos o seu contato.</p>
		</div>
	</div>
</section>
<form class="row form-contato"  action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"  autocomplete="on">
	
	<div class="small-12 columns medium-6 large-3 <?= $erro_nome ?> input">
		<label for="nome">Nome</label>
		<input value="<?= $nome ?>" name="nome" id="nome" type="text" tabindex="1" autofocus>
		<small class="error"><?= $nome_error ?></small>
	</div>
	<div class="small-12 columns medium-6 large-3 <?= $erro_empresa ?> input">
		<label for="empresa">Empresa</label>
		<input value="<?= $empresa ?>" name="empresa" id="empresa" type="text" tabindex="2" >
		<small class="error"><?= $empresa_error ?></small>
	</div>
	<div class="small-12 columns medium-6 large-3 <?= $erro_email ?> input">
		<label for="email">E-mail</label>
		<input value="<?= $email ?>"  name="email" id="email" type="email" tabindex="3" >
		<small class="error"><?= $email_error ?></small>
	</div>
	<div class="small-12 columns medium-6 large-3 <?= $erro_telefone ?> input">
		<label for="telefone">Telefone</label>
		<input value="<?= $telefone ?>" name="telefone" id="telefone" type="tel" tabindex="4" >
		<small class="error"><?= $telefone_error ?></small>
	</div>
	<div class="small-12 columns input">
		<label for="mensagem">Mensagem</label>
		<textarea id="mensagem" name="mensagem" rows="10" cols="30" tabindex="5" ><?= $mensagem?></textarea>
	</div>
	<div class="small-12 columns medium-6 large-3 end">
		<input class="button ligado" name="enviar" type="submit" value="Enviar" tabindex="6" >
	</div>
</form>
<?php include 'incs/footer.php'; ?>