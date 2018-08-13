<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
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
						<div class="span6">

						</div>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
					<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Seus indicados diretos são todos aqueles que se registraram diretamente no seu link de divulgação.</h4>
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
		$n1 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
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
					</div>
				</div>
			</div>
</div>				