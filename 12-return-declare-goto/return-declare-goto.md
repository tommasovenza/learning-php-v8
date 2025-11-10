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
