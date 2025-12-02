# Errori ed eccezioni

Abbiamo già visto come gestire gli errori in maniera procedurale. E avevo visto un po’ le eccezioni.

## ECCEZIONI

Le eccezioni servono a mostrare le informazioni causate da un errore ed interrompere il flusso della nostra applicazione. Le eccezioni, scatenate dal nostro interprete PHP e tramite funzioni base messe a disposizione dal linguaggio stesso, possono essere scatenate manualmente
tramite la keyword throw.
Tramite le keyword try, catch e finally potremo andare a prenderci cura di queste eccezioni e gestirne la comunicazione all’utente in modo personalizzata.

## EXCEPTION CLASS

Cosa è la classe Exception che usiamo per tirare un nuovo errore?

Exception è una classe che implementa l’interfaccia Throwable. La exception può quindi essere eseguita con il comando throw.
Possiamo poi vedere che esiste anche un’altra classe Error che implementa la stessa interfaccia Throwable. => questa è dedicata agli errori interni di PHP.
Mentre al Exception è la classe base che possiamo usare nel nostro codice e che può essere estesa a nostro piacere.

Oltre alla classe Exception PHP ci mette a disposizione anche altre eccezioni: ad esempio InvalidArgumentException.
Questo è un po’ più parlante. E’ un errore legato all’argomento, invece che generico.

## TRY CATCH FINALLY

Try

Catch

Finally => si può usare per chiudere la connessione al database se la query è andata bene. Chiudere l’accesso a una risorsa condivisa. Questi sono esempi d’uso. Ma dove è che torna comoda Finally? Potremmo inserire Finally dentro ad una funzione o un metodo insieme a Try e Catch. Questo viene sempre eseguito anche se dobbiamo uscire dalla funzione. Magari attraverso un return o cose del genere.
Mi raccomando mai inserire un return in finally perchè viene sempre eseguito prima e ci porta ad uscire dalla funzione o dal metodo. Quindi in qualche modo sovrascrive gli
altri return.

### un modo per gestire gli errori

Una cosa intelligente potrebbe essere usare dei metodi dentro a delle eccezioni specifiche per la risorsa che ci serve. Potremmo creare una VideoException e tornare degli errori in base a questa classe, magari throwando degli errori specifici attraverso metodi statici della classe.
