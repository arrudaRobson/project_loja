    <?php
include ('config.php');
include ('DAO/UserDAO.php');
include ('helpers.php');

                                        if (isset($_POST['pass']) && isset($_POST['user'])) {
                                            $email = $_POST['user'];
                                            $senha = $_POST['pass'];


                                            if ($email == "" || $senha == "") {
                                    echo "<script>alert('Preencha todos os campos!');</script>";
                                    header("location:index.php");
                                } else {
                                    if (efetuarLogin($conexao, $email, $senha)){
                                        
                                        logaUsuario($email);
                                        
                                         echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=index.php">';
                                         header("location:index.php");
                                         
                                    } else {
                                        echo "<script>alert('E-mail ou senha não coincidem');</script>";
                                        header("location:index.php");
                                    }
                                 }                                           
                             }
                                        ?>
