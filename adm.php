  <?php
include ('config.php');
include ('DAO/AdmDAO.php');
include ('helpers.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Nações</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

<script src="js/arquivao2.js"></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.2.6.min.js"></script>
<script src="js/npm.js"></script>
</head>
<body>

 <div class="container-fluid">
   

<ul class="nav navbar-nav navbar-left">      
          &nbsp;&nbsp;&nbsp;&nbsp;
          <?php
          if (usuarioQueEstaLogado()) {
              $email = usuarioLogado();
    $cmdsql = "select * from usuario where email='{$email}'";
    $resultado = mysqli_query($conexao, $cmdsql);
    $pesquisa = mysqli_fetch_assoc($resultado);
    $usuario = $pesquisa["email"];
    $nome = $pesquisa["nome"];
    $status=$pesquisa["status"];
if ($status==1) {
  


    ?>
                
        <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Bem vindo(a): <b><?php echo $nome?></b><span class="caret"></span></a>
          <ul class="dropdown-menu">
                    
                  <?php
                    
                  ?>
              
              <li><a href="#" data-toggle="modal" data-target="#modal-update">Minha conta</a></li>
               <li> <a href="logout.php">Sair </a></li> 
          </ul>
        </li>
          
       </ul>



<!-- aqui vai toda pagina de adm !-->

                    <ul class="nav nav-tabs txt-Quartzo center-block ajuste-mobile" role="tablist">
                        <li role="presentation" class="active" id="tabProd"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="txt-white">Produtos</a></li>
                        <li id="tabServ" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" class="txt-white">Tipos</a></li>
                        <li id="tabServ" role="presentation"><a href="#clientes" aria-controls="profile" role="tab" data-toggle="tab" class="txt-white">Clientes</a></li>
                        
                    </ul>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="panel panel-success center-block txt-darkred ajuste-mobile">

                                <div class="panel-body">
                                    <hr class="hr-dark" />

                                  <ul class="nav nav-tabs txt-Quartzo center-block ajuste-mobile" role="tablist">
                        <li role="presentation" class="active" id="tabProd"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab" class="txt-white">Cadastrar Produtos</a></li>
                        <li id="tabServ" role="presentation"><a href="#profile2" aria-controls="profile" role="tab" data-toggle="tab" class="txt-white">Consultar Produtos</a></li>
                    </ul>

<div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="home1">
                            <div class="panel panel-success center-block txt-darkred ajuste-mobile">

                                <div class="panel-body">
                                    <hr class="hr-dark" />

<form method="POST" class="form-cad-prod" action="cadastro-itens.php">
<input type="text" placeholder="nome" name="nome"><br>
<input type="text" placeholder="descrição" name="desc"><br>
<input type="text" placeholder="tamanho" name="tam"><br>


<select size="1" name="tipo">

<option  value="Selecione...">Selecione...</option>
<? 
$query = mysql_query("SELECT * FROM `tipo");
while ($row = mysql_fetch_array($query)) {
$titulo = $row['1'];
$id = $row['0'];
echo "<option value='".$id."'>".$titulo."<option>";}
?>
</select><br>


<input type="number" placeholder="valor" name="valor"><br>
<input type="number" placeholder="quantidade" name="qtd"><br>

<input type="number" placeholder="peso" name="peso"><br>
<input type="number" placeholder="comprimento" name="comprimento"><br>
<input type="number" placeholder="altura" name="altura"><br>
<input type="number" placeholder="largura" name="largura"><br>
<input type="number" placeholder="diametro" name="diametro"><br>

<input type="file" name="foto" name="foto">

                                </div>
                                <div class="panel-footer text-left">
                                <input type="submit" value="Cadastrar" name="Cadastrar-produto"></form>
                                </div>
                            </div>
                        </div>



                        <div role="tabpanel" class="tab-pane " id="profile2">
                            <div class="panel panel-success center-block txt-darkred ajuste-mobile">

                                <div class="panel-body">
                                    <hr class="hr-dark" />
                                    <div style="width:1000px; ">
<? 
$query = mysql_query("SELECT * FROM `produto");
while ($row = mysql_fetch_array($query)) {
$id = $row['0'];
$nome = $row['1'];
$desc = $row['2'];
$desc = $row['3'];

$tipo = $row['4'];
/*pesquisa titpo */
$cmdsql = "select * from tipo where idtipo='{$tipo}'";
$resultado = mysqli_query($conexao, $cmdsql);
$pesquisa = mysqli_fetch_assoc($resultado);
$ti = $pesquisa["tipo"];

$valor = $row['5'];
$qtd = $row['6'];
$foto = $row['7'];
echo "<div class='produto'>
        <input type='text' style='display:none;' name='id' value='".$id."'>
        <img width='100' src='data:image/jpeg;base64,".base64_encode($foto) ."'>
        <div> <b>Nome do produto: </b>".$nome." - <b>Tipo: </b>".$ti."</div>
        <div><b>Valor: </b>".$valor." - <b>Qunatidade: </b>".$qtd."</div>
        <div><b>Dscrição: </b>".$desc."</div>
      </div><br>";

}
?>

</div>



                                </div>
                                <div class="panel-footer text-left">
                                </div>
                            </div>
                        </div>
                            

                        </div>

                    </div>



                                </div>
                                <div class="panel-footer text-left">
                                </div>
                            </div>
                        


                        <div role="tabpanel" class="tab-pane" id="profile">
                         <div class="panel panel-success center-block txt-darkred ajuste-mobile">
                        <div class="panel-body">
                            <hr class="hr-dark" />
                              
                            <form method="POST" class="form-update" action="cad-itens.php" id="form-update">
                                <input type="text" name="tipo" placeholder="Digite o nome do tipo">
                                <input type="submit" value="Cadastrar tipo" name="Cadastrar-tipo">
                            </form><br><br>

                            <?
                              $cmd=mysql_query("select*from tipo");
                              while ($row=mysql_fetch_array($cmd)) {
                                $idtipo=$row[0];
                                $tipo=$row[1];
                                echo $tipo."
                                <form method='POST' class='form-update' action='cad-itens.php' id='form-update'>
                                 <input type='text' style='display:none;' name='idtipo' value='".$idtipo."'>
                                <input type='submit' value='Excluir' name='excluir-tipo'>
                            </form>
                                <br>";
                              }
                            ?>


                            </div>
                            </div>
                            <div class="panel-footer text-left">
                                    
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="clientes">
                         <div class="panel panel-success center-block txt-darkred ajuste-mobile">
                        <div class="panel-body">
                            <hr class="hr-dark" />
                            

                            <? 
$query = mysql_query("SELECT * FROM `usuario");
while ($row = mysql_fetch_array($query)) {
$id = $row['0'];
$nome = $row['1'];
$sobre = $row['2'];
$cpf = $row['3'];
$rg = $row['4'];
$data = $row['5'];
$estado = $row['6'];
$sexo = $row['7'];
$tel = $row['8'];
$cel = $row['9'];
$cep = $row['10'];
$n = $row['11'];
$end = $row['12'];
$comp = $row['13'];
$bairro = $row['14'];
$uf = $row['15'];
$cidade = $row['16'];
$email = $row['17'];
$senha = $row['18'];

echo "<div style='background:; width:350px;float:left'><hr size='200px' width='1' style='float:' color='black'>
      <b>Nome: </b>".$nome." ".$sobre."<br>
      <b>CPF: </b>".$cpf."<br>
      <b>RG: </b>".$rg."<br>
      <b>Data: </b>".$data."<br>
      <b>E. civil: </b>".$estado."<br>
      <b>Sexo: </b>".$sexo."<br>
      <b>TEL: </b>".$tel."<br>
      <b>CEL: </b>".$cel."<br>
      <b>CEP: </b>".$cep."<br>
      <b>Nº: </b>".$n."<br>
      <b>Endereço: </b>".$end."<br>
      <b>Comple.: </b>".$comp."<br>
      <b>Bairro: </b>".$bairro."<br>
      <b>UF: </b>".$uf."<br>
      <b>Cidade: </b>".$cidade."<br>
      <b>Email: </b>".$email."<br>
      <hr width='300' style='float:left' color='black'><BR><BR>
      </div>";

}
?>


                            </div>
                            </div>
                            <div class="panel-footer text-left">
                                    
                                </div>
                            </div>

                        </div>

                


         <?php
}else{echo "sai";}
          }
                
          else{
          ?>

           <form method="POST" class="form-loginn" action="login-adm.php">
  Login <input type="text" name="a-user">
  Senha <input type="password" name="a-pass">
  <input type="submit" name="login" value="Entrar" class="btn btn-primary navbar-btn">
</form>
          
          <?php
          
          }
          
          ?>


          


          <script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('#form-cadastro').submit(function(){
      var dados = jQuery( this ).serialize();

      jQuery.ajax({
        type: "POST",
        url: "cadastro.php",
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



<?php
                            if (usuarioQueEstaLogado()) {
                                $email = usuarioLogado();

                                $cmdsql = "select * from usuario where email='{$email}'";
                                $resultado = mysqli_query($conexao, $cmdsql);
                                $pesquisa = mysqli_fetch_assoc($resultado);
                                $id = $pesquisa["idusuario"];
                                $usuario = $pesquisa["email"];}
                                ?>




  <div class="modal fade" id="modal-update">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-header">
        Cadastro
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form method="POST" class="form-update" action="update.php" id="form-update">
        <input type="hiden" value="<?php echo $id;?>" name="id" style="display:none;">
  Novo login: <input type="text" name="up-user"><br><br>
  Nova senha: <input type="password" name="up-pass"><br><br>
  Confirme a senha: <input type="password" name="up-c-pass"><br><br>
   <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="update">Atualizar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div></form>

       </div>     

                </div>
              </div>
          </div>




<!-- <script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('#form-update').submit(function(){
      var dados = jQuery( this ).serialize();

      jQuery.ajax({
        type: "POST",
        url: "update.php",
        data: dados,
        success: function( data )
        {
          alert( data );
        window.location.replace("index.php");
        }
      });
      
      return false;
    });
  });
  </script>-->


 </div>
</body>
</html>