<?php 
if(isset($_POST['ok'])){
include ("conexao/conecta.php");
$pastausuario="comprovantes"; 
$pasta="$pastausuario/";
 foreach($_FILES["arquivo"]["error"] as $key => $error){

 if($error == UPLOAD_ERR_OK){
 $tmp_name = $_FILES["arquivo"]["tmp_name"][$key];
 $cod = $_FILES["arquivo"]["name"][$key];
 $nome = $_FILES["arquivo"]["name"][$key];
 $uploadfile = $pasta . basename($cod);
 $login=$_GET["login"];
 $indicador_nivel=$_GET["indicador_nivel"];
 $time = time();
 

 if(move_uploaded_file($tmp_name, $uploadfile)){
 echo "
 <div class='alert alert-success'>
									<button class='close' data-dismiss='alert'></button>
									  O Arquivo " . $nome . " foi enviado com <strong>Sucesso!</strong>!
								</div>
";
 $inserir = mysql_query("UPDATE pagamentos SET status='pendente', comprovante='$cod', hora='$time' WHERE login='$login' AND indicador_nivel='$indicador_nivel'");
 }else{
 echo "
 <div class='alert alert-error'>
									<button class='close' data-dismiss='alert'></button>
									<strong>Erro</strong> ao enviar o arquivo " . $nome . "! Por favor tente outra vez!
								</div>
 ";
 } } } } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RENDA EXTRA MS | Enviar Comprovante</title>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />    
   <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

</head>

<body style="background: none;">
<form name="enviar" id="enviar" action="" method="post" enctype="multipart/form-data">
<div class="row-fluid">
               <div class="span12">
                  <div class="widget" style="height: 400px;">
                        <div class="widget-title">
                           <h4><i class="icon-globe"></i>Enviar Comprovante para um Membro</h4>                    
                        </div>
                        <?php 
                        include ("conexao/conecta.php");
                        $conta=$_GET["envia"];
						$indicador_nivel=$_GET["indicador_nivel"];
						$sql=mysql_query("select * from usuarios where id=$conta");
						$ver=mysql_fetch_array($sql);
                         ?>
                        <div class="widget-body">
                            <div class="pagetitle">
                <h1><i class="icon-upload-alt"></i> Enviar Comprovante</h1>
            </div>
<div class="control-group">
                                    <label class="control-label">Enviar para: <?php echo $ver["nome"]; ?></label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="icon-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                       <span class="btn btn-file">
                                       <span class="fileupload-new">Selecionar Arquivo</span>
                                       <span class="fileupload-exists">Limpar</span>
                                       <input type="file" name="arquivo[]" class="default" />
                                       </span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
<input type="submit" class="btn blue" name="ok" value="Salvar">
</div> 
</div>
</div>
</div>
</div>
</form>
<script src="js/jquery-1.8.2.min.js"></script>    
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>   
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
</body>
</html>