# Classi anonime

Avevamo visto le funzioni anonime. Ora applicheremo gli stessi concetti alle classi, ovvero come creare delle classi anonime.

Le classi anonime, come quelle regolari, possono avere un costruttore, possono sfruttare la promozione dei parametri e i concetti di ereditarietà. Tuttavia NON possono essere ovviamente utilizzate come tipi.

Vediamo come sfruttarle.
Per creare una classe anonima basta usare la keyword new come nell’esempio seguente:

$item = new class {};
Facendone il var_dump vedremo che otterremo proprio un oggetto identificato da una classe anonima.

Ora come dicevamo una classe anonima può anche avere un costruttore, è quindi dei parametri.
Possiamo usare nella sua sintassi il constructor property promotion.

La classe anonima potrebbe estendere un’altra classe qualsiasi. Può implementare delle interfacce. E può fare uso anche di traits. (Come debug o altri traits da noi creati)

Nonostante le classi siano anonime, l’interprete PHP, per il suo funzionamento interno, assegna a questa un valore.
Potremo ottenere il nome interno randomico dato alla nostra classe anonima con questa sintassi:var_dump(get_class($item));

Questo nome è generato a runtime, quindi conoscerlo non ci è di nessuna utilità.

## IMPORTANTE

Non possiamo quindi passare una classe anonima dentro una funzione. Non abbiamo un riferimento, un nome per questa classe. (E’ anonima!)
L’unico modo che abbiamo per identificare una classe anonima è se questa estende un’altra classe o implementa un’interfaccia.

Quindi se usiamo una interfaccia possiamo poi riferirci alla classe anonima e passarla ad una funzione mettendo il nome dell’interfaccia davanti all’istanza della classe anonima.

ESEMPIO =>

$item = new class implements XXX {};

Interface XXX {};

function test(XXX $item) {
	var_dump($item);
}

## IMPORTANTE

Possiamo avere più livelli di classi anonime sia all’interno di classi standard che all’interno delle classi anonime stesse.
Dentro la classe potremmo avere un metodo che instanzia e torna una nuova classe anonima. Il type hint di questo metodo sarà object.

Potremmo quindi chiamare su un oggetto di classe anonima la nuova funzione che crea un’altra classe anonima e vedremmo che queste sono diverse dall’indice del var_dump.

Es.
$item->getNewAnonymousClass( );

Dentro questa nuova classe anonima generata potremmo avere a sua volta un costruttore e tornare magari i parametri della classe anonima padre. In questo caso potremmo usare Parent per riferirci alla classe sopra. Dobbiamo stare attenti ad usare $this perché in questo caso in $this si riferirebbe a questa stessa ultima classe creata.

Una classe anonima e sempre e comunque un contesto a sé stante.

## UTILIZZO REALE

Ma quando è che si utilizzano davvero queste classi anonime?
Per la costruzione di mock nelle fasi di test o prototipazione. => quindi l’idea è quella di creare al volo delle classi che implementano o estendono gli oggetti che vogliamo testare. Senza istanziare decine di classi a matrioska o scrivere tante righe di codice solo per testare una singola funzione.
