<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Validando dados
if (empty($nome)) {
    echo 'O nome é obrigatório.';
    return;
}
if (strlen($nome) < 3) { //quantidade de caracteres
    echo 'O nome deve conter mais de 3 caracteres.';
    return;
}
if (strlen($nome) > 30) {
    echo 'O nome deve conter menos de 30 caracteres.';
    return;
}
if (!is_numeric($idade)) {
    echo 'A idade deve ser um número inteiro.';
    return;
}
if ($idade < 0) {
    echo 'A idade deve ser um número maior que 0.';
    return;
}

if ($idade >= 6 && $idade <= 12) {
    echo $nome . ' está na Categoria Infantil';
} else if ($idade >= 13 && $idade < 18) {
    echo $nome . ' está na Categoria Adolescente';
} else if ($idade >= 18 && $idade < 65) {
    echo $nome . ' está na Categoria Adulto';
} else if ($idade >= 65) {
    echo $nome . ' está na Categoria Idoso';
} else {
    echo 'Dado incorreto';
}
