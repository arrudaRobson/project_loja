<?php
include ('config.php');
include ('DAO/UserDAO.php');
include ('helpers.php');
?>
<!DOCTYPE HTML>
<!--
  Escape Velocity by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html><link rel="shortcut icon" href="images/icone.jpg" >
  <head>
    <title>S O M O S U M</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<script src="js/arquivao2.js"></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.2.6.min.js"></script>
<script src="js/npm.js"></script>
  </head>
  <body class="homepage">

    <div id="page-wrapper">

      <!-- Header -->

        <div id="header-wrapper" class="wrapper">
        
    
<div id="fundo-externo">
    <div id="fundo">
        <img src="images/world2.jpg" alt="">
    </div>
</div>
<style type="text/css">


#fundo-externo {
    overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
    width: 100%;
    height: 100%;
    position: relative; /* criamos um contexto para posicionamento */
}
 
#fundo {
    position: fixed; /* posição fixa para que a possível rolagem da tela não revele espaços em branco */
    width: 100%;
    height: 100%;
}
 
#fundo img {
    width: 100%; /* com isso imagem ocupará toda a largura da tela. Se colocarmos height: 100% também, a imagem irá distorcer */
    position: absolute;
}</style>
 
          <div id="header"> 

            <!-- Logo -->
              <div id="logo" style="background:none;">
              <div class="login" style="background:white; color:black; padding-left: 30px; padding-right: 30px;
  width:400px;
  height:350px;
  position:absolute;
  top:50%;
  left:50%;
  margin-top:-175px;
  margin-left:-200px;
">
<?php
          if (usuarioQueEstaLogado()) {
              $email = usuarioLogado();
    $cmdsql = "select * from usuario where email='{$email}'";
    $resultado = mysqli_query($conexao, $cmdsql);
    $pesquisa = mysqli_fetch_assoc($resultado);
    $usuario = $pesquisa["email"];
    $nome = $pesquisa["nome"];
    $idu = $pesquisa["idusuario"];
    ?>

    <form method="POST" class="form-update" action="update.php" id="form-update">
       <? echo "<input type='hidden' value='". $idu."' name='id'>"; ?>
  Novo email: <input type="text" name="up-user">
  Nova senha: <input type="password" name="up-pass">
  Confirme a senha: <input type="password" name="up-c-pass">
   <div class="modal-footer"><br>
        <button type="submit" class="button style1" name="update">Atualizar</button>
      </div></form>

      <? } else{ ?>


               <form method="POST" class="form-loginn" action="login.php"><br>
  Email <input type="text" name="user">
  Senha <input type="password" name="pass"><br>
  <input type="submit" name="login" value="Entrar" class="button style1">
  <a href="#cadastrese" style="text-decoration:none; color:black;">Cadastre-se</a>
</form>
<? } ?>
                </div>
              </div>
<!-- background:white url('images/overlay.png'); margin: 0 auto;
  width: 50%; -->
            <!-- Nav -->
              <nav id="nav">
                <ul style="background:white url('images/overlay.png'); color:black;">
                  <li class="current"><a href="index.php" style="color:black;">Quem somos?</a></li>
                  <li>
                    <a href="loja.php" style="color:black;">Loja</a>
                    
                  </li>
                  <li><a href="contato.php" style="color:black;">Contato</a></li>
 <?php
          if (usuarioQueEstaLogado()) {
              $email = usuarioLogado();
    $cmdsql = "select * from usuario where email='{$email}'";
    $resultado = mysqli_query($conexao, $cmdsql);
    $pesquisa = mysqli_fetch_assoc($resultado);
    $usuario = $pesquisa["email"];
    $idu = $pesquisa["idusuario"];
    ?>

<li>
                    <a href="#" style="color:black">Bem vindo(a): <?php echo $nome?></a>
                    <ul style="background:white; background-color: rgba(255, 255, 255, 0.7);">
                      <li><a style="color:black" href="f-login.php">Atualizar dados</a></li>
                      <li><a style="color:black" href="carrinho.php">Carrinho</a></li>
                      <li><a style="color:black" href="logout.php">Sair</a></li>
                    </ul>
                  </li>
                    


<?php }else{ ?>

                  <li><a href="f-login.php" style="color:black;">Login</a></li>

                  
                  <?php } ?>
                </ul>
              </nav>

          </div>
        </div>
<!-- background: #222835 url('images/overlay.png');background-color: rgba(44, 50, 63, 0.925); -->
      <!-- Intro -->


        <div id="intro-wrapper" class="wrapper style1" style="background:white url('images/overlay.png');color:black;">
          <div class="title" style="background:white url('images/overlay.png');color:black;">Usuário</div>

          <BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
          <div id="" style="background:; color:black; padding-left: 30px; padding-right: 30px;
  width:900px;
  height:2000px;
  position:absolute;
  top:50%;
  left:50%;
  margin-top:-800px;
  margin-left:-450px;
">

<br><br><br><br><br><br>


