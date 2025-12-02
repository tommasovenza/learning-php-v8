# Traits

I traits sono un meccanismo di riuso del codice che permette di condividere metodi tra più classi senza utilizzare l’ereditarietà tradizionale. Servono a ridurre la duplicazione e a comporre comportamenti in modo flessibile.

## Caratteristiche principali

- Un trait **non è una classe** e **non può essere istanziato**.
- I traits possono contenere:
  - Metodi
  - Proprietà _(anche se è buona pratica usarle con cautela)_
- Una classe può usare **più traits** contemporaneamente.
- I traits **non creano una gerarchia** come le classi astratte.
- Non sostituiscono le interfacce, ma le integrano.

## Sintassi e definizione

```php
trait LoggerTrait {
    public function log($msg) {
        echo $msg;
    }
}
```

PHP è un linguaggio a ereditarietà singola. Possiamo quindi estendere una sola classe alla volta. Non possiamo per cui creare una classe che estenda più classi. Per ovviare a questa limitazione, in PHP, furono introdotti i traits.
I traits sono delle specie di classi nelle quali possiamo andare a raggruppare delle funzionalità in modo fine e coerente. A differenza delle classi i traits NON possono essere istanziati.

Sono indipendenti e combinati in modo appropriato ci permettono di ridurre le duplicazioni del codice sfruttandoli in diverse gerarchie di classi, riducendo la complessità del codice ed evitando i tipici problemi associati all’ereditarietà multipla (in altri linguaggi?) o ai mixin.

Un trait è un contenitore di metodi che puoi infilare dentro una classe quando ti serve condividere pezzi di comportamento senza fare acrobazie con l’ereditarietà. Perché l’ereditarietà singola è simpatica solo finché non ti serve riusare codice in classi diverse senza inventarti gerarchie assurde.

Servono quando:

- Hai pezzi di logica che vuoi riutilizzare in più classi.
- Non puoi (o non vuoi) infilare tutto in una sola superclasse.
- Non sono concetti astratti, non sono interfacce, sono semplicemente blocchi di metodi pronti da appiccicare.

Funzionano così:

- Vengono inclusi nella classe con la keyword use (internamente alla classe).
- I metodi del trait vengono considerati come se fossero scritti dentro la classe stessa.

Cosa NON sono

- Non sono classi.
- Non sono interfacce.

Perché esistono
Perché PHP non supporta l’ereditarietà multipla e serviva un modo per riusare logica senza trasformare il codice in spaghetti arrabbiati.
