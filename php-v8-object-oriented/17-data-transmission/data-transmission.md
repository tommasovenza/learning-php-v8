# Trasmissione dei dati

Altre 3 variabili SUPERGLOBALI dedicate alla trasmissione dei dati dal Client verso il Server.

In molte occasioni dovremo richiedere all’utente dei dati per poter usare le sue informazioni in seguito, magari archiviandole in un database, ad esempio.

$\_GET => dedicata ai dati presenti all’interno della query string. Ovvero tutto ciò che è presente in un URL, dopo il carattere “?”

$_POST => dedicata a tutti i dati che vengono trasmessi a seguito della compilazione di un Form HTML e permettono di passare dati di vario tipo.$\_REQUEST => è un contenitore generico che contiene tutto ciò che viene passato dal client sia tramite i metodi compatibili con GET che con quelli compatibili con POST. Sarebbe meglio non usarlo per evitare problemi.

In generale quando si pensa a $_GET si può pensare alle query string. Con $_POST possiamo fare l’associazione invece con i dati da gestire di un form.
$\_REQUEST invece ci deve far pensare che è pericoloso.
