# Functions

Le funzioni sono lo strumento fondamentale di ogni linguaggio di programmazione.

Sono composte da un nome e degli argomenti o parametri in entrata (opzionali).
Svolgono della logica di elaborazione.
Ritornano un valore di output.
Possono essere invocate in ogni momento.

In PHP ci sono centinaia di funzioni già pronte all’uso. Come var_dump.
Possiamo e dobbiamo costruirci delle funzioni personalizzate.

## DICHIARAZIONE

Function seguita dal suo nome, l’apertura e la chiusura di parentesi tonde (con parametri di input) e poi l’apertura e la chiusura parentesi graffe. Dentro a queste ci sarà la logica.

Tra le parentesi tonde e le graffe possiamo definire il tipo di parametro in uscita, type hint.

Tutte queste cose sono opzionali.

Possiamo infatti avere delle funzioni senza nome => funzioni anonime.
Avere delle funzioni senza parametri => magari invocate fanno qualcosa di diretto senza manipolare cose in entrata.
Funzioni che non restituiscono nulla in output.

Le funzioni, se non scriviamo return, fanno di loro comunque un return null. Lo possiamo vedere se facciamo un var_dump.
Se invece torniamo noi qualcosa, ad esempio il numero intero 5, nel var dump vedremo questo.

É sempre buona norma, nel caso le nostre funzioni ritornino qualcosa in output, specificare la tipologia di dato.
Qualora la nostra funzione non preveda nessun tipo di output è bene specificare la sua tipologia con la keyword void.

Ad esempio se abbiamo una funzione che fa un eco di una stringa, ma non torna niente scriveremo void. Nel caso invece torni la stringa “hello!” scriveremo il type hint :string

In PHP le funzioni possono essere definite ovunque anche prima della definizione. Tutto funzionerà comunque. Gli unici casi in cui questo non avviene sono quando definiamo le nostre funzioni in particolari contesti =>ad esempio all’interno di una condizione =>

if(true) {
&nbsp;function ( ) :void {
&nbsp;&nbsp;echo “pippo”;
&nbsp;}
}

Qui stiamo facendo qualcosa di particolare. La funzione non è definita ma nello script, ma solo se succede qualcosa, a runtime. É quindi VINCOLATA!
NON è possibile richiamarla fintanto che non è stata definita.

Sconsigliassimo fare queste cose.

Meglio dichiarare le funzioni al di fuori di ogni contesto! In modo da usarle in tutti i punti in cui ve ne è necessità.

### Approfondiamo il type hinting

function sum( ): int
{
&nbsp; return '1';
}

var_dump(sum());

In questo caso PHP torna un intero perché fa il cast. Vede che deve tornare un int e converte.

Se invece ci fosse il declare (strict_types=1)
Questo non avverrebbe ma ci sarebbe dato un errore fatale.
Mettendo invece di nuovo un intero tutto funzionerà liscio come l’olio.

Qualora avessimo lo strict type dichiarato dovremo anche specificare il void. Ci obbliga a scrivere le cose bene. Non possiamo tornare null o niente o qualcosa di diverso.

Una cosa che però può sicuramente essere fatta è quella di mettere un punto interrogativo prima del tipo specificato da tornare. Con questa sintassi stiamo dicendo che accettiamo sia null che il tipo che vogliamo tornare. Esempio => ?int

Il dato potrà essere un interno, ma anche nullo. Il programma non darà alcun errore. Questo ci viene in aiuto per i parametri di input.
Potremmo mettere dei parametri facoltativi ed annullabili.

Oltre ad annullarli è possibile dichiarare più tipologie contemporaneamente. Per farlo specifichiamo uno di seguito all’altro tramite la pipe. |
int|null|float

Nella peggiore delle ipotesi possiamo usare :mixed come type hint
