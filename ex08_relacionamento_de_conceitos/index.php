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
        require_once 'Video.php'; 
        require_once 'Usuario.php';
        require_once 'Visualizacao.php';
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 10 de PHP");
        $v[2] = new Video("Aula 14 de CSS");
        
        print_r($v);

        $u[0] = new Usuario("Thiago", 29, "M", "mrT");

        print_r($u);

        $vis[0] = new Visualizacao($u[0], $v[2]);
        $vis[1] = new Visualizacao($u[0], $v[0]); 
        print_r($vis);
        
        ?>
    </pre>
</body>

</html>