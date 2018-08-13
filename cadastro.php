<?php include ("header.php"); ?>
<!--============================== Page Title =================================-->
<div class="wrapper bg_title bg_grey_light">
  <div class="container_12 pagetitle">
    <article class="grid_12">
      <h1 class="color_white font_heading02">Cadastre-se</h1>
      <p style="float: left;"><span class="color_white"><a href="index.php?r=<?php echo $elref;  ?>" class="wlink">home</a> &rarr; Cadastro</span> </p>
      <p style="float: right;" class="color_white"><?php if(isset($_SESSION['indicador']))
					{
					$procurars = mysql_query("SELECT * FROM usuarios WHERE login='{$_SESSION['indicador']}'");
	$contas = mysql_fetch_array($procurars);
	echo "Parabéns, Você foi convidado por: <span class='color_orange ucase'> " . utf8_decode($contas['nome'])."</span>";
	}
	?></p>
</article>
  </div>
</div>
<!--============================== Content ================================-->
<div class="brd2"></div>
<div class="wrapper bg_white">
	
 <section class="cont_pad2">
    <div class="container_12 align_center">
      <h2 class="color_black font_heading02 lh0">Cadastre-se agora mesmo. <span class="color_orange ucase">Ajude e seja ajudado!</span></h2>
    </div>
  </section>
  <section class="cont_pad2">
    <div class="container_12">
    <?php

$indicador = $_SESSION['indicador'];

