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
							<div id="logo"  style="background:none;">
							<div>
							<h1><a href="index.html" style="color:white; text-decoration:none;">S O M O S U M</a></h1>
								<p style="color:white">CONHECER A DEUS É FAZÊ-LO CONHECIDO</p>
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
											<li><a style="color:black" href="#">Carrinho</a></li>
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
					<div class="title">Finalizar compra</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="box">
											<header>
												<h2>Categorias</h2>
											</header>


											<ul>
											<? 
												$query = mysql_query("SELECT * FROM tipo");
while ($row = mysql_fetch_array($query)) {
$id = $row['0'];
$tipo = $row['1'];

echo "<form method='POST' class='' action='loja-f.php'>
<input type='hidden' value='".$id."' name='idd''>
<button type='submit' class='button style1'>".$tipo."</button>
</form>";
}
?>
												
											</ul>

											
										</section>
										<section class="box">
											<header>
												<h2>Vitae turpis consequat</h2>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic08.jpg" alt="" /></a>
														<h3><a href="#">Diam odio lorem</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic09.jpg" alt="" /></a>
														<h3><a href="#">Sed duis consequat</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic10.jpg" alt="" /></a>
														<h3><a href="#">Tellus nulla volutpat</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
											</ul>
											<a href="#" class="button style1">Archives</a>
										</section>
										<section class="box">
											<header>
												<h2>Magna diam vehicula</h2>
											</header>
											<ul class="style3">
												<li><a href="#">Nulla iaculis egestas varius</a></li>
												<li><a href="#">Augue massa feugiat quam pretium</a></li>
												<li><a href="#">Orci sem vel libero cras nisi odio</a></li>
												<li><a href="#">Sed hendrerit massa nam mattis</a></li>
												<li><a href="#">Turpis vel leo accumsan aliquet</a></li>
												<li><a href="#">Dapibus mi fermentum fusce non</a></li>
												<li><a href="#">Arcu laoreet sapien tempus</a></li>
												<li><a href="#">Nulla iaculis egestas varius</a></li>
												<li><a href="#">Augue massa feugiat quam pretium</a></li>
												<li><a href="#">Orci sem vel libero cras nisi odio</a></li>
												<li><a href="#">Sed hendrerit massa nam mattis</a></li>
											</ul>
										</section>
									</div>

							</div>
							<div class="8u 12u(mobile) important(mobile)">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2>Escolha uma opção</h2><p>*Só estamos gerando boleto no momento*</p><hr />
											</header>




<form method='POST' id='finalizar' action='boleto_santander_banespa.php' target="_blank" style="width:845px;float:left">
<?

if ($_POST) {
		$t=$_POST['total'];
	
 if (usuarioQueEstaLogado()) {
              $email = usuarioLogado();
    $cmdsql = "select * from usuario where email='{$email}'";
    $resultado = mysqli_query($conexao, $cmdsql);
    $pesquisa = mysqli_fetch_assoc($resultado);
    $nome = $pesquisa["nome"];
    $sobrenome = $pesquisa["sobrenome"];
    $end = $pesquisa["end"];
    $cidade = $pesquisa["cidade"];
    $uf = $pesquisa["uf"];
    $cep = $pesquisa["cep"];
    echo "<input type='hidden' value='".$t."' name='total'>
    <input type='hidden' value='".$nome."' name='nome'>
    <input type='hidden' value='".$sobrenome."' name='sobrenome'>
    <input type='hidden' value='".$end."' name='end'>
    <input type='hidden' value='".$uf."' name='cidade'>
    <input type='hidden' value='".$cep."' name='uf'>
    <input type='hidden' value='".$cidade."' name='cep'>
    ";

}}
    ?>



<input type="hidden" value="<? echo $t; ?>" name="total">
<input type="submit" class="button style1" value="Comprar e buscar encomenda" name="buscar" target="_blank">
<input type="submit" class="button style1" value="Comprar e receber encomenda" name="receber" target="_blank"><br>
</form>
<center>
<form method='POST' id='aa' action='calc.php' style="width:845px;float:left">
<input type="number" name="cep" placeholder="Digite seu cep!">
<input type="submit" class="" value="Calcular frete">
</form>
</center>

<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('#aa').submit(function(){
      var dados = jQuery( this ).serialize();

      jQuery.ajax({
        type: "POST",
        url: "calc.php",
        data: dados,

        success: function( data )
        {
          alert( data );
        }
      });
      
      return false;
    });
  });
  </script>



											<a href="#" class="image featured">
												<img src="images/pic01.jpg" alt="" />
											</a>
											
				







										</article>
										<div class="row 150%">
											<div class="6u 12u(mobile)">
												<section class="box">
													<header>
														<h2>Magna pulvinar tempus</h2>
													</header>
													<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
													<p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
													eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
													tempus.</p>
													<a href="#" class="button style1">More</a>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section class="box">
													<header>
														<h2>Magna pulvinar tempus</h2>
													</header>
													<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
													<p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
													eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
													tempus.</p>
													<a href="#" class="button style1">More</a>
												</section>
											</div>
										</div>
									</div>

							</div>
						</div>
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

	</body>
</html>