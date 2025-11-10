# Parametri e Argomenti

Abbiamo visto come dichiarare ed invocare le funzioni. Ora entriamo nel dettaglio dei parametri e degli argomenti.
Quando dichiariamo una funzione possiamo inserire dei parametri.
Questi parametri possono essere passati sotto forma di valore o di referenza.

Nel primo caso il valore di una variabile verrà passato copiato all’interno del parametro.
Mentre nel secondo caso verrà passato il riferimento alla variabile originale.

Questo lo spieghiamo meglio dopo, così evitiamo il concetto di puntatori che danno problemi agli sviluppatori alle prime armi.

Splat operator => permette di dichiarare delle funzioni con un numero arbitrario di parametri.

## CHIAMATA DELLA FUNZIONE - INVOCAZIONE

Quando richiamiamo una funzione i parametri che passiamo sono definiti argomenti.
Per ogni argomento il valore verrà copiato all’interno della parametro della funzione. => nel caso di by value.
Oppure ne verrà passato il riferimento nel caso di by reference.

Inoltre vedremo i named arguments, una nuova funzionalità di PHP 8. Sarà possibile specificare negli argomenti i parametri della nostra funzione nell’ordine che preferiamo, indipendentemente da come erano stati dichiarati inizialmente.

Quando li dichiariamo si chiamano PARAMETRI, quando li chiamiamo si chiamano ARGOMENTI.

function sum(int $x, int $y): int { // PARAMETRI
&nbsp;return $x + $y;
}

var_dump(sum(x: 3, y: 6)); // => ARGOMENTI

Per ricordarci potremmo dire che i parametri dovrebbero essere sempre tipizzati. In questo caso i parametri accettano due interi.
Qualora i dati passati non lo siano verrà restituito un errore in caso di strict_type attivo, altrimenti sarà fatto il casting.

In PHP 8 possiamo usare le union type potremmo dire che la nostra funzione accetti un parametro sia intero che float int|float con il pipe nella dichiarazione del parametro della nostra funzione. Questo dovrà essere scritto non solo dove si dichiarano i parametri, ma anche dove si esplicita il type hint di return altrimenti verrà convertito con il casting.

Se non passiamo tutti i parametri dichiarati, ci sarà detto che ci si aspettava altri parametri in ingresso. Vedremo errore fatale. Troppi pochi argomenti passati alla funzione.

Possiamo però prevedere un valore predefinito per alcuni parametri. Un parametro cosiddetto opzionale. Se lo facciamo però, tutti i parametri successivi della funzione dovranno essere ugualmente opzionali.

In PHP di default gli argomenti vengono passati come VALORE.

Nella funzione viene copiato il valore passato e da quel momento la funzione sarà eseguita con quello specifico valore.

La referenza invece è lo spazio di memoria a cui si riferisce quella variabile.

## SPLAT OPERATOR

## NAMED ARGUMENTS

Praticamente si possono invertire gli ordine degli argomenti che la funzione si aspetterebbe quando la chiamiamo, esplicitando nel codice cosa sono. (Usando i nomi scritti nella dichiarazione)
E’ una cosa da provare.

Questa cosa può essere fatta anche con gli array associativi.
