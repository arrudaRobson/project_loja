                            <?php

include ('config.php');
include ('DAO/UserDAO.php');
include ('helpers.php');

                            if ($_POST) {
                                $idpr = $_POST['id'];
                                $idu = $_POST['idu'];
                                

     excluirCar($conexao, $idpr, $idu);
                                        echo "<script>alert('Excluido com sucesso!');</script>";
                                        echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=carrinho.php">';
                           
       
                                        
                                   
                              
                          }
                            ?>