<center>*Esses dados serão usados na hora de sua compra*</center>
<?php
          if (usuarioQueEstaLogado()) {
              $email = usuarioLogado();
    $cmdsql = "select * from usuario where email='{$email}'";
    $resultado = mysqli_query($conexao, $cmdsql);
    $pesquisa = mysqli_fetch_assoc($resultado);
    $usuario = $pesquisa["email"];
    $nome = $pesquisa["nome"];
    $idu = $pesquisa["idusuario"];
    ?>
<form method="POST" class="form-loginn" action="updatee.php" id="cadastrese">
Meus dados <hr />
<? echo "<input type='hidden' value='". $idu."' name='id'>"; ?>
  <input placeholder="Nome"  type="text" name="nome" style="width:150px;float:left;">
   <center> <input type="text" name="sobrenome" placeholder="Sobrenome" style="width:450px;"></center><br>
  <input type="number" name="cpf" placeholder="CPF" style="width:150px;float:left;">
 <center> <input type="number" name="rg" placeholder="RG" style="width:150px;"></center><br>
  <input type="date" name="data" placeholder="Nascimento" style="width: 150px;float:left;">
<center>
<select name="estado" style="width:150px;">
<option value="ec">Estado civil...</option>
<option value="casado">Casado(a)</option>
<option value="solteiro">Solteiro(a)</option>
</select></center><br>

<select name="sexo" style="width:150px;float:left">
<option value="sexo">Sexo...</option>
<option value="masc">Masculino</option>
<option value="fem">Feminino</option>
</select><br><BR>

  <input type="number" name="tel" placeholder="Telefone" style="width:150px;float:left;">
  <center><input type="number" name="cel" placeholder="Celular" style="width:150px;"></center><BR><BR>

Meu endereço <hr />
  <input type="number" name="cep" placeholder="CEP" style="width:150px;float:left;">
  <center> <input type="number" name="n" placeholder="Nº" style="width:150px;"></center><br>
   <input type="text" name="end" placeholder="Endereço" style="width:350px;float:left;">
  <center> <input type="text" name="comp" placeholder="Complemento" style="width:150px;"></center><br>
  <input type="text" name="bairro" placeholder="Bairro" style="width:350px;float:left;">

  <center> <input type="text" name="uf" placeholder="U.F" style="width:150px;"></center><br>

<input type="text" name="cidade" placeholder="Cidade" style="width:350px;float:left;"><BR><BR><br>

  Minha conta <hr />
   <input type="email" name="email" placeholder="E-mail"><br>
   <input type="password" name="senha" placeholder="Senha" style="width:250px;float:left;">
   <center><input type="password" name="c-senha" placeholder="Confirme a senha" style="width:250px;"></center><br>
  <input type="submit" name="login" value="Cadastrar" class="button style1">
</form>

<? }else{ ?>

  <form method="POST" class="form-loginn" action="cadastro.php" id="cadastrese">
Meus dados <hr />

  <input placeholder="Nome"  type="text" name="nome" style="width:150px;float:left;">
   <!-- <center> <input type="text" name="sobrenome" placeholder="Sobrenome" style="width:450px;"></center><br>
  <input type="number" name="cpf" placeholder="CPF" style="width:150px;float:left;">
 <center> <input type="number" name="rg" placeholder="RG" style="width:150px;"></center><br>
  <input type="date" name="data" placeholder="Nascimento" style="width: 150px;float:left;">
<center>
<select name="estado" style="width:150px;">
<option value="ec">Estado civil...</option>
<option value="casado">Casado(a)</option>
<option value="solteiro">Solteiro(a)</option>
</select></center><br>

<select name="sexo" style="width:150px;float:left">
<option value="sexo">Sexo...</option>
<option value="masc">Masculino</option>
<option value="fem">Feminino</option>
</select><br><BR>

  <input type="number" name="tel" placeholder="Telefone" style="width:150px;float:left;">
  <center><input type="number" name="cel" placeholder="Celular" style="width:150px;"></center><BR><BR>

Meu endereço <hr />
  <input type="number" name="cep" placeholder="CEP" style="width:150px;float:left;">
  <center> <input type="number" name="n" placeholder="Nº" style="width:150px;"></center><br>
   <input type="text" name="end" placeholder="Endereço" style="width:350px;float:left;">
  <center> <input type="text" name="comp" placeholder="Complemento" style="width:150px;"></center><br>
  <input type="text" name="bairro" placeholder="Bairro" style="width:350px;float:left;">

  <center> <input type="text" name="uf" placeholder="U.F" style="width:150px;"></center><br>

<input type="text" name="cidade" placeholder="Cidade" style="width:350px;float:left;"><BR><BR><br>
 -->
  Minha conta <hr />
   <input type="email" name="email" placeholder="E-mail"><br>
   <input type="password" name="senha" placeholder="Senha" style="width:250px;float:left;">
   <center><input type="password" name="c-senha" placeholder="Confirme a senha" style="width:250px;"></center><br>
  <input type="submit" name="login" value="Cadastrar" class="button style1">
</form>
<? } ?>
    </div><br><BR><BR><BR>
        </div>
            
            
          </section>
        </div>

      <!-- Main -->
        <div class="wrapper style2">
          
        </div>

      <!-- Highlights -->
        <div class="wrapper style3">
          
        </div>

      <!-- Footer -->
        <div id="footer-wrapper" class="wrapper">
          <div class="title">The Rest Of It</div>
          <div id="footer" class="container">
            <header class="style1">
              <h2>Ipsum sapien elementum portitor?</h2>
              <p>
                Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
                Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
              </p>
            </header>
            <hr />
            <div class="row 150%">
              <div class="6u 12u(mobile)">

                <!-- Contact Form -->
                  <section>
                    <form method="post" action="#">
                      <div class="row 50%">
                        <div class="6u 12u(mobile)">
                          <input type="text" name="name" id="contact-name" placeholder="Name" />
                        </div>
                        <div class="6u 12u(mobile)">
                          <input type="text" name="email" id="contact-email" placeholder="Email" />
                        </div>
                      </div>
                      <div class="row 50%">
                        <div class="12u">
                          <textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="12u">
                          <ul class="actions">
                            <li><input type="submit" class="style1" value="Send" /></li>
                            <li><input type="reset" class="style2" value="Reset" /></li>
                          </ul>
                        </div>
                      </div>
                    </form>
                  </section>

              </div>
              <div class="6u 12u(mobile)">

                <!-- Contact -->
                  <section class="feature-list small">
                    <div class="row">
                      <div class="6u 12u(mobile)">
                        <section>
                          <h3 class="icon fa-home">Mailing Address</h3>
                          <p>
                            Untitled Corporation<br />
                            1234 Somewhere Rd #987<br />
                            Nashville, TN 00000-0000
                          </p>
                        </section>
                      </div>
                      <div class="6u 12u(mobile)">
                        <section>
                          <h3 class="icon fa-comment">Social</h3>
                          <p>
                            <a href="#">@untitled-corp</a><br />
                            <a href="#">linkedin.com/untitled</a><br />
                            <a href="#">facebook.com/untitled</a>
                          </p>
                        </section>
                      </div>
                    </div>
                    <div class="row">
                      <div class="6u 12u(mobile)">
                        <section>
                          <h3 class="icon fa-envelope">Email</h3>
                          <p>
                            <a href="#">info@untitled.tld</a>
                          </p>
                        </section>
                      </div>
                      <div class="6u 12u(mobile)">
                        <section>
                          <h3 class="icon fa-phone">Phone</h3>
                          <p>
                            (000) 555-0000
                          </p>
                        </section>
                      </div>
                    </div>
                  </section>

              </div>
            </div>
            <hr />
          </div>
          <div id="copyright">
            <ul>
              <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
          </div>
        </div>

    </div>

    <!-- Scripts -->

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/skel-viewport.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>





      <script type="text/javascript">function adaptImage(targetimg) {
    var wheight = $(window).height(); // altura da janela do navegador
    var wwidth = $(window).width(); // largura da janela do navegador
 
    // removemos os atributos de largura e altura da imagem
    targetimg.removeAttr("width")
    .removeAttr("height")
    .css({ width: "", height: "" }); // removemos possíveis regras css também
 
    var imgwidth = targetimg.width(); // largura da imagem
    var imgheight = targetimg.height(); // altura da imagem
 
    var destwidth = wwidth; // largura que a imagem deve ter
    var destheight = wheight; // altura que a imagem deve ter
 
    // aqui vamos determinar o tamanho final da imagem
    if(imgheight < wheight) {
    // se a altura da imagem for menor que a altura da tela, fazemos um cálculo
    // para redefinir a largura da imagem para bater com a altura que queremos
    destwidth = (imgwidth * wheight)/imgheight;
 
    $('#fundo img').height(destheight);
        $('#fundo img').width(destwidth);
    }
 
    // aqui utilizamos um cálculo simples para determinar o posicionamento da imagem
    // para que a mesma fique no meio da tela
    // posição = dimensão da imagem/2 - dimensão da tela/2
    destheight = $('#fundo img').height();
    var posy = (destheight/2 - wheight/2);
    var posx = (destwidth/2 - wwidth/2);
 
    //se o cálculo das posições der resultado positivo, trocamos para negativo
    if(posy > 0) {
    posy *= -1;
    }
    if(posx > 0) {
    posx *= -1;
    }
 
    // colocamos através da função css() do jquery o posicionamento da imagem
    $('#fundo').css({'top': posy + 'px', 'left': posx + 'px'});
    }
 
    //quando a janela for redimensionada, adaptamos a imagem
    $(window).resize(function() {
    adaptImage($('#fundo img'));
});
 
//quando a página carregar, fazemos o mesmo
$(window).load(function() {
    $(window).resize();
});</script>

<script type="text/javascript">
$(document).ready(function() { function filterPath(string) {return string.replace(/^\//,'').replace(/(index|default).[a-zA-Z]{3,4}$/,'').replace(/\/$/,'');}
$('a[href*=#]').each(function() { if ( filterPath(location.pathname) == filterPath(this.pathname)&& location.hostname == this.hostname&& this.hash.replace(/#/,'') ) {var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;if ($target) {var targetOffset = $target.offset().top;$(this).click(function() {$('html, body').animate({scrollTop: targetOffset}, 500);
return false;});}}});});
</script>
  </body>
</html>