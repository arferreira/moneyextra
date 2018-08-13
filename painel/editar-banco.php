<?php include ("header.php"); ?>
<div id="container" class="row-fluid">
	<?php include ("menu.php"); ?>
<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="span6">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Escritório Virtual
							<small> Editar Dados </small>
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
									<h4><i class="icon-reorder"></i>Editar Minhas Informações</h4>
								</div>
								<div class="widget-body">
								<form action="editar-banco.php"	method="post">
									<div class="control-group">
                                    <label class="control-label">Banco</label>
                                    <div class="controls">
                                        <input type="text" name="dados_banco" value="<?php echo $banco; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Agencia</label>
                                    <div class="controls">
                                        <input type="text" name="dados_agencia" value="<?php echo $agencia; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Conta</label>
                                    <div class="controls">
                                        <input type="text" name="dados_conta" value="<?php echo $conta; ?>" class="input-xxlarge">
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label">Operação</label>
                                    <div class="controls">
                                        <input type="text" name="dados_op" value="<?php echo $op; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tipo de Conta</label>
                                    <div class="controls">
                                        <input type="text" name="dados_tipoconta" value="<?php echo $tipoconta; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ativar Recebimento por PagSeguro</label>
                                    <div class="controls">
                                        <input type="text" name="pagseguro" value="<?php echo $pagseguro; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ativar Recebimento por Moip</label>
                                    <div class="controls">
                                        <input type="text" name="moip" value="<?php echo $moip; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ativar Recebimento por Akatus</label>
                                    <div class="controls">
                                        <input type="text" name="akatus" value="<?php echo $akatus; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Atualizar" name="ok" class="btn blue">
                                </div>	
								</form>
								<?php 
								if(isset($_POST['ok'])){
								$banco=utf8_decode(anti_injection($_POST["dados_banco"]));
								$agencia=anti_injection($_POST["dados_agencia"]);
								$conta=anti_injection($_POST["dados_conta"]);
								$opercacao=anti_injection($_POST["dados_op"]);
								$tipo=anti_injection($_POST["dados_tipoconta"]);
								$pagseguro=anti_injection($_POST["pagseguro"]);
								$moip=anti_injection($_POST["moip"]);
								$akatus=anti_injection($_POST["akatus"]);
								
								 $inserir = mysql_query("UPDATE usuarios SET dados_banco='$banco', dados_agencia='$agencia', dados_tipoconta='$tipo', dados_conta='$conta', dados_op='$opercacao', pagseguro='$pagseguro', moip='$moip', akatus='$akatus' WHERE login='$login'");
								 
								 echo "<div class='alert alert-block alert-success fade in'>	
										<p><strong>Dados Atualizados com Sucesso!</strong></p>
									</div>";
								
								echo "<meta http-equiv=\"refresh\" content=\"0;URL=\"editar-banco.php\">";	
								}	
								 ?>
								</div>
							</div>	
					</div>
				</div>
			</div>
</div>	
</div>
<?php include ("footer.php"); ?>			