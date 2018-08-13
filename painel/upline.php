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
						<div class="alert alert-block alert-success fade in">	
			<p><strong>Seus uplines são seus indicadores, aquelas pessoas que estão acima de você na rede de indicação em que você está incluido.</strong></p>
		</div>
					<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Meus UpLines</h4>
								</div>
								<div class="widget-body">
								<table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nível</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Facebook</th>
                                </tr>
                                </thead>
                                <tbody>	
                                <?php
	
	$niv1 = mysql_query("SELECT * FROM indicados WHERE login='{$login}'");
		
		
		
		$cont1 = mysql_fetch_array($niv1);
		$lg = $cont1['indicador_nivel1'];
		$n1 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c1 = mysql_fetch_array($n1);

		$skype = $c1['skype'];
		if ($c1['skype'] == "")
		{
		$skype = "Não possui Skype.";
		}
		$downlineLOGIN = $c1['login'];
		$downlineEMAIL = $c1['email'];
		$downlineNOME = $c1['nome'];
		$downlineFACEBOOK = $c1['facebook'];
		?>
		<tr>
		<td>Nível 1</td>
		<td><b><?php echo $downlineNOME;?></b><br />Login: <?php echo $downlineLOGIN; ?></td>
		<td><?php echo $downlineEMAIL;?></td>
		<td><a href="<?php echo $downlineFACEBOOK;?>" style="color: #222;" target="_blank">Ver</a></td>
		</tr>
		<?php
	
	$niv1 = mysql_query("SELECT * FROM indicados WHERE login='{$login}'");
		
		
		
		$cont1 = mysql_fetch_array($niv1);
		$lg = $cont1['indicador_nivel2'];
		$n1 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c1 = mysql_fetch_array($n1);

		$skype = $c1['skype'];
		if ($c1['skype'] == "")
		{
		$skype = "Não possui Skype.";
		}
		$downlineLOGIN = $c1['login'];
		$downlineEMAIL = $c1['email'];
		$downlineNOME = $c1['nome'];
		$downlineFACEBOOK = $c1['facebook'];
		?>
		<tr>
		<td>Nível 2</td>
		<td><b><?php echo $downlineNOME;?></b><br />Login: <?php echo $downlineLOGIN; ?></td>
		<td><?php echo $downlineEMAIL;?></td>
		<td><a href="<?php echo $downlineFACEBOOK;?>" style="color: #222;" target="_blank">Ver</a></td>
		</tr>
		<?php
	
	$niv1 = mysql_query("SELECT * FROM indicados WHERE login='{$login}'");
		
		
		
		$cont1 = mysql_fetch_array($niv1);
		$lg = $cont1['indicador_nivel3'];
		$n1 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c1 = mysql_fetch_array($n1);

		$skype = $c1['skype'];
		if ($c1['skype'] == "")
		{
		$skype = "Não possui Skype.";
		}
		$downlineLOGIN = $c1['login'];
		$downlineEMAIL = $c1['email'];
		$downlineNOME = $c1['nome'];
		$downlineFACEBOOK = $c1['facebook'];
		?>
		<tr>
		<td>Nível 3</td>
		<td><b><?php echo $downlineNOME;?></b><br />Login: <?php echo $downlineLOGIN; ?></td>
		<td><?php echo $downlineEMAIL;?></td>
		<td><a href="<?php echo $downlineFACEBOOK;?>" style="color: #222;" target="_blank">Ver</a></td>
		</tr>
		<?php
	
	$niv1 = mysql_query("SELECT * FROM indicados WHERE login='{$login}'");
		
		
		
		$cont1 = mysql_fetch_array($niv1);
		$lg = $cont1['indicador_nivel4'];
		$n1 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c1 = mysql_fetch_array($n1);

		$skype = $c1['skype'];
		if ($c1['skype'] == "")
		{
		$skype = "Não possui Skype.";
		}
		$downlineLOGIN = $c1['login'];
		$downlineEMAIL = $c1['email'];
		$downlineNOME = $c1['nome'];
		$downlineFACEBOOK = $c1['facebook'];
		?>
		<tr>
		<td>Nível 4</td>
		<td><b><?php echo $downlineNOME;?></b><br />Login: <?php echo $downlineLOGIN; ?></td>
		<td><?php echo $downlineEMAIL;?></td>
		<td><a href="<?php echo $downlineFACEBOOK;?>" style="color: #222;" target="_blank">Ver</a></td>
		</tr>
		<?php
	
	$niv1 = mysql_query("SELECT * FROM indicados WHERE login='{$login}'");
		
		
		
		$cont1 = mysql_fetch_array($niv1);
		$lg = $cont1['indicador_nivel5'];
		$n1 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c1 = mysql_fetch_array($n1);

		$skype = $c1['skype'];
		if ($c1['skype'] == "")
		{
		$skype = "Não possui Skype.";
		}
		$downlineLOGIN = $c1['login'];
		$downlineEMAIL = $c1['email'];
		$downlineNOME = $c1['nome'];
		$downlineFACEBOOK = $c1['facebook'];
		?>
		<tr>
		<td>Nível 5</td>
		<td><b><?php echo $downlineNOME;?></b><br />Login: <?php echo $downlineLOGIN; ?></td>
		<td><?php echo $downlineEMAIL;?></td>
		<td><a href="<?php echo $downlineFACEBOOK;?>" style="color: #222;" target="_blank">Ver</a></td>
		</tr>
		</tbody>
                            </table>
								</div>
							</div>	
					</div>
				</div>
			</div>
</div>				