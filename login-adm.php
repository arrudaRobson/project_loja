<?php
include ('config.php');
include ('DAO/AdmDAO.php');
include ('helpers.php');

                                        if (isset($_POST['a-pass']) && isset($_POST['a-user'])) {
                                            $email = $_POST['a-user'];
                                            $senha = $_POST['a-pass'];


                                            if ($email == "" || $senha == "") {
                                    echo "<script>alert('Preencha todos os campos!');</script>";
                                    header("location:adm.php");
                                } else {
                                   /*erro*/ if (efetuarLogin($conexao, $email, $senha)){
                                        
                                        logaUsuario($email);
                                        
                                         echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=adm.php">';
                                         header("location:adm.php");
                                         
                                    } else {
                                        echo "<script>alert('E-mail ou senha não coincidem');</script>";
                                        header("location:adm.php");
                                    }
                                 }                                           
                             }
                                        ?>
