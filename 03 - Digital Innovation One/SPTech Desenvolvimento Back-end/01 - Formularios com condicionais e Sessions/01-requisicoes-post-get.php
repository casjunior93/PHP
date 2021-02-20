<?php
// Crie um formulario para que o usuario possa através de uma página da web preencher o nome e a idade dos competidores. Esses dados deverão ser utilizados para exibir em qual categoria o competidor se encaixa, Infantil, Adolescente ou Adulto.?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="script.php" method="post">
        <input type="text" id="nome" name="nome" placeholder="Nome">
        <input type="text" id="idade" name="idade" placeholder="idade">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>