# Oggetti

Gli oggetti sono un tipo di dato PHP che può essere istanziato a partire da una classe.
Questa potrà essere definita interamente da zero da noi oppure potremo usare la standardClass di PHP che ci permette di creare al volo degli oggetti generici.

Una best practise vuole che una classe sia contenuta all’intero di un singolo file. Questo torna molto utile quando si va a usare l’ autoloading.

Le proprietà di una classe possono essere inserite con 3 visibilità: public, private e protected.
È sempre consigliato tipizzare le nostre proprietà e le nostre variabili.

Le proprietà public, ovvero pubbliche, sono accessibili anche fuori da quella classe. Si possono quindi visualizzare anche in altri file.
Le proprietà ed i metodi private sono accessibili solamente all’interno della classe stessa. Figuriamoci fuori dal file
La protected è simile alla private ma con alcune diversità. Queste le vedremo meglio nella sezione futura che dedicheremo all’ereditarietà.

Quando le proprietà sono public, oltre che accessibili dall’esterno possono essere modificate con l’operatore di assegnazione. Quindi il loro valore può cambiare.

Se le variabili di una classe, le tipizziamo, definendo come devono essere, se stringhe, interi ecc ecc, dopo al var dump ci verrà mostrato un errore. =>la variabile must not be accessed before initialization.

Questo accade perchè abbiamo definito la variabile $title come stringa, ma non avendogli assegnato nessuna stringa l’interprete PHP non sa se volevamo lasciare la proprietà come una stringa vuota o se ci siamo scordati di assegnargli un valore. E quindi ci mostra l’errore che dicevamo: QUESTO => la variabile must not be accessed before initialization.

Se infatti facciamo il var_dump di tutto l’oggetto vedremo che le variabili appariranno come uninitialized. (Non inizializzate)

Ci conviene quindi che in generale le variabili abbiano un valore di partenza, siano inizializzate.

Oppure si può definire una proprietà come annullabile in questo modo. L’avevamo già visto:public ?string $description = null;

## COSTRUTTORE

Metodo magico di PHP. Come tutti i metodi magici inizia con un doppio underscore.

public function \_\_construct( ) { }

Il metodo construct viene richiamato in automatico da PHP, ogni qualvolta un oggetto viene istanziato, tramite la parola chiave new.

Al metodo possono essere aggiunti degli argomenti.
Variabile magica $this.
$this all’interno di una classe, sta ad indicare l’istanza stessa della classe.

In genere si fanno anche controlli, nei metodi delle classi. Su che cosa viene settato o meno. Magari poi usiamo quello che abbiamo fatto per inserire una stringa in un database e cose del genere.
Per questo proprio potremmo volere fare controlli nei metodi della nostra classe.

—

Una cosa interessanti delle classi e dei loro metodi è che possiamo tornare dai metodi tanti tipi di dato. Possiamo esplicitarli per chiarezza del codice. Quindi ritorneremo string, int, void ecc ecc.
Ma una cosa che possiamo fare è anche scrivere :NomeClasse.Ad esempio => :Video
E poi alla fine del metodo fare return $this;

In questo modo poi potremo concatenare metodi => esempio => metodo1->metodo2->metodo3;

—

### Creare una nuova classe partendo da una variabile.

Può tornare utile quando abbiamo varie classi e decidere a runtime quale utilizzare.

Praticamente si passa ad una variabile il nome della classe ed in questo modo si istanzia un nuovo oggetto.

$className = "Video”;

Gli oggetti lavorano in maniera autonoma, possiamo avere tantissimi oggetti della stessa classe.

## DESTRUCT

Proseguendo con in metodi magici esiste il \_\_destruct( )

Questo metodo viene richiamato appena prima un oggetto venga distrutto. Così da permetterci di effettuare operazioni di pulizia come pulire la cache o disconnetterci dal database.

Il ciclo di vita di un oggetto inizia con il construct e finisce con il destruct.

Se facciamo dei var dump utilizzando questo metodo ci accorgeremo che PHP distrugge gli oggetti se ne facciamo l’unset, in modo da liberare memoria.

Altra cosa interessante è il fatto che alla fine dei nostri script PHP sempre distrugge tutti gli oggetti.

Se le istanze non sono necessarie quindi le rimuove in modo da risparmiare memoria.
La stessa cosa accade se usiamo questa notazione seguente:

$title = (new Video(‘Closer’))->setDescription(‘a movie with Natalie Portman’)->incrementViews()->getTitle();

In questo caso abbiamo concatenato dei metodi e alla fine abbiamo preso il titolo dell’oggetto. Dato che abbiamo preso il titolo e l’oggetto non ci serve più PHP lo distrugge da sé, fa partire il metodo \_\_destruct.
Succede solo facendo così, usando una variabile ed usando l’oggetto per arrivare poi ad altro, in questo caso il titolo.

Altra cosa \_\_destruct viene eseguito anche se terminiamo lo script prematuramente magari usando il comando exit( ).

—

## standardClass PHP

$item = new stdClass( );

Vedremo che questo è un oggetto di tipo standardClass. Possiamo settare al volo delle proprietà di questo oggetto standardClass semplicemente dichiarandole e saranno public.

$item->title = ‘a new item’;

Un altro metodo per ottenere una standard class è quello di convertire un array. Se abbiamo un array con i valori 9 e 18 potremo creare un oggetto andando a fare il casting in formato object del nostro array.

$obj = (object)$arr;
Vedremo la standard class con l’array e le sue chiavi numeriche.

Le standard class vengono create anche convertendo altre cose ma le vedremo in seguito.
