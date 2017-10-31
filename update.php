
                            <?php

include ('config.php');
include ('DAO/UserDAO.php');
include ('helpers.php');

                            if ($_POST) {
                                $idusuario=$_POST['id'];
                                $email = $_POST['up-user'];
                                $senha = $_POST['up-pass'];
                                $confirmarSenha = $_POST['up-c-pass'];
                                $nivel = 0;
 
                                
                                $linha = mysqli_num_rows($consulta);
                                //2 passo = executa o metodo cadastra

                                if($linha == 0){
        
                                    if ($email == "" || $senha == "" || $confirmarSenha == "") {
                                    echo "Preencha todos os campos!";
                                  }else {
                                    if ($senha !== $confirmarSenha) {
                                        echo "As senhas não coincidem!";
                                    } else {
                                        alterarEmail($conexao, $email, $senha, $idusuario);
                                        efetuarLogin($conexao, $email, $senha);
                                        
                                        logaUsuario($email);
                                        
                                         echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=f-login.php">';
                                         
                                    
                                        echo "Atualizado com sucesso!";
                                        
                                    }
                                  }
                                  
                                 }if($linha==1 && $row!=$email){
                                    echo "Login já cadastrado. Tente outro!";
                                 }
                 
                            }
                            ?>