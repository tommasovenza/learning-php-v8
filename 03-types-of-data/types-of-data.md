# Tipi di dati

Come abbiamo visto precedentemente PHP è un linguaggio non fortemente tipizzato. Questo però non significa che non disponga di “tipi di dato”. Solo che è possibile cambiare il tipo di dato di una variabile, contenuto in una variabile, a runtime.

Ecco le 3 categorie di tipo di dato.

Scalar => Le tipologie di dato scalari sono valori booleani, numeri interi, numeri a virgola mobile (float) e stringhe di caratteri.
Compound => le tipologie di dato della categoria composto sono: le liste (gli array), gli oggetti, le richiamabili e gli iterabili.
Special => Le tipologie di dato della categoria speciali sono: le risorse (resource) e la categoria nullo (null)

Vedremo questi e le conversioni.

Booleani => rappresentano le verità, possono essere o vero o falso.
Interi => sono dei semplici numeri 1, 2, 3, 100, -2
Float => numeri a virgola mobile 1.5, 2.7 -3.6
Stringhe => ‘ciao’ “ciao”

Boolean viene stampato come 1 e non come true.
L’eco di un booleano viene convertito in stringa.

PHP, essendo non fortemente tipizzato ogni variabile può assumere ogni tipo di valore.

## GET TYPE

gettype( ) è una funzione che vuole come argomento il tipo di dato e darà come risultato il suo tipo di dato. Sapremo quindi se quella variabile in quel momento che la funzione è invocata è una stringa, un intero, un booleano ecc ecc

## VAR DUMP

Molto utile in tipo di debug è il var_dump( )
Questa funzione ci dirà sia il tipo che il suo valore.

## Gli array

Definiti da due parentesi quadre possono contenere ogni tipo di dato. Se facciamo il var_dump di un array ci verrà detto che è di tipo array e la sua lunghezza. Oltre al suo contenuto con ogni tipo di dato. Sono rappresentati anche gli indici di ogni elemento della lista e questi indici partono da zero. (In informatica si conta così)

Se proviamo a fare l’echo di un array otterremo un warning. Non possiamo stampare un array perché l’interprete non saprebbe quale elemento stampare della lista.
Dobbiamo utilizzare l’indice del suo elemento.

## Null

Il valore nullo è semplicemente un valore nullo. Questo è l’unico valore che possiamo assegnare. Una costante ed una variabile possono essere nulle.

$null = null
define(“NULL”, null)

Per tutti gli altri tipi di dato parleremo dopo perché molto complicati.

Una cosa da vedere è che potremmo creare una funzione somma che accetta due argomenti e ne fa la somma. Ora il problema è che non essendo fortemente tipizzato potremmo passare alla funzione una stringa contenente un numero, invece che un numero intero. In questo caso PHP fa la somma lo stesso.
Questo succede anche con i numeri decimali.
Ora questo può essere utile, ma si presta anche a creare bug. Quindi dalla versione 7 di PHP è ora possibile vincolare i tipi di dato, tramite delle notazione.
Se in fondo alla funzione mettiamo :int forziamo l’output della funzione come un intero. Cioè la funzione deve tornare un intero.

Oltre che nel risultato, possiamo forzare la tipologia di dato anche nell’argomento o parametro della funzione.

declare(strict_types=1);

Con questa dicitura noi andiamo a dire a PHP di forzare sempre il controllo dei tipi. Così se faremo errori di tipo, passando argomenti alla funzione, ci verrà restituito un errore fatale, dando informazioni di debug.

## Type Casting

Il casting è un processo che permette di fare la conversione dei tipi. Converte una tipologia in un’altra.

$x = "100”;
Per fare il cast forzato metteremo così
$x = (int) $x;

Il var_dump() ci restituirà int(100)
