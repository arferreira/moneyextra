<?php  error_reporting(0);

session_start();

require_once('conexao/conecta.php');

include ("configuracao.php");

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

  <title>RENDA EXTRA MS - Backoffice</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <meta content="" name="description" />

  <meta content="" name="author" />

  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet" />

  <link href="css/style_responsive.css" rel="stylesheet" />

  <link href="css/style_default.css" rel="stylesheet" id="style_color" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body id="login-body">

<?php

if (!function_exists("GetSQLValueString")) {

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")

{

  if (PHP_VERSION < 6) {

    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  }



  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);



  switch ($theType) {

    case "text":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;

    case "long":

    case "int":

      $theValue = ($theValue != "") ? intval($theValue) : "NULL";

      break;

    case "double":

      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";

      break;

    case "date":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;

    case "defined":

      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;

      break;

  }

  return $theValue;

}

}

?>

<?php

// *** Validate request to login to this site.





$loginFormAction = $_SERVER['PHP_SELF'];





if (isset($_POST['login'])) {

  $loginUsername=$_POST['login'];

  $password=$_POST['senha'];

  $MM_fldUserAuthorization = "";

  $MM_redirectLoginSuccess = "index.php?view=home";

  $MM_redirectLoginFailed = "login.php";

  $MM_redirecttoReferrer = false;

  mysql_select_db($database_conecta, $conecta);



  $LoginRS__query=sprintf("SELECT login, senha FROM usuarios WHERE login=%s AND senha=%s",

    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text"));



  $LoginRS = mysql_query($LoginRS__query, $conecta) or die(mysql_error());

  $loginFoundUser = mysql_num_rows($LoginRS);

  if ($loginFoundUser) {

     $loginStrGroup = "";



	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}

    //declare two session variables and assign them

    $_SESSION['MM_Username'] = $loginUsername;

    $_SESSION['MM_UserGroup'] = $loginStrGroup;



    if (isset($_SESSION['PrevUrl']) && false) {

      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];

    }











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

					$sessid = rand(59621984263,448494988788);

				$cookie = geraSenha(6, true, true);

			$token = geraSenha(50, true, true);



			$haystack = $_SERVER['SERVER_NAME'];



			$timenow = time();



if (stristr($haystack, 'www') === FALSE)

{

$goto = "index.php?view=home";

}

else

{

$goto = "index.php?view=home";

}



    echo "<meta http-equiv=\"refresh\" content=\"2;URL=". $goto ."\">

	";

	?>

<div class="login-header">

      <!-- BEGIN LOGO -->

      <div id="logo" class="center">

          <h1>RENDA EXTRA MS</h1>

      </div>

      <div style="margin-top: 25px;" class="center">

   <img src="loading.gif" style="margin-top: 5px;">

	</div>

	<div id="login-copyright">

      <?php echo $copy; ?>

  </div>

  </div>

<?php

}

else {

	echo"<script language=javascript>alert('Seus Dados de Acesso Não Conferem')</script>";

echo"<script language=javascript>location.href='login.php'</script>";

?>



<?php

}

}

else {

?>

<div class="login-header">

      <!-- BEGIN LOGO -->

      <div id="logo" class="center">

          <h1>RENDA EXTRA MS</h1>

      </div>

      <!-- END LOGO -->

  </div>

  <!-- BEGIN LOGIN -->

  <div id="login">

    <!-- BEGIN LOGIN FORM -->

    <form id="loginform" class="form-vertical no-padding no-margin" method="post" action="">

      <div class="lock">

          <i class="icon-lock"></i>

      </div>

      <div class="control-wrap">

          <h4>Acesso ao Escritório Virtual</h4>

          <div class="control-group">

              <div class="controls">

                  <div class="input-prepend">

                      <span class="add-on"><i class="icon-user"></i></span>

                      <input id="input-username" type="text" name="login" placeholder="Login" />

                  </div>

              </div>

          </div>

          <div class="control-group">

              <div class="controls">

                  <div class="input-prepend">

                      <span class="add-on"><i class="icon-key"></i></span>

                      <input id="input-password" name="senha" type="password" placeholder="Senha" />

                  </div>

                  <div class="mtop10">

                      <div class="block-hint pull-left small">

                      	<a href="../index.php" class="">Voltar ao Site</a>

                      </div>

                      <div class="block-hint pull-right">

                          <a href="javascript:;" class="" id="forget-password">Perdeu a Senha?</a>

                      </div>

                  </div>



                  <div class="clearfix space5"></div>

              </div>



          </div>

      </div>



      <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Login" />

    </form>

    <!-- END LOGIN FORM -->

    <!-- BEGIN FORGOT PASSWORD FORM -->

    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="recuperar-senha.php" method="post">

      <p class="center">Entre com seu email para recuperar sua senha.</p>

      <div class="control-group">

        <div class="controls">

          <div class="input-prepend">

            <span class="add-on"><i class="icon-envelope"></i></span>

            <input id="input-email" type="text" name="email" placeholder="Email"  />

          </div>

        </div>

      </div>

      <input type="submit" id="forget-btn" class="btn btn-block login-btn" value="Enviar">

    </form>

    <!-- END FORGOT PASSWORD FORM -->

  </div>

  <div id="login-copyright">

      <?php echo $copy; ?>

  </div>

 <?php } ?>

    <!-- END LOGIN -->

  <!-- BEGIN COPYRIGHT -->



    <!-- END COPYRIGHT -->

  <!-- BEGIN JAVASCRIPTS -->

  <script src="js/jquery-1.8.3.min.js"></script>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <script src="js/jquery.blockui.js"></script>

  <script src="js/scripts.js"></script>

  <script>

    jQuery(document).ready(function() {

      App.initLogin();

    });

  </script>

  <!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>
