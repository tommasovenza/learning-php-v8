# Metodi Magici

Sono dei metodi speciali che ci permettono di sovrascrivere o estendere il comportamento di default dell’interprete PHP, quando avvengono determinate azioni su un oggetto.
PHP ci mette a disposizione una 20 di questi metodi. Iniziano tutti con un doppio underscore. E possono avere o meno dei parametri.

Alcuni li abbiamo già visti come il construct ed il destruct.

Fra i metodi statici più utilizzati troviamo GET e SET, che tornano utili qualora volessimo accedere in lettura o in scrittura a delle proprietà a cui non abbiamo accesso (non esistono o la visibilità le nasconde)  
Se facciamo un var_dump di una proprietà che non esiste otterremo un warning. Invece con questi metodi possiamo fare qualcosa di più interessante.

Non è possibile in PHP assegnare dinamicamente il nome ad una proprietà che non esiste. => Creation of dynamic property magic::$notExistingVar is deprecated

1. Si attivano da soli, ma solo in certe situazioni. Non sono tutti come il costruttore.
   Ognuno scatta quando fai un’azione specifica sull’oggetto: leggere proprietà, scriverle, chiamare metodi inesistenti, convertirlo in stringa, clonarlo, ecc.

2. Servono per controllare o estendere comportamenti speciali.Li usi quando vuoi:

- gestire proprietà dinamiche
- intercettare errori di accesso
- creare API fluide o più eleganti
- definire come l’oggetto si comporta in certe situazioni (stringa, clone, funzione, dump)

3. Non vanno usati per “nascondere errori”.Se li usi per far finta che una proprietà o un metodo esista, crei solo bug difficili da beccare.

4. Vanno usati solo se si ha un motivo chiaro.Sono potenti ma anche una fonte di casini se messi nei posti sbagliati. Se c’è una soluzione normale e leggibile, è preferibile.

5. Documentare sempre perché si sono messi.Il problema non è il metodo magico, è dimenticarsi perché ci stava.

6. Sono perfetti per oggetti “speciali”, non per la logica di tutti i giorni.Pattern come proxy, value object, oggetti immutabili, wrapper di dati, API.Non per qualsiasi classe stupida che sotto mano.

7. Meglio sapere quando evitarli che quando usarli

—

## Altri metodi magici:

**isset
**unset
**call
**callStatic
\_\_toString
