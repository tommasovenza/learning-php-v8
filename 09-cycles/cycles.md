# Cicli

I cicli fanno parte della famiglia delle strutture di controllo. Sono fra le istruzioni più basilari di ogni linguaggio di programmazione.
Tramite questi è possibile eseguire delle istruzioni senza dover riscrivere il codice ed essere ridondanti.

All’interno dei cicli è possibile, tramite appositi comandi, saltare uno o più cicli oppure uscire direttamente da questi.

Si possono effettuare cicli in più modi.

## WHILE

Si dichiara una variabile che farà da indice per il nostro cicli.
La i è una convenzione che è rimasta per molti linguaggi. In genere si usano i e j

Dobbiamo incrementare il valore di i all’interno del nostro ciclo.
Nel ciclo while, alla fine si incrementa il ciclo.
Dopo la dichiarazione while, all’intero delle parentesi tonde si inserisce la condizione di ciclo.

Dopo stampiamo il valore di i con il ritorno a capo (questo è solo un esempio)

### DO WHILE

Altro tipo di ciclo

## FOR

Può essere usato per andare avanti ma anche indietro. Dipende dalla condizione che scriveremo nel ciclo.
Incrementa anche questo la variabile i. Questa è scritta dentro la condizione iniziale e non dichiarata fuori come nel while o do-while.

I cicli possono essere usati per scorrere un array. Ricordiamo che gli array partono da zero. Questo ci servirà per scrivere la condizione giusta nel ciclo. In PHP si usa spesso la funzione count( ) per contare la lunghezza dell’array ed avere quindi la condizione di chiusura del ciclo.

Usare il count comunque è però sconveniente per una questione di performance. Finché l’array è piccolo può anche andare bene. Ma si possono trovare altre soluzioni.

Potremmo ad esempio dichiarare il count e calcolare la lunghezza dell’array fuori dalla condizione del ciclo e poi passare la variabile alla condizione. Avremmo quindi in modo semplice delle performance migliori.

Nel caso degli array PHP ci viene incontro con un comando fatto apposta per loro. Questo è il foreach.

## FOREACH

Simile al for.

É possibile nel foreach, se dichiarato nella condizione avere anche l’indice dell’array, oltre al valore.
Questo funziona anche con gli array con chiave testuale. (Array Associativi?)

Ultimo appunto sul foreach, le variabili dichiarate dentro al foreach sono accessibili anche al di fuori di questo.
Quindi è buona pratica fare l’unset delle stesse terminato il ciclo!

Dentro ai cicli possiamo definire delle condizioni. Potremmo scrivere un if nel ciclo e dichiarare che se la chiave o l’indice è uguale ad “a” o a zero o ad altre condizioni di saltare il ciclo con la keyword continue.
In questo modo salteremo quel ciclo.

Altra cosa che possiamo fare è quella di usare l’istruzione break. In questo caso PHP uscirà completamente dal ciclo e non eseguirà più nessuna istruzione.
Per completezza se usiamo questi codice con template HTML possiamo usare una diversa sintassi con i : alla fine dell’istruzione foreach e con l’endforeach a chiudere.

La stessa cosa può essere fatta anche con il ciclo while, con il comando while e la sua chiusura endwhile.
