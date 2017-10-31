                            <?php

include ('config.php');
include ('DAO/AdmDAO.php');
include ('helpers.php');

                            if ($_POST) {
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
                            ?>