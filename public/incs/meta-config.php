<?php 
  $title = "";
  $description = "";
  $body = "";
  $linkTraduzido = "";
  $body = "";
  $titulo = "";
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
   if(strpos($url, 'index') !== false){
   $title = "Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $description = "Um escritório de contabilidade que fornece informações claras para decisões inteligentes";
   $body = "home-page";
  $linkTraduzido = "";
 }
  elseif(strpos($url, 'sobre') !== false){
   $title = "Sobre | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Sobre";
   $description = "Somos um escritório de contabilidade no Rio de Janeiro e queremos construir resultados para você e sua empresa.";
   $body = "sobre";
   $linkTraduzido = "about";
 }
  elseif(strpos($url, 'como-trabalhamos') !== false){
   $title = "Como Trabalhamos | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Como Trabalhamos";
   $description = "Nossas soluções são criadas por equipes que sabem tratar informações estratégicas de maneira confidencial. Foco, projeto e segurança, é assim que trabalhamos.";
   $body = "como-trabalhamos";
   $linkTraduzido = "how-we-work";
 }
  elseif(strpos($url, 'clientes') !== false){
   $title = "Clientes | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Clientes";
   $description = "Já atendemos a Cadore, Werner, Granfino, Enel, Jomargil apenas para citar alguns. Venha conhecer um pouco de quem nos ajudou a construir nossa história.";
   $body = "clientes";
   $linkTraduzido = "clients";
 }
  elseif(strpos($url, 'contato') !== false){
   $title = "Contato | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Contato";
   $description = "O escritório funciona de segunda a sexta das 9 às 18h. Aguardamos o seu contato.";
   $body = "contato";
   $linkTraduzido = "contact";
 }
 elseif(strpos($url, 'servicos/paralegal') !== false){
   $title = "Paralegal | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Paralegal";
   $description = "Tudo que você precisa para abrir uma empresa ou regularizar seu negócio.";
   $body = "paralegal";
   $linkTraduzido = "services/paralegal";
 }
  elseif(strpos($url, 'servicos/outsourcing-contabil') !== false){
   $title = "Outsourcing Contábil | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Outsourcing Contábil";
   $description = "Responsável pela movimentação financeira e econômica de empresas e entidades.";
   $body = "outsourcing-contabil";
   $linkTraduzido = "services/accounting-outsourcing";
 }
  elseif(strpos($url, 'servicos/outsourcing-fiscal') !== false){
   $title = "Contabilidade Fiscal e Outsourcing Contábil | Sima Contábil |  Barra da Tijuca, RJ";
   $titulo = "Outsourcing Fiscal";
   $description = "Estudos de possibilidades legais para reduzir sua carga tributária e orientar sua emissão de notas.";
   $body = "outsourcing-fiscal";
   $linkTraduzido = "services/tax-outsourcing";
 }
  elseif(strpos($url, 'servicos/outsourcing-financeiro') !== false){
   $title = "Outsourcing Financeiro | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Outsourcing Financeiro";
   $description = "Processamento do contas à pagar e a receber";
   $body = "outsourcing-financeiro";
   $linkTraduzido = "services/financial-outsourcing";
 }
   elseif(strpos($url, 'servicos/folha-de-pagamento-administracao-de-beneficios') !== false){
   $title = "Folha de Pagamento e Administração de Benefícios | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Folha de Pagamento e Administração de Benefícios";
   $description = "Responsável pela orientação e cumprimento de obrigações e direitos nas relações trabalhistas vigentes.";
   $body = "folha-de-pagamento-administracao-de-beneficios";
   $linkTraduzido = "services/payroll-and-benefits-administration";
 }
   elseif(strpos($url, 'servicos/consultoria-estrategica-de-processos-e-sistemas') !== false){
   $title = "Consultoria Estratégica de Processos e Sistemas | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Consultoria Estratégica de Processos e Sistemas";
   $description = "Revisão fluxos internos de trabalho";
   $body = "consultoria-estrategica-de-processos-e-sistemas";
   $linkTraduzido = "services/processes-and-systems-strategic-consulting";
 }
   elseif(strpos($url, 'servicos/pessoa-fisica') !== false){
   $title = "Pessoa Física | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Pessoa Física";
   $description = "Apuração dos impostos e a preparação das obrigações fiscais para pessoa física";
   $body = "pessoa-fisica";
   $linkTraduzido = "services/private-individual";
 }
   elseif(strpos($url, 'servicos/loan-staff-operacional') !== false){
   $title = "Loan-Staff Operacional | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Loan-Staff Operacional";
   $description = "Alocação em caráter temporário de pessoal com competência operacional";
   $body = "loan-staff-operacional";
   $linkTraduzido = "services/loan-staff";
 }
   elseif(strpos($url, 'servicos/contabilidade-para-startups') !== false){
   $title = "Contabilidade para Startups | Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "Contabilidade para Startups";
   $description = "Uma parceria com a Fábrica de Startups Brasil. Aceleração com consultoria contábil sob medida.";
   $body = "contabilidade-para-startups";
   $linkTraduzido = "services/accountings-for-startups";
 }
  elseif(strpos($url, 'servicos') !== false){
   $title = "Sima Contábil | Contadores na Barra da Tijuca | RJ";
   $titulo = "Serviços";
   $description = "Seja para uma pequena, média ou grande empresa, pública ou privada, ONG, startup ou MEI: a contabilidade é aliada do seu crescimento.";
   $body = "servicos";
   $linkTraduzido = "services";
 }
    elseif(strpos($url, $root) !== false){
   $title = "Sima Contábil | Escritório de contabilidade na Barra da Tijuca | RJ";
   $titulo = "ME, EPP ou MEI? Uma breve introdução para as startups";
   $description = "Um escritório de contabilidade que fornece informações claras para decisões inteligentes";
   $body = "home-page";
   $linkTraduzido = "";
 }
 ?>

