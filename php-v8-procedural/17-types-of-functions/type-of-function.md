# Tipologie di Funzioni

In PHP esistono diversi tipi di funzioni:

Funzioni classiche
Variable functions => le funzioni salvate all’interno di una variabile
Anonymous Functions => senza nome ed inserite all’interno di una espressione
Arrow functions => particolare tipo di funzione che permette di essere sintetici e scrivere una funzione su una riga.

## VARIABLE FUNCTIONS

PHP sa che, ogni volta che trova delle parentesi tonde dopo la dichiarazione di una variabile col dollaro $, deve interpretare questa variabile come una funzione.

Possiamo comunque testare se quella espressione è veramente una funzione con la funzione is_callable. Se questa tornerà true sarà una funzione altrimenti no.
Se non usiamo is_callable ma chiamiamo qualcosa di sbagliato otteniamo un errore fatale che dirà che la funzione non è definita.

// Reflection class => metodi per definire quanti e quali parametri le funzioni accettano in maniera più approfondita.

## ANONYMOUS FUNCTIONS

Una funzione anonima è una classica funzione, ma senza nome. Quindi gli togliamo il nome. L’editor ci darà già un errore in quanto le funzioni anonime hanno bisogno di un punto e virgola al loro termine.

Per eseguire una funzione anonima ed invocarla dobbiamo assegnare il suo risultato ad una variabile, proprio come se fosse una singola espressione. Mi raccomando di non scordare i parametri. Anche se è anonima possono essere passati dopo il nome della variabile.

## ARROW FUNCTIONS

Introdotte in PHP 7, permette di creare funzioni sintetiche quando dobbiamo effettuare solamente una singola operazione.

Es. array_map permette di eseguire una funzione personalizzata per ogni elemento di un array. Vogliono una funzione di callback con fn e la fat arrow =>
Non c’è bisogno di scrivere return, questo è implicito come in javascript. Mi raccomando l’espressione deve essere singola e non avere più righe.
