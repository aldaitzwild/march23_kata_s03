<?php
/**
 * 1/ Afficher une page web, qui présente la table de multiplication 
 * pour le chiffre 1.
 * 
 * Attendu : 
 * 
 * 1 x 1 = 1
 * 1 x 2 = 2
 * 1 x 3 = 3
 * 1 x 4 = 4
 * ...
 * ...
 * 
 * 2/ Ajouter un lien sur le résultat qui renverra sur la page présentant la 
 * table de multiplication du chiffre choisi.
 * 
 * Attendu : 
 * ...
 * ...
 * 1 x 5 = 5 <--- Je clique sur 5
 * 
 * 
 * ---> J'arrive sur la page 
 * 
 * 5 x 1 = 5
 * 5 x 2 = 10
 * 5 x 3 = 15
 * 5 x 4 = 20
 * ...
 * ...
 */

$number = $_GET['number'] ?? 1;

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

    <ul>
        <?php for($i = 1; $i < 11; $i++) { ?>
            <li><?= $number ?> x <?= $i ?> = <a href="thursday.php?number=<?= $number * $i ?>"><?= $number * $i ?></a></li>
        <?php } ?>
    </ul>
    
 </body>
 </html>