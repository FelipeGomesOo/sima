<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
		$env = parse_ini_file(dirname(__DIR__). '/.env'); 
		// Se estiver no servidor
		if ($_SERVER['HTTP_HOST']==="simacontabil.com.br" || $_SERVER['HTTP_HOST']==="www.simacontabil.com.br") {
		      // Analytics
		   	echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
					j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
					})(window,document,'script','dataLayer','GTM-5C25CB9');</script>
				";
		} 
		$root = $env['ROOT'];
		$incs = $env['INCS']; 
		include ($incs . '/meta-config.php'); 
		include ($incs .'/meta-tags.php');
		include ($incs .'/utils.php');   
	?>
	<link rel="stylesheet" href="<?php echo $root; ?>css/styles.min.css?v2">
	<link rel="shortcut icon" href="<?php echo $root; ?>favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>">
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5C25CB9"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php include ($incs .'/svg.php'); ?>
	<a class="zap-flutuante" href="https://api.whatsapp.com/send?phone=5521974450490&amp;text=Ol%C3%A1!%20Eu%20gostaria%20de%20saber%20mais%20sobre%20a%20Sima."> &nbsp; </a>
	<div class="hide-for-large"><?php include ($incs .'/offcanvas.php'); ?></div>
	<header>
		<nav>
			<div class="row">
				<div class="small-5 medium-6 large-2 columns">
					<a class="logotipo" href="<?php echo $root; ?>">
						<img src="<?php echo $root; ?>img/logotipo-sima-contabil.png" alt="Marca da Sima Contábil">
					</a>
				</div> 
				<div class="small-7 medium-6 large-10 columns">
					<ul class="navbar show-for-large">
						<li class="sobre"><a href="<?php echo $root; ?>sobre">Sobre</a></li>
						<li class="servicos dropdown">
							<a href="<?php echo $root; ?>servicos">Serviços</a>
							<div class="dropdown-content drop-servicos">
								<ul class="inner">
									<li><a href="<?php echo $root; ?>servicos/contabilidade-para-startups" class="contabilidade-para-startups">Contabilidade para Startups</a></li>
									<li><a href="<?php echo $root; ?>servicos/paralegal" class="paralegal">Paralegal</a></li>
									<li><a href="<?php echo $root; ?>servicos/outsourcing-contabil" class="outsourcing-contabil">Outsourcing Contábil</a></li>
									<li><a href="<?php echo $root; ?>servicos/outsourcing-fiscal" class="outsourcing-fiscal">Outsourcing Fiscal</a></li>
									<li><a href="<?php echo $root; ?>servicos/outsourcing-financeiro" class="outsourcing-financeiro">Outsourcing Financeiro</a></li>
									<li><a href="<?php echo $root; ?>servicos/folha-de-pagamento-administracao-de-beneficios" class=" folha-de-pagamento-administracao-de-beneficios">Folha de pagamento Administração de Benefícios</a></li>
									<li><a href="<?php echo $root; ?>servicos/consultoria-estrategica-de-processos-e-sistemas" class=" consultoria-estrategica-de-processos-e-sistemas">Consultoria estratégica de processos e sistemas</a></li>
									<li><a href="<?php echo $root; ?>servicos/pessoa-fisica" class="pessoa-fisica ">Pessoa Física</a></li>
									<li><a href="<?php echo $root; ?>servicos/loan-staff-operacional" class="loan-staff-operacional ">Loan staff operacional</a></li>
								</ul>
							</div>
						</li>
						<li class="como-trabalhamos"><a href="<?php echo $root; ?>como-trabalhamos">Como Trabalhamos</a></li>
						<li class="clientes"><a href="<?php echo $root; ?>clientes">Clientes</a></li>
						<li class="blog"><a href="<?php echo $root; ?>blog">Blog</a></li>
						<!-- <li class="contato"><a href="<?php echo $root; ?>contato">Contato</a></li> -->
						<li class="area-do-cliente dropdown"><a>Área do cliente </a>
							<div class="dropdown-content drop-area-cliente" style="width: 14rem; margin-left: -7rem;">
								<ul class="inner ">
									<li><a href="https://vip.acessorias.com/simaconsultoria" target="_blank" >Simadoc</a></li>
									<li><a href="https://apps.apple.com/br/app/sima-consultoria/id1566419604" target="_blank" >App Sima Consultoria - IOS</a></li>
									<li><a href="https://play.google.com/store/apps/details?id=com.simaconsultoria" target="_blank" >App Sima Consultoria - Android</a></li>
								</ul>
							</div>
						</li>
						<li class="pt dropdown"><a href="">Pt</a>
							<div class="dropdown-content drop-linguas">
								<ul class="inner">
									<!-- <li><a href="#" class="ativo">Português</a></li> -->
									<li><a href="<?php echo $root; ?>en/<?php echo $linkTraduzido; ?>" class="">English</a></li>
									<!-- <li><a href="<?php echo $root; ?>" class="">中文</a></li> -->
								</ul>
							</div>
						</li> 
					</ul>
				</div>
			</div>
		</nav>
		<div class="titulo-da-pagina">
			<div class="row">
				<div class="small-12 large-9 columns">
					<?php 
						if ($body === 'home-page') {
							include ($incs .'/hero-home.php');
						} else {
							echo '<h1>'. $titulo .'</h1>';
						}
					?>
				</div>
			</div>
		</div>
	</header>
	<main>




						