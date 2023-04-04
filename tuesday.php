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