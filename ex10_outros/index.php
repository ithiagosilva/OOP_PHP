 <?php 
    require_once('Humanos.php');
    require_once('dados.php');

    $humanos = new Humanos();
    foreach($dados as $dado) {
        $humanos->definir($dado[0], $dado[1]);
    }
    
    $masculinos = $humanos->getMasculinos();
    $femininos = $humanos->getFemininos();
    $desconhecidos = $humanos->getDesconhecidos();
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
     <h1>MASCULINOS</h1>
     <ul>
         <?php foreach ($masculinos as $masculino) : ?>
         <li><?php echo $masculino[1] ?></li>
         <?php endforeach; ?>
     </ul>

     <h1>FEMININOS</h1>
     <ul>
         <?php foreach ($femininos as $feminino) : ?>
         <li><?php echo $feminino[1] ?></li>
         <?php endforeach; ?>
     </ul>

     <h1>DESCONHECIDOS</h1>
     <ul>
         <?php foreach ($desconhecidos as $desconhecido) : ?>
         <li><?php echo $desconhecido[1] ?></li>
         <?php endforeach; ?>
     </ul>

 </body>

 </html>