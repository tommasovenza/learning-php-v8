# I 4 principi fondamentali della programmazione orientata agli oggetti

Oltre le componenti base come:
Classi, oggetti, metodi ed attributi, la programmazione orientata agli oggetti si basa su quattro principi fondamentali:

Astrazione, Incapsulamento, Ereditarietà, Polimorfismo.

Questi principi fanno parte dei design pattern, ovvero soluzioni principali ed adottate per risolvere problemi di programmazione. Sono delle best practice applicabili a problemi simili sorti in diversi contesti.

Abstraction => E’ il concetto fondante dell’OOP. L’astrazione lascia intendere che l’utilizzatore di un oggetto, una classe o un metodo non debba essere a conoscenza di ogni minimo dettaglio implementativo e funzionale per interagire con tale elemento.
Nella OOP, l’astrazione è tipicamente implementata definendo una classe o un’interfaccia astratta, che fornisce una serie di metodi ed attributi, senza specificarne l’implementazione. L’implementazione di questi metodi ed attributi è infatti lasciata alle classi derivate, anche dette classi di implementazione. Un esempio è una classe astratta forma che definisce un metodo area. La classe forma non specifica l’implementazione del metodo area: dice solamente che tutti gli oggetti derivati dalla classe forma dovranno prevedere un metodo area. Ogni classe derivata, quindi, un quadrato, un rettangolo, un triangolo ecc, dovranno tutte implementare il metodo area secondo le loro formule interne. Che saranno diverse per ogni forma specifica.

Sfruttando in maniera efficace l’astrazione, saremo in grado di definire degli oggetti, con i relativi comportamenti chiari ed esplicativi. Inoltre l’astrazione può essere declinata su dati e processi. Nella data abstraction, le proprietà e gli oggetti non sono direttamente visibili agli utenti. L’interazione con essi avverrà solamente attraverso specifici metodi, detti getter e setter.
Nella process abstraction, invece, i dettagli di un funzionamento di un oggetto, non sono necessari per utilizzare l’oggetto stesso. Sarà sufficiente conoscere i metodi e le funzioni per interagire con l’oggetto stesso. In parole povere grazie all’astrazione possiamo focalizzarci sul cosa piuttosto che sul come. Trovando soluzioni generali, applicabili in tutte le situazioni, riconducibili alla stessa casistica.

Encapsulation => ci si riferisce alla capacità di generare una gerarchia tra oggetti, classi, metodi e le funzioni, limitando l’accesso diretto alle componenti dell’oggetto e facendo sì che possano essere utilizzate solo attraverso metodi e proprietà pubbliche, così da avere un maggior controllo sui nostri oggetti prevenendo modifiche od errori involontari. Sfruttando la visibilità di proprietà e metodi, potremo governare i nostri oggetti in maniera puntuale. Con public chiunque potrà accedervi, con private solamente l’oggetto potrà accedervi con protected l’avevamo brevemente accennata. => è un po’ come la private ma garantisce l’accesso anche alle classi derivate.
Un esempio di incapsulamento può essere il parametro views dell’oggetto video che abbiamo creato nelle puntate precedenti. In questo modo non può essere modificata dall’esterno della nostra classe. Con il metodo getViews( ) potremmo vederne il valore e con il metodo incrementViews invece incrementarlo a seconda di varie circostanze pensate da noi, rendendo la nostra proprietà sicura. Incapsulando i dettagli di implementazione di un oggetto possiamo promuovere la modularità, il riutilizzo del codice sorgente, fornendo interfaccia pubblica per gli altri oggetti che interagiscono con esso.
Inheritance =>
Polymorphism =>
