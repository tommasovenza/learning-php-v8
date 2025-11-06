# Liste di dati - Array

Le liste sono una tipologia di dati composta anche detta matrice o array.
Le liste sono composte da una coppia chiave valore. La chiave può essere composta da un numero o da una stringa.Il valore invece può essere composto da un qualunque tipo di dato PHP compreso anche un altro array.

Sfruttando infatti questa ultima possibilità è possibile creare in PHP degli array multidimensionali o matrici multidimensionali.

Gli array possono essere sfruttati per creare tutta una serie di oggetti utili in fase di programmazione. Come ad esempio tabelle chiavi valore, dizionari, collezioni, pile, code e quant’altro.

Un array non deve necessariamente contenere dei valori, può infatti anche essere definito vuoto e poi riempito successivamente. Gli array sono oggetti iterabili, il che significa che possiamo usare tutta una serie di costrutti e funzioni speciali, fornite da PHP, per interagire con loro.

Possiamo estrarre valori, concatenare array, aggiungere valori e molto altro.

## TIPOLOGIE

Esistono 3 tipologie diverse di array.
Gli array indicizzati. => dispongono di una chiave numerica progressiva.
Gli array associativi => dispongono di una chiave alfanumerica.
Gli array multidimensionali => composti da uno o più array al loro interno.

Gli array possono assolvere a molte cose.

Non avendo definito nessuna coppia chiave valore di default gli array vengono creati in maniera indicizzata. Il primo elemento sarà l’elemento 0, il secondo elemento sarà ad indice 1 ed il terzo a indice 2.

var_dump($list[2]);

Se cerchiamo di accedere ad un elemento che non esiste otterremo un warning.

Visto che non possiamo sempre sapere a priori tutti gli indici di un array esiste una comoda funzione isset( ) che ci restituisce un booleano dicendoci se esiste o meno quell’indice dell’array. Questo può essere un controllo utili per verificare se quell’elemento esiste.

Gli indici possono essere anche utilizzati per variare il contenuto del nostro array

$list[2] = ‘PEUGEOT’
In questo caso abbiamo sostituito la variabile nell’array cambiandola da Fiat a Peugeot

### Add an element

$list[] = ‘New Element’
Questa sintassi invece significa aggiungere un nuovo elemento alla coda del nostro array.
Un altro modo è quello di usare array_push(‘nome_array’, $newEl);

### Array multidimensionali

Sono array che contengono altri array.

### Unset

Tramite unset è possibile eliminare un elemento di un array.
unset($multiDimArray[“FIAT”])
unset($multiDimArray[“BMW”][“model”])
