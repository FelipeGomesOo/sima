<?php 
  $title = "";
  $description = "";
  $body = "";
  $linkTraduzido = "";
  $titulo = "";
  $linkTraduzido = "";
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
   if(strpos($url, 'index') !== false){
   $title = "Sima Accountants";
   $titulo = "Clear information. Smart Decisions.";
   $description = "An accounting firm that provides clear information for smart decisions";
   $body = "home-page";
   $linkTraduzido = "";

 }
  elseif(strpos($url, 'about') !== false){
   $title = "About us | Sima Accountants";
   $titulo = "About us";
   $description = "We are an accounting fimr in Rio de Janeiro and we want to build results for uyour and your company";
   $body = "sobre";
   $linkTraduzido = "sobre";
 }
  elseif(strpos($url, 'how-we-work') !== false){
   $title = "How we work | Sima Accountants";
   $titulo = "How we work";
   $description = "Our teams know how to confidentially handle strategic information. Focus, project and security, this is how we work.";
   $body = "como-trabalhamos";
   $linkTraduzido = "como-trabalhamos";
 }
  elseif(strpos($url, 'clients') !== false){
   $title = "Our clients | Sima Accountants";
   $titulo = "Our clients";
   $description = "We have helped Cadore, Werner, Granfino, Enel, Jomargil to name a few. Get to know who helped build our story";
   $body = "clientes";
   $linkTraduzido = "clientes";
 }
  elseif(strpos($url, 'contact') !== false){
   $title = "Contact | Sima Accountants";
   $titulo = "Contact";
   $description = "Monday to friday from 9am to 6pm. We look forward to hear from you.";
   $body = "contato";
   $linkTraduzido = "contato";
 }
 elseif(strpos($url, 'services/paralegal') !== false){
   $title = "Paralegal | Sima Accountants";
   $titulo = "Paralegal";
   $description = "Everything you need to start up a business or to regulate your firm.";
   $body = "paralegal";
   $linkTraduzido = "servicos/paralegal";
 }
  elseif(strpos($url, 'services/accounting-outsourcing') !== false){
   $title = "Accounting Outsourcing | Sima Accountants";
   $titulo = "Accounting Outsourcing";
   $description = "Financial and economic advisory for companies and entities.";
   $body = "outsourcing-contabil";
   $linkTraduzido = "servicos/outsourcing-contabil";
 }
  elseif(strpos($url, 'services/tax-outsourcing') !== false){
   $title = "Tax Outsourcing | Sima Accountants";
   $titulo = "Tax Outsourcing";
   $description = "Studies of tax reduction legal possibilities and guidance of your invoice issuance.";
   $body = "outsourcing-fiscal";
   $linkTraduzido = "servicos/outsourcing-fiscal";
 }
  elseif(strpos($url, 'services/financial-outsourcing') !== false){
   $title = "Financial Outsourcing | Sima Accountants";
   $titulo = "Financial Outsourcing";
   $description = "Processing of accounts payable and receivable";
   $body = "outsourcing-financeiro";
   $linkTraduzido = "servicos/outsourcing-financeiro";
 }
   elseif(strpos($url, 'services/payroll-and-benefits-administration') !== false){
   $title = "Payroll and Benefits Administration | Sima Accountants";
   $titulo = "Payroll and Benefits Administration";
   $description = "Responsible for orientation and compliance of rights and dutties under brazilian labour law.";
   $body = "folha-de-pagamento-administracao-de-beneficios";
   $linkTraduzido = "servicos/folha-de-pagamento-administracao-de-beneficios";
 }
   elseif(strpos($url, 'services/processes-and-systems-strategic-consulting') !== false){
   $title = "Processes and Systems Strategic Consulting | Sima Accountants";
   $titulo = "Processes and Systems Strategic Consulting";
   $description = "Internal workflows review";
   $body = "consultoria-estrategica-de-processos-e-sistemas";
   $linkTraduzido = "servicos/consultoria-estrategica-de-processos-e-sistemas";
 }
   elseif(strpos($url, 'services/private-individual') !== false){
   $title = "Private Individual | Sima Accountants";
   $titulo = "Private Individual";
   $description = "Calculation of taxes and preparation of fiscal obligations for individuals";
   $body = "pessoa-fisica";
   $linkTraduzido = "servicos/pessoa-fisica";
 }
   elseif(strpos($url, 'services/loan-staff') !== false){
   $title = "Loan Staff | Sima Accountants";
   $titulo = "Loan Staff";
   $description = "We lend competent operational personnel to our clients for a defined period of time";
   $body = "loan-staff-operacional";
   $linkTraduzido = "servicos/loan-staff-operacional";
 }
  elseif(strpos($url, 'services') !== false){
   $title = "Services | Sima Accountants";
   $titulo = "Services";
   $description = "Whether for a small, medium or large company, public or private, NGO, startup or MEI: accounting is an ally to your prosperity.";
   $body = "servicos";
   $linkTraduzido = "servicos";
 }
    elseif(strpos($url, $root) !== false){
   $title = "Sima Accountants";
   $titulo = "Clear information. Smart Decisions.";
   $description = "We are an accounting fimr in Rio de Janeiro and we want to build results for uyour and your company";
   $body = "home-page";
   $linkTraduzido = "";
 }
 ?>

