# Visibilità delle variabili - Scope

É un concetto importantissimo, in programmazione. Se non lo capiamo può portare a tantissimi BUG.
In PHP esistono due visibilità per le variabili, GLOBAL SCOPE e LOCAL SCOPE

GLOBAL => una variabile globale sarà accessibile, con gli appositi comandi, ovunque nei nostri script.
LOCAL => Una variabile locale sarà accessibile solo all’interno del costrutto in cui è stata definita. Ad esempio all’interno di una funzione, di una classe, ecc.

Inoltre non è una tipologia di visibilità, ma è possibile dichiarare delle variabili STATICHE. Questo ci permette di usare alcune tecniche che vedremo meglio in seguito.

Molte di queste cose le vedremo in maniera più approfondita nella parte del corso dedicata alla programmazione orientata agli oggetti.
Ma è importante comprenderli da subito.

## Variabili statiche

Una variabile statica in PHP è una variabile che mantiene il suo valore tra più chiamate della stessa funzione o metodo.

È una variabile che non riparte da zero ogni volta che la funzione viene richiamata
