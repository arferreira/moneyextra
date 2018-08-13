<?php include ("header.php"); ?>

<!--============================== Slider =================================-->
<div class="fullwidthbanner-container">
  <div class="fullwidthbanner">
    <ul>
      <!-- FADE -->
      <li data-transition="fade" >
        <div class="caption sfr" data-x="5" data-y="40" data-speed="900" data-start="1000" data-easing="easeOutCirc"><img src="images/slider/img_slider1.png" alt="" /></div>
        <div class="caption lfr very_big_white ucase" data-x="450" data-y="80" data-speed="400" data-start="1700" data-easing="easeOutExpo">R$ 31.250,00</div>
        <div class="caption sft medium_black ucase"  data-x="450" data-y="140" data-speed="1500" data-start="1900" data-easing="easeOutExpo">Direto em sua Conta Báncaria</div>
        <div class="caption sfl small_text color_white"  data-x="460" data-y="190" data-speed="1800" data-start="1900" data-easing="easeOutExpo">
        	A ideia é simples: Ao se cadastrar através da indicação de um conhecido,<br>
        	você depositará R$10,00 na conta de 5 participantes.<br>
        	Após isto, você já será um indicador participante e poderá receber<br>
        	de todos que você indicar em até 5 níveis!<br>
        </div>
      </li>
      <!-- SLIDEUP -->
    </ul>
  </div>
</div>
<!--============================== Tag Line =================================-->
<div class="brd2"></div>
<!--============================== Content ================================-->
<div class="wrapper bg_white">
    <section class="cont_pad2">
    <div class="container_12 align_center">
      <h2 class="color_black font_heading02 lh0">
	  <?php if(isset($_SESSION['indicador']))
					{
					$procurars = mysql_query("SELECT * FROM usuarios WHERE login='{$_SESSION['indicador']}'");
	$contas = mysql_fetch_array($procurars);
	echo "Parabéns, Você foi convidado por: <span class='color_orange ucase'> " . utf8_decode($contas['nome'])."</span></h2>";
	}
	?>
    </div>
  </section>
  <div class="brd3"></div>
  <section class="cont_pad2">
  	<div class="container_12">
  		<div class="grid_6">
  			<div class="status-favorecidos">
        <h4>Funciona mesmo, você irá se surpreender</h4>
        <p class="text-muted text-center">Você está de frente de uma oportunidade de ouro</p>
        <p class="text-center" style="margin-top: 25px;">
            Aqui você ajuda, e tem a chance de ser ajudado por milhares de pessoas. Reserve alguns minutos
            do seu tempo, e veja como você pode mudar a sua vida apenas ajudando o próximo.
        </p>
        <h4 class="text-primary text-center" style="line-height: 30px; margin-top: 25px;">
            Clique no botão abaixo e veja como você pode ganhar os <b style="color: red;">R$31.250,00</b> do exemplo ao lado
        </h4>
        <a href="funciona.php" class="button orange" style="margin-top: 50px;">
            Entenda como o RENDA EXTRA MS funciona »
        </a>
        <p class="text-muted" style="text-align: center;margin-top: 45px;">
            <audio controls="" autoplay="">
                <source src="assets/ajudex.mp3" type="audio/mpeg">
            </audio>
        </p>
    </div>
  		</div>
  		<div class="grid_6">
  			<div class="status-favorecidos">
        <div class="favorecidos" style="float: left; width: 100%; ">
            <div class="favorecido analise">
                <b class="nivel">Nível 1</b>
                <p class="nome">R$50,00</p>
                <p class="conta">Com seu nome na posição 5 - (5 pessoas)</p>
            </div>
            <div class="favorecido analise">
                <b class="nivel">Nível 2</b>
                <p class="nome">R$250,00</p>
                <p class="conta">Com seu nome na posição 4 - (25 pessoas)</p>
            </div>
            <div class="favorecido analise">
                <b class="nivel">Nível 3</b>
                <p class="nome">R$1.250,00</p>
                <p class="conta">Com seu nome na posição 3 - (125 pessoas)</p>
            </div>
            <div class="favorecido analise" style="margin-bottom: 0;">
                <b class="nivel">Nível 4</b>
                <p class="nome">R$6.250,00</p>
                <p class="conta">Com seu nome na posição 2 - (625 pessoas)</p>
            </div>
            <div class="favorecido analise" style="margin-bottom: 0;">
                <b class="nivel">Nível 5</b>
                <p class="nome">R$31.250,00</p>
                <p class="conta" style="font-size: 12px;">Com seu nome na posição 1 - (3.125 pessoas)</p>
            </div>
        </div>
    </div>
  		</div>
  	</div>
  </section>

</div>
<?php include ("footer.php"); ?>
<!-- SCRIPT DE SEGURANÇA, NÃO RETIRAR. -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:240px;height:100px"
     data-ad-client="ca-pub-5097881277440032"
     data-ad-slot="9016317507"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- WWW.PHPLIVRE.COM -->
