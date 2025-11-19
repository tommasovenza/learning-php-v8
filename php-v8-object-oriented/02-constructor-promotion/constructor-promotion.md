# Constructor Promotion

É possibile definire ed assegnare il valore ad una proprietà di una classe, direttamente tramite una singola istruzione.

Questa cosa è stata aggiunta in PHP 8.

La constructor property promotion ci aiuta a risparmiare un sacco di codice quando dobbiamo dichiarare il costruttore di una classe ed assegnargli le proprietà di quella classe per istanziarla.

Praticamente si dichiarano le variabili direttamente nel costruttore. Senza bisogno di metterle nella classe e riassegnarle.

Infatti tramite la constructor property promotion, le nostre proprietà, dal costruttore vengono promosse a proprietà della classe.

È possibile mixare parametri promossi con parametri classici. Ricordiamoci di inserire solamente l’espressione di assegnazione delle proprietà al valore qualora usassimo la classica modalità

Dentro il costruttore la proprietà sarà sia parametro che attributo/proprietà della classe.

Potremo quindi riferirci ad essa direttamente con il $ oppure con $this.

Esempio
echo $title;
echo $this->title;
