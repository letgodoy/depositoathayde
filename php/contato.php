<?php

// Isto é quase como uma chave se vc não quiser mais receber mensagems é só colocar 0

// 1 = Ligado - 0 = Desligado

// ...::: BY SK15 ® :::...

$certo="1";

$emaildest="deposito566@gmail.com";

ini_set ("SMTP","smtp.gmail.com");

////////////////////////////////////////////////

// Formail em PHP por SK15 v 1.0 |||

// Esse formulario é uma imitação do formail |||

// com um pequena ponto fraco |||

// ao adicionar um novo campo ele tera |||

// quer ser mudado aqui nesse arquivo |||

/////////////////////////////////////////////|||

// Carrega dados pelo método POST, independente da configuração das variáveis Globais do ini do PHP

$nome=$_POST["nome"];

$email=$_POST["email"];

$assunto=$_POST["assunto"];

$mensagem=$_POST["msg"];

// Verifica se O Campo nome tá preenchido

if (empty($nome)){

// HTML que aparecera o ERRO

echo "<script>alert('Preencha seu nome');</script>";

}

// Verifica o Campo E-mail Tá preenchido

elseif (empty($email)){

// HTML que aparecera o ERRO

echo "<script>alert('Preencha seu email');</script>";
}

// Verifoca Se o E-mail Contem @

elseif (!(strpos($email,"@")) OR strpos($email,"@") !=strrpos($email,"@")) {

// HTML que aparecera o ERRO

echo "<script>alert('Digite um email valido! nome@exemplo.com');</script>";
}

// Verifica se o Campo Está Preenchido

elseif (empty($assunto)){

// HTML que aparecera o ERRO

echo "<script>alert('Digite o assunto do motivo do contato');</script>";

}

// Verifica se o Campo Mensagem tá preenchido

elseif (empty($mensagem)){

// HTML que aparecera o ERRO

echo "<script>alert('Não se esqueça da mensagem!');</script>";

}

else{

echo "<script>alert('Enviado com sucesso!');</script>";

if ($certo== "1")

{

// Função de envio Do E-mail

//mail ("seuendereço@seuservidor.com.br ","nome","string message", "string additional_headers");

mail ("$emaildest","$assunto","Nome:$nome\n Email:$email\n Mensagem:$mensagem\n IP:$REMOTE_ADDR\n\n ...::: Depósito Athayde :::...","From:$nome<$email>");

}

// HTML do redirecionameto e se não redirecionar aparece um link
echo "<script>alert('Recebido! Em breve retornaremos.');</script>";

echo "<script>form.reset();</script>";

}

?>