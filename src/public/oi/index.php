<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
</head>
<body>
    <?php 
        $cupons['NIVER10'] = 10;
        $cupons['PROMO15'] = 15;
        $desconto = 0;
        if($_GET)['cupom']!=''{
            $desconto = $cupons[$_GET['cupom']];
        }
        $preco = 200;
    ?>
    <h1><a href="shopping.php"><img src=""></a>Shopping Virtual</h1>
    <ul>
        <li><a href="p1.php <?php echo ($cupomAceito)?'?cupom=' . $cupom:''; ?>">Produto 1</a></li>
        <li><a href="p2.php <?php echo ($cupomAceito)?'?cupom=' . $cupom:''; ?>">Produto 2</a></li>
    </ul>
    <h3>Preço: R$ <?php echo (($preco * (100 - $desconto)/100)); ?>
</body>
</html>