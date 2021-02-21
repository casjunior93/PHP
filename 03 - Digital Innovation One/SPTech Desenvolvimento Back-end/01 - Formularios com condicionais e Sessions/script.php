<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

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
