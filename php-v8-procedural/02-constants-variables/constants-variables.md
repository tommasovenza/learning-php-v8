# Costanti e variabili

Le costanti sono spazi di memoria riservati per contenere un determinato valore.
Qualora avessimo la necessità di usare questo valore più volte nei nostri script, potremmo definirlo quindi come una costante.
Ad esempio una costante potrebbe essere il pi greco. E potremmo utilizzare il pi greco per fare dei calcoli o altre operazioni.

La costante non può essere più modificata.

Le costanti sono inoltre degli oggetti globali e sono raggiungibili quindi in qualunque punto del nostro programma.
Le costanti possono contenere solo valori scalari come ad esempio: numeri, stringhe, valori booleani. Oppure possono essere definite come nulle.

Le costanti vengono definite con questa sintassi:CONSTANT

SNAKE_CASE_CONSTANT

PHP ci mette a disposizione un sacco di costanti predefinite. PHP_EOL => END OF LINE contiene il carattere di ritorno a capo, in base al sistema operativo in cui viene eseguito l’interprete PHP.
PHP_VERSION => contiene la versione dell’interprete PHP in esecuzione.
PHP_INT_MAX => contiene il valore massimo di intero rappresentabile da PHP. Varia da sistema 32 o 64 bit
**FILE** => è una costante magica. Si aggiorna durante il nostro script e contiene sempre il nome del file da cui stiamo eseguendo lo script in questo momento
**DIR** => contiene la directory in cui è eseguito lo script.

## Variabili

Strumento fondamentale di ogni linguaggio di programmazione.
Una variabile è l’assegnazione di uno spazio di memoria (porzione) con un determinato valore che può variare durante il nostro programma.

PHP a differenza di altri linguaggi di programmazione, non è fortemente tipizzato.
Il che ci permette di assegnare alla stessa variabile di assegnare diversi tipi di valore, durante l’esecuzione del nostro programma.
Questa pratica è fortemente sconsigliata.

Dalla versione 7 di PHP è stata aggiunta la possibilità di forzare il tipo di dato di una variabile in special modo per quanto riguarda le classi ed i parametri delle funzioni.

Il valore di una variabile è quindi mutevole e può contenere qualsiasi tipo di dato, dai classici valori scalari, fino ad intere istanze di classi.

## SCOPE

Le variabili hanno 3 tipi di scope o visibilità: lo scope locale, lo scope globale e lo scope statico.
Una variabile classica => avrà una visibilità locale al blocco di codice in cui è stata scritta (Block scope?)
Una variabile globale => grazie ad un comando, sarà accessibile in qualsiasi parte del nostro codice
Una variabile statica => queste a scope statico hanno la stessa visibilità delle variabili a scope locale con la differenza che il loro valore non viene eliminato dalla memoria, una volta usciti dal loro scope di riferimento.

## VARIABILI GLOBALI PREDEFINITE

$GLOBALS => un array contenente tutte le variabile definire a scope globale<br>
$\_SERVER => contiene un sacco di informazioni sulla macchina in cui è eseguito l’interprete PHP<br>
$_GET => contiene prevalentemente dati inviati tramite form, moduli o pagine di reindirizzamento<br>
$\_POST => contiene dati inviati tramite form, moduli o pagine di reindirizzamento<br>
$_REQUEST => contiene dati inviati tramite form, moduli o pagine di reindirizzamento<br>
$\_FILES => contiene dati inviati tramite form, moduli o pagine di reindirizzamento<br>
$_COOKIE => è una variabile dove vengono caricati tutti i dati salvati nei cookie del browser<br>
$\_SESSION => è un array contenente tutti i dati della sessione attuale dell’utente sul server<br>
$\_ENV => contiene le variabili di ambiente del nostro host<br>

Le costanti possono essere definite anche tramite la funzione define

Define prende due argomenti o più ed il primo è il nome della costante, mentre il secondo è il suo valore.
Le costanti una volta definite non possono essere più riassegnate.

Per definire le variabili invece basta il $.
PHP capirà che è una variabile. In genere si assegna anche un valore.
Se ci renderemo conto che è sbagliato o se vorremo cambiarlo basterà riassegnarlo con l’operatore = e questo sarà sovrascritto.
