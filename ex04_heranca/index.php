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
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';

        $p1 = new Pessoa('Pedro', 18, "M");
    
        
        $p2 = new Aluno("José", 28, 'M');
        $p2->setMatricula(10290);
        $p2->cancelarMatricula();
        $p2->setCurso('Informática');
        
        $p3 = new Professor('Thiago', 29, 'M');
        $p3->setSalario(2500);
        $p3->receberAumento(1000);
        
        $p4 = new Funcionario("Maria", 22, "F");
        $p4->setTrabalhando(false);
        $p4->mudarTrabalho();

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);


    ?>
    </pre>
</body>

</html>