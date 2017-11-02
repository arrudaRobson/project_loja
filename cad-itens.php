                            <?php

include ('config.php');
include ('DAO/AdmDAO.php');
include ('helpers.php');

                            if ($_POST) {


                                if(isset($_POST["Cadastrar-produto"])){

                                $nome = $_POST['nome'];
                                $desc = $_POST['desc'];
                                $tipo = $_POST['tipo'];
                                $tam = $_POST['tam'];
                                $valor = $_POST['valor'];
                                $qtd = $_POST['qtd'];
                                $foto = $_POST['foto'];
                            
                               
        if ($tipo!="Selecione...") {
      
      
                                    if ($nome == "" || $desc == "" || $tam=="" || $tipo=="" || $valor == "" || $qtd=="" || $foto=="") {
                                    echo "Preencha todos os campos!";
                                  }
                                    else {
                                        cadastrarProduto($conexao, $nome, $desc, $tam, $tipo, $valor, $qtd, $foto);
                                        echo "<script>alert('Cadastrado com sucesso!');</script>";
                                        echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=adm.php">';
                                        
                                    }
                                  
                              }else{
                                echo "<script>alert('Selecione um tipo!');</script>";
                              }
}
if(isset($_POST["Cadastrar-tipo"])){





                              $tipo = $_POST['tipo'];
                                

                               

      
      
                                    if ($tipo == "") {
                                    echo "Preencha todos os campos!";
                                  }
                                    else {
                                        cadTipo($conexao, $tipo);
                                        echo "<script>alert('Cadastrado com sucesso!');</script>";
                                        echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=adm.php">';
                                        
                                    }
                          }

if(isset($_POST["excluir-tipo"])){


                                    $idtipo=$_POST['idtipo'];
                                        exTipo($conexao, $idtipo);
                                        echo "<script>alert('Excluido com sucesso!');</script>";
                                        echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=adm.php">';
                                        
                                    
                          }






                      }
                            ?>