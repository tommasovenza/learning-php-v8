# Corrispondenza - Match

L’espressione di corrispondenza fa anch’essa parte delle strutture di controllo, ovvero le istruzioni basilari di ogni linguaggio di programmazione.
Tramite essa è possibile variare il percorso di un programma sulla base del valore di una determinata espressione.
In PHP l’espressione di corrispondenza la possiamo ottenere sfruttando il comando match.

E’ molto simile allo switch.
La differenza più importante con switch, esclusa la sintassi, è che se non è presente l’espressione di default, ci verrà restituito un errore fatale.

Con lo switch funzionano i casting tra stringhe e numeri. Invece nel match no, dovremo essere precisi.
Lo switch funziona come se fosse un doppio uguale ==
Il match funziona cose se fosse un triplo uguale ===

Ancora il match è una espressione che può essere contenuta in una variabile. Il suo risultato.
Lo switch invece no.

Ancora lo switch può restituire per ogni caso più espressioni. Può stampare ad esempio due echo diversi.
Il match invece no.

Il match è un costrutto nuovo di PHP8 nato con l’idea di integrare lo switch con funzionalità diverse, non per sostituirlo.
