<!DOCTYPE html>
<html lang="en">
<head>
<?php
		$env = parse_ini_file(dirname(dirname(__DIR__)). '/.env'); 
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
		$incs = $env['INCS_EN']; 
		include ($incs . '/meta-config.php');
		include ($incs .'/meta-tags.php'); 
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
					<a class="logotipo" href="<?php echo $root; ?>en">
						<img src="<?php echo $root; ?>img/logotipo-sima-contabil.png" alt="Marca da Sima Contábil">
					</a>
				</div> 
				<div class="small-7 medium-6 large-10 columns">
					<ul class="navbar show-for-large">
						<li class="sobre"><a href="<?php echo $root; ?>en/about">About</a></li>
						<li class="servicos dropdown">
							<a href="<?php echo $root; ?>en/services">Services</a>
							<ul class="dropdown-content drop-servicos">
								<li><a href="<?php echo $root; ?>en/services/paralegal" class="paralegal">Paralegal</a></li>
								<li><a href="<?php echo $root; ?>en/services/accounting-outsourcing" class="outsourcing-contabil">Accounting Outsourcing</a></li>
								<li><a href="<?php echo $root; ?>en/services/tax-outsourcing" class="outsourcing-fiscal">Tax Outsourcing </a></li>
								<li><a href="<?php echo $root; ?>en/services/financial-outsourcing" class="outsourcing-financeiro">Financial Outsourcing</a></li>
								<li><a href="<?php echo $root; ?>en/services/payroll-and-benefits-administration" class=" folha-de-pagamento-administracao-de-beneficios">Payroll and Benefits Administration</a></li>
								<li><a href="<?php echo $root; ?>en/services/processes-and-systems-strategic-consulting" class=" consultoria-estrategica-de-processos-e-sistemas">Processes and Systems Strategic Consulting</a></li>
								<li><a href="<?php echo $root; ?>en/services/private-individual" class="pessoa-fisica ">Private Individual</a></li>
								<li><a href="<?php echo $root; ?>en/services/loan-staff" class="loan-staff-operacional ">Loan staff</a></li>
							</ul>
						</li>
						<li class="como-trabalhamos"><a href="<?php echo $root; ?>en/how-we-work">How we work</a></li>
						<li class="clientes"><a href="<?php echo $root; ?>en/clients">Clients</a></li>
						<!-- <li class="contato"><a href="<?php echo $root; ?>contact">Contact</a></li> -->
						<li class="area-do-cliente dropdown"><a>Client area </a>
							<ul class="dropdown-content drop-area-cliente" style="width: 14rem; margin-left: -7rem;">
								<li><a href="https://vip.acessorias.com/simaconsultoria" target="_blank" >Simadoc</a></li>
								<li><a href="https://apps.apple.com/br/app/sima-consultoria/id1566419604" target="_blank" >App Sima Consultoria - IOS</a></li>
								<li><a href="https://play.google.com/store/apps/details?id=com.simaconsultoria" target="_blank" >App Sima Consultoria - Android</a></li>
							</ul>
						</li>
						<li class="pt dropdown"><a href="">En</a>
							<ul class="dropdown-content drop-linguas">
								<li><a href="<?php echo $root; ?><?php echo $linkTraduzido; ?>" class="">Português</a></li>
								<!-- <li><a href="#" class="ativo">English</a></li> -->
								<!-- <li><a href="<?php echo $root; ?>" class="">中文</a></li> -->
							</ul>
						</li> 
					</ul>
				</div>
			</div>
		</nav>
		<div class="titulo-da-pagina">
			<div class="row">
				<div class="small-12 large-9 columns">
					<h4>Sima Accountants</h4>
					<h1><?php echo $titulo; ?></h1> 
					<a href="https://api.whatsapp.com/send?phone=5521974450490&amp;text=Ol%C3%A1!%20Eu%20gostaria%20de%20saber%20mais%20sobre%20a%20Sima." class="button ligado">Talk to an accountant</a>
				</div>
			</div>
		</div>
	</header>
	<main>




						