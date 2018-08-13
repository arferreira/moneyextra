<?php include ("header.php"); ?>

<!--============================== Page Title =================================-->

<div class="wrapper bg_title bg_grey_light">

  <div class="container_12 pagetitle">

    <article class="grid_12">

      <h1 class="color_white font_heading02">Fale Conosco</h1>

      <p style="float:left;"><span class="color_white"><a href="index.php?r=<?php echo $elref;  ?>" class="wlink">home</a> &rarr; Contato</span> </p>

      <p style="float: right;" class="color_white">Voce esta sendo Indicado por <b><?php echo $elref;  ?></b></p>

    </article>

  </div>

</div>

<!--============================== Content ================================-->

<div class="brd2"></div>

<div class="wrapper bg_white">

  <!--==============================content================================-->

  <section class="cont_pad2">

    <div class="container_12" style="margin-bottom:30px;" >

      <article class="grid_8 ">

        <div class="heading_line">

          <h3 class="color_black font_heading ucase"><span>Envie sua Mensagem</span></h3>

        </div>

        <form id="contact-form">

          <div class="success">Mensagem Enviada com Sucesso<br>

            <strong>We will be in touch soon.</strong> </div>

          <fieldset>

          <label class="name">

          <input type="text" value="Nome:">

          <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>

          <label class="email">

          <input type="text" value="E-mail:">

          <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>

          <label class="phone">

          <input type="text" value="Telefone:">

          <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>

          <label class="message">

          <textarea>Message:</textarea>

          <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>

          <div class="buttons2"> <a href="#" data-type="reset" class="button orange">Limpar</a><a href="#" data-type="submit" class="button orange">Enviar</a> </div>

          </fieldset>

        </form>

      </article>

      <article class="grid_4 last-col">

        <div class="heading_line">

          <h3 class="color_black font_heading ucase"><span>Mais Informações</span></h3>

        </div>

        <dl class="adress1">

          <dt>

          <dd>E-mail: <a href="mailto:admin@amigoqueajuda.com.br" class="link1">admin@amigoqueajuda.com.br</a></dd>

        </dl>

      </article>

    </div>

  </section>

</div>

<?php include ("footer.php"); ?>
