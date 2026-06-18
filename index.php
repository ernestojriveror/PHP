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
    $nomeDoProduto = "Camiseta Azul Bebé";
    $preçoProduto = 20.90;
    $quantProduto = 5;
    $valorCompra = ($preçoProduto * $quantProduto);
    echo ("Muito Obrigado pela compra na " . NOME_DA_LOJA . "! Você comprou: $nomeDoProduto " . ". Total: R$ $valorCompra");
    ?>
</body>

</html>