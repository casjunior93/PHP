<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Validando dados
if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'O nome é obrigatório.';
    echo 'O nome é obrigatório.';
    header('location:index.php');
    return;
}
else if (strlen($nome) < 3) { //quantidade de caracteres
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres.';
    echo 'O nome deve conter mais de 3 caracteres.';
    header('location:index.php');
    return;
}
else if (strlen($nome) > 30) {
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter menos de 30 caracteres.';
    echo 'O nome deve conter menos de 30 caracteres.';
    header('location:index.php');
    return;
}
else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'A idade deve ser um número inteiro.';
    echo 'A idade deve ser um número inteiro.';
    header('location:index.php');
    return;
}
else if ($idade < 6) {
    $_SESSION['mensagem-de-erro'] = 'A idade deve ser um número maior que 0.';
    echo 'A idade deve ser um número maior que 6.';
    header('location:index.php');
    return;
}

if ($idade >= 6 && $idade <= 12) {
    $_SESSION['mensagem-de-sucesso'] = $nome . ' está na Categoria Infantil';
    header('location:index.php');
    return;
} else if ($idade >= 13 && $idade < 18) {
    $_SESSION['mensagem-de-sucesso'] = $nome . ' está na Categoria Adolescente';
    header('location:index.php');
    return;
} else if ($idade >= 18 && $idade < 65) {
    $_SESSION['mensagem-de-sucesso'] = $nome . ' está na Categoria Adulto';
    header('location:index.php');
    return;
} else if ($idade >= 65) {
    $_SESSION['mensagem-de-sucesso'] = $nome . ' está na Categoria Idoso';
    header('location:index.php');
    return;
} else {
    $_SESSION['mensagem-de-sucesso'] = 'Dado incorreto';
    header('location:index.php');
    return;
}
