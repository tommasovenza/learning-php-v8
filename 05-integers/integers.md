# I Numeri Interi

Tra le varie tipologia di dati esistono gli interi. Non sono decimali e possono essere positivi e negativi.
Questi possono essere rappresentati i numeri interi non solo come decimali, ma anche in notazione esadecimale, ottava o binaria.

Le costanti PHP_MIN_INT e PHP_MAX_INT ci fanno vedere i numeri interi massimi e minimi rappresentabili dal nostro sistema operativo.

Se facendo un’operazione matematica superiamo il numero massimo intero rappresentabile da PHP, il linguaggio trasformerà questo intero in un float.

is_int( ) o is_integer( ) sono due funzioni che restituiscono true o false per verificare se la variabile è un intero

Cast
Si può fare anche il cast di una stringa ad intero
Anche la funzione intval( )

Conversione booleani
Per la conversione dei booleani un valore 1 sarà sempre convertito in true ed un valore 0 in false.
Un array vuoto, invece, sarà convertito in un valore 0 ed un array con almeno un valore, in un intero di valore 1.
