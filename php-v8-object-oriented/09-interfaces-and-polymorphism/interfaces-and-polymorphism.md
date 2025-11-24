# Interfacce in PHP

## Cos’è un’interfaccia

Un’interfaccia in PHP è un contratto che definisce un insieme di metodi che una classe deve implementare.  
Non contiene logica interna, ma solo le firme dei metodi (nome, parametri, tipo di ritorno).

## Perché usare le interfacce

- Permettono di definire comportamenti comuni a più classi, senza imporre una struttura interna.
- Separano l’astrazione dall’implementazione.
- Rendono il codice più mantenibile, testabile ed estensibile.
- Agevolano l’utilizzo della dependency injection e la scrittura di codice disaccoppiato.

## Regole principali

- Un’interfaccia può contenere solo firme di metodi.
- Non può contenere proprietà.
- Una classe può implementare più interfacce.
- I metodi dell’interfaccia devono essere implementati con la stessa firma.
- Le interfacce possono estendere altre interfacce.

## Esempio

```php
<?php

interface Notificatore {
    public function invia(string $messaggio): void;
}

class EmailNotificatore implements Notificatore {
    public function invia(string $messaggio): void {
        echo "Email inviata: $messaggio";
    }
}

class SmsNotificatore implements Notificatore {
    public function invia(string $messaggio): void {
        echo "SMS inviato: $messaggio";
    }
}

// Funzione che lavora con qualunque Notificatore
function mandaNotifica(Notificatore $n, string $msg) {
    $n->invia($msg);
}

mandaNotifica(new EmailNotificatore(), "Ciao Tommaso");
mandaNotifica(new SmsNotificatore(), "Ehilà");
```
