<?php
/**
 * 1 / Créer la fonction getDescSum() qui prend un entier positif en entrée et 
 *  l'additionne à sa suite dégressif pour renvoyer le total. 
 * 
 * Exemple : 
 * getDescSum(5) 
 * -> 5 + 4 + 3 + 2 + 1 = 15
 * return 15
 * 
 * getDescSum(3) 
 * -> 3 + 2 + 1 = 6
 * return 6
 * 
 * getDescSum(8) 
 * -> 8 + 7 + 6 + 5 + 4 + 3 + 2 + 1 = 36
 * return 36
 * 
 * 
 * 
 * 2/ Faire une fonction identique mais cette fois SANS boucle :-)
 */

 function getDescSum(int $start) : int 
 {
    $total = 0;
    for($i = $start; $i > 0; $i--) {
        $total += $i;
    }

    return $total;
 }

 echo 'Total pour 5 : ' . getDescSum(5) . PHP_EOL;
 echo 'Total pour 3 : ' . getDescSum(3) . PHP_EOL;
 echo 'Total pour 8 : ' . getDescSum(8) . PHP_EOL;


 function getDescSumRecursive(int $start) : int 
 {
    if($start == 1) return 1;
    return $start + getDescSumRecursive($start - 1);
 }

 echo 'Total pour 5 : ' . getDescSumRecursive(5) . PHP_EOL;
 echo 'Total pour 3 : ' . getDescSumRecursive(3) . PHP_EOL;
 echo 'Total pour 8 : ' . getDescSumRecursive(8) . PHP_EOL;
