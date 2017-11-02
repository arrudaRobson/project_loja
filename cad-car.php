                            <?php

include ('config.php');
include ('DAO/UserDAO.php');
include ('helpers.php');

                            if ($_POST) {
                                $usu = $_POST['idu'];
                                $idproduto=$_POST['idp'];
                                $valor = $_POST['valor']; 
                                $qtd = $_POST['qtd'];                               

                      if (usuarioQueEstaLogado()) {
                 
          $idprod = mysqli_query($conexao, "SELECT * FROM produto WHERE idproduto='$idproduto'");

          $pesquisa = mysqli_fetch_assoc($idprod);
    $id_idproduto = $pesquisa["idproduto"];

          $iduser = mysqli_query($conexao, "SELECT * FROM usuario WHERE idusuario='$usu'");

          $pesquisa2 = mysqli_fetch_assoc($iduser);
    $id_idusuario = $pesquisa2["idusuario"];

          $total=$valor;
          $data="2017/01/25";
if ($qtd>1) {


             cadCar($conexao, $id_idusuario, $id_idproduto, $total, $data);
             echo "<script>alert('Cadastrado com sucesso!');</script>";
           
            echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=loja.php">';}
}else{
  echo "<script>alert('Sem estoque!');</script>";
            echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=loja.php">';
}

          } else{
            echo "<script>alert('Faça o login primeiro!');</script>";
            echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=loja.php">';
           
                          }
                            ?>  