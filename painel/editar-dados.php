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
								<form action="editar-dados.php"	method="post">
									<div class="control-group">
                                    <label class="control-label">Nome</label>
                                    <div class="controls">
                                        <input type="text" name="nome" value="<?php echo $nome; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">E-mail</label>
                                    <div class="controls">
                                        <input type="text" name="email" value="<?php echo $email; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Skype</label>
                                    <div class="controls">
                                        <input type="text" name="skype" value="<?php echo $skype; ?>" class="input-xxlarge">
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label">Facebook</label>
                                    <div class="controls">
                                        <input type="text" name="facebook" value="<?php echo $facebook; ?>" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Atualizar" name="ok" class="btn blue">
                                </div>	
								</form>
								<?php 
								if(isset($_POST['ok'])){
								$nome=anti_injection($_POST["nome"]);
								$email=anti_injection($_POST["email"]);
								$skype=anti_injection($_POST["skype"]);
								$facebook=anti_injection($_POST["facebook"]);
								
								 $inserir = mysql_query("UPDATE usuarios SET nome='$nome', email='$email', skype='$skype', facebook='$facebook' WHERE login='$login'");
								 
								 echo "<div class='alert alert-block alert-success fade in'>	
										<p><strong>Dados Atualizados com Sucesso!</strong></p>
									</div>";
								
								echo "<meta http-equiv=\"refresh\" content=\"0;URL=\"editar-dados.php\">";	
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