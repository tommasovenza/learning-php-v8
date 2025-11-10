# Istruzioni return, declare, goto

Sono istruzioni importanti del linguaggio PHP

Return => restituire il controllo dell’esecuzione di uno script all’ambiente da cui era stato richiamato.
Declare => dichiarare direttive all’interno dei nostri script. Queste direttive possono essere di tipologia => selezione, codifica o stringente
Goto => ci torneremo alla fine del video

## RETURN

Non conclude tutta l’esecuzione del nostro script, ma conclude l’esecuzione della funzione, ritornando qualcosa. (Un valore, un intero, una stringa, un array ecc)
L’istruzione return ci fa uscire dalla funzione. Ovvero tutto il codice che viene scritto dopo, (all’interno della funzione viene ignorato. Questo si vede bene anche dal fatto che l’IDE scolorisce il testo facendoci percepire che questo non è in funzione)

Return ci fa quindi uscire dalla funzione.

Incredibile return può essere usato anche nello script. In questo modo ci fa uscire proprio dallo script. E tutto quello che viene scritto dopo, anche in questo caso viene ignorato. (Da provare)

Return può anche non tornare nulla e può essere un modo per uscire dalla funzione. (O magari fare debug?) Dovremo avere l’accortezza di togliere il type hint dalla funzione, altrimenti ci sarà dato un errore.
In questo caso non tornerà un valore ma null (ovvero assenza di valore.)
In tutti gli altri casi tornerà, come detto prima, quel valore.

## DECLARE

Il declare si può usare quindi con la selezione.
In PHP quasi ogni istruzione genera un TICK, una sorta di evento dell’interprete quando esegue un comando od un gruppo di comandi.

Potremmo registrare dei TICK e poi vedere quando scattano, ovvero ad ogni dichiarazione di funzione, oppure ad ogni ciclo eseguito in un for e così via.

La registrazione si effettua facendo il register_tick_function(‘onTick’) e passando dentro alla register la funzione precedentemente dichiarata.

É difficile che questa roba venga mai usata, se non in casi estremamente specifici come misurare le prestazione o fare roba molto molto avanzata.

Dichiarazione di encoding. (Probabilmente anche questa non la useremo mai)
Sarebbe possibile specificare con quale codifica interpretare i nostri script. Ma in genere, questa cosa viene fatta lato server, nel file PHP.ini, impostando qui questi valori => non è mai necessario modificarli

// controllo stringente sui tipi di dato
Questo controllo è sul singolo file, quindi il comando va messo all’inizio di ogni file.

declare(strict_types=1);

Si forza qui l’interprete PHP a verificare che i tipi di dato corrispondano a quanto dichiarato.

Se scrivessimo ora una funzione che fa la somma di due numeri e passassimo come argomento un numero dentro ad una stringa ci verrebbe ora segnalato un errore fatale e lo script e tutto il programma si interromperebbe.

declare(strict_types=1); è molto molto utile e ci può aiutare tantissimo a non produrre bug. L’unico inconveniente è che se decidiamo di usarlo, va messo all’inizio di OGNI file per tutti i file che produciamo. Perchè se ad esempio importiamo altri file, nel nostro file, se non usiamo questa dichiarazione sempre succede casino.

## GOTO

Tutto quello che c’è da sapere qui è che => Non bisogna mai usare goto. 😳
