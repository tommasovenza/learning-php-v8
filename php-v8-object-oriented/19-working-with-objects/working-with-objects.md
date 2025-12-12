# Lavorare con gli oggetti

Un aspetto che non abbiamo visto finora è come lavorare con gli oggetti. Rispetto alle semplici variabili questi si comportano diversamente.
Vedremo come possiamo compararli tra loro, come possiamo clonarli e come possiamo sfruttare le funzioni di serializzazione per ottenere delle scritte identificanti i nostri oggetti, in grado di essere salvate come semplici testi.

## COMPARARE GLI OGGETTI

Se proviamo a comparare i nostri oggetti istanziati potremo scoprire come lavora PHP dietro le quinte, con i nostri oggetti.
In PHP gli operatori di comparazione li conosciamo, sono due:
il doppio uguale ==
ed il triplo uguale ===

Se li paragoniamo otterremo due false. In questo caso i due oggetti hanno un titolo, o parametro diverso tra loro. Questa cosa vale per tutti i parametri.
Ma se invece li mettiamo identici? Con il doppio uguale == avremo true ed invece con il triplo === false.

## IMPORTANTE

Quando creiamo un oggetto e lo associamo ad una variabile cosa succede esattamente?

Quell’oggetto non viene inserito o contenuto dalla variabile, ma viene inserito in memoria. => Viene creato in memoria. L’ associamento con la variabile avverrà attraverso un puntatore.
Nella variabile viene inserito un puntatore a quell’oggetto in memoria!

Quando abbiamo due oggetti anche se sono identici però, puntano a due spazi diversi in memoria. Il triplo uguale va a vedere anche il puntatore. Per questo restituisce false. Anche se gli oggetti di per sé sono identici!

Quindi l’unico modo per ottenere true è dichiarare una nuova variabile ed assegnarla alla prima e paragonare tra loro queste due. Facciamo un esempio per spiegarsi.

$v1 = $v3;

Ecco questi sono due oggetti identici tra loro e che hanno lo stesso spazio in memoria. Ora se li mettiamo a confronto con il triplo uguale otterremo true.

$v1 === $v3; => true

Questa cosa però comporta anche dei problemi perchè adesso gli oggetti essendo identici, se subiranno una mutazione, questa si ripercuoterà su entrambe le variabili. Ora abbiamo due variabili, e stesso puntatore allo stesso spazio in memoria contenente lo stesso oggetto.

Quindi cautela.

## CLONARE

Se vogliamo clonare un oggetto da un altro, in modo da avere le stesse proprietà, non possiamo farlo clonando.

Se usiamo la keyword clone vedremo che:$v4 clone $v1; => vedremo che $v4 sarà un oggetto identico a $v1, ma non sarà associato allo stesso spazio in memoria. =>
Quindi il controllo con il triplo uguale ci darà false

Ora una dei problemi che pone il clone è che copiando tutto, se avessimo proprietà univoche da rispettare, ad esempio interagendo con un database, potremmo avere dei problemi.

PHP ci viene in aiuto con un magic method.

Diciamo che uno qualsiasi dei nostri parametri dell’oggetto istanziato sia univoco, nell’ esempio del corso la proprietà title.
Ecco il metodo magico che viene usato è \_\_clone( ); che ritorna void

Ecco dentro al magic method clone possiamo fare quello che vogliamo per rendere l’oggetto unico. Qui sta a noi.

Potremmo concatenare una riga creando un numero random tra tanti usando la funzione rand( ).
In questo modo ogni volta che cloniamo un oggetto verrà scatenato il magic method \_\_clone( ) creando univocità secondo la logica che avremo scritto dentro questo metodo magico.

Avremo quindi identificativi univoci.

## SERIALIZZAZIONE

Qualora avessimo la necessità di salvare i nostri oggetti all’interno di file testuali, o di campi text nei database o altre cose possiamo sfruttare le funzioni serialize e unserialize.

$string = serialize($item);
Ecco qua avremo una stringa serializzata. Il browser potrebbe renderizzarla un po’ strana ma se guardiamo in var_dump in sorgente pagina vedremo che sono solamente caratteri.

Per farne il reverse e riaverne l’oggetto possiamo usare la funzione unserialize.

json_encode e json_decode => entrano in gioco con le api ed il JSON
