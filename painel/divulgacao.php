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
					<?php
					$conts = mysql_query("SELECT * FROM visitantes WHERE referencia='{$login}'");
					$contpin = mysql_num_rows($conts);
					 ?>
					<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Todas as visitas ao seu link são registradas e o número de usuários visualizando sua página é atualizado automaticamente.</h4>
								</div>
								<div class="widget-body">
		<table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Visitas</th>
                                </tr>
                                </thead>
                                <tbody>
								<tr>
                                    <td>
                                    	<div style="text-align: left; float:left; font-size:12px; margin-top: 5px; color: #888;">
		http://rendaextrams.com/?ref=<b><?php echo $login; ?></b></div><div style="text-align:right;"><B>Visitas:</B> <?php echo $pin;?> / <b>Visualizando:</b> <?php echo $contpin;?></div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
								</div>
							</div>
					</div>
				</div>
			</div>
</div>
