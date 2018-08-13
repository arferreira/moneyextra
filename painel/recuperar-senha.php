<?php
include("conexao/conecta.php");

//pega a variavel via post
$email = $_POST['email'];
//busca no db o usuario com o email 
$result = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
$ver=mysql_fetch_array($result);

$nome=$ver["nome"];
$login=$ver["login"];
$senha=$ver["senha"];
$email=$ver["email"];
                
//enviar um email para variavel email juntamente com a variável senha;
$mensage ="Ola ".$nome." você solicitou a recuperação de senhha confira seu dados.<br>";
$mensage .="Login: " . $login. "<br>";
$mensage .="Senha:" . $senha. "<br>";

$mensage .="Mensagem enviada para o email: " . $email. "<br>";
$email=mail($email, "Recuperação de Senha", $mensage);

if($mail){

echo"<script>alert(Sua senha foi enviada para o e-mail indicado.),window.open('login.php','_self')</script>"
;


}else{
        
        
echo"<script>alert('E-mail não cadastrado em nosso sistema'),window.open('login.php','_self')</script>";
        
}


?>