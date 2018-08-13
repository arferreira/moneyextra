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
			<p><strong>O seu link para divulgação do sistema é: http://cicloajudamutua.uni.me/?ref=<?php echo "$login";?></strong></p>
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
                                <a href="index.php">Ciclo</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Painel</a><span class="divider-last">&nbsp;</span></li>
						</ul>	
						</div>
						<div class="span6">

						</div>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
                    <!-- BEGIN OVERVIEW STATISTIC BLOCKS-->
                    <div class="row-fluid circle-state-overview">
                        <div class="span2 responsive clearfix" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle turquoise-color">
                                    <i class="icon-user"></i>
                                </div>
                                <p>
                                    <strong><?php echo "$totalrede"; ?></strong>
                                    Usuários na Rede
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle red-color">
                                    <i class="icon-plus-sign"></i>
                                </div>
                                <p>
                                    <strong>000 Pontos</strong>
                                    (Em Breve)
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle green-color">
                                    <i class="icon-money"></i>
                                </div>
                                <p>
                                    <strong>R$ <?php echo "$saldo"; ?></strong>
                                    Ganhos no Sistema
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle gray-color">
                                    <i class="icon-comments-alt"></i>
                                </div>
                                <p>
                                    <strong><?php echo $total; ?></strong>
                                    Novas Mensagens
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle purple-color">
                                    <i class="icon-eye-open"></i>
                                </div>
                                <p>
                                    <strong><?php echo $total2; ?></strong>
                                    Novas Notificações
                                </p>
                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-wrap">
                                <div class="stats-circle blue-color">
                                    <i class="icon-bar-chart"></i>
                                </div>
                                <p>
                                    <strong><?php echo $pin; ?></strong>
                                    Acessos
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="row-fluid">
						<div class="span8">
							<!-- BEGIN SITE VISITS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-bar-chart"></i> Últimos Diretos Cadastrados</h4>
								</div>
								<div class="widget-body">
								<table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Login</th>
                                    <th>E-mail</th>
                                    <th>Skype</th>
                                    <th>Facebook</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
	
	$niv1 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel1='{$login}'");
		$ativo1 = 0;
		$pendente1 = 0;
		while($cont1 = mysql_fetch_array($niv1)){
		$lg = $cont1['login'];
		$n1 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}' order by id ASC limit 10");
		$c1 = mysql_fetch_array($n1);
		if ($c1['status'] == "pendente")
		{
		$st = "<font color='darkred'><b>Pendente</b></font>";
		}
		else if ($c1['status'] == "ativo")
		{
		$st = "<font color='darkgreen'><b>Ativo</b></font>";
		}
		
		$downlineLOGIN = $c1['login'];
		$downlineEMAIL = $c1['email'];
		$downlineNOME = $c1['nome'];
		$downlineSKYPE = $c1['skype'];
		$downlineFACEBOOK = $c1['facebook'];
		?>
								<tr>
                                    <td><?php echo $downlineNOME; ?></td>
                                    <td><?php echo $downlineLOGIN;?></td>
                                    <td><?php echo $downlineEMAIL; ?></td>
                                    <td><?php echo $downlineSKYPE; ?></td>
                                    <td><a href="<?php echo $downlineFACEBOOK ;?>" target="_blank" style="color: #222">Ver</a></td>
                                    <td><?php echo $st;?></td>
                                </tr>
<?php
		
		}
		
		?>
                                </tbody>
                            </table>		
									
								</div>
							</div>
							<!-- END SITE VISITS PORTLET-->
						</div>
                        <div class="span4">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-book"></i> Publicidade</h4>
                                </div>
                                <div class="widget-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>