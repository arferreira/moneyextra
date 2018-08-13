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
			<p><strong>Sua rede é formada por 5 níveis de indicados, e é atualizada automaticamente.</strong></p>
		</div>
					<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Usuários Na Rede</h4>
								</div>
								<div class="widget-body">
								<table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nivel 1</th>
                                    <th>Nível 2</th>
                                    <th>Nível 3</th>
                                    <th>Nível 4</th>
                                    <th>Nível 5</th>
                                </tr>
                                </thead>
                                <tbody>
                                	<?php

		$nivel1 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel1='{$login}'");
		$conta1 = mysql_num_rows($nivel1);

		$nivel2 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel2='{$login}'");
		$conta2 = mysql_num_rows($nivel2);


		$nivel3 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel3='{$login}'");
		$conta3 = mysql_num_rows($nivel3);

		$nivel4 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel4='{$login}'");
		$conta4 = mysql_num_rows($nivel4);

		$nivel5 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel5='{$login}'");
		$conta5 = mysql_num_rows($nivel5);

		$total = $conta1+$conta2+$conta3+$conta4+$conta5;
		?>
                                <tr>
                                    <td><?php echo $conta1; ?></td>
                                    <td><?php echo $conta2; ?></td>
                                    <td><?php echo $conta3; ?></td>
                                    <td><?php echo $conta4; ?></td>
                                    <td><?php echo $conta5; ?></td>
                                </tr>
                                </tbody>
                            </table>
								</div>
							</div>
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
		$pendente1++;
		}
		else if ($c1['status'] == "ativo")
		{
		$ativo1++;
		}

		}


		$niv2 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel2='{$login}'");
		$ativo2 = 0;
		$pendente2 = 0;
		while($cont2 = mysql_fetch_array($niv2)){
		$lg = $cont2['login'];
		$n2 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c2 = mysql_fetch_array($n2);
		if ($c2['status'] == "pendente")
		{
		$pendente2++;
		}
		else if ($c2['status'] == "ativo")
		{
		$ativo2++;
		}

		}




		$niv3 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel3='{$login}'");
		$ativo3 = 0;
		$pendente3 = 0;
		while($cont3 = mysql_fetch_array($niv3)){
		$lg = $cont3['login'];
		$n3 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c3 = mysql_fetch_array($n3);
		if ($c3['status'] == "pendente")
		{
		$pendente3++;
		}
		else if ($c3['status'] == "ativo")
		{
		$ativo3++;
		}

		}




		$niv4 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel4='{$login}'");
		$ativo4 = 0;
		$pendente4 = 0;
		while($cont4 = mysql_fetch_array($niv4)){
		$lg = $cont4['login'];
		$n4 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c4 = mysql_fetch_array($n4);
		if ($c4['status'] == "pendente")
		{
		$pendente4++;
		}
		else if ($c4['status'] == "ativo")
		{
		$ativo4++;
		}

		}




		$niv5 = mysql_query("SELECT * FROM indicados WHERE indicador_nivel5='{$login}'");
		$ativo5 = 0;
		$pendente5 = 0;
		while($cont5 = mysql_fetch_array($niv5)){
		$lg = $cont5['login'];
		$n5 = mysql_query("SELECT * FROM usuarios WHERE login='{$lg}'");
		$c5 = mysql_fetch_array($n5);
		if ($c5['status'] == "pendente")
		{
		$pendente5++;
		}
		else if ($c5['status'] == "ativo")
		{
		$ativo5++;
		}

		}
		$totalpendente = $pendente1+$pendente2+$pendente3+$pendente4+$pendente5;
		$valorpendente = $totalpendente*10;
		$totalativo = $ativo1+$ativo2+$ativo3+$ativo4+$ativo5;
		$valorativo = $totalativo*10;

		?>
		<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Usuários Ativos</h4>
								</div>
								<div class="widget-body">
		<table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nivel 1</th>
                                    <th>Nível 2</th>
                                    <th>Nível 3</th>
                                    <th>Nível 4</th>
                                    <th>Nível 5</th>
                                </tr>
                                </thead>
                                <tbody>
		<tr>
                                    <td><?php echo $ativo1; ?></td>
                                    <td><?php echo $ativo2; ?></td>
                                    <td><?php echo $ativo3; ?></td>
                                    <td><?php echo $ativo4; ?></td>
                                    <td><?php echo $ativo5; ?></td>
                                </tr>

                                </tbody>
                            </table>
								</div>
							</div>

							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Usuários Pendentes</h4>
								</div>
								<div class="widget-body">
		<table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nivel 1</th>
                                    <th>Nível 2</th>
                                    <th>Nível 3</th>
                                    <th>Nível 4</th>
                                    <th>Nível 5</th>
                                </tr>
                                </thead>
                                <tbody>
		<tr>
                                    <td><?php echo $pendente1; ?></td>
                                    <td><?php echo $pendente2; ?></td>
                                    <td><?php echo $pendente3; ?></td>
                                    <td><?php echo $pendente4; ?></td>
                                    <td><?php echo $pendente5; ?></td>
                                </tr>

                                </tbody>
                            </table>
								</div>
							</div>
					</div>
				</div>
			</div>
</div>
