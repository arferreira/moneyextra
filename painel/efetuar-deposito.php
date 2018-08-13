<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RENDA EXTRA MS | Depósito</title>
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

<body>

<div class="row-fluid">
               <div class="span12">
                  <div class="widget" style="height: 500px;">
                        <div class="widget-title">
                           <h4><i class="icon-globe"></i>Dados para deposito</h4>                    
                        </div>
                        <?php 
                        include ("conexao/conecta.php");
                        $conta=$_GET["conta"];
                        $user=$_GET["user"];
						$sql=mysql_query("select * from usuarios where id=$conta");
						$ver=mysql_fetch_array($sql);
						
						$mostra=mysql_query("select * from usuarios where id=$user");
						$r=mysql_fetch_array($mostra);
                         ?>
                        <div class="widget-body">
                            <div class="pagetitle">
                <h1><i class="icon-download-alt"></i> Efetuar Deposito</h1>
            </div>
            <p>

Clique na forma de pagamento desejada abaixo:

</p><br/>
<table style="width:auto">


<td>
<?php 
if(!empty($ver["dados_banco"])){?>
<input type="image" src="img/deposito.png" alt="Depósito Bancário" Onclick="document.getElementById('dados_bancarios').style.display = 'block';"/>
<?php } ?>
</td>

<td>

<?php
$pagseguro=$ver["pagseguro"]; 
if(!empty($pagseguro)){?>
<form action="https://pagseguro.uol.com.br/checkout/checkout.jhtml" target="_blank" method="post">

<input type="hidden" name="email_cobranca" value="<?php echo $ver["pagseguro"] ?>">
<input type="hidden" name="tipo" value="CBR">
<input type="hidden" name="moeda" value="BRL">
<input type="hidden" name="item_id" value="1">
<input type="hidden" name="item_descr" value="Doacao RENDA EXTRA MS para <?php echo $ver["nome"]; ?>">
<input type="hidden" name="item_quant" value="1">
<input type="hidden" name="item_valor" value="1000">
<input type="hidden" name="frete" value="0">
<input type="hidden" name="peso" value="0">
<input type="hidden" name="senderName" value="<?php echo $r["nome"] ?>">
<input type="hidden" name="senderEmail" value="<?php echo $r["email"] ?>">
<input type="image" src="img/pagseguro.png" alt="Pagseguro">
</form>	
<?php } ?>
</td>

<td>
<?php 
if(!empty($ver['moip'])){?>
<form name="moip" action="https://www.moip.com.br/PagamentoMoIP.do" target="_blank" method="post">

<input type="hidden" name="pagador_nome" value="<?php echo $r["nome"] ?>">

<input type="hidden" name="pagador_email" value="<?php echo $r["email"] ?>">

<input type="hidden" name="valor" value="1000">

<input type="hidden" name="id_carteira" value="<?php echo $ver["moip"] ?>">

<input type="hidden" name="nome" value="Doacao RENDA EXTRA MS para <?php echo $ver["nome"]; ?>">

<input type="image" src="img/moip.png" alt="Moip">

</form>	
<?php } ?>

</td>
<td>
	<?php 
if(!empty($ver['akatus'])){?>
<form target="akatus" method="post" action="https://www.akatus.com/carrinho/">
<input type="hidden" name="email_cobranca"value="<?php echo $ver["akatus"] ?>">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">
<input type="hidden" name="item_id_1" value="12345">
<input type="hidden" name="item_descr_1" value="Doação RENDA EXTRA MS para <?php echo $ver["nome"]; ?>">
<input type="hidden" name="item_quant_1" value="1">
<input type="hidden" name="item_valor_1" value="1000">
<input type="hidden" name="item_frete_1" value="0">
<input type="hidden" name="item_peso_1" value="0">
<input type="hidden" name="tipo_frete" value="EN">
<input type="hidden" name="cliente_nome" value="<?php echo $r["nome"] ?>">
<input type="hidden" name="cliente_email" value="<?php echo $r["email"] ?>">
<input type="image" src="img/akatus.png" name="submit" alt="Pague com Akatus + Fácil Pagar, + Fácil Receber" />
</form>	
<?php } ?>
</td>
<td>
<?php if(!empty($ver['mercadopago'])){ ?>
<form target="_blank" action="processa.php" method="post">
										<input type="hidden" name="input_id_user" value="6f4a5e47b668b8cd14d6252de5f48676">
										<input type="hidden" name="input_id_plan" value="slbr3.30">
										<input type="hidden" name="input_form_pay" value="MP">
										<input type="hidden" name="input_ref_buy" value="0">
										<input type="image" src="images/pg_mercado_pago.png" border="0" name="submit" alt="Pague com Mercado Pago!">
							
</form>
<?php } ?>
</td>
</table>
<div class="control-group" id="dados_bancarios" style="display:none">
<h4 class="widgettitle title-inverse">
<b>Nome Completo:</b> <?php echo $ver["nome"]; ?><br/><br/>
<b>Nome do Banco:</b> <?php echo $ver["dados_banco"]; ?><br/><br/>
<b>Agencia:</b> <?php echo $ver["dados_agencia"]; ?><br/><br/>
<b>Conta:</b>  <?php echo $ver["dados_conta"]; ?><br/><br/>
<b>Tipo da Conta:</b> <?php echo $ver["dados_tipoconta"]; ?><br/><br/>
<b>Operacao:</b> <?php echo $ver["dados_op"]; ?>
</h4>
</div>
</div>
</div>
</div>
</div>
</body>
</html>