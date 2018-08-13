<?php include ("header.php"); ?>
	<div id="container" class="row-fluid">
		<?php include ("menu.php"); ?>
		<!-- BEGIN PAGE -->
		<div>
			<?php if ($status == "pendente")
		{ 
		if ($_GET['view'] == "upline")
		{
		?>
		<div class='content'>
		<?php
		include ("upline.php");
		
		?>
		</div>
		<?php 
		}
		else if ($_GET['view'] == "pm")
		{
		?>
		<div class='content'>
		<?php include("pm.php"); ?>
		</div>
		<?php
		}
		else
		{
		include ("pagamentos.php");
		}
		
			}
			else
			{
			?>
		<div>
		<?php
$id = mysql_real_escape_string($_GET['view']);
switch($id) { 


case "home":
$pagina = "home.php";
break;
case "network":
$pagina = "network.php";
break;
case "upline":
$pagina = "upline.php";
break;
case "myacc":
$pagina = "myacc.php";
break;
case "pm":
$pagina = "pm.php";
break;
case "chat":
$pagina = "chat.php";
break;
case "invite":
$pagina = "invite.php";
break;
case "ganhos":
$pagina = "ganhos.php";
break;
case "downline":
$pagina = "downline.php";
break;
case "divulgacao":
$pagina = "divulgacao.php";
break;

// Agora definiremos o default, que será a pagina que será aberta quando não houver um valor para o $id 
default: 
$pagina = "home.php"; 
break; 
} 


?>
 
<?php
if( (isset($pagina)) and (file_exists($pagina)) ) {  //a aqui se a pagina nao existir //
include($pagina); 
} else { 
echo "Página solicitada não existe!"; 
} 
?>
</div>
<?php } ?>
</div>
<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<?php include ("footer.php"); ?>