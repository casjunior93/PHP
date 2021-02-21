<?php
//Validando dados
//declare('strict_types=1');

function valida_nome(string $nome) : bool
{
    if (empty($nome)) {
        $_SESSION['mensagem-de-erro'] = 'O nome é obrigatório.';
        echo 'O nome é obrigatório.';
        header('location:index.php');
        return false;
    } else if (strlen($nome) < 3) { //quantidade de caracteres
        $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres.';
        echo 'O nome deve conter mais de 3 caracteres.';
        header('location:index.php');
        return false;
    } else if (strlen($nome) > 30) {
        $_SESSION['mensagem-de-erro'] = 'O nome deve conter menos de 30 caracteres.';
        echo 'O nome deve conter menos de 30 caracteres.';
        header('location:index.php');
        return false;
    }
    return true;
}

function valida_idade(string $idade) : bool
{
    if (!is_numeric($idade)) {
        $_SESSION['mensagem-de-erro'] = 'A idade deve ser um número inteiro.';
        echo 'A idade deve ser um número inteiro.';
        header('location:index.php');
        return false;
    } else if ($idade < 6) {
        $_SESSION['mensagem-de-erro'] = 'A idade deve ser um número maior que 0.';
        echo 'A idade deve ser um número maior que 6.';
        header('location:index.php');
        return false;
    }
    return true;
}
