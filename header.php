<?php
session_start();
				include ("painel/conexao/conecta.php");

				$sc = mysql_query("SELECT * FROM usuarios");
				$totals = mysql_num_rows($sc);
				$totalcad = $totals;

  if ((isset($_GET['i'])) OR (isset($_GET['ref']))) {

	if(isset($_SESSION['indicador']))
	{
	unset($_SESSION['indicador']);
	}

	function anti_injectioner($sql)
	{
	// remove palavras que contenham sintaxe sql
	$sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|s\\\\_-=.,}~^)/i", '', $sql);
	$sql = trim($sql);//limpa espaços vazio
	$sql = strip_tags($sql);//tira tags html e php
	$sql = addslashes($sql);//Adiciona barras invertidas a uma string
	$sql = preg_replace("/[^0-9a-zA-Z\-]/", "", $sql);
	return $sql;
	}




	if (($_GET['ref']))
	{

	$indicador = anti_injectioner($_GET['ref']);
	$upd = mysql_query("UPDATE usuarios SET pincode=pincode+'1' WHERE login='{$indicador}'");
	$proc = mysql_query("SELECT * FROM usuarios WHERE login='{$indicador}'");
			$dad = mysql_fetch_array($proc);
			$ct = mysql_num_rows($proc);
		if ($dad['status'] == "pendente")
	{
		unset($_SESSION['indicador']);

	$_SESSION['erro'] = 555; }
			else if ($ct < 1)
			{
		unset($_SESSION['indicador']);
			$_SESSION['erro'] = 555;
			}


	} else {
		 }



  if (isset($_SESSION['indicador']))
  {

	$procurar = mysql_query("SELECT * FROM usuarios WHERE login='{$indicador}'");
	$conta = mysql_num_rows($procurar);
	$dd = mysql_fetch_array($procurar);
		if ($_SESSION['indicador'] == array()){ exit; }
		if ($conta > "0")
	{
	$indicadornome = $dd['nome'];
	if ($indicador == $_SESSION['indicador'])
	{
		unset($_SESSION['indicador']);
	$_SESSION['indicador'] = $indicador;

	}
	else
	{
	unset($_SESSION['indicador']);
	$_SESSION['indicador'] = $indicador;
	}
  }
  }
  else
  {



	$procurar = mysql_query("SELECT * FROM usuarios WHERE login='{$indicador}'");
	$conta = mysql_num_rows($procurar);

	if ($conta > "0")
	{
		unset($_SESSION['indicador']);
	$_SESSION['indicador'] = $indicador;
	}
	}
	}
	else

	{
	  if (isset($_SESSION['indicador']))
  {




  }
  else
  {


	}
	}


	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Renda Extra MS</title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="iFollow Agência Digital" />
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
<!-- ========================  CSS Files  ========================== -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="all" href="css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
<!-- ========================  JS Files  =========================== -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/supersubs.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.zflickrfeed.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

</head>
<body>
<!--============================== Top Bar =================================-->
<div id="contact-wrap">
  <div class="qcontact clearfix">
    <div class="container_12">
      <article class="grid_8">
        <h3 class="color_white font_heading02 txt_shd">Divulgue o Amigo Que Ajuda nas Redes Sociais</h3>
      </article>
      <article class="grid_4 last-col">
        <div class="social">
				<a href="#" title="Twitter">
				<img src="images/social/twitter.png" alt=""
				></a> <a href="#" title="Facebook">
				<img src="images/social/facebook.png" alt=""></a>
				 <a href="#" title="Linkedin"><img src="images/social/linkedin.png" alt=""></a>
				  <a href="#" title="Skype"><img src="images/social/skype.png" alt=""></a>
					<a href="#" title="RSS"><img src="images/social/rss.png" alt=""></a></div>
      </article>
    </div>
    <div class="ef-list"></div>
  </div>
  <div class="top-line">
    <div><a href="#" class="contact-bar-tab"></a></div>
  </div>
</div>

<!--============================== Header =================================-->
<header>
  <div class="container_12">
    <h1><a class="logo ucase" href="/">
		RENDA EXTRA MS</h1>
    <div class="nav_wrap">
      <div class="nav_wrap_inner">
        <div class="responsibe_block">
          <div class=
"responsibe_block_inner"> <a href="#" class="resp_navigation"></a> </div>
        </div>
        <nav class="main-menu">
          <ul class="sf-menu">
          	<li class="current"><a href="index.php" data-description="Pagina Principal">Home</a>
            </li>
            <li class="current"><a href="funciona.php" data-description="Entenda o sistema">Como Funciona</a>
            </li>
            <li class="current"><a href="cadastro.php" data-description="Faça parte">Cadastre-se</a></li>
            <li class="current"><a href="painel/" data-description="Escritório Virtual">Login</a></li>
            <li class="current"><a href="faq.php" data-description="Perguntas e Respostas">Faq</a>
            </li>
            <li class="current"><a href="contato.php" data-description="Fale conosco">Contato</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

</header>
