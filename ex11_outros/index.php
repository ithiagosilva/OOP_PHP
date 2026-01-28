<?php 
    require_once('Automovel.php');
    require_once('Aviao.php');
    require_once('Barco.php');

    $veiculos = [];

    $file = fopen('dados.csv', 'r');

    while(!feof($file)) {
        $linha = fgetcsv($file);
        switch ($linha[0]) {
            case 'automovel':
                $veiculos[] = new Automovel($linha);
                break;
            case 'aviao': 
                $veiculos[] = new Aviao($linha);
                break;
            case 'barco':
                $veiculos[] = new Barco($linha);
                break;
            default:
                break;
        }
    }
    
    fclose($file);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Automóveis</h1>
    <ul>
        <?php foreach($veiculos as $veiculo) : ?>
            <?php if ($veiculo->getTipo() === 'automovel' && $veiculo->getAno() <= 2015) : ?>
                <li><?php echo $veiculo->apresentar();?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h1>Aviões</h1>
    <ul>
        <?php foreach($veiculos as $veiculo) : ?>
            <?php if ($veiculo->getTipo() === 'aviao' && $veiculo->getAno() <= 2015) : ?>
                <li><?php echo $veiculo->apresentar();?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h1>Barcos</h1>
    <ul>
        <?php foreach($veiculos as $veiculo) : ?>
            <?php if ($veiculo->getTipo() === 'barco' && $veiculo->getAno() <= 2015) : ?>
                <li><?php echo $veiculo->apresentar();?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>