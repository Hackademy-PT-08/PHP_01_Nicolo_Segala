<?php
/*traccia 1
Definisci 4 variabili:

    - Integer 
    - Float 
    - String 
    - Boolean

A schermo, fai comparire il tipo di dato delle varie variabili.
Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.*/
$intero = 4;
$float = 4.5;
$stringa =  "ciao";
$booleano = true;

var_dump($intero , $float , $stringa , $booleano);

/*traccia 2
Date le seguenti variabili:

    $1text = "Marco";
    $text2 = "hai";
    $text.3 = "sete";
    $text4 = "?";
    @text5 = "Perchè";
    $te-xt6 = '$text2';
    $text 7 = 'bevuto';
    $text8 = "tutto"

correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“
*/
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'Hai';
$text7 = 'bevuto';
$text8 = "tutto";
//$result1 = ($text1 . $text2 . $text3 . $text4 . $text5 . $text6 . $text7 . $text8);

$array=[ 'Marco ' , 'hai ' , 'sete ' , '? ' , 'Perchè ' , 'hai ' , 'bevuto ' , 'tutto '];

$result1= implode($array);

var_dump($result1);
/*Traccia 3:
Dati i seguenti array:

    $words1 = [
      'una',
      67,
      'vita',
      'colle',
      'mi',
      'rosso',
      [
        'oscura',
        'era',
        89,
        [
          'mezzo',
          [
            'cammin',
            'Nel',
            [
              'selva',
              'la',
              [
                'via',
                'una',
                true,
              ]
            ],
          ]
        ],
        'ritrovai',
        'per'
      ],
      'diritta'
    ];
    
    $words2 = [
      'elemento1' => 25.89,
      'elemento2' => 'nostra',
      'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
      ]
    ];

Crea una variabile di tipo Stringa chiamata $results che stampi a terminale il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita“.
HINT:
Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo più opportuno: nuove variabili, concatenamenti, ecc ecc.
*/

$word = ['"Nel ' , 'mezzo ' , 'del ' , 'cammin ' , 'di ' , 'nostra ' , 'vita ' , 'mi ' , 'ritrovai ' , 'per ' , 'una ' , 'selva ' , 'oscura ' , 'che ,' , 'la ' , 'diritta ' , 'via ' , 'era ' , 'smarrita"' ];

$result2= implode($word);

var_dump($result2);
