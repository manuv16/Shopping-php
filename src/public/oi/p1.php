<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cupons['NIVER10'] = 10;
    $cupons['PROMO15'] = 15;
    $desconto = 0;
    if($_GET['cupom']!=''){
        $desconto = $cupons[$_GET['cupom']];
    }
    $preco = 200;
    ?>
    <h1><a href='index.php'></a> Shopping virtual </h1>
    <img src="https://img.freepik.com/fotos-premium/vista-lateral-de-uma-mulher-sorridente-segurando-sacolas-de-compras_23-2148684506.jpg?w=2000" width="700">
    <h3>Preço: R$ <?php echo(($preco *(100 - $desconto)/100)); ?>
</body>
</html>