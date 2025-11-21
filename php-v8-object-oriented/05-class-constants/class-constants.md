# Costanti delle classi

Sono delle costanti di PHP, ma definite all’interno delle classi.
E’ possibile impostarne una visibilità pubblica, privata o protetta e possono tornare utili, quando dobbiamo definire dei valori fissi e dobbiamo riferirci ad esse in varie parti del nostro codice.
A differenza delle costanti globali, il fatto di definirle all’interno di delle classi PHP specifiche, fa sì che il loro utilizzo sia più preciso e comprensibile.

Le costanti sono delle speciali variabili il cui valore non cambia nel tempo.
Possiamo quindi dichiararle tipo così:public const TYPE_STANDARD = ‘standard’;
public const TYPE_SHORT = ‘short’;

### :: Scope Resolution Operator.

Per riferirci alle costanti delle classi usiamo questo operatore.
Le costanti globali potevamo riferirle semplicemente riscrivendone il nome. Queste invece essendo contenute nelle classi vogliono il nome della classe prima. Ad esempio:

App\Video::TYPE_STARDARD => se andiamo a vedere App è il namespace, Video il nome della classe e dopo l’operatore abbiamo la costante TYPE_STANDARD.

Se andiamo a vedere, le costanti, come i metodi statici ed altre cose, essendo per l’appunto costanti, non hanno bisogno di essere istanziati. Non c’è bisogno di un oggetto di quella classe per trovare la costante. Comunque se avessimo l’istanza o l’oggetto della classe potremmo riferirci ad essa sempre usando i due punti ::

$video = new App\Video();

$video::TYPE_STANDARD;

Questo è stato possibile perchè abbiamo definito le nostre costanti come pubbliche. Se le costanti invece fossero state dichiarate come private non avremmo potuto tirarle fuori in nessun modo, né che vi fosse l’istanza o meno.

## Keyword SELF

Questa keyword si riferisce alla classe stessa.
Può essere usata all’interno della classe. Magari un metodo torna la classe. Invece che scrivere il nome della classe possiamo scrivere self.

Oltre alle costanti che scriviamo noi manualmente, PHP ci mette a disposizione alcune costanti magiche.

Fully qualified name. => questo viene restituito in questo caso dalla costante magica class. => var_dump(App\Video::class)
Funziona anche con le istanze delle classi. => var_dump($video::class) => otterremo lo stesso risultato

La costante class può essere molto utile. Quindi ricordiamocela. Ora andiamo a vedere l’uso quotidiano di queste costanti.

### throw new \InvalidArgumentException( ‘nome errore o eccezione’ ); => in questo modo scateniamo manualmente un errore.

### uso di array per fare meno errori e altre tecniche => classi apposite o ENUM

public const TYPE_STANDARD = 'standard';
public const TYPE_SHORT = 'short';
public const TYPE_ALL = [
self::TYPE_STANDARD,
self::TYPE_SHORT
];

Possiamo in alcuni casi dichiarare un array ed usare questo per non fare casino nel nostro codice se ci sono tante costanti da usare.

Ricordiamoci che se le classi diventano lunghe il codice si complica molto. Potremmo quindi astrarre le nostre costanti in una classe apposita, ad esempio Typology e poi usare direttamente questa per richiamare le sue costanti.

Nelle ultime versioni di PHP, sono stati introdotti gli ENUM per semplificare la vita in situazioni come queste.
