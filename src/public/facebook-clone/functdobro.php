<!DOCTYPE html>
<head>
    <title>php teste</title>
</head>
<body>
    <?php
    function dobro(&$numero)
    {
        $numero = $numero * 2;
    }
    $a = 4;
    dobro($a);
    echo $a;
    ?>
</body>
</html>