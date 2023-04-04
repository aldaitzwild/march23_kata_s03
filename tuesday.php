<?php
/***
 * 1/ Créer une classe ATM (distributeur automatique), composé d'un attribut amount obligatoire
 * 
 * 2 / Dans cette classe créer deux fonctions :
 *    - withdraw() => qui prend un entier en entrée et renvoi un booléen : 
 * True si le montant demandé a bien été retiré du montant total, 
 * False s'il ne restait pas assez d'argent dans le distributeur
 * 
 *   - getAmount() => qui ne prend rien en entrée et renvoit le montant restant dans 
 * le distributeur.
 * 
 * 3 / Puis hors de la classe : instancier 3 ATM alimenté avec 1000 euros chacun. 
 * Retirer 280 sur le premier, 56 sur le deuxième et rien sur le troisième.
 * Puis afficher le montant des trois ATM
 */

 require 'ATM.php';

 $atm1 = new ATM(1000);
 $atm2 = new ATM(1000);
 $atm3 = new ATM(1000);

 echo "ATM 1 : " . $atm1->getAmount() . "€\n";
 echo "ATM 2 : " . $atm2->getAmount() . "€\n";
 echo "ATM 3 : " . $atm3->getAmount() . "€\n";

 $atm1->withdraw(280);
 $atm2->withdraw(56);

 echo "\n\nATM 1 : " . $atm1->getAmount() . "€\n";
 echo "ATM 2 : " . $atm2->getAmount() . "€\n";
 echo "ATM 3 : " . $atm3->getAmount() . "€\n";