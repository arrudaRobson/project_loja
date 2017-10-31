
                            <?php

include ('config.php');
include ('DAO/UserDAO.php');
include ('helpers.php');

                            if ($_POST) {
                                $nome = $_POST['nome'];
                                $s = $_POST['sobrenome'];
                                $cpf = $_POST['cpf'];
                                $rg = $_POST['rg'];
                                $data = $_POST['data'];
                                $estado = $_POST['estado'];
                                $sexo = $_POST['sexo'];
                                $tel = $_POST['tel'];
                                $cel = $_POST['cel'];

                                $cep = $_POST['cep'];
                                $n = $_POST['n'];
                                $end = $_POST['end'];
                                $comp = $_POST['comp'];
                                $bairro = $_POST['bairro'];
                                $uf = $_POST['uf'];
                                $cidade = $_POST['cidade'];

                                $email = $_POST['email'];
                                $senha = $_POST['senha'];
                                $confirmarSenha = $_POST['c-senha'];
                                $status=0;
                                $nivel = 0;
                                $idusuario=$_POST['id'];
 
                                $consulta = mysqli_query($conexao, "SELECT * FROM usuario WHERE cpf='$cpf'");
                                $linha = mysqli_num_rows($consulta);
                                //2 passo = executa o metodo cadastra

                                if($linha == 0){
        
                                    if ($nome == "" || $s == "" || $cpf == "" || $rg == "" || $data == "" || $estado == "" || $sexo == "" || $tel == "" || $cel == "" || $cep == "" || $n == "" || $end == "" || $comp == "" || $bairro == "" || $uf == "" || $cidade == "" || $email == "" || $senha == "" || $confirmarSenha == "") {
                                    echo "Preencha todos os campos!";
                                  }else {
                                    if ($senha !== $confirmarSenha) {
                                        echo "As senhas não coincidem!";
                                    } else {date_default_timezone_set('America/Sao_Paulo');
                                            alterarUsuario($conexao, $nome, $s, $cpf, $rg, $data, $estado, $sexo, $tel, $cel, $cep, $n, $end, $comp, $bairro, $uf, $cidade, $email, $senha, $status, $idusuario);
                                            echo "<script>alert('Cadastrado com sucesso!');</script>";  
                                        echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=f-login.php">';


                                        
                                    }
                                  }
                                  
                                 }else{
                                    echo "Login já cadastrado. Tente outro!";
                                 }
                 
                            }
                            ?>