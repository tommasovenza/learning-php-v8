# Include other script

Quando le nostre applicazioni diventano molto grandi, è inevitabile separare il codice in più file.
Organizzare tutto in modo più leggibile e mantenibile.

Due modi principali in PHP:
Include e Require

C’è un modo anche per forzare l’importazione di ogni file una ed una sola volta, anche se avessimo fatto errori e avessimo incluso i nostri file più volte.

INCLUDE
La sintassi è semplice: si scrive include e tra “” si passa la stringa con il percorso del file da includere.

Es.
include “file.php”
In questo esempio non avendo specificato nessuna directory in nostro IDE si aspetta che i file si trovino allo stesso livello, nella root.

Se il file non dovesse esistere e stessimo includendo qualcosa che non c’è, ci sarà dato un warning. Questo però non impedirà alla nostra applicazione di funzionare. Un warning non blocca tutto.

La differenza con require, sta tutta qui. Require, l’altro modo per includere file restituisce invece un errore fatale.

Sono utili entrambi in base a diverse situazioni.
Forse require è più usato e se il file non si trova si gestisce l’eccezione.

Ora il problema nasce con le funzioni. Nel nostro file incluso potremmo avere una funzione dichiarata, magari anche vuota, che proprio non fa nulla. Ma questo basta a piantare tutto se il file viene per caso importato più volte con require.

È per questo che esiste require_once che importa il file una singola volta, anche se è scritto diversamente, senza produrre più errori.

E’ possibile ancora fare un’operazione interessante. Potremmo fare return di un valore direttamente dal file incluso e non scrivere altro. Il file incluso ritornerebbe quindi, subito, un valore. Non lo vedremmo direttamente dal nostro file che lo include, a meno che non lo inseriamo in una variabile in questo modo.

$var = require_once "file.php”

A questo punto facendo il var dump di var, in questo modo var_dump($var), vedremmo stampato il valore ritornato dall’altro file.
