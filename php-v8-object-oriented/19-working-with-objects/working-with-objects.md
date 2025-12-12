# Lavorare con gli oggetti

Un aspetto che non abbiamo visto finora è come lavorare con gli oggetti. Rispetto alle semplici variabili questi si comportano diversamente.
Vedremo come possiamo compararli tra loro, come possiamo clonarli e come possiamo sfruttare le funzioni di serializzazione per ottenere delle scritte identificanti i nostri oggetti, in grado di essere salvate come semplici testi.

## COMPARARE GLI OGGETTI

Se proviamo a comparare i nostri oggetti istanziati potremo scoprire come lavora PHP dietro le quinte, con i nostri oggetti.
In PHP gli operatori di comparazione li conosciamo, sono due:
il doppio uguale ==
ed il triplo uguale ===

Se li paragoniamo otterremo due false. In questo caso i due oggetti hanno un titolo, o parametro diverso tra loro. Questa cosa vale per tutti i parametri.
Ma se invece li mettiamo identici? Con il doppio uguale == avremo true ed invece con il triplo === false.

## IMPORTANTE

Quando creiamo un oggetto e lo associamo ad una variabile cosa succede esattamente?

Quell’oggetto non viene inserito o contenuto dalla variabile, ma viene inserito in memoria. => Viene creato in memoria. L’ associamento con la variabile avverrà attraverso un puntatore.
Nella variabile viene inserito un puntatore a quell’oggetto in memoria!

Quando abbiamo due oggetti anche se sono identici però, puntano a due spazi diversi in memoria. Il triplo uguale va a vedere anche il puntatore. Per questo restituisce false. Anche se gli oggetti di per sé sono identici!
