<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador("Nice Guy", "EUA", 29, 1.60, 68.9, 11, 2, 1);
        $l[2] = new Lutador("Brabão", "Brasil", 32, 1.80, 90, 14, 2, 1);
        $l[3] = new Lutador("Big Boss", "Inglaterra", 40, 1.80, 80.9, 11, 2, 1);
        $l[4] = new Lutador("Lo topzera", "Espanha", 25, 1.75, 74.9, 19, 2, 1);
        $l[5] = new Lutador("Rey Misterio", "Mexico", 50, 1.65, 69.9, 12, 2, 1);
        
        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[1], $l[1]);
        $UEC01->lutar();
        $l[0]->status();

    ?>

</body>

</html>