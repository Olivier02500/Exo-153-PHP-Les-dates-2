<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
echo date("d/m/Y");

echo "<br><br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
echo date("d-m-Y");

echo "<br><br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
echo date("l-M-y");

echo "<br><br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
echo time() . "<br>";
echo mktime(15, 00, 0, 8, 2, 2016);
echo "<br><br>";


##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
echo floor((time() - mktime(0, 0, 0, 5, 16, 2016)) /86400);

echo "<br><br>";



##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
$dateFevrier = date('t', mktime(0,0,0,2,1, 2016));
echo $dateFevrier;

echo "<br><br>";



##Exercice 7 Afficher la date du jour + 20 jours.
$date7 = date('Y-m-d', strtotime('+20 day'));
echo $date7 ;
echo "<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$date8 = date('Y-m-d',strtotime('-22 day'));
echo $date8 ;
echo "<br><br>";


## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )


