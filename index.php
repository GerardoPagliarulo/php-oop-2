<?php
include_once __DIR__ . '/classes/Laptop.php'; 
include_once __DIR__ . '/classes/Tastiera.php';
include_once __DIR__ . '/classes/Televisore.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>php-oop-2</title>
</head>
<body>
    <main>
        <header>
            <h2>PRODOTTI</h2>
        </header>
        <div>
            <h3>LAPTOP</h3>
            <ul>
                <?php $laptop = new Laptop('Elettronica', 1000, 'Asus', 'Intel i5', 'Nvidia GTX950M', 'Windows home'); ?>
                <li>Categoria: <?php echo $laptop->categoria; ?></li>
                <li>Marca: <?php echo $laptop->marca; ?></li>
                <li>Processore: <?php echo $laptop->cpu; ?></li>
                <li>Scheda Grafica: <?php echo $laptop->scheda_video; ?></li>
                <li>Software: <?php echo $laptop->software; ?></li>
                <li>Prezzo: <?php echo "$laptop->prezzo €"; ?></li>
            </ul>
            <h3>TASTIERA</h3>
            <ul>
                <?php $tastiera = new Tastiera('Elettronica', 50, 10, 'ABS', 'Cherry Red', 'Metallo'); ?>
                <li>Categoria: <?php echo $tastiera->categoria; ?></li>
                <li>Materiale keycap: <?php echo $tastiera->materiale_keycap; ?></li>
                <li>Modello switch: <?php echo $tastiera->modello_switch; ?></li>
                <li>Materiale PCB: <?php echo $tastiera->materiale_pcb; ?></li>
                <li>Prezzo: <?php echo "$tastiera->prezzo €"; ?></li>
                <li>Prezzo scontato del <?php echo "10%: {$tastiera->prezzoScontato()} €"; ?></li>
            </ul>
            <h3>TELEVISORE</h3>
            <ul>
                <?php $televisore = new Televisore('Elettronica', 500, 20, 'Full HD', '43'); ?>
                <li>Categoria: <?php echo $televisore->categoria; ?></li>
                <li>Risoluzione: <?php echo $televisore->risoluzione; ?></li>
                <li>Pollici: <?php echo $televisore->pollici . '"'; ?></li>
                <li>Prezzo: <?php echo "$televisore->prezzo €"; ?></li>
                <li>Prezzo scontato del <?php echo "10% - Bonus50: {$televisore->prezzoScontato()} €"; ?></li>
            </ul>
        </div>
    </main>
</body>
</html>