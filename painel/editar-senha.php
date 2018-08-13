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
								<form action="editar-senha.php"	method="post">
									<div class="control-group">
                                    <label class="control-label">Senha Antiga</label>
                                    <div class="controls">
                                        <input type="password" name="senha" value="" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nova Senha</label>
                                    <div class="controls">
                                        <input type="password" name="senha1" value="" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Repita a Senha</label>
                                    <div class="controls">
                                        <input type="password" name="senha2" value="" class="input-xxlarge">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Atualizar" name="ok" class="btn blue">
                                </div>
								</form>
								<?php
								if(isset($_POST['ok'])){
								$senha=$_POST["senha"];
								$senha1=$_POST["senha1"];
								$senha2=$_POST["senha2"];

								$ac=mysql_query("select * from usuarios where senha='$senha'")
or die(mysql_error());
$row=mysql_fetch_array($ac);

if(mysql_num_rows($ac)==0) {

echo"<script language=javascript>alert('Senha Atual não Confere!')</script>";
echo"<script language=javascript>location.href='editar-senha.php'</script>";
}
else{
if($nova!=$nova2) {
echo"<script language=javascript>alert('Senhas não combinam!')</script>";
echo"<script language=javascript>location.href='editar-senha.php'</script>";
}
else{
$query2=mysql_query("update usuarios set senha='$senha2' where login='$login'");

echo"<script language=javascript>alert('Senha Alterada com Sucesso')</script>";
echo"<script language=javascript>location.href='index.php'</script>";
}
}
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
