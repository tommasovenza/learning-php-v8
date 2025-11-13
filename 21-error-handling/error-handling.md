# Gestione degli errori

Durante l’esecuzione dei nostri script PHP potrebbero accadere degli errori. Questi potrebbero essere mostrati o nascosti in base alla configurazione del nostro server PHP e del nostro interprete PHP.

Ci sono varie tipologie di errori: errori fatali, warning, informazioni. É possibile gestire puntualmente cosa mostrare e cosa no.Possiamo scatenare noi stessi degli errori sulla base di alcune specifiche condizioni. Possiamo anche creare delle funzioni personalizzate per interpretare gli errori.

## DISPLAY ERRORS

La prima cosa da fare per essere certi di visualizzare o meno gli errori è configurare il parametro display errors tramite la funzione ini_set che va a sovrascrivere il valore impostato nel file PHP.ini

ini_set(‘display_errors’, 1); => abbiamo abilitato la visualizzazione degli errori.

error_reporting( ) => tramite questa funzione possiamo specificare il livello di errore che vogliamo visualizzare.
Con 0 diciamo che non vogliamo vedere nessun errore.
Se mettiamo zero e poi facciamo echo di una variabile che non esiste, non otterremo nulla!

La costante E_ALL => ci farà vedere qualunque tipo di errore.
Se volessimo vedere tutto tranne I warning => error_reporting(E_ALL & ~E_WARNING);
E così via con tutte le costanti possibili.

## LANCIARE ERRORI MANUALMENTE

Si può fare con la funzione trigger_error( )
Prende come primo argomento la descrizione dell’errore e come secondo argomento la tipologia. Entrambi sono costanti. ATTENZIONE => dobbiamo usare le costanti E_USER

Gli errori che siano mostrati o meno possono essere comunque loggati.

La posizione del file di Log varia da sistema a sistema, e dipende dalla nostra configurazione.

error_log( ) è una funzione che ci consente di aggiungere manualmente una riga ai Log degli errori.
