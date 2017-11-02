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
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->

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
							<div>
							<h1><a href="index.html" style="color:white; text-decoration:none;">S O M O S U M</a></h1>
								<p style="color:white">CONHECER A DEUS É FAZÊ-LO CONHECIDO</p><a style="color:white;" href="https://www.facebook.com/projetomissionariosomosum/?fref=ts" target="_blank" class="btn btn-social-icon btn-facebook">
    <span class="fa fa-facebook"></span>
  </a>
        
        <a style="color:white"	 href="hhttps://www.instagram.com/projetosomos1" target="_blank" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
<!-- background:white url('images/overlay.png'); margin: 0 auto;
  width: 50%; -->
						<!-- Nav -->
							<nav id="nav">
								<ul style="background:white url('images/overlay.png'); color:black;">
									<li class="current"><a href="#intro-wrapper" style="color:black;">Quem somos?</a></li>
									<li>
										<a href="loja.php" style="color:black;">Loja</a>
										
									</li>
									<li><a href="contato.php" style="color:black;">Contato</a></li>
 <?php
          if (usuarioQueEstaLogado()) {
              $email = usuarioLogado();
    $cmdsql = "select * from usuario where email='{$email}'";
    $resultado = mysqli_query($conexao,$cmdsql);
    $pesquisa = mysqli_fetch_assoc($resultado);
    $usuario = $pesquisa["email"];
    $nome = $pesquisa["nome"];
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
					<div class="title" style="background:white url('images/overlay.png');color:black;">Quem somos?</div>
					<section id="intro" class="container">
						<p class="style1">Projeto S O M O S U M</p>
						
							O projeto SOMOSUM foi criado com o objetivo de fazer conhecido a ida de missionários para as nações não alcançadas , países como Coreia do Norte, Índia, China, entre outras nações que ainda não conhecem verdadeiramente o Eterno Jesus Cristo , que Deu a sua vida para salvar as nossas vidas e perdoar nossos pecados . Pessoas padecem por falta de amparos físico como fome , frio , doenças entre outras coisas , mais também sofrem por falta de amor , de compreensão . 
Tudo isso que vocês vão ver aqui nessa página , e em prol a essa missão de amor ❤️ 
E toda a quantia que for arrecadada com a vendas desses artigos será revertida também para essa missão ! 
Se você não puder ir ♀contribua se não puder contribuir ore o importante é que você faça parte dessa causa .
Nós esperamos por vocês 
AJUDE , não fique fora dessa
CONHECER A DEUS É FAZÊ-LO CONHECIDO ❤.
					
						
						<ul class="actions" style="color:black">
							<li><a href="contato.php" class="button style1 big">Nos ajude!</a></li>
							<a href="https://www.facebook.com/projetomissionariosomosum/?fref=ts" target="_blank" class="btn btn-social-icon btn-facebook">
    <span class="fa fa-facebook"></span>
  </a>
        
        <a href="https://www.youtube.com/channel/UCDNrwhgCg0OpvAHvNrw8LDg" target="_blank" class="btn btn-social-icon btn-youtube"><i class="fa fa-youtube"></i></a>
						</ul>
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Doe qualquer quantia</div>
					<div id="main" class="container">

						<!-- Image -->
							

						<!-- Features -->
							<section id="features">
								<header class="style1" style="float:left">
									<h2>Banco Santander</h2>
									<p>Isabela Fernandes dos Santos</p>
									<p>Agência 3410 | CC: </p>
								</header>

								<header class="style1" style="float:right">
									<h2>Banco do Brasil</h2>
									<p>Jaqueline Ariana de Souza Bem</p>
									<p>Agência 637-8 | CC: 89339-0</p>
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-comment">Mattis velit diam vulputate</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-refresh">Lorem ipsum dolor sit veroeros</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-picture-o">Pretium phasellus justo lorem</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-cog">Tempus sed pretium orci</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-wrench">Aliquam consequat et feugiat</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-check">Dolore laoreet aliquam mattis</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
								</div>
								<ul class="actions actions-centered">
									<li><a href="#" class="button style1 big">Get Started</a></li>
									<li><a href="#" class="button style2 big">More Info</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">Nos envie um email!</div>
					<div id="footer" class="container">
						<header class="style1" style="margin-top:-100px;">
							<h2>Você pode tambem solicitar um orçamento!</h2>
						
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
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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