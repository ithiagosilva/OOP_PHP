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
        
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        
       $v1 = new Visitante();
       $v1->setNome('Juvenal');
       $v1->setIdade(20);

       print_r($v1);

        $a1 = new Aluno();
        $a1->setNome('Abel');
        $a1->setCurso('Informática');
        
        print_r($a1);
        $a1->pagarMensalidade();
        
        echo '<br>-------------------------------------<br>';
        $b1 = new Bolsista(); 
        $b1->setNome('Jurandir');
        $b1->setCurso('Desenvolvimento de sistemas');
        
        print_r($b1);
        $b1->pagarMensalidade();
        $b1->renovarBolsa();
        echo '<br>-------------------------------------<br>';
    ?>
    </pre>
</body>

</html>