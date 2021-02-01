<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
const NOMBRES1 = 12;
const NOMBRES2 = 2;

echo "le resultat de mes 2 constante est : ".NOMBRES1 * NOMBRES2."<br>";

const MON_TEXTE = "C'est cool PHP";

echo "le calcul de mes constante donne :".(NOMBRES1 + NOMBRES2) * strlen(MON_TEXTE)."<br>";


/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.

foreach($_SERVER as $parm => $value){
    echo "$parm = '$value'\n"."<br>";
}
