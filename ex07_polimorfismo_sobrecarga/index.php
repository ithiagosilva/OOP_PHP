<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php 
        require_once 'Mamifero.php';
        require_once 'Cachorro.php';
        require_once "Lobo.php";
 
        
        $m = new Mamifero();
        $c = new Cachorro();
        $l = new Lobo();
        $m->emitirSom();
        $c->emitirSom();
        $l->emitirSom();

    ?>
    </pre>
</body>

</html>