<?php

//Função ou método Cadastrar

function cadCar($conexao, $id_idusuario, $id_idproduto, $total, $data) {

    //Criar comando SQL que cadastra
    $cmdsql = "insert into carrinho(id_idusuario,id_idproduto, total, data)"
            . " values ('{$id_idusuario}','{$id_idproduto}','{$total}','{$data}')";


//Executa o comando sql

    return mysqli_query($conexao, $cmdsql);
}


function excluirCar($conexao, $idpr, $idu) {

    //1 passo - montar o comando SQL
    $sql = "delete from carrinho where id_idproduto = $idpr and id_idusuario=$idu";

    //2 passo - executar o comando                    
    return mysqli_query($conexao, $sql);
}


function cadastrarCliente($conexao, $nome, $email, $senha, $status) {

    //Criar comando SQL que cadastra
    $cmdsql = "insert into usuario (nome, email, senha, status)"
            . " values ('{$nome}','{$email}','{$senha}','{$status}')";


//Executa o comando sql

    return mysqli_query($conexao, $cmdsql);
}




function efetuarLogin($conexao, $email, $senha) {

    $cmdsql = "select * from usuario where email='{$email}'"
            . "and senha='{$senha}'";

    $resultado = mysqli_query($conexao, $cmdsql);

    $usuario = mysqli_fetch_assoc($resultado);

    return $usuario;
}

function alterarUsuario($conexao, $nome, $s, $cpf, $rg, $data, $estado, $sexo, $tel, $cel, $cep, $n, $end, $comp, $bairro, $uf, $cidade, $email, $senha, $status, $idusuario) {

    //1 passo - montar o comando SQL
    $sql = "update usuario set nome='$nome', s='$s', cpf='$cpf', rg='$rg', data='$data', estado='$estado', sexo='$sexo', tel='$tel', cep='$cep', n='$n', end='$end', comp='$comp', bairro='$bairro', uf='$uf', cidade='$cidade', email='$email',"
            . "senha = '$senha', status='$status' where idusuario = $idusuario";

    //2 passo - executar o comando                    
    return mysqli_query($conexao, $sql);
}


function alterarEmail($conexao, $email, $senha, $idusuario) {

    //1 passo - montar o comando SQL
    $sql = "update usuario set email='$email',"
            . "senha = '$senha' where idusuario = $idusuario";

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
