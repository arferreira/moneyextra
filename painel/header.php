<?php
session_start();
include("conexao/conecta.php");
include("func.php");

$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) {
  // For security, start by assuming the visitor is NOT authorized.
  $isValid = False;

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username.
  // Therefore, we know that a user is NOT logged in if that Session variable is blank.
  if (!empty($UserName)) {
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login.
    // Parse the strings into arrays.
    $arrUsers = Explode(",", $strUsers);
    $arrGroups = Explode(",", $strGroups);
    if (in_array($UserName, $arrUsers)) {
      $isValid = true;
    }
    // Or, you may restrict access to only certain users based on their username.
    if (in_array($UserGroup, $arrGroups)) {
      $isValid = true;
    }
    if (($strUsers == "") && true) {
      $isValid = true;
    }
  }
  return $isValid;
}

$MM_restrictGoTo = "login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0)
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];

  function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
		{
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		$retorno = '';
		$caracteres = '';

		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;

		$len = strlen($caracteres);
		for ($n = 1; $n <= $tamanho; $n++) {
		$rand = mt_rand(1, $len);
		$retorno .= $caracteres[$rand-1];
		}
		return $retorno;
		}



	//
	$chave = geraSenha(40, true, false);


  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . $chave;
  header("Location: ". $MM_restrictGoTo);
  exit;
}

$datahj = date("Y-m-d");
$login = $_SESSION['MM_Username'];
$selectdados = mysql_query("SELECT * FROM usuarios WHERE login='$login'");
$dados = mysql_fetch_array($selectdados);
	$id=$dados["id"];
	$saldo = $dados['saldo'];
	$dinheiro= number_format($saldo,2,",",".");
	$saldo = $saldo / 100;
	$saldo = number_format($saldo,2,",",".");
	$status = $dados['status'];
	$email = $dados['email'];
	$nome = $dados['nome'];
	$status = $dados['status'];
 	$nomebanco = $dados['dados_nome'];
 	$banco = $dados['dados_banco'];
 	$agencia = $dados['dados_agencia'];
 	$op = $dados['dados_op'];
 	$tipoconta = $dados['dados_tipoconta'];
  	$conta = $dados['dados_conta'];
	$skype = $dados['skype'];
	$facebook = $dados['facebook'];
	$pagseguro = $dados['pagseguro'];
	$moip = $dados['moip'];
	$akatus = $dados['akatus'];
	$pin = $dados['pincode'];
						// nova rede


			$buscanivel1 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel1='{$login}'") or die(mysql_error());
			$nivel1 = mysql_num_rows($buscanivel1);

			$buscanivel2 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel2='{$login}'") or die(mysql_error());
			$nivel2 = mysql_num_rows($buscanivel2);

			$buscanivel3 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel3='{$login}'") or die(mysql_error());
			$nivel3 = mysql_num_rows($buscanivel3);

			$buscanivel4 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel4='{$login}'") or die(mysql_error());
			$nivel4 = mysql_num_rows($buscanivel4);

			$buscanivel5 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel5='{$login}'") or die(mysql_error());
			$nivel5 = mysql_num_rows($buscanivel5);

			$totalrede = $nivel1+$nivel2+$nivel3+$nivel4+$nivel5;


		if ($status == "pendente") {
	$niv2 = mysql_query("SELECT * FROM pagamentos WHERE status='pago' AND login='{$login}'");
	$ct = mysql_num_rows($niv2);
		if ($ct == 5)
		{
		$niv2 = mysql_query("UPDATE usuarios SET status='ativo' WHERE login='{$login}'");
		}
}

?>
<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title> Escritório Virtual - RENDA EXTRA MS</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />

	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.php">
					<h4>RENDA EXTRA </h4>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
					<ul class="nav top-menu">
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                        	<?php
                            $sql=mysql_query("select * from msg where para='$login' and status='unread'");
							$total=mysql_num_rows($sql);
                             ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important"><?php echo $total; ?></span>
                            </a>

                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>Você tem <?php echo $total; ?> Novas Mensagens</p>
                                </li>
                                <?php
                                while($ver=mysql_fetch_array($sql)){
                                 ?>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from"><?php echo $ver["de"]; ?></span>
									<span class="time">ás <?php echo date("H:i:s", $ver["data"]);?></span>
									</span>
									<span class="message">
									    <?php echo $ver["texto"]; ?>
									</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="index.php?view=pm">Ver Todas as Mensagens</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
						<!-- BEGIN NOTIFICATION DROPDOWN -->
						<li class="dropdown" id="header_notification_bar">
							<?php
                            $sql2=mysql_query("select * from msg where status='unread' and situacao='importante' OR situacao='informativo' OR situacao='atualizacao' OR situacao='error'");
							$total2=mysql_num_rows($sql2);
                             ?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

							<i class="icon-bell-alt"></i>
							<span class="badge badge-warning"><?php echo $total2; ?></span>
							</a>
							<ul class="dropdown-menu extended notification">
								<li>
									<p>Você tem <?php echo $total2; ?> Novas Notificações</p>
								</li>
								<?php
                                while($ver=mysql_fetch_array($sql2)){
                                 ?>
								<li>
									<a href="#">
									<?php
									$situacao=$ver["situacao"];
									if($situacao=="importante"){
									echo "<span class='label label-important'><i class='icon-bolt'></i></span>";
									}
									if($situacao=="informativo"){
									echo "<span class='label label-info'><i class='icon-bullhorn'></i></span>";
									}
									if($situacao=="atualizacao"){
									echo "<span class='label label-success'><i class='icon-plus'></i></span>";
									}
									if($situacao=="error"){
									echo "<span class='label label-warning'><i class='icon-bell'></i></span>";
									}
									 ?>
									<?php echo $ver["assunto"]; ?>
									<span class="small italic">ás <?php echo date("H:i:s", $ver["data"]);?></span>
									</a>
								</li>
								<?php } ?>

								<li>
									<a href="index.php?view=pm">Ver Todas Notificações</a>
								</li>
							</ul>
						</li>
						<!-- END NOTIFICATION DROPDOWN -->

					</ul>
                </div>
                    <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                        <!-- BEGIN SUPPORT -->
                        <li class="dropdown mtop5">

                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="http://rendaextrams.com/contato" data-original-title="Contato">
                                <i class="icon-headphones"></i>
                            </a>
                        </li>
                        <!-- END SUPPORT -->
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar-mini.png" alt="">
                                <span class="username"><?php echo $nome; ?></span>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="editar-dados.php"><i class="icon-user"></i> Editar Dados</a></li>
								<li><a href="editar-banco.php"><i class="icon-tasks"></i> Editar Dados Bancários</a></li>
								<li><a href="editar-senha.php"><i class="icon-calendar"></i> Alterar Senha</a></li>
								<li class="divider"></li>
								<li><a href="logout.php"><i class="icon-key"></i> Sair</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
