<?php
include ('config.php');
include ('config2.php');
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
	</head>
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
<style type="text/css">#fundo-externo {
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

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Entre em contato conosco</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2>Nosso local</h2>
												<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.462367336047!2d-46.92799198502445!3d-23.443780784741445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf1b3938f54d35%3A0x63de74498598d514!2sAv.+Brasil%2C+323+-+Jardim+Sao+Luis%2C+Santana+de+Parna%C3%ADba+-+SP!5e0!3m2!1spt-BR!2sbr!4v1486038839042" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
											</header>											
										</article>
										
									</div>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Sidebar -->
									<div id="sidebar">
										
										<section class="box">
											<header>
												<h2>As melhores estampas!</h2>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/ancora.jpg" alt="" /></a>
														<h3><a href="#">Nos envie seu desenho!</a></h3>
														<p>Basta você enviar seu desenho por email e te responderemos com um orçamento!</p>
													</article>
												</li>
												
											</ul>
										</section>




										<section class="box">
											<header>
												<h2>Estampas em canecas!</h2>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/morte.jpg" alt="" /></a>
														<h3><a href="#">Nos envie seu desenho!</a></h3>
														<p>Basta você enviar seu desenho por email e te responderemos com um orçamento!</p>
													</article>
												</li>
												
											</ul>
											
										</section>
										<a href="#footer-wrapper" class="button style1">Solicite um orçamento</a>
									</div>

							</div>
						</div>
					</div>
				</div>

			<!-- Highlights -->
				

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
<script type="text/javascript">
$(document).ready(function() { function filterPath(string) {return string.replace(/^\//,'').replace(/(index|default).[a-zA-Z]{3,4}$/,'').replace(/\/$/,'');}
$('a[href*=#]').each(function() { if ( filterPath(location.pathname) == filterPath(this.pathname)&& location.hostname == this.hostname&& this.hash.replace(/#/,'') ) {var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;if ($target) {var targetOffset = $target.offset().top;$(this).click(function() {$('html, body').animate({scrollTop: targetOffset}, 500);
return false;});}}});});
</script>
	</body>
</html>