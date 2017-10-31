<?php

session_start();
//Metodo que loga o usuario
function logaUsuario($email){
   $_SESSION["usuario_logado"] = $email;
}

//function Usuario($usuario){
//   $_SESSION["usuario"] = $usuario;     
//}

//Verifica se o usuario esta logado
function verificaUsuario(){
     if(!usuarioQueEstaLogado()) {
  	  echo "<script>alert('Usuário não encontrado');</script>";
 	  die();
     }
}

//Retorna o usuario que esta  Logado
function usuarioQueEstaLogado() {
  return isset($_SESSION["usuario_logado"]);}


//Usuario Logado
function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}
  
function logout() {
	session_destroy();
	header("Location: index.php");
}

                                