<?php

//Função ou método Cadastrar


function cadastrarProduto($conexao, $nome, $desc, $tam, $tipo, $valor, $qtd, $foto) {

    //Criar comando SQL que cadastra
    $cmdsql = "insert into produto(nome,descricao,tamanho,tipo,valor,qtd,foto)"
            . " values ('{$nome}','{$desc}','{$tam}','{$tipo}','{$valor}','{$qtd}','{$foto}')";


//Executa o comando sql

    return mysqli_query($conexao, $cmdsql);
}

function cadTipo($conexao, $tipo) {

    //Criar comando SQL que cadastra
    $cmdsql = "insert into tipo(tipo)"
            . " values ('{$tipo}')";

//Executa o comando sql

    return mysqli_query($conexao, $cmdsql);
}




function cadastrarCliente($conexao, $usuario, $senha) {

    //Criar comando SQL que cadastra
    $cmdsql = "insert into usuario(login,password)"
            . " values ('{$usuario}','{$senha}')";

//Executa o comando sql

    return mysqli_query($conexao, $cmdsql);
}

function efetuarLogin($conexao, $email, $senha) {

$cmdsql1 = "select * from usuario where email='{$email}'"
            . "and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $cmdsql1);
    $pesquisa = mysqli_fetch_assoc($resultado);
    $status=$pesquisa["status"];

    if ($status==1) {

        $cmdsql = "select * from usuario where email='{$email}'"
            . "and senha='{$senha}'";

    $resultado1 = mysqli_query($conexao, $cmdsql);

    $usuario = mysqli_fetch_assoc($resultado1);

    return $usuario;
    }else{echo "<script>alert('E-mail ou senha não coincidem');</script>";}
    
}

function alterarUsuario($conexao, $email, $senha, $idusuario) {

    //1 passo - montar o comando SQL
    $sql = "update usuario set login='$email',"
            . "password = '$senha' where idusuario = $idusuario";

    //2 passo - executar o comando                    
    return mysqli_query($conexao, $sql);
}

function excluirUsuario($conexao, $idCad) {

    //1 passo - montar o comando SQL
    $sql = "delete from Usuario where idCad = $idCad";

    //2 passo - executar o comando                    
    return mysqli_query($conexao, $sql);
}



function salvarImagens($conexao, $nome, $descricao, $tipo, $ataque, $defesa, $peso, $stats, $conteudo, $nome_imagem, $tamanho_imagem, $tipo_imagem) {

    $queryInsercao = "INSERT INTO itens (nome, descricao, tipo, attack, defense, weight, stats, image, nome_image, tamanho_image, tipo_image) "
            . "VALUES ('$nome', '$descricao', '$tipo', '$ataque', '$defesa', '$peso', '$stats', '$conteudo','$nome_imagem','$tamanho_imagem', '$tipo_imagem')";

    return mysqli_query($conexao, $queryInsercao) or die("Algo deu errado ao inserir o registro. Tente novamente.");
}

function cadastrarSetdeItend($conexao, $elmo, $luvas, $armadura, $pernas, $botas, $anel1, $colar, $idCad, $usuario) {

    //Criar comando SQL que cadastra
    $cmdsql = "insert into setitens(elmo, luvas, armadura, pernas, botas, anel, colar,idCad,usuario)"
            . " values ('{$elmo}','{$luvas}','{$armadura}', '{$pernas}','$botas','{$anel1}','{$colar}','{$idCad}', '{$usuario}')";

//Executa o comando sql
    return mysqli_query($conexao, $cmdsql);
}
