<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    define("NOME_DA_LOJA", "Mi Loja");
    $usuario_cadastrado = "admin";
    $senha_correta = "1234";
    $tentativa_usuario = "admin";
    $tentativa_senha = "1234";
    $acesso_concedido = ($tentativa_usuario === $usuario_cadastrado) && ($tentativa_senha === $senha_correta);
    var_dump($acesso_concedido);

    ?>
</body>

</html>