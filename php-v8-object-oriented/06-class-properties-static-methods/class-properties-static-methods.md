# Proprietà e metodi statici delle Classi

Le proprietà ed i metodi statici di una classe, sono delle proprietà o delle funzioni che non dipendono dall’istanza di una classe!
Come le costanti possiamo accedervi dalla classe stessa. Possono essere anche queste di tipo public, private o protected e quindi hanno diverse visibilità.

Possono tornare utili in vari casi anche se ci sono altri modi per raggiungere gli scopi per le quali queste sono usate.

Le proprietà statiche sono delle variabili che vengono definite a livello di classe.
Sono accessibili direttamente dalla definizione della classe che dalle sue istanze.

In questo caso per dichiararla usiamo anche la keyword static

public static int $count = 0;

Ecco qua sopra una dichiarazione di variabile o proprietà statica. In questo caso l’abbiamo anche inizializzata a 0. Ma avremmo anche potuto non farlo.

In questo caso se la richiamiamo da un altro file, magari facendone il var_dump, dovremo usare il $ dopo i ::

Esempio =>
var_dump(App\Video::$count);

Come possiamo vedere anche in questo caso, come per le costanti viste prima, abbiamo ottenuto un valore in var dump senza avere istanziato un oggetto.
Quindi da qui possiamo definire questa variabile come statica. L’abbiamo ottenuta direttamente dalla classe, senza passare dall’istanza.

Nulla ci vieta di definire un oggetto dalla classe e tirarne fuori la variabile statica.
A differenza delle costanti le variabili statiche hanno un pregio in più. Essendo variabili possono essere modificate.

I metodi statici, se ne creiamo uno, si applicano sia alla classe stessa che alle loro istanze. (Non ve ne è però bisogno di farlo.)
Una cosa da ricordare è che i metodi statici, ogni volta che ne creiamo uno, non possiamo usare dentro di loro il $this.
Questo perchè $this in questa funzione, non si riferisce a nessun oggetto in particolare. E quindi se proviamo ad accedere alla variabile this otterremo un errore fatale.

IMPORTANTE => in sostanza non esiste nessuno spazio di memoria associato a quella classe. Non stiamo istanziando un oggetto quindi non si può usare $this per riferirsi ad esso.
//
$this punta allo stato corrente di un oggetto.
￼
Ma quindi quando ha senso usare proprietà e metodi statici??
Ci sono veramente pochi casi d’uso indispensabili. Il loro utilizzo è spesso considerato una bad practice in quanto il risultato che si ottiene, si può conseguire con soluzioni più eleganti.

Un utilizzo è quello di fare dei contatori all’interno delle proprie classi. Un altra idea potrebbe essere quella di utilizzarli per crearsi un sistema di cache interno.
Un altro utilizzo che se ne fa è quello di realizzare dei singleton. Di questi parleremo in futuro.
Altro utilizzo è quello di creare una sorta di metodi Factory per costruire, stanziare un oggetto da restituire poi come output del metodo. Questa casistica viene sempre meno utilizzata a favore della dependecy injection.
