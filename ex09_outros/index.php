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
        require_once 'Numero.php';

        $n[0] = new Numero(5);
        print_r($n[0]->getNumero());
        echo '<br>';
        print_r($n[0]->parImpar());
         echo '<br>';
        print_r($n[0]->raizQuad());
         echo '<br>';
        print_r($n[0]->tabuada());
        echo "=============================";

        $n[1] = new Numero(7);
         print_r($n[1]->getNumero());
        echo '<br>';
        print_r($n[1]->parImpar());
         echo '<br>';
        print_r($n[1]->raizQuad());
         echo '<br>';
        print_r($n[1]->tabuada());
        echo "=============================";

        $n[2] = new Numero(16);
          print_r($n[2]->getNumero());
        echo '<br>';
        print_r($n[2]->parImpar());
         echo '<br>';
        print_r($n[2]->raizQuad());
         echo '<br>';
        print_r($n[2]->tabuada());
        echo "============================="; 

        $n[3] = new Numero(123);
          print_r($n[3]->getNumero());
        echo '<br>';
        print_r($n[3]->parImpar());
         echo '<br>';
        print_r($n[3]->raizQuad());
         echo '<br>';
        print_r($n[3]->tabuada());
        echo "=============================";


    ?>
    </pre>
</body>

</html>