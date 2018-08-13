<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<?php 
				if($status=="ativo"){
					 ?>
		<div class="row-fluid">
		<div class="span12">
		<div class="alert alert-block alert-success fade in">	
			<p><strong>O seu link para divulgação do sistema é: http://RENDA EXTRA MS.com.br/?ref=<?php echo "$login";?></strong></p>
		</div>
		</div>	
		</div>

		<?php } else { ?>

		<div class="row-fluid">
		<div class="span12">
		<div class="alert alert-block alert-error fade in">	
			<p>Você ainda não é um usuário ativo. Para liberar seu cadastro você precisa efetuar uma doação de R$ 10,00, em cada uma das contas listadas abaixo, após efetuar o depósito informe os dados do comprovante e clique em enviar, um de cada vez.
Seus uplines irão confirmar sua doação dentro de 48 horas.</p>
		</div>
		</div>	
		</div>

		<?php } ?>
				<div class="row-fluid">
					<div class="span12">
						<div class="span6">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Escritório Virtual
							<small> Informações Gerais </small>
						</h3>
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
                            <li>
                                <a href="index.php">RENDA EXTRA MS</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Painel</a><span class="divider-last">&nbsp;</span></li>
						</ul>	
						</div>
						<?php 
                        include ("conexao/conecta.php");
						$sql=mysql_query("select * from pagamentos where login='$login' and status='pago'");
						$total=mysql_num_rows($sql);
                         ?>
						<div class="span6">
						<h3 class="page-title">
							<?php echo "$total"; ?> de 5 Já Liberaram sua Conta
						</h3>
                            <div class="progress progress-striped progress-success">
                            	<?php 
                            	if($total=="0"){
                            		echo "<div style='width: 2%;' class='bar'></div>";
                            	}
                            	if($total=="1"){
                            		echo "<div style='width: 20%;' class='bar'></div>";
                            	}
								if($total=="2"){
                            		echo "<div style='width: 40%;' class='bar'></div>";
                            	}
								if($total=="3"){
                            		echo "<div style='width: 60%;' class='bar'></div>";
                            	}
								if($total=="4"){
                            		echo "<div style='width: 80%;' class='bar'></div>";
                            	}
                            	if($total=="5"){
                            		$premium=mysql_query("update usuarios set status='ativo' where login='$login'");
									echo"<script language=javascript>alert('Parabens você agora e um usuario ativo')</script>";
									echo"<script language=javascript>location.href='index.php?view=home'</script>";
                            		echo "<div style='width: 100%;' class='bar'></div>";
                            	} ?>
                                        
                                    </div>	
						</div>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN ALERTS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Instruções</h4>
								</div>
								<div class="widget-body">
								<p>Você deve depositar o valor de R$ 10,00 (dez reais) para cada membro da Lista de Doações abaixo para que seu Status fique Ativo e o seu Link de Divulgação disponível. Após efetuar os depósitos escaneie os comprovantes separadamente e envie para cada uma das pessoas da sua lista.</p>

								<p>Poderão ser aceitas as seguintes formas de depósito: Depósito Bancário, Pagseguro, Moip e Akatus, basta ativar em seu Escritório Virtual. Nas opções Pagseguro e Moip os depósitos poderão ser feitos com Boleto Bancário e Cartão de Crédito.</p>

								<!--<p>Assim que vencer a data do seu Reset seu status ficará como Pendente, então você deverá depositar novamente os R$ 10,00 (dez reais) para cada membro da sua lista, para se manter Ativo no sistema.</p>-->

								<p><strong> uma doação no valor de R$ 10,00 (dez reais) para o site, parte desta doação será convertida em doações para instituições de caridade e prêmios para os participantes do sistema. Totalizando R$ 60,00 (sessenta reais), que é o valor total em doações que você vai fazer.</strong></p>
								</div>
							</div>
							<!-- END ALERTS PORTLET-->

						</div>
					</div>
				<div class="row-fluid">
					<div class="span12">
										<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-money"></i>Pagamentos</h4>
								</div>
								<div class="widget-body">
								<table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                        <tr>
                                        	<th><i class="icon-leaf"></i> <span class="hidden-phone">Posição</span></th>
                                            <th><i class="icon-leaf"></i> <span class="hidden-phone">Usuário</span></th>
                                            <th><i class="icon-user"></i> <span class="hidden-phone ">Nome Completo</span></th>
                                            <th><i class="icon-user"></i> <span class="hidden-phone ">Enviar Mensagem</span></th>
                                            <th><i class="icon-tags"> </i><span class="hidden-phone">Doação</span></th>
                                            <th><i class="icon-tags"> </i><span class="hidden-phone">Comprovante Bancário</span></th>
                                            <th><i class="icon-tags"> </i><span class="hidden-phone">Liberado</span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
								<?php
	// VERIFICA PAGAMENTO INDICADO DIRETO
		 $time = time();
			
			if (isset($_POST['pp']))
			{
			$payid = anti_injection($_POST['pay_id']);
			
			$buscapi = mysql_query("SELECT * FROM pagamentos WHERE id='{$payid}'");
			$dadospi = mysql_fetch_array($buscapi);
			
			if ($dadospi['login'] == $login)
			{
			
			$inserir = mysql_query("INSERT INTO denuncia (id, pay_id) VALUES (NULL, '{$payid}')") or die (mysql_error());
			
			}
			
			}

			$buscapagamentos = mysql_query("SELECT * FROM pagamentos WHERE login='{$login}' ORDER BY id DESC");
		$cp = 5;
		$i = 0;
		while($pagamentos = mysql_fetch_array($buscapagamentos))
		{
		
		if ($pagamentos['status'] == "nao pago")
		{
		$pagamentostatus = "<span class='btn btn-danger'><i class='icon-thumbs-down'> Não</span>";
		}
		
		else if ($pagamentos['status'] == "pendente")
		{
		$pagamentostatus = "<span class='btn btn-danger'><i class='icon-thumbs-down'> Não</span>";
		}
			else if ($pagamentos['status'] == "pago")
		{
		$pagamentostatus = "<span class='btn btn-success'><i class='icon-thumbs-up'> Sim</span>";
		} else if ($pagamentos['status'] == "recusado")
		{
		$pagamentostatus = "<span class='btn btn-danger'><i class='icon-thumbs-down'> Não</span>";
		}
		
		$buscauser = mysql_query("SELECT * FROM usuarios WHERE login='{$pagamentos['indicador']}'");
		$indicador = mysql_fetch_array($buscauser);
		$minhaid=$indicador['id'];
		$indicadorBANCO = $indicador['dados_banco'];
		$indicadorAGENCIA = $indicador['dados_agencia'];
		$indicadorTIPOCONTA = $indicador['dados_tipoconta'];
		
		if ($indicadorTIPOCONTA == "corrente") { $indicadorTIP = "Conta Corrente"; $cc = "C/C";}
		else if ($indicadorTIPOCONTA == "poupanca") { $indicadorTIP = "Conta Poupança"; $cc = "CP"; }
		$indicadorNOME = $indicador['dados_nome'];
		$i++;
		$indicadorNOMES = $indicador['nome'];
		$indicadorCONTA = $indicador['dados_conta'];
$indicadorOP = $indicador['dados_op'];
		$pagamentodata = $pagamentos['hora'];
		?>	
		<tr>
											<td><?php echo $i; ?></td>
                                            <td><?php echo $pagamentos['indicador']; ?></td>
                                            <td><?php echo $indicadorNOMES; ?></td>
                                            <td><a href="compor.php?login=<?php echo $pagamentos['indicador']; ?>&user=<?php echo $login; ?>" class="various" data-fancybox-type="iframe"><button class="btn btn-danger"><i class="icon-envelope-alt"></i></button></a></td>
                                            <td><a href="efetuar-deposito.php?conta=<?php echo $minhaid; ?>&user=<?php echo $id; ?>" class="various" data-fancybox-type="iframe">
                                            	<button class="btn btn-primary">Efetuar Depósito</button></a></td>
                                            <td><a href="enviar-comprovante.php?envia=<?php echo $minhaid; ?>&indicador_nivel=<?php echo $i; ?>&login=<?php echo $login; ?>" class="various" data-fancybox-type="iframe">
                                            	<button class="btn btn-warning">Enviar</button></a></td>
                                            <td class="center"><?php echo $pagamentostatus; ?></td>
                                        </tr>
                                        <?php
			$cp--;
			}
			?>
			<tr>
											<td><span class="btn">SITE</span></td>
                                            <td>RENDA EXTRA MS</td>
                                            <td>Ciclo Ajuda Mutua</td>
                                            <td><a href="http://RENDA EXTRA MS.com.br/contato" class="btn btn-danger"><i class="icon-envelope-alt"></i></a></td>
                                            <td><form target='akatus' method='post'
action='https://www.akatus.com/carrinho/'>
<input type='hidden' name='email_cobranca'
value='maxxyryo@gmail.com'>
<input type='hidden' name='tipo' value='CP'>
<input type='hidden' name='moeda' value='BRL'>
<input type='hidden' name='item_id_1' value='12345'>
<input type='hidden' name='item_descr_1' 
value='Doação RENDA EXTRA MS - Ciclo Ajuda Financeira'>
<input type='hidden' name='item_quant_1' value='1'>
<input type='hidden' name='item_valor_1' value='1000'>
<input type='hidden' name='item_frete_1' value='0'>
<input type='hidden' name='item_peso_1' value='0'>
<input type='hidden' name='tipo_frete' value='EN'>
<input type='submit' name='submit' class='btn btn-primary' value='Efetuar Deposito'>
</form></td>
                                            <td><a href="#myModal3" role="button" class="btn disabled" data-toggle="modal">Não Enviar</a></td>
                                            <td class="center"><span class='btn btn-success'><i class='icon-thumbs-up'> Sim</span></td>
                                        </tr>	
			 
                                        </tbody>
                                    </table>
								</div>
							</div>	
					</div>
				</div>
			</div>
</div>				