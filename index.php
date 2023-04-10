<?php

    $dados = array();
    $nome = "João";
    $idade = "16";
    $sexo = "Masculino";
    $estado = "Solteirão";
    $profissao = "Estudante";

    $dados [0][0] = "Nome";
    $dados [0][1] = "O meu nome é " . $nome;

    $dados [1][0] = "Idade";
    $dados [1][1] = " Eu tenho " . $idade . " anos ";

    $dados [2][0] = "Sexo";
    $dados [2][1] = " Eu sou do gênero " . $sexo;

    $dados [3][0] = "Estado Civil";
    $dados [3][1] = "Atualmente eu sou um " . $estado;

    $dados [4][0] = "Profissão";
    $dados [4][1] = "Eu sou um " . $profissao;

    foreach ($dados as $indice => $valor){
        foreach ($valor as $indice_1 => $valor_1){
            echo "[$indice] [$indice_1] $valor_1 <br/>";
        }
    }
?>