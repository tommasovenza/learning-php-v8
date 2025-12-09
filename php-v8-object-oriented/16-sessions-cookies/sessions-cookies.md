# Gestione Sessioni - Cookie

Proseguiamo con nuove variabili superglobali, quelle dedicate alla sessioni ed ai cookie.
Spesso ci capiterà di avere la necessità di utilizzare dei dati validi per tutta la sessione in cui l’utente sarà sulla nostra applicazione. L’esempio più calzante è quello della autenticazione. Nel quale un utente arriva come ospite e potrà loggarsi. Ad ogni cambio di pagina potremo riconoscere che l’utente è sempre lui, in modo da potergli fargli vedere le pagine a cui è abilitato. => qui come dicevamo entrano in gioco le sessioni

Invece potremmo voler fare in modo che l’utente resti loggato. Quando magari è andato via dal sito, ma vi sta tornando, nei giorni seguenti. Se vogliamo che resti loggato e non debba autenticarsi nuovamente, per questo scopo, possiamo usare i cookie.

La principale differenza tra sessioni e cookie è che i primi operano lato server, quindi tutte le informazioni che salveremo sulla variabile superglobale $\_SESSION saranno fisicamente salvate sul nostro server web. Invece tutto quello che rientra nella variabile $\_COOKIE, sarà salvato sul dispositivo del nostro utente.

I cookie però, possono essere manomessi dall’utente. Dobbiamo prevedere in applicazioni reali delle opportune modalità di verifica perchè questi non siano contraffatti.

SESSIONI
Le sessioni non sono esplicitamente attive in PHP, di default. Se vogliamo utilizzarle dobbiamo prima dirlo all’interprete PHP. Come si fa? Richiamando la funzione session_start( );

Dobbiamo fare attenzione, questa funzione deve essere la prima cosa che facciamo. => altrimenti otterremo un warning con scritto bene che la sessione non può essere inizializzata. Va sopra al require_once. Subito dopo l’apertura php => <?php

Una volta comunicato all’interprete che vogliamo utilizzare le sessioni avremo a disposizione la variabile superglobale $\_SESSION.
Possiamo aggiungere all’array $\_SESSION tutte le voci che vogliamo in base alle necessità della nostra applicazione. Questo magari usando chiave valore (è un array associativo)

Un’altra funzione utile da sapere è la funzione session_destroy che viene che viene spesso utilizzata in fase di logout.

Se la usiamo il contatore implementato nell’esempio del video non verrà più incrementato dato che la sessione sarà distrutta e non ci sarà modo di tenere traccia del valore precedente del counter. => Verrà infatti ricreata una nuova sessione ogni volta.

Ma come fa il browser a ricordare la sessione? Lo vediamo subito andando in application => cookie => troveremo PHPSESSID
