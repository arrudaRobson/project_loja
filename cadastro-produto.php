                            <?php

include ('config.php');
include ('DAO/AdmDAO.php');
include ('helpers.php');

                            if ($_POST) {
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
                            ?>