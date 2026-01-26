<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    require_once 'Pessoa.php';
    require_once 'Livro.php';
        
    $p[0] = new Pessoa('Pedro', 22, "M");
    $p[1] = new Pessoa('Maria', 31, "F");

    $l[0] = new Livro("PHP básico", "José Silva", 300, $p[0]);
    $l[1] = new Livro("POO Com PHP", "Maria Souza", 200, $p[1]);
    $l[2] = new Livro("Lógica de Programação", "Fátima Souza", 200, $p[1]);

    $l[0]->folhear(90);
    $l[0]->voltarPag();
    $l[0]->voltarPag();
    $l[0]->voltarPag();
    $l[0]->detalhes();

    ?>
</body>

</html>