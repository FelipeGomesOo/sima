<?php 

// define variables and set to empty values
$nome_error = $empresa_error = $email_error = $telefone_error = "";
$nome = $empresa = $email = $telefone = $mensagem = $success = "";
$erro_nome = $erro_empresa = $erro_email = $erro_telefone = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nome_error = "Preencha seu nome";
    $erro_nome = "erro";
  } else {
    $nome = test_input($_POST["nome"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[A-Za-à-Ú]+/', $nome)) {
     $nome_error = "Digite apenas letras"; 
    }
  }

   if (empty($_POST["empresa"])) {
  } else {
    $empresa = test_input($_POST["empresa"]);
  }

  if (empty($_POST["email"])) {
    $email_error = "Preencha seu e-mail";
    $erro_email = "erro";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Formato de e-mail inválido"; 
    }
  }
  
  if (empty($_POST["telefone"])) {
    $telefone_error = "Preencha seu telefone";
    $erro_telefone = "erro";
  } else {
    $telefone = test_input($_POST["telefone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$telefone)) {
      $telefone_error = "Número inválido"; 
    }
  }

  if (empty($_POST["mensagem"])) {
    $mensagem = "";
  } else {
    $mensagem = test_input($_POST["mensagem"]);
  }
  
  if ($nome_error == '' and $empresa_error == '' and $email_error == '' and $telefone_error == '' ){
      $message_bodym = '';
      unset($_POST['enviar']);
      foreach ($_POST as $key => $value){
          $message_bodym .=  "$key: $value\n";
      }
      
      $to = "site@simacontabil.com.br";
      $subject = "Mensagem de $nome";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
      $headers .= 'From: ' . $email . "\r\n";
      $headers .= 'Reply-To: ' . "site@simacontabil.com.br" . "\r\n";
      $headers .= 'X-Mailer: PHP/' . phpversion();

      $txt = "<!DOCTYPE html><html><head></head><body>
      <strong>Nome: </strong>$nome <br>
      <strong>Empresa: </strong>$empresa <br>
      <strong>Email: </strong>$email <br>
      <strong>Telefone: </strong>$telefone <br><br>
      <strong>Mensagem: </strong><br> $mensagem
        </body></html>";

      if (mail($to, $subject, $txt, $headers)){
          $success = "sucesso-ativado";
          $nome = $empresa = $email = $telefone = $mensagem = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}