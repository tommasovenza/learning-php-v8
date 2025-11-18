# Introduzione - Classes & Objects

Il paradigma OBJECT ORIENTED è incentrato sui concetti di classe e di oggetto, e di come le istanze di tali oggetti interagiscono tra di loro.

La programmazione orientata agli oggetti non è una novità. Nasce infatti al MIT intorno agli anni 60, in contemporanea con lo sviluppo delle prime applicazioni di intelligenza artificiale.
Il termine object oriented è stato coniato da Alan Key intorno al 1967.

Questo tipo di programmazione si base su strutture definite a priori, come:

## STRUTTURA

Classi => gli elementi fondanti che definiscono specifiche tipologie di dato che fungono da modello per oggetti, attributi e metodi.
Oggetti => gli oggetti, ovvero le istanze delle classi con cui andremo ad interagire
Metodi => ovvero le funzioni definite all’interno di una classe. Gestiscono il comportamento di un oggetto.
Attributi => specifiche caratteristiche di una classe in cui andare a salvare dati e funzionalità.

Fornisce un supporto naturale alla modellazione di oggetti del mondo reale o del mondo astratto che si vogliono riprodurre.
Permette più facile manutenzione e gestione di grandi progetti favorendo la modularità ed il riutilizzo del codice.

La differenza principale tra programmazione PROCEDURALE e programmazione ORIENTATA agli OGGETTI è che:

Nella programmazione procedurale ci ritroviamo a gestire ed interagire con tantissime variabili a scopo globale e ad interagire con loro tramite funzioni richiamate in cascata.

Mentre nella programmazione orientata agli oggetti, si tende a creare delle sorte di compartimenti stagni, come fossero dei microprogrammi a sé stanti con all’interno le proprie variabili e le proprie funzioni e poi a farli interagire fra di loro con i metodi esposti pubblicamente.

Il paradigma Object Oriented prevede l’utilizzo di una terminologia specifica:

## TERMINOLOGIA

Permette di fugare ogni dubbio definendo layer base di comunicazione privo di incomprensioni.

Gli oggetti vengono istanziati, partendo da una classe attraverso un costruttore.

Istanza => un istanza è un singolo oggetto di una specifica classe.
Interfaccia => è una struttura che definisce quali siano le proprietà minime di un oggetto derivante dall’interfaccia stessa
Classe => utilizzata per istanziare gli oggetti potrà implementare zero, una o più interfacce.

Il tempo che intercorre tra la creazione e la distruzione dell’istanza di un oggetto è chiamata object lifetime.

### SFATIAMO SUBITO UNO DEI PiU’ GRANDI DUBBI: LA DIFFERENZA TRA CLASSI E OGGETTI.

Immaginiamoci una classe come se rappresentasse in maniera astratta una automobile.
Questa classe avrà alcuni attributi come il modello, il colore, la targa e alcuni metodi come la funzione accelera, frena e sterza.

In questo momento stiamo semplicemente descrivendo il nostro oggetto. Se vogliamo però interagire con esso lo dovremo istanziare.
Una volta istanziato potremo andare ad inserire al suo interno i dati che lo rappresentano in maniera univoca. Potremo inserire quindi la marca, il modello, il colore ecc ecc ed interagire con i suoi metodi per farla muovere, accelerare, sterzare, frenare.
Qualora avessimo una seconda macchina potremmo istanziare un secondo oggetto. Riutilizzando le stesse proprietà, attributi e funzioni definite precedentemente, ma ovviamente con nuovi dati. Così da avere nel nostro programma, due istanze, ovvero due oggetti della medesima classe.
Ovvero con la stessa struttura.

I vantaggi sono quindi quelli di ottenere un codice ben strutturato, con una struttura migliore, facile da mantenere e aggiornare, più modulare ed estensibile.

Per farlo utilizzeremo i 4 principi cardine di questo paradigma: Astrazione, Incapsulamento, Ereditarietà, Polimorfismo.

Abstraction =>
Encapsulation =>
Inheritance =>
Polymorphism =>
