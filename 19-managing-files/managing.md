# Gestione dei files

In PHP esistono diverse tipologie di funzioni che ci permettono di interagire con files e directories.
Oggi vedremo alcune delle principali funzioni, utili nella gestione del file system.

## SCANDIR

Ottenere la lista di tutti i file e delle directories dentro un determinato path.
La costante **DIR** indica la directory corrente. È una delle costanti magiche di PHP che avevamo già visto precedentemente.

Se facciamo il var_dump di una variabile contenente il risultato di scandir vedremo un array con dentro un puntino . e due puntini ..
Questo è un’eredità dei sistemi DOS e UNIX. Il puntino indica la directory corrente, il doppio puntino la directory precedente ed il nostro file. (index.php ad esempio)

## IS FILE

Se facciamo is_file dell’elemento dell’array che equivale al doppio puntino vedremo false (booleano). Infatti questa non è un file, m una directory. Se lo eseguiremo su un elemento che è realmente un file otterremo true

## IS DIR

Analogamente otterremo true sugli elementi che sono directory e false sugli elementi che sono files.

## MKDIR

se volessimo creare una directory lo potremmo fare con il comando mkdir, come avviene per bash. Se passiamo una stringa alla funzione mkdir ci troveremo una nuova cartella con nome di quella stringa. Per rimuovere questa directory utilizzeremo rmdir( )
Rmdir funziona solo la directory è vuota, altrimenti prima dovremo eliminare i files al suo interno e poi la directory.

## FILE EXISTS

questa ci permette di verificare se un file esiste o meno in un determinato path. Restituisce un booleano. True o false. Verifica anche se esistono le directory.

Se vogliamo interagire con i files possiamo fare in due modi:$handler = fopen(file da aprire, il percorso, come primo argomento e modalità ad esempio lettura: ‘r’ come secondo argomento);

Potremmo ottenere un warning se il file non esiste. Se esiste otterremo invece un elemento resource of type stream.

Una risorsa può essere di tipo stream. Cosa ce ne facciamo?
Possiamo andare a leggerla.

Come facciamo? Ma con la funzione fgets.
Gli passiamo l’handler, ovvero il file da aprire e lui ci ritornerà la prima riga. Come facciamo allora a leggerlo tutto? Potremmo fare un ciclo finché il file non è finito. E lui ci ritornerà tutto quanto. Magari usiamo un while con condizione finché la condizione non torna false o finché è diversa da false e riusciremo a leggere il file, facendo il var_dump di $line.
$line sarà questo =>

$line = fgets($handler);

Quando apriamo un file con fopen, la risorsa viene impegnata. Se la modalità è di sola lettura ‘r’, tanto tanto, ma se la modalità sarà in scrittura ‘w’ non potremo aprire il nostro file, in un’altra parte del nostro codice, fintanto che non l’avremo chiuso.

In automatico PHP chiude tutte le risorse del nostro codice al termine dello script. Quindi il file viene aperto, letto e poi chiuso da PHP.

## FCLOSE

Ma è sempre buona norma chiudere manualmente i nostri $handler.
Con fclose. =>

fclose($handler).

## FWRITE

Se volessimo scrivere il nostro file, invece che leggerlo. come primo parametro prende l’handler e come secondo parametro il testo che vogliamo scrivere nel nostro file, sotto forma di stringa.
Non avremo niente in output, ma se andiamo ad aprire il nostro file ci troveremo il contenuto che abbiamo passato.
Se andiamo a rieseguire questo script, il file verrà tutte le volte sovrascritto.

Se invece utilizzeremo la modalità in append ci basterà mettere la ‘a’ come parametro al posto di w.

## FGETCSV

fgetcsv può tornarci comodo per interagire con i CSV. Impacchetta il contenuto dentro degli array. Può tornare molto comoda.

## INTERAGIRE CON I FILE (2nda Modalità)

Altra modalità per interagire con i files è ancora più semplice !

Per leggere il contenuto di un file si può usare una unica funzione che legge riga per riga il file e torna in output tutto il contenuto.

file_get_contents(‘path del file’);

Esiste una funzione analoga anche per quanto riguarda la scrittura. In questo caso, si utilizzerà la funzione file_put_contents alla quale passeremo come primo parametrio il path del file e come secondo il contenuto.

Il risultato di questa funzione è il numero di byte scritti in questo file, o false in caso di errore.
Anche qui se il file esiste già, verrà sovrascritto il contenuto.

Se volgiamo lavorare in append, dovremo passare un terzo parametro alla funzione mettendo la costante FILE_APPEND.

### COPY, unlink, pathinfo

Permette di copiare, dato un file, di copiarlo in un altro file. La funzione unlink che ci permette di eliminare un file. E la funzione pathinfo, che dato un path ci restituisce varie informazioni dentro un array. (Directory name, basename, estensione, ed il filename)