if (($_SESSION['indicador'] == "magdin") OR ($_SESSION['indicador'] == "paulao"))
{
echo "<p>Você precisa ser convidado por um usuário ativo.</p>";
}
else
{
$procur = mysql_query("SELECT * FROM usuarios WHERE login='{$indicador}'");
$d = mysql_fetch_array($procur);
if ($d['status'] == "pendente")
{
echo "<p>Você precisa ser convidado por um usuário ativo.</p>";
}
else if (empty($_SESSION['indicador']))
{
echo "<p>Você precisa ser convidado por um usuário ativo.</p>";
}
else 
{
if (isset($_POST['cadastrar']))
{
function anti_injection($sql)
	{
	// remove palavras que contenham sintaxe sql
	$sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\|--|s\\\\_-=.,}~^)/i", '', $sql);
	$sql = mysql_real_escape_string($sql);
	$sql = strip_tags($sql);//tira tags html e php
	$sql = addslashes($sql);//Adiciona barras invertidas a uma string
	return $sql;
	}
 
				$indicador = $_SESSION['indicador'];
				if(empty($indicador)) { $indicador = "maxxyryo"; }
				$nome = utf8_decode(anti_injection($_POST['nome']));
				$email = anti_injection($_POST['email']);
				$senha = anti_injection($_POST['senha']);
				$login = trim(anti_injection($_POST['login']));
				$facebook = anti_injection($_POST['facebook']);
				
				if(strlen($login) < 21) {
				
				if (empty($nome) or empty($email) or empty($senha) or empty($login))
				{
				echo "<p>Preencha todos os campos. <a href='javascript:history.back()'>Voltar</a></p>";
				}
				else
				{
				
		$selectindicador = mysql_query("SELECT * FROM usuarios WHERE login='{$indicador}'");
				$indi = mysql_fetch_array($selectindicador);
				if ($selectindicador['status'] == "pendente")
				{
				$indicador = "maxxyryo";
				}		
				
				// CONTA LOGIN //
				
				$contalogin = mysql_query("SELECT * FROM usuarios WHERE login='$login'");
				$contagemlogin = mysql_num_rows($contalogin);
				$contaemail = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
				$contagememail = mysql_num_rows($contaemail);
				//
				
	 if ($contagemlogin == 0)
		{
		
		 if ($contagememail == 0)
		 
		 {
				// PEGA INDICADOS //
				
									$buscarede = mysql_query("SELECT * FROM indicados WHERE login='{$indicador}'");
									$rede = mysql_fetch_array($buscarede);
			
									$indireto2 = $rede['indicador_nivel1'];
									$indireto3 = $rede['indicador_nivel2'];
									$indireto4 = $rede['indicador_nivel3'];
									$indireto5 = $rede['indicador_nivel4'];
									
				
				// INDICADOS /\ //
				
				// INSERE OS DADOS //
				$pin = "0";
				$time = time();
				$inserir = mysql_query("INSERT INTO `usuarios` (`id`, `login`, `senha`, `email`, `saldo`, `nome`, `dados_banco`, `dados_agencia`, `dados_tipoconta`, `dados_conta`, `dados_nome`, `dados_op`, `status`, `pincode`, `skype`,`registro`,`facebook`) VALUES (NULL, '{$login}', '{$senha}', '{$email}', '0', '{$nome}', '', '', '', '', '', '', 'pendente', '{$pin}', '', '{$time}', '{$facebook}');") or die(mysql_error());
				$inserir_indicados = mysql_query("INSERT INTO `indicados` (`id`,`login`,`indicador_nivel1`,`indicador_nivel2`,`indicador_nivel3`,`indicador_nivel4`,`indicador_nivel5`) VALUES (NULL, '{$login}', '{$indicador}', '{$indireto2}', '{$indireto3}', '{$indireto4}', '{$indireto5}');") or die(mysql_error()); 
				if (($indicador == "bianco") OR ($indicador == "brendon")){
				$inserir_divisao = mysql_query("INSERT INTO `divisao` (`id`,`login`) VALUES (NULL, '{$indicador}');");
				} 
			
				$inserir_pagamento1 = mysql_query("INSERT INTO `pagamentos` (`id`,`login`,`indicador`,`indicador_nivel`,`status`,`comprovante`,`hora`) VALUES (NULL, '{$login}', '{$indicador}', '5', 'nao pago', '', '0');") or die(mysql_error());
				$inserir_pagamento2 = mysql_query("INSERT INTO `pagamentos` (`id`,`login`,`indicador`,`indicador_nivel`,`status`,`comprovante`,`hora`) VALUES (NULL, '{$login}', '{$indireto2}', '4', 'nao pago', '', '0');") or die(mysql_error());
				$inserir_pagamento3 = mysql_query("INSERT INTO `pagamentos` (`id`,`login`,`indicador`,`indicador_nivel`,`status`,`comprovante`,`hora`) VALUES (NULL, '{$login}', '{$indireto3}', '3', 'nao pago', '', '0');") or die(mysql_error());
				$inserir_pagamento4 = mysql_query("INSERT INTO `pagamentos` (`id`,`login`,`indicador`,`indicador_nivel`,`status`,`comprovante`,`hora`) VALUES (NULL, '{$login}', '{$indireto4}', '2', 'nao pago', '', '0');") or die(mysql_error());
				$inserir_pagamento5 = mysql_query("INSERT INTO `pagamentos` (`id`,`login`,`indicador`,`indicador_nivel`,`status`,`comprovante`,`hora`) VALUES (NULL, '{$login}', '{$indireto5}', '1', 'nao pago', '', '0');") or die(mysql_error());
				
				echo "<div class='callout'>
				<a class='callurl' href='painel/login.php'>Acessar Painel</a>
				<h3>Parabéns Você Faz Parte de Nosso Sistema</h3>
				<p>Você ainda não é um usuário ativo. Para liberar seu cadastro você precisa efetuar uma doação de R$ 10,00, em cada uma das contas.</p></div>";
		} else { echo "<p>E-mail em uso. <a href='javascript:history.back()'>Voltar</a></p>"; }
		}
			else { echo "<p>Login existente. <a href='javascript:history.back()'>Voltar</a></p>"; }
				}
		} else { echo "<p>Login muito longo, máximo permitido: 20 caracteres. <a href='javascript:history.back()'>Voltar</a></p>"; }		
} else {
?>
<br>
<div class="contact-form">
	<div class="clr"></div>
	<br>
	<form id="contact-form" name="form" method="post" action="cadastro.php">
    	<fieldset>
      <article class="grid_4 ">
          <label class="name">
          <input type='text' name='nome' placeholder='Informe seu nome completo'></label>
          </label>
      </article>
      <article class="grid_4 ">
          <label class="name">
          <input type='text' name='email' placeholder='Informe seu endereço de e-mail'></label>
      </article>
      <article class="grid_4 ">
          <label class="name">
          <input type='text' name='login' placeholder='Seu login, sem espaços, sem acentos e sem caracteres especiais'></label>
      </article>
      <article class="grid_4 ">
          <label class="name">
          <input type='password' name='senha' placeholder='Informe uma senha de acesso'></label>
      </article>
      <article class="grid_4 ">
          <label class="name">
          <input type='text' name='facebook' placeholder='Informe o link do seu Facebook'></label>
      </article>
      <div style="height: 100px;"></div>
      <div class="grid_4">
      	<input type="submit" value="Cadastrar" name="cadastrar" class="button orange">
      </div>
      </fieldset>
      </form>
</div>
			<?php } } } ?>
    </div>
  </section>
</div>
<?php include ("footer.php"); ?>
