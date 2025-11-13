# Date, ore e fusi orari

PHP ci mette a disposizione, varie funzioni, per la manipolazione del tempo.
Vedremo funzioni che ci permettono di operare con date, ore e fusi orari in maniera procedurale.

Dopo vedremo invece la classe DateTime per operare in maniera object oriented.

## FUNZIONE TIME

Una delle funzioni principali è time( );
Restituisce quando chiamata, il valore numerico del cosiddetto UNIX TIMESTAMP. Otterremo facendone il var_dump un intero.

Lo unix timestamp è un particolare metodo per il calcolo del tempo. Introdotto nei sistemi unix. Diventando uno standard. Al passare di ogni secondo incrementa di uno
Il valore 0 corrisponde al primo gennaio 1970 a mezzanotte. Da lì continua a salire il valore del tempo.

La funzione date( ) ci permette di formattare il nostro tempo e passare magari anche un valore.
Possiamo quindi ottenere il tempo in un formato più leggibile per noi da quello UNIX.
Qualora non passassimo un valore, verrà preso come valore il time attuale.

Se passiamo un altro valore del tempo, non prenderà il valore del tempo in cui invochiamo la funzione, ovvero adesso, now, ma formatterà il tempo che gli avremo passato in entrata alla funzione.

## INTERESSANTE

In maniera predefinita, PHP, utilizza il timezone impostato nel file di configurazione del server PHP.

Qualora volessimo specificare un diverso timezone, potremo farlo con la funzione seguente:
date_default_timezone_set( ) PRENDE come argomento uno specifico timezoneId => es. Europe/Rome

quest’altra funzione invece ci aiuta a controllare:
date_default_timezone_get( ) => questo ci va vedere quale è la timezone impostata nel server PHP.

## CREARE UNO UNIX TIMESTAMP
Possiamo usare questa funzione. mktime => ovvero make time :)
Prende in entrata come argomenti le ore, i minuti, i secondi, il mese, il giorno e l’anno di una data. Restituisce uno UNIX TIMESTAMP. Abbiamo ottenuto partendo da una data suddivisa per argomenti uno unix timestamp.

Qualora un parametro non venga specificato prenderà il valore attuale. Se passiamo a mktime solo l’ora ad esempio le 10, oggi che è il 13 novembre 2025 ci verrà data l’ora passsata le 10 più minuti e secondi attuali e la data di adesso, quindi verrà => le 10:58 del 13 novembre 2025.

Un altro modo per creare un timestamp unix è quello di convertire una stringa. C’è la funzione strtotime, ovvero string to time. Qui possiamo passare la stringa in questo modo => 2025-11-13 10:58:00 oppure fare altre cose particolari come scrivere ‘tomorrow’ o ‘last day of february’. => prenderà davvero il giorno domani e l’ultimo di febbraio dell’anno corrente.

## DATE PARSE

date_parse(time( )); => parsiamo il tempo di adesso, attuale. La funzione ci restituisce un array suddiviso per anno, mese, giorno, ora, secondi, ecc.

Quindi un oggetto completo del timestamp unix che gli passiamo.
