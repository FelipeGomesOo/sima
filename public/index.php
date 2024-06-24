<?php include 'incs/header.php'; ?> 
	<section class="ultimos-artigos">
		<div class="row">
			<div class="small-12 medium-10 large-6 columns">
				<h4>Blog da Sima</h4>
				<h2>Últimos artigos</h2>
			</div>
		</div>
		<div class="row animacao-imagem">  
			<?php 
			$latestPosts = getLatestPosts();
				foreach ($latestPosts as $post) {
					echo '
					<div class="small-12 medium-6 large-3 columns">
						<a href="'. $post['link'] .'">
							<figure class="relative" style="aspect-ratio: 16/8">
								<img class="gradiente" src="'. $post['image'] .'">
							<figcaption class="caption-bottom">'. $post['category'] .'</figcaption>
							</figure>
							<h3>'. $post['title'] .'</h3>
						</a>
					</div>
					';
				}
			?>
			
		</div> 
		<div class="row">
			<div class="small-12 columns">
			<!-- <a href="#" class="button ligado">Todos os artigos</a> -->
			<hr>
			</div>
		</div>
	</section>
	<section class="areas-de-atuacao">
	<div class="row">
		<div class="small-12 large-5 columns">
		<h4>Serviços de contabilidade</h4>
		<h2>Áreas de atuação</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
		<div class="owl-carousel areas-de-atuacao-carousel owl-theme">
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/contabilidade-para-startups" class="contabilidade-para-startups">
				<div class="card">
				<h3>Contabilidade para Startups</h3>
				<p>Conheça nossa parceria com a Fábrica de Startups Brasil</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/paralegal" class="paralegal">
				<div class="card">
				<h3>Paralegal</h3>
				<p>Gerenciamento e execução das atividades de legalização perante órgãos públicos</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/outsourcing-contabil" class="outsourcing-contabil">
				<div class="card">
				<h3>Outsourcing Contábil</h3>
				<p>Demonstrativos financeiros de escrituração contábil, análise e conciliações de contas</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/outsourcing-fiscal" class="outsourcing-fiscal">
				<div class="card">
				<h3>Outsourcing Fiscal</h3>
				<p>Estudos de possibilidades legais para reduzir sua carga tributária e orientar sua emissão de notas</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/outsourcing-financeiro" class="outsourcing-financeiro">
				<div class="card">
				<h3>Outsourcing Financeiro</h3>
				<p>Integração sistêmica do fluxo de caixa. Processamento do contas à pagar e a receber</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/folha-de-pagamento-administracao-de-beneficios" class=" folha-de-pagamento-administracao-de-beneficios">
				<div class="card">
				<h3>Folha de pagamento e administração de benefícios</h3>
				<p>Orientação e cumprimento de obrigações e direitos nas relações trabalhistas vigentes</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/consultoria-estrategica-de-processos-e-sistemas" class=" consultoria-estrategica-de-processos-e-sistemas">
				<div class="card">
				<h3>Consultoria Estratégica de Processos e Sistemas</h3>
				<p>Aplicação de metodologias de trabalho e sistemas financeiros (ERP)</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/pessoa-fisica" class="pessoa-fisica ">
				<div class="card">
				<h3>Pessoa Física </h3>
				<p>Apuração dos impostos e a preparação das obrigações fiscais para pessoa física</p>
				</div>
			</a>
			</div>
			<div class="item">
			<a href="
												<?php echo $root; ?>servicos/loan-staff-operacional" class="loan-staff-operacional ">
				<div class="card">
				<h3>Loan-staff operacional </h3>
				<p>Alocação em caráter temporário de pessoal com competência operacional</p>
				</div>
			</a>
			</div>
		</div>
		</div>
	</div>
	</section>
	<div class="row">
	<div class="small-12 columns">
		<hr class="light-hr">
	</div>
	</div>
	<section class="cabecalho">
	<div class="row">
		<div class="small-12 column">
		<h4>Sobre nós</h4>
		<h2>
			<span class="light">Somos um escritório de contabilidade no Rio de Janeiro e através de parcerias duradouras queremos construir </span>
			<strong>resultados para você e sua empresa.</strong>
		</h2>
		<hr>
		</div>
	</div>
	</section>
	<section class="o-que-podemos-fazer">
	<div class="row">
		<div class="small-12 medium-10 large-6 columns">
		<h4>Precisa de um contador profissional?</h4>
		<h2>O que podemos fazer por você ou seu negócio</h2>
		</div>
	</div>
	<div class="show-for-large  row">
		<div class="small-12 medium-6 large-4 columns">
		<div class="card">
			<div class="card-inner">
			<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#foguete">
				</use>
			</svg>
			<h3>Abertura da Empresa </h3>
			<p class="p2">Regularize seu negócio com agilidade e segurança. Auxiliamos desde a formatação do contrato constitutivo passando pela definição da natureza jurídica mais adequada e regime tributário mais econômico, finalizando na obtenção de todas as licenças requeridas pelas esferas públicas. </p>
			</div>
		</div>
		</div>
		<div class="small-12 medium-6 large-4 columns">
		<div class="card">
			<div class="card-inner">
			<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#calculadora">
				</use>
			</svg>
			<h3>Departamento Contábil, Fiscal, Financeiro e Folha de Pagamento</h3>
			<p class="p2">Otimize suas obrigações administrativas tendo auxílio de nossas equipes que cuidam da preparação dos demonstrativos contábeis.</p>
			</div>
		</div>
		</div>
		<div class="small-12 medium-6 large-4 columns">
		<div class="card">
			<div class="card-inner">
			<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#taxas">
				</use>
			</svg>
			<h3>Imposto de Renda</h3>
			<p class="p2">Seja para Pessoa Física ou Pessoa Jurídica cuidamos de sua declaração de imposto de renda gerando seu balanço fiscal</p>
			</div>
		</div>
		</div>
		<div class="small-12 medium-6 large-4 columns">
		<div class="card">
			<div class="card-inner">
			<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#calendario">
				</use>
			</svg>
			<h3>Planejamento Tributário </h3>
			<p class="p2">Faça uma comparação estratégica de regimes tributários e saiba em qual modelo sua empresa poderá economizar mais. </p>
			</div>
		</div>
		</div>
		<div class="small-12 medium-6 large-4 columns">
		<div class="card">
			<div class="card-inner">
			<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#balanca">
				</use>
			</svg>
			<h3>Obrigações Regulatórias </h3>
			<p class="p2">Cuidamos de todo o processamento das obrigações regulatórias requeridas ao seu negócio, tais como BACEN, IBGE e SISCOSERV, garantindo o atendimento dos prazos.</p>
			</div>
		</div>
		</div>
		<div class="small-12 medium-6 large-4 columns">
		<div class="card">
			<div class="card-inner">
			<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#compasso">
				</use>
			</svg>
			<h3>Consultoria empresarial</h3>
			<p class="p2">Conte com nossa presença durante a análise e elaboração dos melhores cenários para suas decisões através de uma visão panorâmica do seu negócio avaliando questões de processo de trabalho, gestão sistêmica e de governança corporativa.</p>
			</div>
		</div>
		</div>
	</div>
	<div class="row hide-for-large ">
		<div class="small-12 columns">
		<div class=" o-que-podemos-fazer-carousel owl-carousel owl-theme">
			<div class="card">
			<div class="card-inner">
				<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#foguete">
				</use>
				</svg>
				<h3>Abertura da Empresa </h3>
				<p class="p2">Regularize seu negócio com agilidade e segurança. Auxiliamos desde a formatação do contrato constitutivo passando pela definição da natureza jurídica mais adequada e regime tributário mais econômico, finalizando na obtenção de todas as licenças requeridas pelas esferas públicas. </p>
			</div>
			</div>
			<div class="card">
			<div class="card-inner">
				<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#calculadora">
				</use>
				</svg>
				<h3>Departamento Contábil, Fiscal, Financeiro e Folha de Pagamento</h3>
				<p class="p2">Otimize suas obrigações administrativas tendo auxílio de nossas equipes que cuidam da preparação dos demonstrativos contábeis tendo auxílio de nossas equipes que cuidam da preparação dos demonstrativos contábeis</p>
			</div>
			</div>
			<div class="card">
			<div class="card-inner">
				<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#taxas">
				</use>
				</svg>
				<h3>Imposto de Renda</h3>
				<p class="p2">Seja para Pessoa Física ou Pessoa Jurídica cuidamos de sua declaração de imposto de renda gerando seu balanço fiscal</p>
			</div>
			</div>
			<div class="card">
			<div class="card-inner">
				<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#calendario">
				</use>
				</svg>
				<h3>Planejamento Tributário </h3>
				<p class="p2">Faça uma comparação estratégica de regimes tributários e saiba em qual modelo sua empresa poderá economizar mais. </p>
			</div>
			</div>
			<div class="card">
			<div class="card-inner">
				<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#balanca">
				</use>
				</svg>
				<h3>Obrigações Regulatórias </h3>
				<p class="p2">Cuidamos de todo o processamento das obrigações regulatórias requeridas ao seu negócio, tais como BACEN, IBGE e SISCOSERV, garantindo o atendimento dos prazos.</p>
			</div>
			</div>
			<div class="card">
			<div class="card-inner">
				<svg class="icon">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#compasso">
				</use>
				</svg>
				<h3>Consultoria empresarial</h3>
				<p class="p2">Conte com nossa presença durante a análise e elaboração dos melhores cenários para suas decisões através de uma visão panorâmica do seu negócio avaliando questões de processo de trabalho, gestão sistêmica e de governança corporativa.</p>
			</div>
			</div>
		</div>
		</div>
	</div>
	</section>
	<div class="row">
	<div class="small-12 columns">
		<hr class="light-hr">
	</div>
	</div>
	<section class="row nossos-clientes">
	<div class="small-12 large-4 columns">
		<h4>Nossos clientes</h4>
		<h2>Parcerias que geram negócio</h2>
	</div>
	<div class="hide-for-small small-12 large-8 columns">
	<div class="marcas row">
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca gnpw"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca investtools"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca bpa"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca jomargil"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca cadore"></div>
		</div>
		<div class="small-6 medium-3 large-3 end columns">
		<div class="marca benkei"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca achilles"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca fabrica-de-startups"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca werner"></div>
		</div>
		<div class="small-6 medium-3 large-3 columns">
		<div class="marca hotelli"></div>
		</div>
		<div class="small-6 medium-3 large-3 end columns">
		<div class="marca foster"></div>
		</div>
		</div>
	</div>
	<div class="row">
		<div class="show-for-small small-12 large-8 columns">
		<div class="marcas clientes-carousel owl-carousel owl-theme">
			<div>
			<div class="marca gnpw"></div>
			<div class="marca investtools"></div>
			<div class="marca bpa"></div>
			<div class="marca jomargil"></div>
			</div>
			<div>
			<div class="marca cadore"></div>
			<div class="marca benkei"></div>
			<div class="marca achilles"></div>
			<div class="marca fabrica-de-startups"></div>
			</div>
			<div>
			<div class="marca werner"></div>
			<div class="marca hotelli"></div>
			<div class="marca foster"></div>
			</div>
		</div>
		</div>
	</div>
	</section>
	<!-- nossos clientes -->
	<div class="row">
	<div class="small-12 columns">
		<hr class="light-hr">
	</div>
	</div>
	<div class="row">
	<div class="small-12 columns">
		<h4>Conheça nossa metodologia</h4>
		<h2>Contabilidade focada no cliente</h2>
	</div>
	</div>
	<div class="row">
	<div class="small-12 large-4 mg-top-1 columns">
		<div class="row">
		<div class="small-12 medium-1 large-12 columns">
			<svg class="icon">
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chat">
			</use>
			</svg>
		</div>
		<div class="small-12 medium-11 large-12 columns">
			<h4>Primeiro passo</h4>
			<h3>Conte-nos sobre seu negócio e suas metas</h3>
		</div>
		</div>
	</div>
	<div class="small-12  large-4 mg-top-1 columns">
		<div class="row">
		<div class="small-12 medium-1 large-12 columns">
			<svg class="icon">
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#regua">
			</use>
			</svg>
		</div>
		<div class="small-12 medium-11 large-12 columns">
			<h4>Segundo passo</h4>
			<h3>Nossos contadores elaboram uma solução sob medida</h3>
		</div>
		</div>
	</div>
	<div class="small-12 large-4 mg-top-1 columns">
		<div class="row">
		<div class="small-12 medium-1 large-12 columns">
			<svg class="icon">
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#crescer">
			</use>
			</svg>
		</div>
		<div class="small-12 medium-11 large-12 columns">
			<h4>Terceiro passo</h4>
			<h3>Implementamos um serviço alinhado aos seus objetivos</h3>
		</div>
		</div>
	</div>
	</div> 
<?php include 'incs/footer.php'; ?>