# Configurazione dell’interprete PHP

L’interprete PHP viene fornito con una configurazione standard. Questa configurazione si trova nel file php.ini

La posizione di questo file varia in base a tantissime cose, come:
Il sistema operativo, la configurazione del nostro server ed altro. Vedremo un modo per trovarlo facilmente.
É possibile modificare tutte le impostazioni andando a modificare questo file, oppure è possibile modificarle a runtime all’interno dei nostri script.

Per capire dove trovare il nostro PHP.INI basta usare il comando phpinfo( )

La pagina web che verra aperta conterrà tutte le informazioni relative alla NOSTRA ISTANZA di PHP.

Nelle prime righe possiamo notare la dicitura =>Configuration file (php.ini) Path oppure
Loaded configurazione file con accanto l’esatto percorso del nostro file php.ini

Questi appariranno in base a come stiamo caricando il nostro file di configurazione se dal valore di default o personalizzato.
E come dicevamo avremo il percorso del file php.ini scritto chiaramente.

## PHP.ini

Il file è diviso fra commenti => tutte le righe che iniziano con il punto e virgola ;
E tutta la parte con la descrizione di tutte le impostazioni che possiamo configurare e le vere e proprie direttive ovvero le righe che non iniziano con un ; ma che hanno direttamente il comando con il suo valore.

Oltre alla descrizione iniziale, è presente una descrizione puntuale per ogni comando.
In ogni caso è possibile fare click su ogni link, per accedere alla documentazione ufficiale di quel comando.

I valori del file php.ini, per motivi di sicurezza, sono modificabili in diversi modi. C’è una pagina web che fa chiarezza dicendo chi può riuscire a cambiare cosa in base ai propri permessi. La maggior parte di queste impostazioni non dovranno quasi mai essere modificate, vanno già bene così, soprattutto in un ambiente di sviluppo, tuttavia qualora volessimo modificare questi valori si può procedere in più modi:

1. modificando direttamente i valori nel file PHP.ini (avere accortezza di riavviare il servizio, server web)
2. Cosiddetto a runtime => direttamente dal nostro script con ini_set( ‘comando’, ‘valore da cambiare’ ); in questo modo da quella riga di codice i poi verrà applicato il nuovo valore alla direttiva che abbiamo scelto
3.

## COSA MODIFICARE SPESSO

Le cose che capita più spesso di dover modificare sono:

1. La funzione display_errors che di default è a 1 ovvero ON
2. l’impostazione error_reporting che di default è NULL
3. l’impostazione error_log che di default è NULL

In genere negli ambienti di produzione, si nascondono i warning vari che potrebbero apparire dato che potrebbero anche contenere dati sensibili.
Possiamo quindi farlo con => ini_set( ‘display_errors’, false);

Per gli ambienti di produzione però, solitamente, vogliamo avere una traccia di questi warning. Potremmo quindi inserirli in un file di log invece che mostrarli all’utente.
È qui che sempre con ini_set(‘error_log’, ‘path di un file di log’) => possiamo inserire il path di un file di log. (Come ad esempio ‘/logs/php.errors.log’)
L’errore quindi sarà tracciato solo nel file di log.

Bitwise operator => è un numero che viene tradotto in un comando. Prende una sintassi particolare con & e tilde. Da E_all si sottrae con la tilde l’E_WARNING.Tramite questo possiamo nascondere anche in fase di sviluppo qualunque tipo di errore, ma non ha senso.

## MAX EXECUTION TIME.

É un valore che ci può tornare utile quando si fanno operazioni lunghe e complesse. Magari stiamo chiamando delle API esterne e ci vuole tempo per scaricare i dati.
ini_set( ‘max_execution_time’, ‘valore’)

Di default il suo valore è 30, ovvero 30 secondi. => rappresenta il tempo massimo concesso allo script per venire eseguito. Se il tempo viene superato viene mostrato un errore.

Cambiare l’execution time a runtime è interessante. Potremmo tenerlo a 9-10 secondi che è un tempo ragionevole per la maggior parte delle volte e alzarlo e riabbassarlo per le operazioni che ci interessano al momento.

### Altre impostazioni utili sono quelle relative all’upload dei file:

1. Come ad esempio file_uploads: di default a true permette il caricamento dei files. (Abilitare o disabilitare)
2. max_file_uploads => può essere utile per dei form che hanno upload di caricamento unico per una transazione. Ovvero diciamo quanti file carichiamo in quella transazione, in quell’upload.
3. upload_max_filesize => ovvero la dimensione massima dei files accettabile per gli uploads. (In genere a 2M ed è basso)
4. memory_limit => 128M => impostazione di base. Si agisce su questo parametro se lo script richiede risorse di memoria elevate. Può essere alzato, ma non esageriamo. Le risorse sono tante, ma comunque limitate. Se la nostra applicazione diventasse famosissima, e ricevesse centinaia di migliaia di richieste, dovremmo spendere soldi e risorse per tenere in piedi i servizi, se non avremo ottimizzato le nostre risorse correttamente. => in ogni caso questo parametro fa riferimento alla massima memoria disponibile per l’esecuzione del singolo script. Si può mettere questo valore anche a -1 per eliminare del tutto ogni limite. Sconsigliato.
